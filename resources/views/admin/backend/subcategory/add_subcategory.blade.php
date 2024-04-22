@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">
    <!--breadcrumb-->
    <div class="mb-3 page-breadcrumb d-none d-sm-flex align-items-center">
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="p-0 mb-0 breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Add SubCategory</li>
                </ol>
            </nav>
        </div>

    </div>
    <!--end breadcrumb-->

    <div class="card">
        <div class="p-4 card-body">
            <h5 class="mb-4">Add SubCategory</h5>
            <form id="myForm" action=" {{ route('store.subcategory') }}" method="post" class="row g-3" enctype="multipart/form-data">
                @csrf





                <div class=" form-group col-md-6">
                    <label for="input1" class="form-label">Category Name</label>
                    <select name="category_id" class="mb-3 form-select" aria-label="Default select example">
                        <option selected="" disabled>Select category you want to add subcategory</option>
                        @foreach($category as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                        @endforeach
                     </select>
                </div>

                <div class=" form-group col-md-6">
                    <label for="input1" class="form-label">SubCategory Name</label>
                    <input type="text" name="subcategory_name" class="form-control" id="input1"  >
                </div>

                <div class="col-md-12">
                    <div class="gap-3 d-md-flex d-grid align-items-center">
                        <button type="submit" class="px-4 btn btn-primary">Save Changes</button>

                    </div>
                </div>
            </form>
        </div>
    </div>




</div>

<!-- Script to show error when empty table is submitted.-->
<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                subcategory_name: {
                    required : true,
                },
                category_id: {
                    required : true,
                },


            },
            messages :{
                subcategory_name: {
                    required : 'Please Enter SubCategory Name',
                },

                category_id: {
                    required : 'Please select category',
                },



            },
            errorElement : 'span',
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });

</script>

<!-- Script to show image when user selects it before uploading -->
<script type="text/javascript">

    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

</script>


@endsection
