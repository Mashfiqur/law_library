@extends('layouts.main')
@section('content')

 
        <div class="container mt-3">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h3>{{$case->title}}</h3>
                            <h5 class="text-secondary"><b>Category: </b>{{$case->category->name}}</h5>
                            <h5 class="text-secondary"><b>Uploaded By: </b>{{$case->created_by}}</h5>
                            <h5 class="text-secondary"><b>Uploading Time: </b>{{$case->created_at->format('M d Y H:m:s')}}</h5>
                            <h5 class="text-secondary"><b>Case Number: </b>{{$case->case_number}}</h5>
                            <h5 class="text-secondary"><b>Year: </b>{{$case->year}}</h5>
                            <h5 class="text-secondary"><b>Judges: </b>{{$case->judges}}</h5>
                            <h5 class="text-secondary"><b>Petitioner: </b>{{$case->petitioner}}</h5>
                            <h5 class="text-secondary"><b>Opposite-Parties: </b>{{$case->opposite_parties}}</h5>
                            <h5 class="text-secondary"><b>Judges for the Petitioner: </b>{{$case->judges_for_petitioner}}</h5>
                            <h5 class="text-secondary"><b>Judges for the Opposite Party : </b>{{$case->judges_for_opposite}}</h5>
                            <h5 class="text-secondary"><b>Heard On: </b>{{$case->heard_on}}</h5>
                            <h5 class="text-secondary"><b>Judgment : </b>{{$case->judgement_on}}</h5>
                            <h5 class="text-secondary"><b>Summary: </b>{{$case->category->name}}</h5>
                            

                            
                            <a  target="_blank" href="{{ asset('/pdfs/'.$case->pdf) }}">Download Full File as a PDF</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
