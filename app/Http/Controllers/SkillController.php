<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|in:hard,soft',
            'percentage' => 'required|integer|min:0|max:100',
        ]);

        Skill::create($request->all());

        return redirect()->to(route('dashboard') . '#skills')->with('success', 'Skill berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $skill = Skill::findOrFail($id);
        return view('skills.edit', compact('skill'));
    }

    public function update(Request $request, $id)
    {
        $skill = Skill::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|in:hard,soft',
            'percentage' => 'required|integer|min:0|max:100',
        ]);

        $skill->update($request->all());

        // Diperbaiki agar redirect beserta hash #skills berada di dalam satu perintah
        return redirect()->to(route('dashboard') . '#skills')->with('success', 'Skill berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $skill = Skill::findOrFail($id);
        $skill->delete();

        return redirect()->to(route('dashboard') . '#skills')->with('success', 'Skill berhasil dihapus!');
    }
}