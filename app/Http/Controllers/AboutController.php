<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|in:Biodata Singkat,Pendidikan,Minat & Teknologi,Hobi,Cita-cita',
            'title' => 'nullable|string|max:255', 
            'year' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('abouts', 'public');
        }

        About::create($data);

        return redirect()->to(route('dashboard') . '#about')->with('success', 'Data About Me berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('abouts.edit', compact('about'));
    }

    public function update(Request $request, $id)
    {
        $about = About::findOrFail($id);

        $request->validate([
            'category' => 'required|in:Biodata Singkat,Pendidikan,Minat & Teknologi,Hobi,Cita-cita',
            'title' => 'nullable|string|max:255',
            'year' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            if ($about->image && Storage::disk('public')->exists($about->image)) {
                Storage::disk('public')->delete($about->image);
            }
            $data['image'] = $request->file('image')->store('abouts', 'public');
        }

        $about->update($data);

        return redirect()->to(route('dashboard') . '#about')->with('success', 'Data About Me berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $about = About::findOrFail($id);

        if ($about->image && Storage::disk('public')->exists($about->image)) {
            Storage::disk('public')->delete($about->image);
        }

        $about->delete();

        return redirect()->to(route('dashboard') . '#about')->with('success', 'Data About Me berhasil dihapus!');
    }
}