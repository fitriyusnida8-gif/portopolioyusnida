<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;
use Illuminate\Support\Facades\Storage;

class ExperienceController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'period' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048', // Validasi file gambar
        ]);

        $data = $request->except('image');

        // Proses upload gambar
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('experiences', 'public');
            $data['image'] = $imagePath;
        }

        Experience::create($data);

        return redirect()->to(route('dashboard') . '#experience')->with('success', 'Experience berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $experience = Experience::findOrFail($id);
        return view('experiences.edit', compact('experience'));
    }

    public function update(Request $request, $id)
    {
        $experience = Experience::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'period' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $data = $request->except('image');

        // Jika upload gambar baru
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($experience->image && Storage::disk('public')->exists($experience->image)) {
                Storage::disk('public')->delete($experience->image);
            }
            $data['image'] = $request->file('image')->store('experiences', 'public');
        }

        $experience->update($data);

        return redirect()->to(route('dashboard') . '#experience')->with('success', 'Experience berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $experience = Experience::findOrFail($id);

        // Hapus file gambar dari storage saat data dihapus
        if ($experience->image && Storage::disk('public')->exists($experience->image)) {
            Storage::disk('public')->delete($experience->image);
        }

        $experience->delete();

        return redirect()->to(route('dashboard') . '#experience')->with('success', 'Experience berhasil dihapus!');
    }
}