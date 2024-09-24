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
								<li class="breadcrumb-item active" aria-current="page">All Confirmed orders</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							
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
										<th>S. no</th>
										<th>Date</th>
										<th>Invoice</th>
										<th>Amount</th>
                                        <th>Payment</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        
									</tr>
								</thead>
								<tbody>

                                @foreach ( $payment as  $key=> $item)
									<tr>
										<td>{{ $key+1 }}</td>
										<td>{{ $item->order_date}}</td>
										<td>{{ $item->invoice_no}}</td>
                                        <td>KSh. {{ $item->total_amount}}</td>
                                        <td>{{ $item->payment_type}}</td>
                                        <td><span class="badge rounded-pill bg-success">{{ $item->status}}</span></td>
                                        <td>{{ $item->invoice_no}}</td>
										<td>
                                            <a href="{{ route('admin.order.details',$item->id) }}" class="px-5 btn btn-info">Details</a>
                                            
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
