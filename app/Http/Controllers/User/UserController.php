<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Resume;
use App\Models\TempImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, Hash, File};

class UserController extends Controller
{
    public function dashboard()
    {
        try {
            $user = Auth::user();
            $last_five_resumes = $user->resumes()->orderBy('id', 'DESC')->get()->take(5);
            $this_month = $user->resumes()->whereMonth('created_at', date('m'))->count();
            return view('user.dashboard', compact('user', 'last_five_resumes', 'this_month'));
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function profile()
    {
        try {
            $user = Auth::user();
            // dd($user);
            return view('user.profile', compact('user'));
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function profileUpdate(Request $request)
    {
        $user = Auth::user();
        $userValidate = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'country' => 'nullable',
            'state' => 'nullable',
            'city' => 'nullable',
            'phone' => 'nullable',
            'address' => 'nullable',
        ]);
        try {
            if (!empty($request->image_id)) {
                $tempImage = TempImage::find($request->image_id);
                $extArray = explode('.', $tempImage->name);
                $ext = last($extArray);

                $newImageName = 'user_' . $user->id . '_' . time() . '.' . $ext;

                $sPath = public_path() . '/temp/' . $tempImage->name;
                $dPath = public_path() . '/assets/user/img/profile_image/' . $newImageName;

                File::copy($sPath, $dPath);

                $userValidate['image'] = 'assets/user/img/profile_image/' . $newImageName;
                // $resume->save();
            }
            // dd($request->all(), $userValidate);
            $result = $user->update($userValidate);
            return redirect()->back()->with('success', 'Profile updated successfully');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function changePassword()
    {
        $user = Auth::user();
        // dd($user);
        return view('user.change_password', compact('user'));
    }

    public function updatePassword(Request $request)
    {
        $user = Auth::user();

        // Validate the request data
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $currentPassword = $request->current_password;

        // Check if the current password matches the one in the database
        if (!Hash::check($currentPassword, $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'The current password is incorrect.'])->withInput();
        }

        try {
            // Update the password
            $user->password = $request->password;
            $user->save();

            return redirect()->back()->with('success', 'Password updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update password. Please try again.');
        }
    }
}
