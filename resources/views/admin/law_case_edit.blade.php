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
                                    <label class="col-md-4 col-form-label text-md-right">Case Number: </label>
                                    <div class="col-md-6">
                                        <input type="text" name="case_number"
                                        {{$law_case->case_number}}></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Year: </label>
                                    <div class="col-md-6">
                                        <input type="number" name="year"
                                            {{$law_case->year}}></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Judges: </label>
                                    <div class="col-md-6">
                                         <input type="text" name="judges"
                                         {{$law_case->judges}}></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Petitioners: </label>
                                    <div class="col-md-6">
                                         <input type="text" name="petitioner"
                                         {{$law_case->petitioner}}></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Opposite Parties: </label>
                                    <div class="col-md-6">
                                        <input type="text" name="opposite_parties"{{$law_case->opposite_parties}}></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Judges For Petitioner: </label>
                                    <div class="col-md-6">
                                        <textarea name="judges_for_petitioner"{{$law_case->judges_for_petitioner}}></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Judges For Opposite parties: </label>
                                    <div class="col-md-6">
                                        <textarea name="judges_for_opposite"{{$law_case->judges_for_opposite}}></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Heard On: </label>
                                    <div class="col-md-6">
                                        <textarea name="heard_on"
                                        {{$law_case->heard_on}}></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Judgement On: </label>
                                    <div class="col-md-6">
                                         <textarea name="judgement_on"
                                         {{$law_case->judgement_on}}></textarea>
                                    </div>
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
