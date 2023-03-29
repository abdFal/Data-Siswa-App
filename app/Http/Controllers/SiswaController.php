<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;
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
        return view('lists.add');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'kelas' => 'required|numeric',
        ]);

        $siswa = new Siswa;
        $siswa->nama = $validatedData['nama'];
        $siswa->kelas = $validatedData['kelas'];
        $siswa->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
        $input = $request->all();
        Siswa::where('id', $id)
        ->update([
            'nama' => $input['nama'],
            'kelas' => $input['kelas'],
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
        //
        Siswa::SelectedById($id)
            ->delete();

        return redirect("/");
    }
}
