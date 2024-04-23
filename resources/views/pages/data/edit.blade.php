@extends('layouts.app')

@section('contents')

<style>
    textarea {
      width: auto;
    }
</style>
<div class="main" style="min-height: 600px">
    <div class="main-inner">
      <div class="container">
        <div class="row">
          <div class="span12">
<div class="widget ">

    <div class="widget-header">
        <i class="icon-user"></i>
        <h3>Edit Data Lapor</h3>
    </div> <!-- /widget-header -->

    <div class="widget-content">
        <div class="panel panel-default">
            <div class="panel-body">
				<center>
                <form action="{{ route('lapor.update', $lapor->id_lapor) }}" method="POST" id="form" enctype='multipart/form-data'>
                    @method('PUT')
                    @csrf
                    <table>

                        <input type="hidden" name="id_lapor" value="{{ $lapor->id_lapor }}">
                        <tr>
                            <td align="right" style="padding: 2px"><h3>Judul Laporan:</h3></td>
                            <td class="col-md-8" style="padding: 2px"><input class="form-control" name="judul_laporan" id="judul_laporan" value="{{$lapor->judul_laporan}}" required></td>
                        </tr>
                        <tr>
                            <td align="right" style="padding: 2px"><h3>Isi Laporan:</h3></td>
                            <td class="col-md-8" style="padding: 2px">
                                <textarea class="form-control" name="isi_laporan" id="isi_laporan" rows="5" cols="50">{{$lapor->isi_laporan}}</textarea>
                            </td>
                        </tr>

                        <tr>
                            <td align="right" style="padding: 2px"><h3>Klasifikasi:</h3></td>
                            <td class="col-md-8" style="padding: 2px">
                                <select class="form-control" name="klasifikasi" id="klasifikasi" required>
                                    <option value=""></option>
                                    <option value="Aspirasi" {{ $lapor->klasifikasi == 'Aspirasi' ? 'selected' : '' }}>Aspirasi</option>
                                    <option value="Pengaduan Tidak Berkadar Pengawasan" {{ $lapor->klasifikasi == 'Pengaduan Tidak Berkadar Pengawasan' ? 'selected' : '' }}>Pengaduan Tidak Berkadar Pengawasan</option>
                                    <option value="Pengaduan Berkadar Pengawasan" {{ $lapor->klasifikasi == 'Pengaduan Berkadar Pengawasan' ? 'selected' : '' }}>Pengaduan Berkadar Pengawasan</option>
                                    <option value="Permintaan Informasi" {{ $lapor->klasifikasi == 'Permintaan Informasi' ? 'selected' : '' }}>Permintaan Informasi</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td align="right" style="padding: 2px"><h3>Kategori:</h3></td>
                            <td class="col-md-8" style="padding: 2px">
                                <select class="form-control" name="kategori" id="kategori" required>
                                    <option value=""></option>
                                    <option value="Administrasi Kependudukan dan Pencatatan Sipil" {{ $lapor->kategori == 'Administrasi Kependudukan dan Pencatatan Sipil' ? 'selected' : ''}}>Administrasi Kependudukan dan Pencatatan Sipil</option>
                                    <option value="Bantuan Sosial" {{ $lapor->kategori == 'Bantuan Sosial' ? 'selected' : ''}}>Bantuan Sosial</option>
                                    <option value="Infrastruktur" {{ $lapor->kategori == 'Infrastruktur' ? 'selected' : ''}}>Infrastruktur</option>
                                    <option value="Kelautan dan Perikanan" {{ $lapor->kategori == 'Kelautan dan Perikanan' ? 'selected' : ''}}>Kelautan dan Perikanan</option>
                                    <option value="Kepegawaian" {{ $lapor->kategori == 'Kepegawaian' ? 'selected' : ''}}>Kepegawaian</option>
                                    <option value="Kesehatan" {{ $lapor->kategori == 'Kesehatan' ? 'selected' : ''}}>Kesehatan</option>
                                    <option value="Ketahanan Pangan dan Pertanian" {{ $lapor->kategori == 'Ketahanan Pangan dan Pertanian' ? 'selected' : ''}}>Ketahanan Pangan dan Pertanian</option>
                                    <option value="Ketenteraman, Ketertiban Umum, dan Perlindungan" {{ $lapor->kategori == 'Ketenteraman, Ketertiban Umum, dan Perlindungan' ? 'selected' : ''}}>Ketenteraman, Ketertiban Umum, dan Perlindungan</option>
                                    <option value="Ketenagakerjaan" {{ $lapor->kategori == 'Ketenagakerjaan' ? 'selected' : ''}}>Ketenagakerjaan</option>
                                    <option value="Layanan Air Minum" {{ $lapor->kategori == 'Layanan Air Minum' ? 'selected' : ''}}>Layanan Air Minum</option>
                                    <option value="Lingkungan Hidup dan Kehutanan" {{ $lapor->kategori == 'Lingkungan Hidup dan Kehutanan' ? 'selected' : ''}}>Lingkungan Hidup dan Kehutanan</option>
                                    <option value="Pariwisata" {{ $lapor->kategori == 'Pariwisata' ? 'selected' : ''}}>Pariwisata</option>
                                    <option value="Pekerjaan Umum dan Penataan Ruang" {{ $lapor->kategori == 'Pekerjaan Umum dan Penataan Ruang' ? 'selected' : ''}}>Pekerjaan Umum dan Penataan Ruang</option>
                                    <option value="Pembangunan Desa" {{ $lapor->kategori == 'Pembangunan Desa' ? 'selected' : ''}}>Pembangunan Desa</option>
                                    <option value="Penanggulangan Bencana" {{ $lapor->kategori == 'Penanggulangan Bencana' ? 'selected' : ''}}>Penanggulangan Bencana</option>
                                    <option value="Peternakan dan Pertanian" {{ $lapor->kategori == 'Peternakan dan Pertanian' ? 'selected' : ''}}>Peternakan dan Pertanian</option>
                                    <option value="Perhubungan" {{ $lapor->kategori == 'Perhubungan' ? 'selected' : ''}}>Perhubungan</option>
                                    <option value="Perumahan dan Pertanahan" {{ $lapor->kategori == 'Perumahan dan Pertanahan' ? 'selected' : ''}}>Perumahan dan Pertanahan</option>
                                    <option value="Sosial dan Kesejahteraan" {{ $lapor->kategori == 'Sosial dan Kesejahteraan' ? 'selected' : ''}}>Sosial dan Kesejahteraan</option>
                                    <option value="Teknologi Informasi dan Komunikasi" {{ $lapor->kategori == 'Teknologi Informasi dan Komunikasi' ? 'selected' : ''}}>Teknologi Informasi dan Komunikasi</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td align="right" style="padding: 2px"><h3>Disposisi ke (SKPD):</h3></td>
                            <td class="col-md-8" style="padding: 2px">
                                <select class="form-control" name="disposisi" id="disposisi" required>
                                    <option value=""></option>
                                    @foreach ($sopd as $item)
                                        <option value="{{ $item->id_sopd }}" {{ $item->id_sopd == $lapor->disposisi ? 'selected' : '' }}>{{ $item->nama_sopd }}</option>
                                    @endforeach

                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td align="right" style="padding: 2px"><h3>Tanggal Masuk:</h3></td>
                            <td class="col-md-8" style="padding: 2px"><input type="date" class="form-control" name="tanggal_masuk" id="tanggal_masuk" value="{{$lapor->tanggal_masuk}}" required></td>
                        </tr>
                        <tr>
                            <td align="right" style="padding: 2px"><h3>Tanggal Disposisi:</h3></td>
                            <td class="col-md-8" style="padding: 2px"><input type="date" class="form-control" name="tanggal_disposisi" id="tanggal_disposisi" value="{{$lapor->tanggal_disposisi}}" required></td>
                        </tr>
                        <tr>
                            <td align="right" style="padding: 2px"><h3>Tanggal Tindak Lanjut:</h3></td>
                            <td class="col-md-8" style="padding: 2px"><input type="date" class="form-control" name="tanggal_tindak_lanjut" id="tanggal_tindak_lanjut" value="{{$lapor->tanggal_tindak_lanjut}}" required></td>
                        </tr>
                        <tr>
                            <td align="right" style="padding: 2px"><h3>Batas Tindak Lanjut:</h3></td>
                            <td class="col-md-8" style="padding: 2px"><input type="date" class="form-control" name="tanggal_batas" id="tanggal_batas" value="{{$lapor->tanggal_batas}}" required></td>
                        </tr>
                        <tr>
                            <td align="right" style="padding: 2px"><h3>Berkas Lama:</h3></td>
                            <td class="col-md-8" style="padding: 2px">
                            <a href="{{ url($lapor->berkas) }}" target="_blank">{{ $lapor->berkas }}</a>
                        </tr>
                        <tr>
                            <td align="right" style="padding: 2px"><h3>Berkas Baru:</h3></td>
                            <td class="col-md-8" style="padding: 2px"><input type="file" class="form-control" name="berkas" id="berkas"></td>
                        </tr>
                        <tr>
                            <td align="right" style="padding: 2px"><h3></h3></td>
                            <td class="col-md-8" style="padding: 2px">*pdf|png|jpg|jpeg</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="padding: 2px">
                                <input class="btn btn-primary" type="submit" value="Simpan">
                                <a href="#" class="btn btn-danger" onclick="self.history.back()">Batal</a>
                            </td>
                        </tr>
                    </table>
                </form>
				</center>
            </div>
        </div>
    </div>
</div>
</div>
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /main-inner -->
  </div>

@endsection
