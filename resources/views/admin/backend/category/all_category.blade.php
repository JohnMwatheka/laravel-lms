@extends ('admin.admin_dashboard')
@section('admin')


<div class="page-content">
				<!--breadcrumb-->
				<div class="mb-3 page-breadcrumb d-none d-sm-flex align-items-center">
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="p-0 mb-0 breadcrumb">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">All Category</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<a href="{{ route('add.category') }}" class="px-5 btn btn-primary">Add Category</a>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->

				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>Sl</th>
										<th>Category Name</th>
										<th>Category Image</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>

                                @foreach ( $category as  $key=> $item)
									<tr>
										<td>{{ $key+1 }}</td>
										<td><image src="{{ asset($item->image)}}" alt="" style="width: 70px; height:40px;"></td>
										<td>{{ $item->category_name}}</td>
										<td>
                                            <a href="{{ route('edit.category',$item->id) }}" class="px-5 btn btn-info">Edit</a>
                                            <a href="{{ route('delete.category',$item->id) }}" class="px-5 btn btn-danger" id="delete">Delete</a>
                                        </td>
									</tr>
								@endforeach
								</tbody>

							</table>
						</div>
					</div>
				</div>
            </div>
@endsection
