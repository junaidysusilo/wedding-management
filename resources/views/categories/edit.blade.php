@extends('layouts.main')

@section('container')

<div class="kt-portlet mt-4">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                Edit Category
            </h3>
        </div>
    </div>

    <!--begin::Form-->
    <form method="post" action="{{ route('categories.update', ['category' => $category->id]) }}" class="kt-form">
        @csrf
        @method('put')
        <div class="kt-portlet__body">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" autofocus value="{{ old('name', $category->name) }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" id="description" value="{{ old('description', $category->description) }}" placeholder="Enter description">
            </div>
        <div class="kt-portlet__foot">
            <div class="kt-form__actions">
                <button type="submit" class="js-btn-edit btn btn-primary">Edit</button>
                <a href="{{ route('categories.update') }}" class="btn btn-secondary">Back</a>
            </div>
        </div>
    </form>
</div>
@endsection