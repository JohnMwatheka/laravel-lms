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
								<li class="breadcrumb-item active" aria-current="page">All Coupon</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<a href="{{ route('admin.add.coupon') }}" class="px-5 btn btn-primary">Add Coupon</a>
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
										<th>Coupon Name</th>
										<th>Coupon Discount</th>
										<th>Valid untill</th>
                                        <th>Coupon Status</th>
                                        <th>Action</th>
									</tr>
								</thead>
								<tbody>

                                @foreach ( $coupon as  $key=> $item)
									<tr>
										<td>{{ $key+1 }}</td>
										<td>{{ $item->coupon_name}}</td>
                                        <td>{{ $item->coupon_discount}}%</td>
                                        <td>{{ Carbon\Carbon::parse($item->coupon_validity)->format('D, d F Y')}}</td>
                                        <td>
                                            @if($item->coupon_validity >= Carbon\Carbon::now()->format('Y-m-d'))
                                            <span class="badge bg-success">Valid</span>

                                            @else ()
                                            <span class="badge bg-danger">Invalid</span>

                                            @endif
                                        </td>
										<td>
                                            <a href="{{ route('admin.edit.coupon',$item->id) }}" class="px-5 btn btn-info">Edit</a>
                                            <a href="{{ route('admin.delete.coupon',$item->id) }}" class="px-5 btn btn-danger" id="delete">Delete</a>
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
