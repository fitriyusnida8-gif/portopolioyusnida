<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certificate;
use Illuminate\Support\Facades\Storage;

class CertificateController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('certificates', 'public');
        }

        Certificate::create($data);

        return redirect()->back()->with('success', 'Sertifikat berhasil ditambahkan!');
    }

    // --- TAMBAHKAN INI UNTUK EDIT ---
    public function edit($id)
    {
        $certificate = Certificate::findOrFail($id);
        // Pastikan Anda membuat file view edit sertifikat (resources/views/certificates/edit.blade.php)
        return view('certificates.edit', compact('certificate'));
    }

    public function update(Request $request, $id)
    {
        $certificate = Certificate::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            if ($certificate->image && Storage::exists('public/' . $certificate->image)) {
                Storage::delete('public/' . $certificate->image);
            }
            $data['image'] = $request->file('image')->store('certificates', 'public');
        }

        $certificate->update($data);

        return redirect()->route('dashboard')->with('success', 'Sertifikat berhasil diperbarui!');
    }
    // ---------------------------------

    public function destroy($id)
    {
        $certificate = Certificate::findOrFail($id);
        
        if ($certificate->image && Storage::exists('public/' . $certificate->image)) {
            Storage::delete('public/' . $certificate->image);
        }

        $certificate->delete();

        return redirect()->back()->with('success', 'Sertifikat berhasil dihapus!');
    }
}