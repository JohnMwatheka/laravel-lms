@extends('instructor.instructor_dashboard')

@section('instructor')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <div class="page-content">
        <!-- breadcrumb -->
        <div class="mb-3 page-breadcrumb d-none d-sm-flex align-items-center">
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="p-0 mb-0 breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit lecture</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{ route('add.course.lecture',['id' => $clecture->course_id]) }}" class="px-5 btn btn-success">Back</a>
                </div>
            </div>
        </div>
        <!-- end breadcrumb -->

        <div class="card">
            <div class="p-4 card-body">
                <h5 class="mb-4">Edit Lecture</h5>
                <form id="myForm" action="{{ route('update.course.lecture') }}" method="post" class="row g-3" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="id" value="{{ $clecture->id }}">

                    <div class="form-group col-md-6">
                        <label for="input1" class="form-label">Lecture Title</label>
                        <input type="text" name="lecture_title" class="form-control" id="input1" value="{{ $clecture->lecture_title }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="input1" class="form-label">Video URL</label>
                        <input type="text" name="url" class="form-control" id="input1" value="{{ $clecture->url }}">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="input1" class="form-label">Lecture content</label>
                        <textarea name="content" class="form-control">{{ $clecture->content }}</textarea>
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
@endsection
