<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function index()
{
    if (!Auth::check()) {
        return redirect('login');
    }
    $siswa = [];
    $siswa = Siswa::all();
    $view_data = ['siswas' => $siswa];
    
    return view('lists.index', $view_data);
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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

        $siswa = new Siswa;
        $siswa->nama = $validatedData['nama'];
        $siswa->kelas = $validatedData['kelas'];
        $siswa->jurusan = $validatedData['jurusan'];
        $siswa->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!Auth::check()) {
        return redirect('login');
    }
        $selected_post = Siswa::where('id', $id)
            ->first();
        $view_data = [
            'siswa' => $selected_post
        ];

        return view('lists.edit', $view_data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (!Auth::check()) {
        return redirect('login');
    }
        $input = $request->all();
        Siswa::where('id', $id)
        ->update([
            'nama' => $input['nama'],
            'kelas' => $input['kelas'],
            'jurusan' => $input['jurusan'],
        ]);

    return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Auth::check()) {
        return redirect('login');
    }
        Siswa::SelectedById($id)
            ->delete();

        return redirect("/");
    }
}
