@extends('layouts.main')

@section('container')

@if (session()->has('success'))
    <div class="alert alert-success col-lg-9 mt-3" role="alert">
        {{ session('success') }}
    </div>
@endif

<div class="kt-portlet mt-4">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                Add New Groom
            </h3>
        </div>
    </div>

    <!--begin::Form-->
    <form method="post" action="{{ route('tenants.grooms.store', ['tenant' => $tenant->id]) }}" class="kt-form">
        @csrf
        @method('post')
        <div class="kt-portlet__body">
            <div class="form-group">
                <label for="tenant_id">Tenant ID</label>
                <input type="text" readonly class="form-control" name="tenant_id" id="tenant_id" value="{{ $tenant->id }}" autofocus>
            </div>
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter first name" autofocus>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter last name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="bank_account">Bank Account</label>
                <input type="text" class="form-control" name="bank_account" id="bank_account" placeholder="Enter bank account">
            </div>
            <div class="form-group">
                <label for="destination_bank">Destination Bank</label>
                <input type="text" class="form-control" name="destination_bank" id="destination_bank" placeholder="Enter destination bank">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" name="address" id="address" placeholder="Enter address">
            </div>
            <div class="form-group">
                <label for="birthdate">Date of Birth</label>
                <input type="text" class="form-control" name="birthdate" id="birthdate" placeholder="Enter birthdate">
            </div>
            <div class="form-group">
                <label for="fathers_name">Father's Name</label>
                <input type="text" class="form-control" name="fathers_name" id="fathers_name" placeholder="Enter father's name">
            </div>
            <div class="form-group">
                <label for="mothers_name">Mother's Name</label>
                <input type="text" class="form-control" name="mothers_name" id="mothers_name" placeholder="Enter mother's name">
            </div>
        <div class="kt-portlet__foot d-flex justify-content-end">
            <div class="kt-form__actions">
                {{-- <a href="{{ route('tenants.create') }}" class="btn btn-secondary">Previous</a> --}}
                <button type="submit" class="js-btn-next btn btn-primary">Save & Next</button>
            </div>
        </div>
    </form>
</div>
@endsection