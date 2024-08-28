<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Resume;

class ResumesController extends Controller
{
    public function all(){
        $resumes = Resume::with(['workExperiences','educations','skills','languages','user'])->paginate();
        // dd($resumes->toArray());
        return view('admin.resumes.index', compact('resumes'));
    }

    public function authorized(){
        $resumes = Resume::with(['workExperiences','educations','skills','languages','user'])->whereNotNull('user_id')->paginate();
        // dd($resumes->toArray());
        return view('admin.resumes.index', compact('resumes'));
    }

    public function unauthorized(){
        $resumes = Resume::with(['workExperiences','educations','skills','languages','user'])->whereNull('user_id')->paginate();
        // dd($resumes->toArray());
        return view('admin.resumes.index', compact('resumes'));
    }
}
