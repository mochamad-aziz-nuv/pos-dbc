<script>
     $("#tgl_transaksi").flatpickr({
        altInput: true,
        altFormat: "d F, Y",
        dateFormat: "Y-m-d",
    });
    $(document).ready(function($) {
        $('#listPilihBarang').select2({
            placeholder : 'Pilih Barang',
            ajax : {
                url : "{{ Route('transaksi.produkList') }}",
                dataType: 'json',
                data: function(params) {
                    var query = {
                        q: params.term,
                    }
                    return query;
                },
                delay: 250,
                type: "GET",
                processResults: function(data) {
                    return {
                        results: $.map(data, function(item) {
                            return {
                                text : item.produk_barcode + "-" + item.produk_nama,
                                id : item.produk_id + "|" + item.produk_harga + "|" + item.produk_harga_satuan + "|" + item.produk_qty,
                            }
                        })
                    };
                },
                cache: true
            }
        });
    });

    $('#pilihan_perbarang').click(function () {
        $('#pilih_jumlah_barang').removeClass('d-none');
    });

    $('#pilihan_barang_semua').click(function () {
        $('#pilih_jumlah_barang').addClass('d-none');
        $('#stok_barang').empty();
        $('#jumlah_barang_dibeli').empty();
    });

    $('#listPilihBarang').on('change', function() {
        var idBarangPilih = $(this).val();
        var hargaBarang;
        var hargaBarangSatuan;
        var barangQty;
        if (idBarangPilih != null) {
            hargaBarang = idBarangPilih.split("|")[1];
            hargaBarangSatuan = idBarangPilih.split("|")[2];
            barangQty = idBarangPilih.split("|")[3];
        } else {
            hargaBarang = 0;
            hargaBarangSatuan = 0;
            barangQty = 0;
        }
        $('#stok_barang').val(barangQty);
    });
</script>