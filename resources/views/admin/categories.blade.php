@extends('layouts.admin')
@section('content')
    <div class="container p-5 ">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <a class="btn btn-primary float-right" href="add-category">Create New Category</a>
                </div>
            </div>
            <div class="row">
                <div class="table-responsive">
                    <table class="table" id="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->created_at->diffForHumans()}}</td>
                                <td>{{$category->updated_at->diffForHumans()}}</td>
                                <td><a href="{{ 'edit-category/'.$category->id}}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="pl-2" href="{{ 'delete-category/'.$category->id}}">
                                        <i class="fa fa-trash"></i>
                                    </a>
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
