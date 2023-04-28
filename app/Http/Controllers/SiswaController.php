<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        $siswa = Students::simplePaginate(10);
        $view_data = ['siswa' => $siswa];

        return view('lists.index', $view_data);
    }

    public function create()
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        return view('lists.add');
    }

    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'kelas' => 'required|max:25',
            'jurusan' => 'required',
        ]);

        $siswa = new Students;
        $siswa->nama = $validatedData['nama'];
        $siswa->kelas = $validatedData['kelas'];
        $siswa->jurusan = $validatedData['jurusan'];
        $siswa->save();

        return redirect('/');
    }

    public function edit($id)
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        $selected_post = Students::where('id', $id)->first();
        $view_data = ['siswa' => $selected_post];

        return view('lists.edit', $view_data);
    }

    public function update(Request $request, $id)
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        // $input = $request->all();
        Students::where('id', $id)->update([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
        ]);

        return redirect("/");
    }

    public function destroy($id)
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        Students::SelectedById($id)->delete();

        return redirect("/");
    }

    public function show($jurusan)
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        $siswa = Students::SelectedbyJurusan($jurusan)->get();
        $view_data = [
            'students' => $siswa,
            'jurusan' => $jurusan,
        ];
        return view('lists.show', $view_data);
    }
    public function account()
    {
        # code...
        // $account = Auth::user();
        // $view_data = [
        //     'account' => $account
        // ];

        return view('lists.account');
    }
}
