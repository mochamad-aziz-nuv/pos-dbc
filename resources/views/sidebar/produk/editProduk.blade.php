@extends('index')
@section('breadcrumbs')
    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Produk</li>
    <li class="breadcrumb-item">
        <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
    </li>
    <li class="breadcrumb-item text-gray-700">Ubah Produk</li>
@endsection
@section('judul')
        <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-1 lh-0">Ubah Produk</h1>
    @endsection
@section('content')
<!--begin::Content-->	
<div id="kt_app_content" class="app-content  flex-column-fluid " >  
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-fluid ">
        <!--begin::Form-->
        <form id="form_barang_edit" class="form d-flex flex-column flex-lg-row" method="post" enctype="multipart/form-data">
            <!--begin::Aside column-->
            @csrf
            <input type="hidden" name="produkIdEdit" id="produk_id_edit" value="{{ $loadBarangEdit->produk_id }}">
            <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                <!--begin::Thumbnail settings-->
                    <div class="card card-flush py-4">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2>Thumbnail</h2>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body text-center pt-0">
                        <!--begin::Image input-->
                                    <!--begin::Image input placeholder-->
                            <style>
                                .image-input-placeholder {
                                    background-image: url('/assets/media/svg/files/blank-image.svg');
                                }

                                [data-bs-theme="dark"] .image-input-placeholder {
                                    background-image: url('/assets/media/svg/files/blank-image-dark.svg');
                                }                
                            </style>
                            <!--end::Image input placeholder-->
                                
                        <div class="image-input image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
                            <!--begin::Preview existing avatar-->
                                <div class="image-input-wrapper w-150px h-150px"></div>
                            <!--end::Preview existing avatar-->

                            <!--begin::Label-->
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                <i class="ki-duotone ki-pencil fs-7"><span class="path1"></span><span class="path2"></span></i>
                                <!--begin::Inputs-->
                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                <input type="hidden" name="avatar_remove" />
                                <!--end::Inputs-->
                            </label>
                            <!--end::Label-->

                            <!--begin::Cancel-->
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>            
                            </span>
                            <!--end::Cancel-->

                            <!--begin::Remove-->
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>            
                            </span>
                            <!--end::Remove-->
                        </div>
                        <!--end::Image input-->

                        <!--begin::Description-->
                        <div class="text-muted fs-7">Set the product thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Card body-->
                </div> 
            </div>
            <!--end::Aside column-->

            <!--begin::Main column-->
            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                <!--begin::Tab content-->
                <div class="tab-content">
                    <!--begin::Tab pane-->
                    <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                        <div class="d-flex flex-column gap-7 gap-lg-10">    
                            <!--begin::General options-->
                            <div class="card card-flush py-4">
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="required form-label">Nama Barang</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input type="text" name="namaBarang" class="form-control mb-2" placeholder="Nama Barang" id="nama_barang_edit" value="{{ $loadBarangEdit->produk_nama }}"/>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="required form-label">Barcode Barang</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input type="text" name="brcodeBarang" class="form-control mb-2" placeholder="Barcode Barang" id="barcode_barang_edit" value="{{ $loadBarangEdit->produk_barcode }}"/>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="required form-label">Quantity</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input type="number" name="qtyBarang" class="form-control mb-2" placeholder="Quantity" id="qty_barang_edit" value="{{ $loadBarangEdit->produk_qty }}" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="required form-label">Harga</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input type="number" name="hargaBarang" class="form-control mb-2" placeholder="Harga" id="harga_barang_edit" value="{{ $loadBarangEdit->produk_harga }}"/>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="required form-label">Harga Satuan</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input type="number" name="hargaSatuanBarang" class="form-control mb-2" placeholder="Harga Satuan" id="harga_satuan_barang_edit" value="{{ $loadBarangEdit->produk_harga_satuan }}"/>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="required form-label">Satuan</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input type="text" name="satuanBarang" class="form-control mb-2" placeholder="Satuan" id="satuan_barang_edit" value="{{ $loadBarangEdit->produk_satuan }}"/>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::General options-->
                        </div>
                    </div>
                    <!--end::Tab pane-->
                </div>
                <!--end::Tab content-->

                <div class="d-flex justify-content-end">
                    <!--begin::Button-->
                    <a href="/saul-html-pro/apps/ecommerce/catalog/products.html" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">
                        Cancel
                    </a>
                    <!--end::Button-->

                    <!--begin::Button-->
                    <button type="submit" id="btn_edit_barang" class="btn btn-primary">
                        <span class="indicator-label">
                            Save Changes
                        </span>
                        <span class="indicator-progress">
                            Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                    <!--end::Button-->
                </div>
            </div>
            <!--end::Main column-->
        </form>
        <!--end::Form-->        
    </div>
    <!--end::Content container-->
</div>
<!--end::Content-->	
@endsection
@push('javascript')
    @include('sidebar.produk.jsFunction')
@endpush