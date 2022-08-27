@extends('admin.master')
@section('title')
    Manage User
@endsection
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center text-capitalize">manage user</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-responsive" id="userTable">
                        <thead>
                        <tr>
                            <th>Sl. No:</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <img src="{{asset($user->userDetail->image)}}" alt="" style="height: 100px; width: 100px;">
                                </td>
                                <td>{{$user->userDetail->description}}</td>
                                <td>
                                    {{$user->access_label == 3 ? 'Admin' : ''}}
                                    {{$user->access_label == 2 ? 'CEO' : ''}}
                                    {{$user->access_label == 1 ? 'Accounts' : ''}}
                                    {{$user->access_label == 0 ? 'Client' : ''}}
                                </td>
                                <td>
                                    {{$user->status == 1 ? 'Published' : 'Unpublished'}}
                                </td>
                                <td>
                                    <a href="{{route('users.change-status', ['id' => $user->id])}}" @if($user->status == 1) class="btn btn-success" @endif @if($user->status == 0) class="btn btn-warning" @endif  >
                                        <i class="bx bx-adjust"></i>Status</a>
                                    <a href="{{route('users.edit', $user->id)}}" class="btn btn-primary">
                                        <i class="bx bx-edit"></i>Edit</a>

                                    <form action="{{route('users.destroy', $user->id)}}" method="post" onsubmit="return confirm('Are you sure want to delete this???')" style="display: inline-block">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" class="btn btn-danger" value="Delete">
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
