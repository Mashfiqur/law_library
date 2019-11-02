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
                            <h6 class="text-secondary">Case Number: <b>{{$case->category->name}}</b></h6>
                            <h6 class="text-secondary">Year: <b>{{$case->category->name}}</b></h6>
                            <h6 class="text-secondary">Judges: <b>{{$case->category->name}}</b></h6>
                            <h6 class="text-secondary">Petitioner: <b>{{$case->category->name}}</b></h6>
                            <h6 class="text-secondary">Opposite-Parties: <b>{{$case->category->name}}</b></h6>
                            <h6 class="text-secondary">Judges for the Petitioner: <b>{{$case->category->name}}</b></h6>
                            <h6 class="text-secondary">Judges for the Opposite Party : <b>{{$case->category->name}}</b></h6>
                            <h6 class="text-secondary">Heard On: <b>{{$case->category->name}}</b></h6>
                            <h6 class="text-secondary">Judgment : <b>{{$case->category->name}}</b></h6>
                            <h6 class="text-secondary">Summary: <b>{{$case->category->name}}</b></h6>
                            

                            
                            <a  target="_blank" href="{{ asset('/pdfs/'.$case->pdf) }}">Download Full File as a PDF</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
<p>{{$case->description}}</p>