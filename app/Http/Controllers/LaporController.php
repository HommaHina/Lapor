<?php

namespace App\Http\Controllers;

use App\Models\Sopd;
use App\Models\Lapor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LaporController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today = date('Y-m-d');
        $query = Lapor::with('sopd')->get();

        return view('pages.data.index', compact('query', 'today'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sopd = Sopd::where('level','2')->get();
        return view('pages.data.create', compact('sopd'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tgl = date('d-m-Y');
        $validasi = $request->validate([
            'judul_laporan'     => 'required',
			'isi_laporan'       => 'required',
			'klasifikasi'       => 'required',
			'kategori'          => 'required',
			'disposisi'         => 'required',
			'tanggal_masuk'     => 'required|date',
			'tanggal_disposisi'  => 'required|date',
			'tanggal_tindak_lanjut' => 'required|date',
			'tanggal_batas'   => 'required|date',
        ]);

        if($request->berkas != null){
            $validasifoto = $request->validate([
                'berkas' => 'max:32000|mimes:pdf,png,jpg,jpeg'
            ]);

            $lokasi = 'berkas';
            $file = $tgl . '--' . time() . '.' .$validasifoto['berkas']->extension();

            $tambah = Lapor::create([
                'judul_laporan' => $request['judul_laporan'],
                'isi_laporan'   => $validasi['isi_laporan'],
                'klasifikasi'   => $validasi['klasifikasi'],
                'kategori'      => $validasi['kategori'],
                'disposisi'     => $validasi['disposisi'],
                'tanggal_masuk'  => $validasi['tanggal_masuk'],
                'tanggal_disposisi' => $validasi['tanggal_disposisi'],
                'tanggal_tindak_lanjut' => $validasi['tanggal_tindak_lanjut'],
                'tanggal_batas'   => $validasi['tanggal_batas'],
                'berkas' => $file,
            ]);
            if($tambah){
                $file = $request->file('berkas')->storeAs('public/berkas',$file);
                return redirect()->back()->withInput()->with('Sukses', 'Data Berhasil Ditambahkan');
            }
        }else{
            $tambah = Lapor::create([
                'judul_laporan' => $request['judul_laporan'],
                'isi_laporan'   => $validasi['isi_laporan'],
                'klasifikasi'   => $validasi['klasifikasi'],
                'kategori'      => $validasi['kategori'],
                'disposisi'     => $validasi['disposisi'],
                'tanggal_masuk'  => $validasi['tanggal_masuk'],
                'tanggal_disposisi' => $validasi['tanggal_disposisi'],
                'tanggal_tindak_lanjut' => $validasi['tanggal_tindak_lanjut'],
                'tanggal_batas'   => $validasi['tanggal_batas'],
                'berkas' => null,
            ]);

            return redirect()->back()->withInput()->with('Sukses', 'Data Berhasil Ditambahkan');
        }


    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lapor  $lapor
     * @return \Illuminate\Http\Response
     */
    public function edit(Lapor $lapor)
    {
        $sopd = Sopd::all();
        return view('pages.data.edit', compact('lapor','sopd'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lapor  $lapor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $lapor = Lapor::findorfail($id);

        $validasi = $request->validate([
            'judul_laporan'     => 'required',
			'isi_laporan'       => 'required',
			'klasifikasi'       => 'required',
			'kategori'          => 'required',
			'disposisi'         => 'required',
			'tanggal_masuk'     => 'required|date',
			'tanggal_disposisi'  => 'required|date',
			'tanggal_tindak_lanjut' => 'required|date',
			'tanggal_batas'   => 'required|date',
            'berkas' => 'max:32000|mimes:pdf,png,jpg,jpeg'

        ]);

        if($request['berkas'] == null){
            $lapor->update([
                'judul_laporan' => $request['judul_laporan'],
                'isi_laporan'   => $validasi['isi_laporan'],
                'klasifikasi'   => $validasi['klasifikasi'],
                'kategori'      => $validasi['kategori'],
                'disposisi'     => $validasi['disposisi'],
                'tanggal_masuk'  => $validasi['tanggal_masuk'],
                'tanggal_disposisi' => $validasi['tanggal_disposisi'],
                'tanggal_tindak_lanjut' => $validasi['tanggal_tindak_lanjut'],
                'tanggal_batas'   => $validasi['tanggal_batas'],
            ]);

            return redirect()->route('lapor.index');
        }
        else{
            $tgl = date('d-m-Y');
            $lokasi = 'berkas';
            Storage::delete('public/berkas/' . $lapor->berkas);

            $file = $tgl . '--' . time() . '.' .$request->berkas->extension();

            $lapor->update([
            'judul_laporan' => $request['judul_laporan'],
            'isi_laporan'   => $validasi['isi_laporan'],
			'klasifikasi'   => $validasi['klasifikasi'],
			'kategori'      => $validasi['kategori'],
			'disposisi'     => $validasi['disposisi'],
			'tanggal_masuk'  => $validasi['tanggal_masuk'],
			'tanggal_disposisi' => $validasi['tanggal_disposisi'],
			'tanggal_tindak_lanjut' => $validasi['tanggal_tindak_lanjut'],
			'tanggal_batas'   => $validasi['tanggal_batas'],
            'berkas' => $file,
            ]);

            $file = $request->file('berkas')->storeAs('public/berkas',$file);
            return redirect()->route('lapor.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lapor  $lapor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lapor $lapor)
    {
        // $id = Lapor::findorfail($id);
        $lapor->delete();

        return redirect()->back();
    }
}
