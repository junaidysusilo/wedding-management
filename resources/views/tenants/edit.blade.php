@extends('layouts.main')

@section('container')

<div class="kt-portlet mt-4">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                Edit Tenant
            </h3>
        </div>
    </div>

    <!--begin::Form-->
    <form method="post" action="{{ route('tenants.update', ['tenant' => $tenant->id]) }}" class="kt-form">
        @csrf
        @method('put')
        <div class="kt-portlet__body">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" autofocus value="{{ old('name', $tenant->name) }}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ old('email', $tenant->email) }}" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" id="password" placeholder="Password">
            </div>
        <div class="kt-portlet__foot">
            <div class="kt-form__actions">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{ route('tenants.index') }}" class="btn btn-secondary">Back</a>
                <a href="{{ route('tenants.grooms.edit',['tenant'=>$tenant->id,'groom'=>$tenant->groom?->id]) }}" class="btn btn-primary">Next</a>
            </div>
        </div>
    </form>
</div>
@endsection