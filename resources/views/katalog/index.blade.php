@extends('layouts.app')

@section('title', 'Katalog Produk')

@section('content')
<link rel="stylesheet"
 href="{{ asset('css/kasir.css') }}">

<a href="{{ route('katalog.index') }}">
 Katalog
</a>


 <h1>Katalog Produk</h1>
 <p>Harga dan stok toko</p>

<form method="GET"
 action="{{ route('katalog.index') }}">
 <label for="q">Nama produk</label>
 <input id="q" name="q"
        value="{{ $q ?? ''}}">
 <button>Cari</button>
</form>

{{-- Contoh URL: /katalog?q=kopi --}}


 @forelse ($produk as $item)
 
 <p>{{ $item['nama'] }}</p>
 <p>Rp {{ number_format(
     $item['harga'], 0, ',', '.'
 ) }}</p>
 <hr>
@empty
 <p>Produk tidak ditemukan.</p>
@endforelse

@endsection
