<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Profile;
use App\Models\Certificate;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Message;
use App\Models\About;
use App\Models\Project;

class ProjectController extends Controller
{
    // Menampilkan halaman depan portfolio (User Index)
    public function index(Request $request) 
    {
        $profile      = Profile::first();
        $certificates = Certificate::all(); 
        $skills       = Skill::all(); 
        $experiences  = Experience::all();
        $messages     = Message::latest()->get();
        $abouts       = About::all();

        // Query untuk pencarian dan filter pada sisi user
        $query = Project::query();

        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }

        // Filter berdasarkan teknologi
        if ($request->has('tech') && $request->tech != '') {
            $query->where('technologies', 'like', "%{$request->tech}%");
        }

        $projects = $query->latest()->get();

        // Kirim semua variabel ke view user.index (tanpa contacts)
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
    public function dashboard(Request $request)
    {
        $profile      = Profile::first(); 
        $certificates = Certificate::all(); 
        $skills       = Skill::all(); 
        $experiences  = Experience::all();
        $messages     = Message::latest()->get();
        $abouts       = About::all();

        // Fitur Pencarian & Filter untuk Admin Dashboard
        $query = Project::query();

        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }

        if ($request->has('tech') && $request->tech != '') {
            $query->where('technologies', 'like', "%{$request->tech}%");
        }

        $projects = $query->latest()->get();

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
            'image'         => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048', 
        ]);

        $data = $request->except(['image', '_token']);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('projects', 'public');
            $data['image'] = $path;
        }

        Project::create($data);

        return redirect()->to(route('dashboard') . '#projects')->with('success', 'Project berhasil ditambahkan!');
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
            'image'         => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
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

        return redirect()->to(route('dashboard') . '#projects')->with('success', 'Project berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);

        if ($project->image && Storage::disk('public')->exists($project->image)) {
            Storage::disk('public')->delete($project->image);
        }

        $project->delete();

        return redirect()->to(route('dashboard') . '#projects')->with('success', 'Project berhasil dihapus!');
    }
}