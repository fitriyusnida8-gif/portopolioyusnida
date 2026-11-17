<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    // Menampilkan halaman depan portfolio
    public function index() 
    {
        $projects = Project::all(); 
        
        return view('user.index', compact('projects')); 
    }

    // Menampilkan halaman kelola data setelah sukses login
    public function dashboard()
    {
        $projects = Project::all(); 
        return view('projects.index', compact('projects')); 
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