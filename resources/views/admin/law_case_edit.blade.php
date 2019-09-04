@extends('layouts.admin')
@section('content')
    <div class="my-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Add New Case</div>
                        <div class="card-body">
                            <form name="my-form"  action="{{ url('admin/update-law_case/'.$law_case->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Case Title</label>
                                    <div class="col-md-6">
                                        <input type="text" value="{{$law_case->title}}" class="form-control" name="title">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Category</label>
                                    <select class="col-md-6 form-control" name="category_id" required>
                                        <option selected value="{{$law_case->category_id}}">{{$law_case->category->name}}</option>
                                        @foreach($categories as $cat)
                                            <option  value="{{$cat->id}}"> {{$cat->name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Description</label>
                                    <div class="col-md-6">
                                        <textarea name="description" rows="5" cols="35">{{$law_case->description}}></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Upload File *<p class="text-danger">(File must be less than 1MB)</p></label>
                                    <div class="col-md-6">
                                        <input type="file" name="pdf" class="form-control-file">
                                        <br>
                                        <a target="_blank" href="{{ asset('/pdfs/'.$law_case->pdf) }}">Download PDF</a>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 offset-md-4">
                                        <button class="btn btn-primary" type="submit">Add Case</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
