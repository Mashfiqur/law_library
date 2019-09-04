@extends('layouts.admin')
@section('content')
    <div class="container p-5 ">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <a class="btn btn-primary float-right" href="add-law_case">Create New Case</a>
                </div>
            </div>
            <div class="row">
                <div class="table-responsive">
                    <table class="table" id="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Case</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Created At</th>
                            <th>Created By</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($law_cases as $law_case)
                            <tr>
                                <td>{{$law_case->id}}</td>
                                <td>{{$law_case->title}}</td>
                                <td>@if($law_case->category)
                                    {{$law_case->category->name}}
                                    @else
                                    N/A
                                    @endif
                                </td>
                                <td>{{$law_case->description}}</td>
                                <td>{{$law_case->created_at->diffForHumans()}}</td>
                                <td>{{$law_case->created_by}}</td>
                                <td><a href="{{ 'edit-law_case/'.$law_case->id}}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="pl-2" href="{{ 'delete-law_case/'.$law_case->id}}">
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
