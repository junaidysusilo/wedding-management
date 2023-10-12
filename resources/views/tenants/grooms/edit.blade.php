@extends('layouts.main')

@section('container')

<div class="kt-portlet mt-4">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                Edit Groom Data
            </h3>
        </div>
    </div>

    <!--begin::Form-->
    <form method="post" action="{{ route('tenants.grooms.update', ['tenant' => $tenant->id, 'groom' => $groom->id]) }}" class="kt-form">
        @csrf
        @method('put')
        <div class="kt-portlet__body">
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter first name" autofocus value="{{ old('first_name', $groom->first_name) }}">
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter last name" value="{{ old('last_name', $groom->last_name) }}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="{{ old('email', $groom->email) }}">
            </div>
            <div class="form-group">
                <label for="bank_account">Bank Account</label>
                <input type="text" class="form-control" name="bank_account" id="bank_account" placeholder="Enter bank account" value="{{ old('bank_account', $groom->bank_account) }}">
            </div>
            <div class="form-group">
                <label for="destination_bank">Destination Bank</label>
                <input type="text" class="form-control" name="destination_bank" id="destination_bank" placeholder="Enter destination bank" value="{{ old('destination_bank', $groom->destination_bank) }}">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" name="address" id="address" placeholder="Enter address" value="{{ old('address', $groom->address) }}">
            </div>
            <div class="form-group">
                <label for="birthdate">Date of Birth</label>
                <input type="text" class="form-control" name="birthdate" id="birthdate" placeholder="Enter birthdate" value="{{ old('birthdate', $groom->birthdate) }}">
            </div>
            <div class="form-group">
                <label for="fathers_name">Father's Name</label>
                <input type="text" class="form-control" name="fathers_name" id="fathers_name" placeholder="Enter father's name" value="{{ old('fathers_name', $groom->fathers_name) }}">
            </div>
            <div class="form-group">
                <label for="mothers_name">Mother's Name</label>
                <input type="text" class="form-control" name="mothers_name" id="mothers_name" placeholder="Enter mother's name" value="{{ old('mothers_name', $groom->mothers_name) }}">
            </div>
        <div class="kt-portlet__foot">
            <div class="kt-form__actions">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{ route('tenants.brides.edit',['tenant'=>$tenant->id,'bride'=>$tenant->bride?->id]) }}" class="btn btn-primary">Next</a>
            </div>
        </div>
    </form>
</div>
@endsection