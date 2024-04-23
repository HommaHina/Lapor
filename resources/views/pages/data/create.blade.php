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

        @if (session('Sukses'))
        <div class="alert alert-danger show" role="alert">
            {{ session('Sukses') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif

        <div class="widget-header">
            <i class="icon-user"></i>
            <h3>Tambah Data Lapor</h3>
        </div> <!-- /widget-header -->

        <div class="widget-content">
            <div class="panel panel-default">
                <div class="panel-body">
                    <center>
                    <form action="{{ route('lapor.store') }}" method="POST" id="form" enctype='multipart/form-data'>
                        @csrf
                        <table>
                            <tr>
                                <td align="right" style="padding: 2px"><h3>Judul Laporan:</h3></td>
                                <td class="col-md-8" style="padding: 2px"><input class="form-control" name="judul_laporan" id="judul_laporan" required></td>
                            </tr>
                            <tr>
                                <td align="right" style="padding: 2px"><h3>Isi Laporan:</h3></td>
                                <td class="col-md-8" style="padding: 2px">
                                    <textarea class="form-control" name="isi_laporan" id="isi_laporan" rows="5" cols="50"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td align="right" style="padding: 2px"><h3>Klasifikasi:</h3></td>
                                <td class="col-md-8" style="padding: 2px">
                                    <select class="form-control" name="klasifikasi" id="klasifikasi" required>
                                        <option value=""></option>
                                        <option value="Aspirasi">Aspirasi</option>
                                        <option value="Pengaduan Tidak Berkadar Pengawasan">Pengaduan Tidak Berkadar Pengawasan</option>
                                        <option value="Pengaduan Berkadar Pengawasan">Pengaduan Berkadar Pengawasan</option>
                                        <option value="Permintaan Informasi">Permintaan Informasi</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td align="right" style="padding: 2px"><h3>Kategori:</h3></td>
                                <td class="col-md-8" style="padding: 2px">
                                    <select class="form-control" name="kategori" id="kategori" required>
                                        <option value=""></option>
                                        <option value="Administrasi Kependudukan dan Pencatatan Sipil">Administrasi Kependudukan dan Pencatatan Sipil</option>
                                        <option value="Bantuan Sosial">Bantuan Sosial</option>
                                        <option value="Infrastruktur">Infrastruktur</option>
                                        <option value="Kelautan dan Perikanan">Kelautan dan Perikanan</option>
                                        <option value="Kepegawaian">Kepegawaian</option>
                                        <option value="Kesehatan">Kesehatan</option>
                                        <option value="Ketahanan Pangan dan Pertanian">Ketahanan Pangan dan Pertanian</option>
                                        <option value="Ketenteraman, Ketertiban Umum, dan Perlindungan">Ketenteraman, Ketertiban Umum, dan Perlindungan</option>
                                        <option value="Ketenagakerjaan">Ketenagakerjaan</option>
                                        <option value="Layanan Air Minum">Layanan Air Minum</option>
                                        <option value="Lingkungan Hidup dan Kehutanan">Lingkungan Hidup dan Kehutanan</option>
                                        <option value="Pariwisata">Pariwisata</option>
                                        <option value="Pekerjaan Umum dan Penataan Ruang">Pekerjaan Umum dan Penataan Ruang</option>
                                        <option value="Pembangunan Desa">Pembangunan Desa</option>
                                        <option value="Penanggulangan Bencana">Penanggulangan Bencana</option>
                                        <option value="Peternakan dan Pertanian">Peternakan dan Pertanian</option>
                                        <option value="Perhubungan">Perhubungan</option>
                                        <option value="Perumahan dan Pertanahan">Perumahan dan Pertanahan</option>
                                        <option value="Sosial dan Kesejahteraan">Sosial dan Kesejahteraan</option>
                                        <option value="Teknologi Informasi dan Komunikasi">Teknologi Informasi dan Komunikasi</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td align="right" style="padding: 2px"><h3>Disposisi ke (SKPD):</h3></td>
                                <td class="col-md-8" style="padding: 2px">
                                    <select class="form-control" name="disposisi" id="disposisi" required>
                                        <option value=""></option>
                                        @foreach ($sopd as $item)
                                            <option value="{{ $item->id_sopd }}">{{ $item->nama_sopd }}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td align="right" style="padding: 2px"><h3>Tanggal Masuk:</h3></td>
                                <td class="col-md-8" style="padding: 2px"><input type="date" class="form-control" name="tanggal_masuk" id="tanggal_masuk" required></td>
                            </tr>
                            <tr>
                                <td align="right" style="padding: 2px"><h3>Tanggal Disposisi:</h3></td>
                                <td class="col-md-8" style="padding: 2px"><input type="date" class="form-control" name="tanggal_disposisi" id="tanggal_disposisi" required></td>
                            </tr>
                            <tr>
                                <td align="right" style="padding: 2px"><h3>Tanggal Tindak Lanjut:</h3></td>
                                <td class="col-md-8" style="padding: 2px"><input type="date" class="form-control" name="tanggal_tindak_lanjut" id="tanggal_tindak_lanjut" required></td>
                            </tr>
                            <tr>
                                <td align="right" style="padding: 2px"><h3>Batas Tindak Lanjut:</h3></td>
                                <td class="col-md-8" style="padding: 2px"><input type="date" class="form-control" name="tanggal_batas" id="tanggal_batas" required></td>
                            </tr>
                            <tr>
                                <td align="right" style="padding: 2px"><h3>Berkas:</h3></td>
                                <td class="col-md-8" style="padding: 2px">
                                <input type="file" class="form-control" accept="image/png,image/jpeg,image/jpeg,.pdf" name="berkas"
                                id="berkas"></td>
                            </tr>
                            <tr>
                                <td align="right" style="padding: 2px"><h3></h3></td>
                                <td class="col-md-8" style="padding: 2px">*pdf|png|jpg|jpeg</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td style="padding: 2px">
                                    <input class="btn btn-primary" type="submit" value="Simpan">
                                    <a href="{{ route('lapor.index') }}" class="btn btn-danger">Batal</a>
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




