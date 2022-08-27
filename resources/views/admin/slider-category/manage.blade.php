@extends('admin.master')
@section('title')
    Manage Slider Category
@endsection
@section('body')
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize text-center">manage slider category</h4>
                </div>
                <div class="card-body">
                    <table class="table table-responsive table-bordered">
                        <thead>
                        <tr>
                            <th>Sl. No:</th>
                            <th>Category Name</th>
                            <th>Category Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sliderCategories as $sliderCategory)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$sliderCategory->category_name}}</td>
                                <td>{{$sliderCategory->status == 1 ? 'Active' : 'Inactive'}}</td>
                                <td>
                                    <a href="{{route('sliderCategories.change-status', ['id' => $sliderCategory->id])}}" @if($sliderCategory->status == 1) class="btn btn-success" @endif  @if($sliderCategory->status == 0) class="btn btn-warning" @endif >
                                        <i class="bx bx-adjust"></i>status</a>
                                    <a href="{{route('sliderCategories.edit', $sliderCategory->id)}}" class="btn btn-secondary">
                                        <i class="bx bx-edit-alt"></i>Edit</a>
                                    <form action="{{route('sliderCategories.destroy', $sliderCategory->id)}}" method="post" style="display: inline-block" onsubmit="return confirm('Are you sure want to delete this???')">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" class="btn btn-danger" value="delete">
                                    </form>
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
