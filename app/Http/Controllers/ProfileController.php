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
}