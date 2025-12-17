<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\Pekerjaan;
use Illuminate\Support\Facades\Validator;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $keyword = $request->get('keyword');
        $pegawai = Pegawai::with('pekerjaan')
            ->when($keyword, function ($query) use ($keyword) {
                $query->where('nama', 'like', "%{$keyword}%")
                    ->orWhere('email', 'like', "%{$keyword}%")
                    ->orWhereHas('pekerjaan', function($q) use ($keyword) {
                        $q->where('nama', 'like', "%{$keyword}%");
                    });
            })
            ->paginate(10);
        
        return view('pegawai.index', compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pekerjaan = Pekerjaan::all();
        return view('pegawai.add', compact('pekerjaan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string',
            'email' => 'required|email|unique:rizen_535196_pegawai,email',
            'pekerjaan_id' => 'required|exists:rizen_535196_pekerjaan,id',
            'gender' => 'required|in:male,female',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = new Pegawai();
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->pekerjaan_id = $request->pekerjaan_id;
        $data->gender = $request->gender;
        $data->is_active = $request->has('is_active') ? 1 : 0;

        if ($data->save()) {
            return redirect()->route('pegawai.index')->with('success', 'Data pegawai berhasil ditambahkan');
        } else {
            return redirect()->route('pegawai.index')->with('error', 'Data pegawai tidak tersimpan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $data = Pegawai::findOrFail($request->id);
        $pekerjaan = Pekerjaan::all();
        return view('pegawai.edit', compact('data', 'pekerjaan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string',
            'email' => 'required|email|unique:rizen_535196_pegawai,email,'.$id,
            'pekerjaan_id' => 'required|exists:rizen_535196_pekerjaan,id',
            'gender' => 'required|in:male,female',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = Pegawai::findOrFail($id);
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->pekerjaan_id = $request->pekerjaan_id;
        $data->gender = $request->gender;
        $data->is_active = $request->has('is_active') ? 1 : 0;

        if ($data->save()) {
            return redirect()->route('pegawai.index')->with('success', 'Data pegawai berhasil diupdate');
        } else {
            return redirect()->route('pegawai.index')->with('error', 'Data pegawai tidak tersimpan');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Pegawai::findOrFail($request->id)->delete();
        return redirect()->route('pegawai.index')->with('success', 'Data pegawai berhasil dihapus');
    }
}
