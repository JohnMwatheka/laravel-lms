@extends('frontend.dashboard.user_dashboard')
@section('userdashboard')

<div class="flex-wrap mb-5 breadcrumb-content d-flex align-items-center justify-content-between">
    <div class="media media-card align-items-center">
        <div class="rounded-full media-img media--img media-img-md">
            <img class="rounded-full" src="{{ (!empty($profileData->photo)) ? url('upload/user_images/'.$profileData->photo) : url('upload/no_image.jpg')}}" alt="Student thumbnail image">
        </div>
        <div class="media-body">
            <h2 class="section__title fs-30">Hello, {{ $profileData->name }}</h2>
            
        </div><!-- end media-body -->
    </div><!-- end media -->
   
</div><!-- end breadcrumb-content -->


<div class="tab-pane fade show active" id="edit-profile" role="tabpanel" aria-labelledby="edit-profile-tab">
    <div class="setting-body">
        <h3 class="pb-4 fs-17 font-weight-semi-bold">Edit Profile</h3>
       
       
        <form method="post" action="{{ route('user.profile.update') }}" enctype="multipart/form-data" class="row pt-40px">
        @csrf
       
        <div class="media media-card align-items-center">
            <div class="mr-4 media-img media-img-lg bg-gray">
                <img class="mr-3" src="{{ (!empty($profileData->photo)) ? url('upload/user_images/'.$profileData->photo) : url('upload/no_image.jpg')}}" alt="avatar image">
            </div>
            <div class="media-body">
                <div class="file-upload-wrap file-upload-wrap-2">
                    <input type="file" name="photo" class="multi file-upload-input with-preview" multiple>
                    <span class="file-upload-text"><i class="mr-2 la la-photo"></i>Upload a Photo</span>
                </div><!-- file-upload-wrap -->
                <p class="fs-14">Max file size is 5MB, Minimum dimension: 200x200 And Suitable files are .jpg & .png</p>

            </div>
        </div><!-- end media -->
        
            <div class="input-box col-lg-6">
                <label class="label-text"> Name</label>
                <div class="form-group">
                    <input class="form-control form--control" type="text" name="name" value="{{ $profileData->name }}">
                    <span class="la la-user input-icon"></span>
                </div>
            </div><!-- end input-box -->
            <div class="input-box col-lg-6">
                <label class="label-text">User Name</label>
                <div class="form-group">
                    <input class="form-control form--control" type="text" name="username" value="{{ $profileData->username }}">
                    <span class="la la-user input-icon"></span>
                </div>
            </div><!-- end input-box -->
            <div class="input-box col-lg-6">
                <label class="label-text">Email</label>
                <div class="form-group">
                    <input class="form-control form--control" type="email" name="email" value="{{ $profileData->email }}">
                    <span class="la la-user input-icon"></span>
                </div>
            </div><!-- end input-box -->


            <div class="input-box col-lg-6">
                <label class="label-text">Phone</label>
                <div class="form-group">
                    <input class="form-control form--control" type="text" name="phone" value="{{ $profileData->phone }}">
                    <span class="la la-user input-icon"></span>
                </div>
            </div><!-- end input-box -->

            <div class="input-box col-lg-6">
                <label class="label-text">Address</label>
                <div class="form-group">
                    <input class="form-control form--control" type="text" name="address" value="{{ $profileData->address }}">
                    <span class="la la-user input-icon"></span>
                </div>
            </div><!-- end input-box -->
          

  
            <div class="py-2 input-box col-lg-12">
                <button class="btn theme-btn">Save Changes</button>
            </div><!-- end input-box -->
        </form>
    </div><!-- end setting-body -->
</div><!-- end tab-pane -->



@endsection