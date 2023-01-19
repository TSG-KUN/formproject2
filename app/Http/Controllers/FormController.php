<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data =
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {

    //     $validatedData = $request->validate([
    //         'email' => 'required|email',
    //         'nama' => 'required|max:255',
    //         'nip' => 'required|numeric',
    //         'jenisgratif' => 'required',
    //         'desksingkat' => 'required',
    //         'perkirharga' => 'required',
    //         'perispeneri' => 'required',
    //         'tglpemberi' => 'required|date',
    //         'lokasipemberi' => 'required',
    //         'pemberigratif' => 'required',
    //         'image' => 'required|file|image|max:2048',
    //         'namalengkap' => 'required|max:255',
    //         'nip1' => 'required|numeric',
    //         'jabatan' => 'required',
    //         'pangkat' => 'required',
    //         'bagian' => 'required',
    //         'namalengkap1' => 'required|max:255',
    //         'jabatan1' => 'required',
    //         'pangkat1' => 'required',
    //         'bagian1' => 'required',
    //         'bentukpoten' => 'required'
    //     ]);

            // if($request->file('image'))
            // {
            //     $validatedData['image'] = $request->file('image')->store('file-images');
            // }

            // Form::create($validatedData);
            // return redirect('/home');
    // }

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
    }

    public function Page1() {
        return view ('form.form1');
    }

    public function Page1Proses(Request $request) {
        $data = [
            'email'         => $request->email,
            'nama'          => $request->nama,
            'nip'           => $request->nip,
            'jenisgratif'   => $request->jenisgratif,
            'desksingkat'   => $request->desksingkat,
            'perkirharga'   => $request->perkirharga,
            'perispeneri'   => $request->perispenerima,
            'tglpemberi'    => $request->tglpemberi,
            'lokasipemberi' => $request->lokasipemberi,
            'pemberigratif' => $request->pemberigratif,
            // 'image'         => $request->image,
        ];
        session()->put('session-page', $data);
        return redirect()->route('form-2');
    }
    public function Page2() {
        return view ('form.form2');
    }
    
    public function Page2Proses(Request $request) {
        $data = [
            'namalengkap'   => $request->namalengkap,
            'nip1'          => $request->nip1,
            'jabatan'       => $request->jabatan,
            'pangkat'       => $request->pangkat,
            'bagian'        => $request->bagian,
            'namalengkap1'  => $request->namalengkap1,
            'jabatan1'      => $request->jabatan1,
            'pangkat1'      => $request->pangkat1,
            'bagian1'       => $request->bagian1,
            'bentukpoten'   =>$request->bentukpoten
        ];
        
        session()->put('session-page', $data);
        $data = session()->get('session-page');
        
        $Form = new Form;
        $Form->email = $data->email;
        $Form->nama = $data->nama;
        $Form->nip = $data->nip;
        $Form->jenisgratif = $data->jenisgratif;
        $Form->desksingkat = $data->desksingkat;
        $Form->perkirharga = $data->perkirharga;
        $Form->perispeneri = $data->perispeneri;
        $Form->tglpemberi = $data->tglpemberi;
        $Form->lokasipember = $data->lokasipemberi;
        $Form->pemberigratif = $data->pemberigratif;
        $Form->namalengkap = $data->namalengkap;
        $Form->nip1 = $data->nip1;
        $Form->jabatan = $data->jabatan;
        $Form->pangkat = $data->pangkat;
        $Form->bagian = $data->bagian;
        $Form->namalengkap1 = $data->namalengkap1;
        $Form->jabatan1 = $data->jabatan1;
        $Form->pangkat1 = $data->pangkat1;
        $Form->bagian1 = $data->bagian1;
        $Form->bentukpoten = $data->bentukpoten;
        $Form->save();
        // if($request->file('image'))
        // {
        //     $validatedData['image'] = $request->file('image')->store('file-images');
        // }
    }
}
    