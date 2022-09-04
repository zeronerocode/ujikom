<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SiswaController extends Controller
{
    public function profile ()
    {
        $profile = User::findOrFail(auth()->user()->id);
        return view ('siswa.profile', compact('profile'));
    }

    public function editProfile()
    {
        $profile = User::findOrFail(auth()->user()->id);
        return view ('siswa.edit-profile', compact('profile'));
    }

    public function updateProfile(Request $request)
    {
        $profile = User::findOrFail(auth()->user()->id);

        $profile -> update([
            'name' => $request->name,
            'jenis_kelamin' => $request->jenis_kelamin,
            'hp' => $request->hp,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat'=>$request->alamat
        ]);

        return redirect()->route('profile');
    }

    public function dashboard()
    {
        $siswas = User::oldest()->paginate(20);
        return view('siswa.dashboard', compact('siswas'));
    }

    public function editSiswa(User $siswa)
    {
        return view('siswa.edit', compact('siswa'));
    }

    public function updateSiswa(Request $request, User $siswa)
    {
        $siswa = User::findOrFail($siswa->id);

        $siswa -> update([
            'name' => $request->name,
            'jenis_kelamin' => $request->jenis_kelamin,
            'hp' => $request->hp,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat'=>$request->alamat,
            'penguji' =>$request->penguji
        ]);

        return redirect()->route('dashboard.siswa');
    }

    public function lulus($id)
    {
        $siswa = User::findOrFail($id);

        $siswa -> update([
            'status' => "Lulus"
        ]);
        return redirect()->route('dashboard.siswa');
    }
    public function tidaklulus($id)
    {
        $siswa = User::findOrFail($id);

        $siswa -> update([
            'status' => "Tidak Lulus"
        ]);
        return redirect()->route('dashboard.siswa');
    }
}
