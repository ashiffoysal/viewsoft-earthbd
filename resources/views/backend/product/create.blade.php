@extends('layouts.backend')
@section('title', 'Add Product')
@section('content')

<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link type="text/css" rel="stylesheet" href="{{asset('backend')}}/assets/css/image-uploader.min.css">
<style>
    .file_upload {
        border: 3px dashed #7eabf3 !important;
        height: 300px !important;
    }

    p {
        color: #5FAAE1 !important;
        display: inline !important;
        width: auto !important;
    }
    .form-control {
        padding:-0.25rem 1rem;
    }
    input[type="text"] {
    border: 1px solid #f7f7f7;
    padding: 10px 10px;
    /* background: #f5f5f5; */
    background-color: #f5f8fa;
    border-color: #f5f8fa;
    color: #5e6278;
}

.form-control.form-control-solid {
    background-color: #f5f8fa;
    border-color: #f5f8fa;
    color: #5e6278;
    transition: color .2s ease,background-color .2s ease;
    padding: 7px 10px;
}
</style>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-place="true" data-kt-place-mode="prepend" data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center me-3 flex-wrap mb-5 mb-lg-0 lh-1">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Products</h1>
                <!--end::Title-->
            </div>

        </div>
        <!--end::Container-->
    </div>
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-fluid">
            <div class="card mb-10">
                <div class="card-body d-flex align-items-center p-5 p-lg-8">
                    <!--begin::Icon-->
                    <div class="d-flex h-50px w-50px h-lg-80px w-lg-80px flex-shrink-0 flex-center position-relative align-self-start align-self-lg-center mt-3 mt-lg-0">
                        <!--begin::Svg Icon | path: icons/duotone/Layout/Layout-polygon.svg-->
                        <span class="svg-icon svg-icon-primary position-absolute opacity-15">
                            <svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px" viewBox="0 0 70 70" fill="none" class="h-50px w-50px h-lg-80px w-lg-80px">
                                <path d="M28 4.04145C32.3316 1.54059 37.6684 1.54059 42 4.04145L58.3109 13.4585C62.6425 15.9594 65.3109 20.5812 65.3109 25.5829V44.4171C65.3109 49.4188 62.6425 54.0406 58.3109 56.5415L42 65.9585C37.6684 68.4594 32.3316 68.4594 28 65.9585L11.6891 56.5415C7.3575 54.0406 4.68911 49.4188 4.68911 44.4171V25.5829C4.68911 20.5812 7.3575 15.9594 11.6891 13.4585L28 4.04145Z" fill="#000000"></path>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <!--begin::Svg Icon | path: icons/duotone/Tools/Tools.svg-->
                        <span class="svg-icon svg-icon-2x svg-icon-lg-3x svg-icon-primary position-absolute">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <path d="M15.9497475,3.80761184 L13.0246125,6.73274681 C12.2435639,7.51379539 12.2435639,8.78012535 13.0246125,9.56117394 L14.4388261,10.9753875 C15.2198746,11.7564361 16.4862046,11.7564361 17.2672532,10.9753875 L20.1923882,8.05025253 C20.7341101,10.0447871 20.2295941,12.2556873 18.674559,13.8107223 C16.8453326,15.6399488 14.1085592,16.0155296 11.8839934,14.9444337 L6.75735931,20.0710678 C5.97631073,20.8521164 4.70998077,20.8521164 3.92893219,20.0710678 C3.1478836,19.2900192 3.1478836,18.0236893 3.92893219,17.2426407 L9.05556629,12.1160066 C7.98447038,9.89144078 8.36005124,7.15466739 10.1892777,5.32544095 C11.7443127,3.77040588 13.9552129,3.26588995 15.9497475,3.80761184 Z" fill="#000000"></path>
                                    <path d="M16.6568542,5.92893219 L18.0710678,7.34314575 C18.4615921,7.73367004 18.4615921,8.36683502 18.0710678,8.75735931 L16.6913928,10.1370344 C16.3008685,10.5275587 15.6677035,10.5275587 15.2771792,10.1370344 L13.8629656,8.7228208 C13.4724413,8.33229651 13.4724413,7.69913153 13.8629656,7.30860724 L15.2426407,5.92893219 C15.633165,5.5384079 16.26633,5.5384079 16.6568542,5.92893219 Z" fill="#000000" opacity="0.3"></path>
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Icon-->
                    <!--begin::Description-->
                    <div class="ms-6">
                        <p class="list-unstyled text-gray-600 fw-bold fs-6 p-0 m-0">Uploads Products</p>
                    </div>
                    <!--end::Description-->
                </div>
            </div>
            <div class="card">
                <form action="{{ route('admin.product.create') }}" method="post" enctype="multipart/form-data">
                    @csrf
                        <!-- radio ends -->
                    <div class="row">
                        <div class="col-md-5 col-xl-4">
                            <div class="card-body" data-select2-id="select2-data-90-elj6">
                                <!-- image -->
                                <div class="tab-content pt-3" data-select2-id="select2-data-89-mk7z" id="image_upload_sec">
                                    <div class="tab-pane active" id="kt_builder_main" data-select2-id="select2-data-kt_builder_main">
                                        <div class="row mb-10">
                                            <div class="col-lg-12 col-xl-12">
                                                <div id="product_img" ></div>
                                            </div>
                                            @error('image')
                                                <div style="color:red ;margin-left: 15px">{{ $message }}</div>
                                            @enderror

                                        </div>
                                        <div class="row mb-10">
                                            <div class="col-xl-12 col-lg-12 row">
                                                <div class="input-images" name="gallery_img"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                  <!-- image end-->
                            </div>
                        </div>
                        <div class="col-md-7 col-xl-7">
                            <div class="card-body">
                                <div class="tab-content pt-3" data-select2-id="select2-data-89-mk7z">
                                    <div class="tab-pane active" id="kt_builder_main" data-select2-id="select2-data-kt_builder_main">
                                        <div class="row mb-10">
                                            <label class="col-lg-3 col-form-label text-lg-end">Product Name:</label>
                                            <div class="col-lg-9 col-xl-7">
                                                <div class="form-check form-check-custom form-check-solid form-switch mb-2">
                                                    <input class="form-control form-control-solid" type="text" name="product_name" placeholder="Product Name" vlaue="{{old('product_name')}}">
                                                </div>
                                                @error('product_name')
                                                <div style="color:red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-10">
                                            <label class="col-lg-3 col-form-label text-lg-end">Product Sku:</label>
                                            <div class="col-lg-9 col-xl-7">
                                                <div class="form-check form-check-custom form-check-solid form-switch mb-2">
                                                    <input class="form-control form-control-solid" type="text" name="product_sku" placeholder="Product Sku" vlaue="{{old('product_sku')}}">
                                                </div>
                                                @error('product_sku')
                                                <div style="color:red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-10">
                                            <label class="col-lg-3 col-form-label text-lg-end">Product Price:</label>
                                            <div class="col-lg-9 col-xl-7">
                                                <div class="form-check form-check-custom form-check-solid form-switch mb-2">
                                                    <input class="form-control form-control-solid" type="number" name="product_price" placeholder="Product Price" vlaue="{{old('product_price')}}">
                                                </div>
                                                @error('product_price')
                                                <div style="color:red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-10">
                                            <label class="col-lg-3 col-form-label text-lg-end">Product Quantity:</label>
                                            <div class="col-lg-9 col-xl-7">
                                                <div class="form-check form-check-custom form-check-solid form-switch mb-2">
                                                    <input class="form-control form-control-solid" type="number" name="product_qty" placeholder="Product Quantity" vlaue="{{old('product_qty')}}">
                                                </div>
                                                @error('product_qty')
                                                <div style="color:red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-10">
                                            <label class="col-lg-3 col-form-label text-lg-end">Category:</label>
                                            <div class="col-lg-9 col-xl-7">
                                                <div class="form-check form-check-custom form-check-solid form-switch mb-2">
                                                    <select name="category_id" id="category_id" class="form-control form-control-solid">
                                                        <option disabled selected>--select--</option>
                                                        @foreach($allCategory as $categoty)
                                                        <option value="{{$categoty->id}}">{{ $categoty->name }}</option>
                                                        @endforeach         
                                                    </select>
                                                </div>
                                                @error('category_id')
                                                <div style="color:red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-10">
                                            <label class="col-lg-3 col-form-label text-lg-end">SubCategory:</label>
                                            <div class="col-lg-9 col-xl-7">
                                                <div class="form-check form-check-custom form-check-solid form-switch mb-2">
                                                    <select name="subcategory_id" id="subcategory_id" class="form-control form-control-solid">
                                                        <option value="">--select--</option>
                                                    </select>
                                                </div>
                                                @error('subcategory_id')
                                                <div style="color:red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-10">
                                            <label class="col-lg-3 col-form-label text-lg-end">ReSubCategory:</label>
                                            <div class="col-lg-9 col-xl-7">
                                                <div class="form-check form-check-custom form-check-solid form-switch mb-2">
                                                    <select name="resubcategory_id" id="resubcategory_id" class="form-control form-control-solid">
                                                        <option value="">--select--</option>
                                                    </select>
                                                </div>
                                                @error('resubcategory_id')
                                                <div style="color:red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-10">
                                            <label class="col-lg-3 col-form-label text-lg-end">Brand:</label>
                                            <div class="col-lg-9 col-xl-7">
                                                <div class="form-check form-check-custom form-check-solid form-switch mb-2">
                                                    <select name="brand_id" id="brand_id" class="form-control form-control-solid">
                                                        <option disabled selected>--select--</option>
                                                        @foreach($allBrand as $brandData)
                                                        <option value="{{$brandData->id}}">{{ $brandData->brand }}</option>
                                                        @endforeach    
                                                    </select>
                                                </div>
                                                @error('brand_id')
                                                <div style="color:red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-8">
                                            <label class="col-lg-3 col-form-label text-lg-end">Size:</label>
                                            <div class="col-lg-9 col-xl-7">
                                                <div class="form-check form-check-custom form-check-solid form-switch mb-2">
                                                    <input style="border:none" class="form-control form-control-solid tags"  data-role="tagsinput" type="text" name="product_size[]" placeholder="Product Size">
                                                </div>
                                                @error('title')
                                                <div style="color:red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <!--end::Col-->
                                        </div>

                                        <div class="row mb-10">
                                            <label class="col-lg-3 col-form-label text-lg-end">Color:</label>
                                            <div class="col-lg-9 col-xl-7">
                                                <div class="form-check form-check-custom form-check-solid form-switch mb-2">
                                                    <select  class="form-control form-control-solid js-example-basic-multiple" name="color_id[]" multiple="multiple">
                                                        <option disabled value="">--select--</option>
                                                        @foreach($allColor as $colorData)
                                                        <option value="{{$colorData->id}}">{{ $colorData->color_name }}</option>
                                                        @endforeach    
                                                    </select>
                                                </div>
                                                @error('subcategory')
                                                <div style="color:red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-10">
                                            <label class="col-lg-3 col-form-label text-lg-end">Product Tag:</label>
                                            <div class="col-lg-9 col-xl-7">
                                                <div class="form-check form-check-custom form-check-solid form-switch mb-2">
                                                    <input name="tags[]" id="tags" data-role="tagsinput" class="form-control form-control-solid tags" type="text" placeholder="Tag">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-8">
                                            <label class="col-lg-3 col-form-label text-lg-end">Status</label>
                                            <div class="col-xl-9">
                                                <div class="d-flex fw-bold h-100">
                                                    <div class="form-check form-check-custom form-check-solid me-9">
                                                        <input class="form-check-input" type="radio" id="active" value="1" name="is_active" checked>
                                                        <label class="form-check-label ms-3" for="active">Active</label>
                                                    </div>
                                                    <div class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio" id="Deactive" value="0" name="is_active">
                                                        <label class="form-check-label ms-3" for="Deactive">Deactive</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <div class="row mb-10">
                                            <label class="col-lg-3 col-form-label text-lg-end">Description:</label>
                                            <div class="col-lg-9 col-xl-7">
                                                <div class="form-check form-check-custom form-check-solid form-switch mb-2">
                                                    <textarea id="summernote" st class="form-control form-control-solid" name="product_description" placeholder="Product Description" ></textarea>
                                                </div>
                                            </div>
                                            @error('product_description')
                                            <div style="color:red;margin-left:150px">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                            <!--begin::Footer-->
                            <div class="card-footer py-6">
                                <div class="row">
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-9">
                                        <button type="submit" id="kt_layout_builder_preview" class="btn btn-primary me-2">
                                            <span class="indicator-label">Submit</span>
                                            <span class="indicator-progress">Please wait...
                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-xl-">

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


{{-- <script>
    $("input[data-role=tagsinput], select[multiple][data-role=tagsinput]").tagsinput();
</script> --}}
<script>
    $(document).ready(function(){
        $("#size").click(function(){
            if($(this).is(":checked")){
                $("#main_size").show();
            }else{
                $("#main_size").hide();
            }
        });

    });


</script>

<script>
 $(document).ready(function() {
	$(".file_type").click(function() {
		//alert("ok");
		if ($("#likcheck").is(":checked")) {
						// alert("pharmacy");
			 $("#linkdata").show();
             $("#uploadsfile").hide();
		}
		else {
            $("#linkdata").hide();
			$("#uploadsfile").show();
		}
	});
});
</script>

<script>
 $(document).ready(function() {
	$(".method").click(function() {

		var mainid =$(this).val();
        if(mainid==2){
             $("#video_uploads_sec").show();
             $("#image_upload_sec").hide();
             $("#video_link_sec").hide();
        }else if(mainid==3){
             $("#video_uploads_sec").hide();
             $("#image_upload_sec").hide();
             $("#video_link_sec").show();
        }else{
            $("#video_uploads_sec").hide();
             $("#image_upload_sec").show();
             $("#video_link_sec").hide();
        }
	
	});
});
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
        
        $('select[name="category_id"]').on('change', function() {
            var cate_id = $(this).val();
     
            if (cate_id) {
                $.ajax({
                    url: "{{  url('/get/subcategory/all/') }}/" + cate_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {

                        $('#subcategory_id').empty();
                        $('#subcategory_id').append(' <option value="">--select--</option>');
                        $.each(data, function(index, districtObj) {
                            $('#subcategory_id').append('<option value="' + districtObj.id + '">' + districtObj.name + '</option>');
                        });

                    }
                });
            } else {
                //  alert('danger');
            }

        });
        //  resubcategory
        $('select[name="subcategory_id"]').on('change', function() {
            var subcate_id = $(this).val();

            if (subcate_id) {
                $.ajax({
                    url: "{{  url('/get/resubcategory/all/') }}/" + subcate_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $('#resubcategory_id').empty();
                        $('#resubcategory_id').append(' <option value="">--select--</option>');
                        $.each(data, function(index, districtObj) {
                            $('#resubcategory_id').append('<option value="' + districtObj.id + '">' + districtObj.name + '</option>');
                        });


                    }
                });
            } else {
                //  alert('danger');
            }
        });

    });
</script>

{{-- <script type="text/javascript" src="http://example.com/jquery.min.js"></script> --}}

<script type="text/javascript" src="{{asset('backend')}}/assets/js/image-uploader.min.js"></script>
<script>
$('.input-images').imageUploader();
</script>
@endsection