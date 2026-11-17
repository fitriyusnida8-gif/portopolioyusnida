<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Storage;

class CvController extends Controller
{
    // Tambah / Edit (Ganti) File CV
    public function storeOrUpdate(Request $request)
    {
        $request->validate([
            'cv_file' => 'required|mimes:pdf,jpg,jpeg,png|max:5120', // Maksimal 5MB
        ]);

        // Ambil profil pertama, atau buat baru jika belum ada
        $profile = Profile::first() ?? new Profile();

        // Hapus file CV lama jika sudah ada sebelumnya
        if ($profile->cv_file && Storage::disk('public')->exists($profile->cv_file)) {
            Storage::disk('public')->delete($profile->cv_file);
        }

        // Simpan file CV baru ke folder storage/app/public/cv
        $path = $request->file('cv_file')->store('cv', 'public');
        $profile->cv_file = $path;
        $profile->save();

        return redirect()->back()->with('success', 'File CV berhasil disimpan!');
    }

    // Hapus File CV
    public function destroy()
    {
        $profile = Profile::first();

        if ($profile && $profile->cv_file) {
            if (Storage::disk('public')->exists($profile->cv_file)) {
                Storage::disk('public')->delete($profile->cv_file);
            }
            $profile->cv_file = null;
            $profile->save();
        }

        return redirect()->back()->with('success', 'File CV berhasil dihapus!');
    }
}