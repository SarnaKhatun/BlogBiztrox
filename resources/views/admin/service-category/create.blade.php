@extends('admin.master')
@section('title')
    Add Service Category
@endsection
@section('body')
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center text-capitalize">create service category</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('serviceCategories.store')}}" method="post">
                        @csrf
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Category Name</label>
                            <div class="col-md-8">
                                <input type="text" name="category_name" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Category Status</label>
                            <div class="col-md-8">
                                <label for=""><input type="radio" name="status" value="1" checked>Active</label>
                                <label for=""><input type="radio" name="status" value="0">Inactive</label>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit" class="btn btn-success" value="Add Category">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
