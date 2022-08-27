@extends('admin.master')
@section('title')
    Manage Service
@endsection
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize text-center">manage service </h4>
                </div>
                <div class="card-body">
                    <table class="table table-responsive table-bordered">
                        <thead>
                        <tr>
                            <th>Sl. No:</th>
                            <th>Service Name</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($services as $service)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$service->category->category_name}}</td>
                                <td>{{$service->title}}</td>
                                <td>{{$service->description}}</td>
                                <td>
                                    <img src="{{asset($service->image)}}" alt="" style="height: 100px; width: 100px;">
                                </td>

                                <td>{{$service->status == 1 ? 'Active' : 'Inactive'}}</td>
                                <td>
                                    <a href="{{route('services.change-status', ['id' => $service->id])}}" @if($service->status == 1) class="btn btn-success" @endif  @if($service->status == 0) class="btn btn-warning" @endif >
                                        <i class="bx bx-adjust"></i>status</a>
                                    <a href="{{route('services.edit', $service->id)}}" class="btn btn-secondary">
                                        <i class="bx bx-edit-alt"></i>Edit</a>
                                    <form action="{{route('services.destroy', $service->id)}}" method="post" style="display: inline-block" onsubmit="return confirm('Are you sure want to delete this???')">
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
