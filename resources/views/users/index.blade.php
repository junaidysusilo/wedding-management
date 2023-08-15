@extends('layouts.main')

@section('container')

@if (session()->has('success'))
    <div class="alert alert-success col-lg-9 mt-3" role="alert">
        {{ session('success') }}
    </div>
@endif

	<!-- begin:: Content -->
	<div class="kt-portlet kt-portlet--mobile mt-3">
		<div class="kt-portlet__head kt-portlet__head--lg">
			<div class="kt-portlet__head-label">
				<span class="kt-portlet__head-icon">
					<i class="kt-font-brand flaticon2-line-chart"></i>
				</span>
				<h3 class="kt-portlet__head-title">
					List User
				</h3>
			</div>
			<div class="kt-portlet__head-toolbar">
				<div class="kt-portlet__head-wrapper">
					<div class="dropdown dropdown-inline">
						<a href="/users/create" style="text-decoration: none"><button type="button" class="btn btn-brand btn-icon-sm" >
							<i class="flaticon2-plus"></i> Create New User
						</button></a>
					</div>
				</div>
			</div>
		</div>
		
		<div class="kt-portlet__body">
			<div class="kt-portlet__body kt-portlet__body--fit">
				<!--begin: Datatable -->
				<div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded" id="local_data" style="">
					<table class="kt-datatable__table" style="display: block;">
						<thead class="kt-datatable__head">
							<tr class="kt-datatable__row" style="left: 0px;">
								<th data-field="No" class="kt-datatable__cell kt-datatable__cell--sort">
									<span style="width: 30px;">No</span>
								</th>
								<th data-field="Name" class="kt-datatable__cell kt-datatable__cell--sort">
									<span style="width: 110px;">Name</span>
								</th>
								<th data-field="Email" class="kt-datatable__cell kt-datatable__cell--sort">
									<span style="width: 210px;">Email</span>
								</th>
								<th data-field="Action" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort">
									<span style="width: 110px;">Action</span>
								</th>
							</tr>
						</thead>
						<tbody class="kt-datatable__body" style="">

						@foreach ($users as $user)
						<tr data-row="0" class="kt-datatable__row" style="left: 0px;">
							<td data-field="No" class="kt-datatable__cell">
								<span style="width: 30px;">{{ $loop->iteration }}</span>
							</td>
							<td data-field="Name" class="kt-datatable__cell">
								<span style="width: 110px;">{{ $user->name }}</span>
							</td>
							<td data-field="Email" class="kt-datatable__cell">
								<span style="width: 210px;">{{ $user->email }}</span>
							</td>
							<td data-field="Action" data-autohide-disabled="false" class="kt-datatable__cell">
								<span style="width: 110px;">
									<a href="/users/{{ $user->id }}/edit" title="Edit" class="btn btn-sm btn-clean btn-icon btn-icon-md"><i class="la la-edit"></i></a>
									<form action="/users/{{ $user->id }}" method="post" class="d-inline">
										@csrf
										@method('delete')
										<button title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md" onclick="return confirm('Are you sure?')"><i class="la la-trash"></i>
										</button>
									</form>				
									{{-- <a href="/users" title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md"><i class="la la-trash"></i>			
									</a>		 --}}
								</span>
							</td>
						</tr>
						@endforeach
				<!--end: Datatable -->
			</div>
		</div>
	</div>
	<!-- end:: Content -->
@endsection