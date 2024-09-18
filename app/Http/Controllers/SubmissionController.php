<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SubmissionController extends Controller
{
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'cv' => 'required|file|mimes:pdf,jpg,png,doc,docx|max:2048', 
            'consent' => 'required|accepted',
        ]);
        $cvPath = $request->file('cv')->store('cvs', 'private'); 
        Submission::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
            'cv' => $cvPath, 
            'consent' => $request->has('consent'),
        ]);
        return redirect()->route('submited');
    }
}
