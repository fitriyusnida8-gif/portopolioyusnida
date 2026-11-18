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

        // Mengarahkan kembali ke dashboard bagian #certificates
        return redirect()->to(route('dashboard') . '#prestasi')->with('success', 'Sertifikat berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $certificate = Certificate::findOrFail($id);
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

        // Mengarahkan ke dashboard bagian #certificates setelah update
        return redirect()->to(route('dashboard') . '#prestasi')->with('success', 'Sertifikat berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $certificate = Certificate::findOrFail($id);
        
        if ($certificate->image && Storage::exists('public/' . $certificate->image)) {
            Storage::delete('public/' . $certificate->image);
        }

        $certificate->delete();

        // Mengarahkan kembali ke dashboard bagian #certificates setelah hapus
        return redirect()->to(route('dashboard') . '#prestasi')->with('success', 'Sertifikat berhasil dihapus!');
    }
}