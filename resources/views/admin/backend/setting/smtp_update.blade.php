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
                    <li class="breadcrumb-item active" aria-current="page">Smtp setting</li>
                </ol>
            </nav>
        </div>

    </div>
    <!--end breadcrumb-->

    <div class="card">
        <div class="p-4 card-body">
            <h5 class="mb-4">smtp setting</h5>
            <form id="myForm" action=" {{ route('update.smtp') }}" method="post" class="row g-3" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="id" value="{{ $smtp->id }}">

                <div class=" form-group col-md-6">
                    <label for="input1" class="form-label">mailer</label>
                    <input type="text" name="mailer" class="form-control" id="input1" value="{{ $smtp->mailer }}" >
                </div>
                <div class=" form-group col-md-6">
                    <label for="input1" class="form-label">Host</label>
                    <input type="text" name="host" class="form-control" id="input1" value="{{ $smtp->host }}" >
                </div>
                <div class=" form-group col-md-6">
                    <label for="input1" class="form-label">Port</label>
                    <input type="text" name="port" class="form-control" id="input1" value="{{ $smtp->port }}" >
                </div>
                <div class=" form-group col-md-6">
                    <label for="input1" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="input1" value="{{ $smtp->username }}" >
                </div>
                <div class=" form-group col-md-6">
                    <label for="input1" class="form-label">password</label>
                    <input type="text" name="password" class="form-control" id="input1" value="{{ $smtp->password }}" >
                </div>
                <div class=" form-group col-md-6">
                    <label for="input1" class="form-label">Encryption</label>
                    <input type="text" name="encryption" class="form-control" id="input1" value="{{ $smtp->encryption }}" >
                </div>
                <div class=" form-group col-md-6">
                    <label for="input1" class="form-label">From Address</label>
                    <input type="text" name="from_address" class="form-control" id="input1" value="{{ $smtp->from_address }}" >
                </div>
                
                


                <div class="col-md-6">
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



@endsection
