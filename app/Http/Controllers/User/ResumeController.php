<?php

namespace App\Http\Controllers\User;

use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class ResumeController extends Controller
{
    public function index()
    {
        try {
            $user = Auth::user();
            $resumes = $user->resumes()->with(['workExperiences', 'educations', 'skills', 'languages'])->get();
            // dd($resumes->toArray());
            return view('user.my_resume.index', compact('user', 'resumes'));
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function create()
    {
        try {
            $user = Auth::user();
            // dd($resumes->toArray());
            return view('user.my_resume.create', compact('user'));
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function show(Resume $resume)
    {
        try {
            // dd($resume->toArray());

            $user = Auth::user();
            // dd($resumes->toArray());
            return view('user.my_resume.show', compact('user', 'resume'));
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function print(Resume $resume)
    {
        try {
            // dd($resume->toArray());

            $user = Auth::user();
            // dd(
            //     $resume->toArray(),
            //     $resume->workExperiences->toArray(),
            //     $resume->educations->toArray(),
            //     $resume->skills->toArray(),
            //     $resume->languages->toArray(),
            // );
            return view('user.my_resume.print', compact('user', 'resume'));
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
