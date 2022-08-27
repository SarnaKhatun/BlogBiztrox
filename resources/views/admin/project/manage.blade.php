@extends('admin.master')
@section('title')
    Manage Blog
@endsection
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize text-center">manage blog </h4>
                </div>
                <div class="card-body">
                    <table class="table table-responsive table-bordered">
                        <thead>
                        <tr>
                            <th>Sl. No:</th>
                            <th>Project Name</th>
                            <th>Title</th>
                            <th>Author_id</th>
                            <th>Short Description</th>
                            <th>Long Description</th>
                            <th>Expertise</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($projects as $project)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$project->category->category_name}}</td>
                                <td>{{$project->title}}</td>
                                <td>{{$project->author_id}}</td>
                                <td>{{$project->short_description}}</td>
                                <td>{!! \Illuminate\Support\Str::words($project->long_description, 2, '.....') !!}</td>
                                <td>{{$project->expertise}}</td>
                                <td>
                                    <img src="{{asset($project->image)}}" alt="" style="height: 100px; width: 100px;">
                                </td>

                                <td>{{$project->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('projects.change-status', ['id' => $project->id])}}" @if($project->status == 1) class="btn btn-success" @endif  @if($project->status == 0) class="btn btn-warning" @endif >
                                        <i class="bx bx-adjust"></i>status</a>
                                    <a href="{{route('projects.edit', $project->id)}}" class="btn btn-secondary">
                                        <i class="bx bx-edit-alt"></i>Edit</a>
                                    <form action="{{route('projects.destroy', $project->id)}}" method="post" style="display: inline-block" onsubmit="return confirm('Are you sure want to delete this???')">
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
