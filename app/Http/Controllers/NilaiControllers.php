<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class NilaiControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nilai = Nilai::with('Siswa')->paginate();
        // dd($nilai);
        return view ('nilai.index',compact('nilai'))->with('i', (request()->input('page', 1) -1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nama = Siswa::all();
        return view('nilai.create',compact('nama'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nilai = new nilai();
        $nilai->NamaSiswa_id = $request->NamaSiswa_id;
        $nilai->Mapel = $request->Mapel;
        $nilai->Nilai = $request->Nilai;
        $nilai->Predikat = $request->Predikat;
        $nilai->save();


        // $request->validate([
        //     'NamaSiswa_id' => 'required',
        //     'Mapel' => 'required',
        //     'Nilai' => 'required',
        //     'Predikat' => 'required',
        // ]);
        // Nilai::create($request->all());

        return redirect()->route('nilai.index')->with('succes','Nilai Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Nilai $nilai)
    {
        return view('nilai.show',compact('nilai'),compact('nama'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nama = Siswa::all();
        $nilai = Nilai :: with('Siswa')->findorfail($id);
        return view('nilai.edit', compact('nama','nilai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nilai $nilai)
    {
        $request->validate([
            'Mapel' => 'required',
            'Nilai' => 'required',
            'Predikat' => 'required',
        ]);
        $nilai->update($request->all());

        return redirect()->route('nilai.index')->with('succes','Nilai Berhasil di Input');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nilai $nilai)
    {
        $nilai->delete();

        return redirect()->route('nilai.index')->with('succes','Nilai Berhasil di Hapus');
    }
}
