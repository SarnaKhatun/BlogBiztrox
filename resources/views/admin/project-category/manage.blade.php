@extends('admin.master')
@section('title')
    Manage Project Category
@endsection
@section('body')
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize text-center">manage project category</h4>
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
                        @foreach($projectCategories as $projectCategory)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$projectCategory->category_name}}</td>
                                <td>{{$projectCategory->status == 1 ? 'Active' : 'Inactive'}}</td>
                                <td>
                                    <a href="{{route('projectCategories.change-status', ['id' => $projectCategory->id])}}" @if($projectCategory->status == 1) class="btn btn-success" @endif  @if($projectCategory->status == 0) class="btn btn-warning" @endif >
                                        <i class="bx bx-adjust"></i>status</a>
                                    <a href="{{route('projectCategories.edit', $projectCategory->id)}}" class="btn btn-secondary">
                                        <i class="bx bx-edit-alt"></i>Edit</a>
                                    <form action="{{route('projectCategories.destroy', $projectCategory->id)}}" method="post" style="display: inline-block" onsubmit="return confirm('Are you sure want to delete this???')">
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
