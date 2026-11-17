<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\About;
use App\Models\Skill;
use App\Models\Certificate;
use App\Models\Experience;
use App\Models\Message;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    // Menampilkan halaman depan portfolio (User Index)
    public function index() 
    {
        $profile      = Profile::first();
        $projects     = Project::all(); 
        $certificates = Certificate::all(); 
        $skills       = Skill::all(); 
        $experiences  = Experience::all();
        $messages     = Message::latest()->get();
        $abouts       = About::all();

        return view('user.index', compact(
            'profile', 
            'projects', 
            'certificates', 
            'skills', 
            'experiences', 
            'messages', 
            'abouts'
        )); 
    }

    // Menampilkan halaman kelola data setelah sukses login (Admin Dashboard)
    public function dashboard()
    {
        $profile      = Profile::first(); 
        $projects     = Project::all(); 
        $certificates = Certificate::all(); 
        $skills       = Skill::all(); 
        $experiences  = Experience::all();
        $messages     = Message::latest()->get();
        $abouts       = About::all();

        return view('projects.index', compact(
            'profile', 
            'projects', 
            'certificates', 
            'skills', 
            'experiences', 
            'messages', 
            'abouts'
        ));
    }

    public function destroy($id) 
    {
        $project = Project::findOrFail($id);
        
        // Hapus file gambar jika ada
        if ($project->image && Storage::disk('public')->exists($project->image)) {
            Storage::disk('public')->delete($project->image);
        }

        $project->delete();
        
        return redirect()->route('dashboard')->with('success', 'Project berhasil dihapus!');
    }

    public function store(Request $request) 
    {
        $request->validate([
            'title'         => 'required|string|max:255',
            'description'   => 'required|string',
            'problem'       => 'nullable|string',
            'objective'     => 'nullable|string',
            'technologies'  => 'nullable|string',
            'role'          => 'nullable|string',
            'features'      => 'nullable|string',
            'process_docs'  => 'nullable|string',
            'user_feedback' => 'nullable|string',
            'image'         => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

        $data = $request->except(['image', '_token']);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('projects', 'public');
            $data['image'] = $path;
        }

        Project::create($data);

        return redirect()->route('dashboard')->with('success', 'Project berhasil ditambahkan!');
    }

    public function edit($id) 
    {
        $project = Project::findOrFail($id);
        return view('projects.edit', compact('project')); 
    }

    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);

        $request->validate([
            'title'         => 'required|string|max:255',
            'description'   => 'required|string',
            'problem'       => 'nullable|string',
            'objective'     => 'nullable|string',
            'technologies'  => 'nullable|string',
            'role'          => 'nullable|string',
            'features'      => 'nullable|string',
            'process_docs'  => 'nullable|string',
            'user_feedback' => 'nullable|string',
            'image'         => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->except(['image', '_token', '_method']);

        if ($request->hasFile('image')) {
            if ($project->image && Storage::disk('public')->exists($project->image)) {
                Storage::disk('public')->delete($project->image);
            }
            $path = $request->file('image')->store('projects', 'public');
            $data['image'] = $path;
        }

        $project->update($data);

        return redirect()->route('dashboard')->with('success', 'Project berhasil diperbarui!');
    }
}