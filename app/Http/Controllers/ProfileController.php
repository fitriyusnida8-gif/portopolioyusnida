<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function edit()
    {
        $profile = Profile::first();
        return view('profiles.edit', compact('profile'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'class_name' => 'required|string|max:255',
            'major' => 'required|string|max:255',
            'description' => 'required|string',
            'skill_badge' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $profile = Profile::first() ?? new Profile();
        
        $data = $request->except('image');

        if ($request->hasFile('image')) {
            if ($profile->image && Storage::disk('public')->exists($profile->image)) {
                Storage::disk('public')->delete($profile->image);
            }
            $data['image'] = $request->file('image')->store('profile', 'public');
        }

        $profile->fill($data);
        $profile->save();

        return redirect()->route('dashboard')->with('success', 'Profil Beranda berhasil diperbarui!');
    }

    public function updateCv(Request $request)
    {
        $request->validate([
            'cv_file' => 'required|mimes:pdf|max:5120', // Maksimal ukuran 5MB berformat PDF
        ]);

        $profile = Profile::first();

        if ($profile && $profile->cv_file) {
            // Hapus file CV lama jika ada di storage
            if (Storage::disk('public')->exists($profile->cv_file)) {
                Storage::disk('public')->delete($profile->cv_file);
            }
        }

        // Simpan file CV baru ke folder storage/app/public/cv
        $path = $request->file('cv_file')->store('cv', 'public');

        if ($profile) {
            $profile->update(['cv_file' => $path]);
        } else {
            Profile::create(['cv_file' => $path]);
        }

        return redirect()->back()->with('success', 'CV berhasil di-update!');
    }

    public function destroyCv()
    {
        $profile = Profile::first();

        if ($profile && $profile->cv_file) {
            if (Storage::disk('public')->exists($profile->cv_file)) {
                Storage::disk('public')->delete($profile->cv_file);
            }
            $profile->update(['cv_file' => null]);
        }

        return redirect()->back()->with('success', 'CV berhasil dihapus!');
    }
}