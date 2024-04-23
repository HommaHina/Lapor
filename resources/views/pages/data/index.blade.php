@extends('layouts.app')

@section('contents')

<script>
    $(document).ready( function () {
        $('#tabel').DataTable();
    } );
</script>
<div class="row">
    <div class="col-md-12">
       <h3>Data Lapor</h3>
   </div>
</div>
<!-- /. ROW  -->
<hr />
<a href="{{ route('lapor.create') }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambah</a>
<div class="panel-body" style="margin-top: 10px">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="tabel">
            <thead>
                <tr>
                    <th style="text-align:center">No</th>
                    <th>Judul Laporan</th>
                    <th>Isi Laporan</th>
                    <th>Klasifikasi</th>
                    <th>Kategori</th>
                    <th>Disposisi ke (SKPD)</th>
                    <th>Tanggal Masuk</th>
                    <th>Tanggal Disposisi</th>
                    <th>Tanggal Tindak Lanjut</th>
                    <th>Batas Tindak Lanjut</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($query as $item)
                @if ($item->tanggal_batas < $today)
                    <tr>
                        <td style="background-color:#FAA0A0;" style="text-align:center">{{ $loop->iteration}}</td>
                        <td style="background-color:#FAA0A0;">{{ $item->judul_laporan }}</td>
                        <td style="background-color:#FAA0A0;">{{ $item->isi_laporan }}</td>
                        <td style="background-color:#FAA0A0;">{{ $item->klasifikasi }}</td>
                        <td style="background-color:#FAA0A0;">{{ $item->kategori }}</td>
                        <td style="background-color:#FAA0A0;"> {{ $item->sopd->nama_sopd }} </td>
                        <td style="background-color:#FAA0A0;"> {{ date('d-m-Y', strtotime($item->tanggal_masuk)) }} </td>
                        <td style="background-color:#FAA0A0;"> {{ date('d-m-Y', strtotime($item->tanggal_disposisi)) }} </td>
                        <td style="background-color:#FAA0A0;"> {{ date('d-m-Y', strtotime($item->tanggal_tindak_lanjut)) }} </td>
                        <td style="background-color:#FAA0A0;"> {{ date('d-m-Y', strtotime($item->tanggal_batas)) }} </td>
                        <td style="background-color:#FAA0A0;">
                            <a href="{{ route('lapor.edit', $item->id_lapor) }}" class="btn btn-primary btn-xs"><i class="icon-pencil"></i> Edit</a>
                            <a href="{{ route('lapor.destroy', $item->id_lapor) }}" class="btn btn-default btn-xs" onClick="return confirm('Hapus {{ $item->judul_laporan }}?')"><i class="icon-eraser"></i> Hapus</a>
                        </td>
                    </tr>

                @else
                    <tr>
                        <td style="text-align:center">{{ $loop->iteration}}</td>
                        <td>{{ $item->judul_laporan }}</td>
                        <td>{{ $item->isi_laporan }}</td>
                        <td>{{ $item->klasifikasi }}</td>
                        <td>{{ $item->kategori }}</td>
                        <td>{{ $item->sopd->nama_sopd }} </td>
                        <td> {{ date('d-m-Y', strtotime($item->tanggal_masuk)) }} </td>
                        <td> {{ date('d-m-Y', strtotime($item->tanggal_disposisi)) }} </td>
                        <td> {{ date('d-m-Y', strtotime($item->tanggal_tindak_lanjut)) }} </td>
                        <td> {{ date('d-m-Y', strtotime($item->tanggal_batas)) }} </td>
                        <td>
                            <a href="{{ route('lapor.edit', $item->id_lapor) }}" class="btn btn-primary btn-xs"><i class="icon-pencil "></i> Edit</a>
                            {{-- <a href="{{ route('lapor.destroy', $item->id_lapor) }}" class="btn btn-default btn-xs" onClick="return confirm('Hapus {{ $item->judul_laporan }}?')"><i class="fa fa-eraser "></i> Hapus</a> --}}
                            <form action="{{ route('lapor.destroy',$item->id_lapor) }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-default btn-xs" onClick="return confirm('Hapus {{ $item->judul_laporan }}?')">
                                    <i class="icon-eraser"></i>
                                    Hapus
                                </button>

                            </form>
                        </td>
                    </tr>
                @endif
                @endforeach

            </tbody>
        </table>
    </div>
</div>
    <!--End Advanced Tables -->
@endsection
