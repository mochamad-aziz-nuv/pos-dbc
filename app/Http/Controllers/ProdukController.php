<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Validator;
use Carbon\Carbon;
use Storage;

use App\Models\ProdukM;

class ProdukController extends Controller
{
    public function index() {
        $cek = ProdukM::get();
        return view('sidebar.produk.produk', [
            'databarang' => $cek,
        ]);
    }

    public function tambahBarang() {
        return view('sidebar.produk.tambahProduk');
    }

    public function simpanBarang(Request $request) {
        //pengecekan gambar barang
        if($request->file('gambarBarang') != null) {
            if(($request->file('gambarBarang')->getSize() / 1024000) > 5) {
                return response()->json(['Mohon Upload File Dengan Total Ukuran Maksimal 5 MB'], 400);
            }
            $fileName = '';
            $file = $request->post('gambarBarang');
            $fileName = 'brg-'. time() . '-' . preg_replace('/\s+/', '', $file->getClientOriginalName());
            Storage::disk('public')->put('gambar/barang/'. $fileName, file_get_contents($file));
        }
        $modProduk = new ProdukM;
        $modProduk->produk_nama =$request->post('namaBarang');
        $modProduk->produk_barcode = $request->post('brcodeBarang');
        $modProduk->produk_qty = $request->post('qtyBarang');
        $modProduk->produk_harga = $request->post('hargaBarang');
        $modProduk->produk_satuan = $request->post('satuanBarang');
        $modProduk->produk_harga_satuan = !empty($request->post('hargaSatuanBarang')) ? $request->post('hargaSatuanBarang') : 0; 
        $modProduk->produk_gambar = !empty($fileName) ? $fileName:'';
        $modProduk->create_login_pemakai_id = 22;
        $modProduk->update_login_pemakai_id = 0;

        $modProduk->save();

        return response()->json([
            'success'   => '200',
            'date'      =>  Carbon::now()->format('d F Y H:i:s')
        ]);
    }

    public function loadEditBarang(Request $request) {
        $modEditProduk = ProdukM::where('produk_id', $request->produk_id)->first();

        return view('sidebar.produk.editProduk', [
            'loadBarangEdit' => $modEditProduk,
        ]);
    }

    public function editBarang(Request $request) {

        $modSimpanEditBarang = ProdukM::find($request->post('produkIdEdit'));
        $modSimpanEditBarang->produk_nama =$request->post('namaBarang');
        $modSimpanEditBarang->produk_barcode = $request->post('brcodeBarang');
        $modSimpanEditBarang->produk_qty = $request->post('qtyBarang');
        $modSimpanEditBarang->produk_harga = $request->post('hargaBarang');
        $modSimpanEditBarang->produk_satuan = $request->post('satuanBarang');
        $modSimpanEditBarang->produk_harga_satuan = !empty($request->post('hargaSatuanBarang')) ? $request->post('hargaSatuanBarang') : 0; 
        $modSimpanEditBarang->produk_gambar = !empty($fileName) ? $fileName:'';
        $modSimpanEditBarang->update_login_pemakai_id = 21;

        $modSimpanEditBarang->save();

        return response()->json([
            'success'   => '200',
            'date'      =>  Carbon::now()->format('d F Y H:i:s')
        ]);
    }

    public function hapusBarang(Request $request) {
        $modHapusBarang = ProdukM::where('produk_id', $request->post('barang_id'))->delete();

        return response()->json([
            'success'   => '200',
            'date'      =>  Carbon::now()->format('d F Y H:i:s')
        ]);
    }
}
