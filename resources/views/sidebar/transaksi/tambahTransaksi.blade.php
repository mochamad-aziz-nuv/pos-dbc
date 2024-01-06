@extends('index')
@section('breadcrumbs')
    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Transaksi</li>
    <li class="breadcrumb-item">
        <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
    </li>
    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Tambah Transaksi</li>
@endsection
@section('content')
<!--begin::Content-->
<div id="kt_app_content" class="app-content  flex-column-fluid " >
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container  container-fluid ">
        <!--begin::Form-->
        <form id="kt_ecommerce_edit_order_form" class="form d-flex flex-column flex-lg-row" data-kt-redirect="/saul-html-pro/apps/ecommerce/sales/listing.html">
            <!--begin::Aside column-->
            <div class="w-100 flex-lg-row-auto w-lg-300px mb-7 me-7 me-lg-10">
                
            <!--begin::Order details-->
            <div class="card card-flush py-4">
            <!--begin::Card header-->
            <div class="card-header">
                <div class="card-title">
                    <h2>Order Details</h2>
                </div>
            </div>
            <!--end::Card header-->

            <!--begin::Card body-->
            <div class="card-body pt-0">
                <div class="d-flex flex-column gap-10">
                    <!--begin::Input group-->
                    <div class="fv-row">
                        <!--begin::Label-->
                        <label class="form-label">Order ID</label>
                        <!--end::Label-->

                        <!--begin::Auto-generated ID-->
                        <div class="fw-bold fs-3">#14195</div>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="fv-row">
                        <!--begin::Label-->
                        <label class="required form-label">Payment Method</label>
                        <!--end::Label-->

                        <!--begin::Select2-->
                        <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option" name="payment_method" id="kt_ecommerce_edit_order_payment">
                            <option></option>
                            <option value="cod">Cash on Delivery</option>
                            <option value="visa" >Credit Card (Visa)</option>
                            <option value="mastercard">Credit Card (Mastercard)</option>
                            <option value="paypal">Paypal</option>
                        </select>
                        <!--end::Select2-->

                        <!--begin::Description-->
                        <div class="text-muted fs-7">Set the date of the order to process.</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="fv-row">
                        <!--begin::Label-->
                        <label class="required form-label">Shipping Method</label>
                        <!--end::Label-->

                        <!--begin::Select2-->
                        <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option" name="shipping_method"  id="kt_ecommerce_edit_order_shipping">
                            <option></option>
                            <option value="none">N/A - Virtual Product</option>
                            <option value="standard" >Standard Rate</option>
                            <option value="express">Express Rate</option>
                            <option value="speed">Speed Overnight Rate</option>
                        </select>
                        <!--end::Select2-->

                        <!--begin::Description-->
                        <div class="text-muted fs-7">Set the date of the order to process.</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Input group-->
                    
                    <!--begin::Input group-->
                    <div class="fv-row">
                        <!--begin::Label-->
                        <label class="required form-label">Order Date</label>
                        <!--end::Label-->

                        <!--begin::Editor-->
                        <input id="tgl_transaksi" name="tanggalTransaksi" placeholder="Select a date" class="form-control mb-2" value="" />
                        <!--end::Editor-->

                        <!--begin::Description-->
                        <div class="text-muted fs-7">Set the date of the order to process.</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Input group-->
                </div>
            </div>
            <!--end::Card header-->
            </div>
            <!--end::Order details-->    
            </div>
            <!--end::Aside column-->

            <!--begin::Main column-->
            <div class="d-flex flex-column flex-lg-row-fluid gap-7 gap-lg-10">
                <!--begin::Order details-->
                <div class="card card-flush py-4">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Select Products</h2>
                        </div>
                    </div>
                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <div class="d-flex flex-column gap-10">
                            <!--begin::Input group-->
                            <div>
                                <!--begin::Label-->
                                <label class="form-label">Add products to this order</label>
                                <!--end::Label-->

                                <!--begin::Selected products-->
                                <div class="row row-cols-1 row-cols-xl-3 row-cols-md-2 border border-dashed rounded pt-3 pb-1 px-2 mb-5 mh-300px overflow-scroll" id="kt_ecommerce_edit_order_selected_products">
                                    <!--begin::Select2-->
                                    <select class="form-select" data-placeholder="Select an option" id="listPilihBarang" name="barangPilih">
                                        <option></option>                  
                                    </select>
                                    <!--end::Select2-->
                                </div>
                                <!--begin::Selected products-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold mb-2">
                                        Pilih Jumlah Barang
                                        <span class="ms-1"  data-bs-toggle="tooltip" title="Silahkan Pilih Barang yang ingin di beli" >
                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                                    </label>
                                    <!--End::Label-->

                                    <!--begin::Row-->
                                    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Option-->
                                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6" data-kt-button="true">
                                                <!--begin::Radio-->
                                                <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                    <input class="form-check-input" type="radio" name="pilihJumlahbarang" value="1" checked="checked" id="pilihan_barang_semua"/>
                                                </span>
                                                <!--end::Radio-->

                                                <!--begin::Info-->
                                                <span class="ms-5">
                                                    <span class="fs-4 fw-bold text-gray-800 d-block">Semua</span>
                                                </span>
                                                <!--end::Info-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Option-->
                                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                                                <!--begin::Radio-->
                                                <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                    <input class="form-check-input" type="radio" name="pilihJumlahbarang" value="2" id="pilihan_perbarang"/>
                                                </span>
                                                <!--end::Radio-->

                                                <!--begin::Info-->
                                                <span class="ms-5">
                                                    <span class="fs-4 fw-bold text-gray-800 d-block">Perbarang</span>
                                                </span>
                                                <!--end::Info-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="d-none d-flex flex-wrap gap-5" id="pilih_jumlah_barang">
                                    <!--begin::Input group-->
                                    <div class="fv-row w-100 flex-md-root">
                                        <!--begin::Label-->
                                        <label class="form-label">Masukkan Jumlah Barang</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input type="text" class="form-control mb-2" value="" name="jumlahBarangBeli" id="jumlah_barang_dibeli" />
                                        <!--end::Input-->

                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">Pastikan Barang Tidak Melebihi Stok yang tersedia</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row w-100 flex-md-root">
                                        <!--begin::Label-->
                                        <label class="form-label">Stok Barang</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input type="text" class="form-control mb-2" value="" id="stok_barang" readonly/>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Total price-->
                                <div class="fw-bold fs-4">
                                    Total : Rp.
                                    <span id="kt_ecommerce_edit_order_total_price">0.00</span>
                                </div>
                                <!--end::Total price-->
                            </div>
                            <!--end::Input group-->
                            <br>
                            <!--begin::Separator-->
                            <div class="separator"></div>
                            <!--end::Separator-->

                            <!--begin::Search products-->
                           {{-- <div class="d-flex align-items-center position-relative mb-n7 ">
                                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4"><span class="path1"></span><span class="path2"></span></i>                
                                <input type="text" data-kt-ecommerce-edit-order-filter="search" class="form-control form-control-solid w-100 w-lg-50 ps-12" placeholder="Search Products" />
                            </div>
                            <!--end::Search products-->

                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_edit_order_product_table">
                                <thead>
                                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                        <th class="w-25px pe-2"></th>
                                        <th class="min-w-200px">Product</th>
                                        <th class="min-w-100px text-end pe-5">Qty Remaining</th>
                                    </tr>
                                </thead>
                                {{-- <tbody class="fw-semibold text-gray-600">
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1"  />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center" data-kt-ecommerce-edit-order-filter="product" data-kt-ecommerce-edit-order-id="product_1">
                                                <!--begin::Thumbnail-->
                                                <a href="/saul-html-pro/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                                    <span class="symbol-label" style="background-image:url(/saul-html-pro/assets/media//stock/ecommerce/1.png);"></span>
                                                </a>
                                                <!--end::Thumbnail-->

                                                <div class="ms-5">
                                                    <!--begin::Title-->
                                                    <a href="/saul-html-pro/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Product 1</a>
                                                    <!--end::Title-->

                                                    <!--begin::Price-->
                                                    <div class="fw-semibold fs-7">Price: $<span data-kt-ecommerce-edit-order-filter="price">163.00</span></div>
                                                    <!--end::Price-->

                                                    <!--begin::SKU-->
                                                    <div class="text-muted fs-7">SKU: 04261006</div>
                                                    <!--end::SKU-->
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end pe-5" data-order="49">
                                            <span class="fw-bold ms-3">49</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1"  />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center" data-kt-ecommerce-edit-order-filter="product" data-kt-ecommerce-edit-order-id="product_2">
                                                <!--begin::Thumbnail-->
                                                <a href="/saul-html-pro/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                                    <span class="symbol-label" style="background-image:url(/saul-html-pro/assets/media//stock/ecommerce/2.png);"></span>
                                                </a>
                                                <!--end::Thumbnail-->

                                                <div class="ms-5">
                                                    <!--begin::Title-->
                                                    <a href="/saul-html-pro/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Product 2</a>
                                                    <!--end::Title-->

                                                    <!--begin::Price-->
                                                    <div class="fw-semibold fs-7">Price: $<span data-kt-ecommerce-edit-order-filter="price">131.00</span></div>
                                                    <!--end::Price-->

                                                    <!--begin::SKU-->
                                                    <div class="text-muted fs-7">SKU: 02658004</div>
                                                    <!--end::SKU-->
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end pe-5" data-order="31">
                                            <span class="fw-bold ms-3">31</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1"  />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center" data-kt-ecommerce-edit-order-filter="product" data-kt-ecommerce-edit-order-id="product_3">
                                                <!--begin::Thumbnail-->
                                                <a href="/saul-html-pro/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                                    <span class="symbol-label" style="background-image:url(/saul-html-pro/assets/media//stock/ecommerce/3.png);"></span>
                                                </a>
                                                <!--end::Thumbnail-->

                                                <div class="ms-5">
                                                    <!--begin::Title-->
                                                    <a href="/saul-html-pro/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Product 3</a>
                                                    <!--end::Title-->

                                                    <!--begin::Price-->
                                                    <div class="fw-semibold fs-7">Price: $<span data-kt-ecommerce-edit-order-filter="price">134.00</span></div>
                                                    <!--end::Price-->

                                                    <!--begin::SKU-->
                                                    <div class="text-muted fs-7">SKU: 01142002</div>
                                                    <!--end::SKU-->
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end pe-5" data-order="16">
                                            <span class="fw-bold ms-3">16</span>
                                        </td>
                                    </tr>       
                                </tbody> --}
                                <tbody class="fw-semibold text-gray-600">
                                    @foreach ($loadDataBarang as $loadBarang)
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="{{ $loadBarang->produk_id }}"  />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center" data-kt-ecommerce-edit-order-filter="product" data-kt-ecommerce-edit-order-id="{{ $loadBarang->produk_id }}">
                                                    <!--begin::Thumbnail-->
                                                    <a href="/saul-html-pro/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                                        <span class="symbol-label" style="background-image:url('/assets/media/svg/files/blank-image.svg');"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->
    
                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="/saul-html-pro/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $loadBarang->produk_nama }}</a>
                                                        <!--end::Title-->
    
                                                        <!--begin::Price-->
                                                        <div class="fw-semibold fs-7">Harga: Rp.<span data-kt-ecommerce-edit-order-filter="price">{{ $loadBarang->produk_harga }}</span></div>
                                                        <!--end::Price-->
    
                                                        <!--begin::SKU-->
                                                        <div class="text-muted fs-7">Harga Satuan: Rp.<span data-kt-ecommerce-edit-order-filter="price">{{ $loadBarang->produk_harga_satuan }}</span></div>
                                                        <!--end::SKU-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-5" data-order="49">
                                                <span class="fw-bold ms-3">{{ $loadBarang->produk_qty }}</span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!--end::Table--> --}}
                        </div>
                    </div>
                    <!--end::Card header-->
                </div>
                <!--end::Order details-->
                    
                <!--begin::Order details-->
                <div class="card card-flush py-4">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Delivery Details</h2>
                        </div>
                    </div>
                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Billing address-->
                        <div class="d-flex flex-column gap-5 gap-md-7">
                            <!--begin::Title-->
                            <div class="fs-3 fw-bold mb-n2">Billing Address</div>
                            <!--end::Title-->

                            <!--begin::Input group-->
                            <div class="d-flex flex-column flex-md-row gap-5">
                                <div class="fv-row flex-row-fluid">
                                    <!--begin::Label-->
                                    <label class="required form-label">Address Line 1</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input class="form-control" name="billing_order_address_1" placeholder="Address Line 1" value="" />
                                    <!--end::Input-->
                                </div>

                                <div class="flex-row-fluid">
                                    <!--begin::Label-->
                                    <label class="form-label">Address Line 2</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input class="form-control" name="billing_order_address_2" placeholder="Address Line 2" />
                                    <!--end::Input-->
                                </div>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="d-flex flex-column flex-md-row gap-5">
                                <div class="flex-row-fluid">
                                    <!--begin::Label-->
                                    <label class="form-label">City</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input class="form-control" name="billing_order_city" placeholder="" value="" />
                                    <!--end::Input-->
                                </div>

                                <div class="fv-row flex-row-fluid">
                                    <!--begin::Label-->
                                    <label class="required form-label">Postcode</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input class="form-control" name="billing_order_postcode" placeholder="" value="" />
                                    <!--end::Input-->
                                </div>

                                <div class="fv-row flex-row-fluid">
                                    <!--begin::Label-->
                                    <label class="required form-label">State</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input class="form-control" name="billing_order_state" placeholder="" value="" />
                                    <!--end::Input-->
                                </div>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="fv-row">
                                <!--begin::Label-->
                                <label class="required form-label">Country</label>
                                <!--end::Label-->

                                <!--begin::Select2-->
                                <select class="form-select" data-placeholder="Select an option" id="kt_ecommerce_edit_order_billing_country" name="billing_order_country">
                                    <option></option>                  
                                </select>
                                <!--end::Select2-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Checkbox-->
                            <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="" id="same_as_billing" checked />
                                <label class="form-check-label" for="same_as_billing">
                                    Shipping address is the same as billing address
                                </label>
                            </div>
                            <!--end::Checkbox-->

                            <!--begin::Shipping address-->
                            <div class="d-none d-flex flex-column gap-5 gap-md-7" id="kt_ecommerce_edit_order_shipping_form">
                                <!--begin::Title-->
                                <div class="fs-3 fw-bold mb-n2">Shipping Address</div>
                                <!--end::Title-->

                                <!--begin::Input group-->
                                <div class="d-flex flex-column flex-md-row gap-5">
                                    <div class="fv-row flex-row-fluid">
                                        <!--begin::Label-->
                                        <label class="form-label">Address Line 1</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control" name="kt_ecommerce_edit_order_address_1" placeholder="Address Line 1" value="" />
                                        <!--end::Input-->
                                    </div>

                                    <div class="flex-row-fluid">
                                        <!--begin::Label-->
                                        <label class="form-label">Address Line 2</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control" name="kt_ecommerce_edit_order_address_2" placeholder="Address Line 2" />
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="d-flex flex-column flex-md-row gap-5">
                                    <div class="flex-row-fluid">
                                        <!--begin::Label-->
                                        <label class="form-label">City</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control" name="kt_ecommerce_edit_order_city" placeholder="" value="" />
                                        <!--end::Input-->
                                    </div>

                                    <div class="fv-row flex-row-fluid">
                                        <!--begin::Label-->
                                        <label class="form-label">Postcode</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control" name="kt_ecommerce_edit_order_postcode" placeholder="" value="" />
                                        <!--end::Input-->
                                    </div>

                                    <div class="fv-row flex-row-fluid">
                                        <!--begin::Label-->
                                        <label class="form-label">State</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control" name="kt_ecommerce_edit_order_state" placeholder="" value="" />
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Label-->
                                    <label class="form-label">Country</label>
                                    <!--end::Label-->

                                    <!--begin::Select2-->
                                    <select class="form-select" data-placeholder="Select an option" id="kt_ecommerce_edit_order_shipping_country">
                                        <option></option>
                                                                    
                                    </select>
                                    <!--end::Select2-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Shipping address-->
                        </div>
                        <!--end::Billing address-->


                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Order details-->
                <div class="d-flex justify-content-end">
                    <!--begin::Button-->
                    <a href="/saul-html-pro/apps/ecommerce/catalog/products.html" id="kt_ecommerce_edit_order_cancel" class="btn btn-light me-5">
                        Cancel
                    </a>
                    <!--end::Button-->

                    <!--begin::Button-->
                    <button type="submit" id="kt_ecommerce_edit_order_submit" class="btn btn-primary">
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
    @include('sidebar.transaksi.jsFunction')
@endpush