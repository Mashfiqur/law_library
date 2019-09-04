@extends('layouts.main')
@section('content')
        <div class="container mt-3">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h3>{{$case->title}}</h3>
                            <h6 class="text-secondary">Category: <b>{{$case->category->name}}</b></h6>
                            <h6 class="text-secondary">Uploaded By: <b>{{$case->created_by}}</b></h6>
                            <h6 class="text-secondary">Uploading Time: <b>{{$case->created_at->format('M d Y H:m:s')}}</b></h6>
                            <p>{{$case->description}}</p>
                            <a  target="_blank" href="{{ asset('/pdfs/'.$case->pdf) }}">Download PDF</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
