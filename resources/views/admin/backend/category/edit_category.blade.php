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
                    <li class="breadcrumb-item active" aria-current="page">Add Category</li>
                </ol>
            </nav>
        </div>

    </div>
    <!--end breadcrumb-->

    <div class="card">
        <div class="p-4 card-body">
            <h5 class="mb-4">Edit Category</h5>
            <form id="myForm" action=" {{ route('update.category') }}" method="post" class="row g-3" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="id" value="{{ $category->id }}">

                <div class=" form-group col-md-6">
                    <label for="input1" class="form-label">Category Name</label>
                    <input type="text" name="category_name" class="form-control" id="input1" value="{{ $category->category_name }}" >
                </div>

                <div class="col-md-6">
                </div>

                <div class="form-group col-md-6">
                    <label for="input2" class="form-label">Category Image </label>
                    <input class="form-control" name="image" type="file" id="image">
                </div>

                <div class="col-md-6">
                    <img id="showImage" src="{{ asset($category->image) }}" alt="Admin" class="p-1 rounded-circle bg-primary" width="80">

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
<!-- end breadcrumbs -->

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
