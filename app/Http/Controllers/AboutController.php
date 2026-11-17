<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
    'category' => 'required|in:Biodata Singkat,Pendidikan,Minat & Teknologi,Pengalaman PKL,Cita-cita',
    'title' => 'nullable|string|max:255', // title dibuat nullable agar untuk biodata singkat tidak wajib diisi judul
    'year' => 'nullable|string|max:255',
    'description' => 'nullable|string',
]);

        About::create($request->all());

        return redirect()->back()->with('success', 'Data About Me berhasil ditambahkan!');
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
            'category' => 'required|in:Pendidikan,Minat & Karir,Pengalaman PKL,Cita-cita',
            'title' => 'required|string|max:255',
            'year' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        $about->update($request->all());

        return redirect()->route('dashboard')->with('success', 'Data About Me berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $about = About::findOrFail($id);
        $about->delete();

        return redirect()->back()->with('success', 'Data About Me berhasil dihapus!');
    }
}