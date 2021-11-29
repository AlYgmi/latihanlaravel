@extends('layouts.main')

@section('container')
    
@endsection

@section('contrast')
    <div class="container">
        <div class="text-center">
            <h3 class="mt-5" style="font-family: arial; font-weight: bold;">Hasil pencarian</h3>
        </div>
        <style type="text/css">
            .pagination li{
                float: left;
                list-style-type: none;
                margin:5px;
            }
        </style>
     
        <h3>Data Sekolah</h3>
     
     
        <p>Cari Data Sekolah :</p>
        <form action="/sekolah/cari" method="GET">
            <input type="text" name="cari" placeholder="Cari Sekolah .." value="{{ old('cari') }}">
            <input type="submit" value="CARI">
        </form>
            
        <br/>
     <div class="container-fluid">
        <table class="table table-striped table-hover">
            <tr>
                <th>Nama Sekolah</th>
                <th class="w-50">Alamat</th>
                <th>No Telp</th>
                <th>Detail</th>
            </tr>
            @forelse($sekolah as $p)
            <tr>
                <td>{{ $p->nama ? $p->nama : 'nama hosting' }}</td>
                <td>{{ $p->alamat }}</td>
                <td>{{ $p->telp }}</td>
                <td><a href="{{ route('sekolah', ['npsn' => $p->npsn]) }}">lihat</a></td>
            </tr>
            @empty
                <h3>Tidak ditemukan</h3>
            @endforelse
        </table>
     
        <br/>
        Halaman : {{ $sekolah->currentPage() }} <br/>
        Jumlah Data : {{ $sekolah->total() }} <br/>
        Data Per Halaman : {{ $sekolah->perPage() }} <br/>
    </div>
     
        {{ $sekolah->links() }}
    </div>
@endsection