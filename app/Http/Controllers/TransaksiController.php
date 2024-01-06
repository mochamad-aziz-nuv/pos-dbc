<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Carbon\Carbon;

use App\Models\ProdukM;

class TransaksiController extends Controller
{
    public function index() {
        $dataProduk = ProdukM::get();

        return view('sidebar.transaksi.tambahTransaksi', [
            'loadDataBarang' => $dataProduk,
        ]);
    }

    public function tambahTransaksi(Request $request) {
        dd($request->all());
    }

    public function listBarang(Request $request) {
        if ($request->has('q')) {
            $cari = $request->q;

            $dataBarang = ProdukM::where('produk_nama','ILIKE', '%' . $cari . '%')->orderBy('produk_nama','ASC')->get();

            return response()->json($dataBarang);
        } else {
            $dataBarang = ProdukM::orderBy('produk_nama','ASC')->get();

            return response()->json($dataBarang);
        }
    }

    public function cetakTransaksi(Request $request) {
        $dataTransaksi = 1;

        return view('sidebar.transaksi.cetakTransaksi');
    }
}
