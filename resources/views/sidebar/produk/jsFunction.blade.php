<script>
    // start simpan barang
    $('#form_barang').submit(function(e) {
        e.preventDefault();
        $('#btn_tambah_barang').addClass('disabled').attr('data-kt-indicator', 'on');

        $.ajax({
                url: "{{ Route('produk.simpanbrg') }}",
                type: 'POST',
                data: $("#form_barang").serialize(),
                success: function(data) {
                    Swal.fire({
                                text: "Barang Berhasil disimpan",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            }).then(function(result) {
                                $('#btn_tambah_barang').removeClass('disabled').attr('data-kt-indicator', 'off');
                                document.getElementById("form_barang").reset();
                            });

                },
                error: function (request, status, error) {
                    Swal.fire({
                        text: "Mohon Maaf, sedang ada gangguan teknis. Silakan hubungi administrator untuk info lebih lanjut",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Oke",
                        customClass: {
                            confirmButton: "btn btn-danger"
                        }
                    });
                    $('#btn_tambah_barang').removeClass('disabled').attr('data-kt-indicator', 'off');
                }
        });
    });
    // end simpan barang

    // start simpan ubah barang
    $('#form_barang_edit').submit(function(e) {
        e.preventDefault();
        $('#btn_edit_barang').addClass('disabled').attr('data-kt-indicator', 'on');

        $.ajax({
                url: "{{ Route('produk.simpanEditbarang') }}",
                type: 'POST',
                data: $("#form_barang_edit").serialize(),
                success: function(data) {
                    Swal.fire({
                                text: "Barang Berhasil diubah",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            }).then(function(result) {
                                $('#btn_edit_barang').removeClass('disabled').attr('data-kt-indicator', 'off');
                                document.getElementById("form_barang_edit").reset();
                            });

                },
                error: function (request, status, error) {
                    Swal.fire({
                        text: "Mohon Maaf, sedang ada gangguan teknis. Silakan hubungi administrator untuk info lebih lanjut",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Oke",
                        customClass: {
                            confirmButton: "btn btn-danger"
                        }
                    });
                    $('#btn_tambah_barang').removeClass('disabled').attr('data-kt-indicator', 'off');
                }
        });
    });
    // end simpan ubah barang
    
    // start hapus barang 
    function hapusBarang(id) {
        Swal.fire({
            text: "Apakah Anda yakin menghapus data tersebut?",
            icon: "info",
            heightAuto: false,
            buttonsStyling: false,
            showCancelButton: true,
            confirmButtonText: "Lanjutkan",
            cancelButtonText: 'Tidak Jadi',
            customClass: {
                confirmButton: "btn btn-primary",
                cancelButton: 'btn btn-danger'
            }
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "{{ Route('produk.hapusbarang') }}",
                    type: 'GET',
                    data: {
                        'barang_id': id
                    },
                    success: function(data) {
                        Swal.fire({
                            text: "Barang Berhasil disimpan",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                        });
                    },
                    error: function(request, status, error) {
                        Swal.fire({
                            text: "Mohon Maaf, sedang ada gangguan teknis. Silakan hubungi administrator untuk info lebih lanjut",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Oke",
                            customClass: {
                                confirmButton: "btn btn-danger"
                            }
                        });
                    }
                });
            }
        })
    }
    // end hapus barang
</script>