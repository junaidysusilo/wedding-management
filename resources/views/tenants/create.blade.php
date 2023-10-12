@extends('layouts.main')

@section('container')

<div class="kt-portlet mt-4">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                Add New Tenant
            </h3>
        </div>
    </div>

    <!--begin::Form-->
    <form method="post" action="{{ route('tenants.store') }}" class="kt-form">
        @csrf
        <div class="kt-portlet__body">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" autofocus value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" id="password" placeholder="Password">
            </div>
        <div class="kt-portlet__foot d-flex justify-content-end">
            <div class="kt-form__actions">
                <a href="{{ route('tenants.index') }}" class="btn btn-secondary">Back</a>
                <button type="submit" class="js-btn-next btn btn-primary">Save & Next</button>
            </div>
        </div>
    </form>
</div>
@endsection