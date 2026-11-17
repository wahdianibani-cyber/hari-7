<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function index(): \Illuminate\View\View
    {
        $produk = [
  ['id' => 1, 'nama' => 'Kopi Ende',
   'kategori' => 'Minuman',
   'harga' => 15000, 'stok' => 12],
  ['id' => 2, 'nama' => 'Roti Cokelat',
   'kategori' => 'Makanan',
   'harga' => 8000, 'stok' => 0],
];
        return view('katalog.index',
            compact('produk'));
    }

// resources/views/katalog/
// index.blade.php

}
