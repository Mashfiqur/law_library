@extends('layouts.main')
@section('content')
    <style>
        .responsive-header-img {
            background-image: url({{url('images/Law_cases.jpg')}});
        }
        .site-header {
            position: relative;
            padding-top: 12px;
            padding-bottom: 12px;
            color: #fff;
            background-size: cover;
            height: 300px;
        }
    </style>
    <header class="site-header outer responsive-header-img"></header>

    </div>
    <div class="container">
        <div class="container-fluid">
            <div class="row m-3">
                @foreach($cases as $case)
                    <div class="col-10 mb-3">
                        <div class="card h-100 m-1">
                            <div class="card-body">
                                <h3>{{$case->title}}</h3>
                                <p>{{substr($case->description,0,200)}}</p>
                                <p class="text-secondary">Category: <b>{{$case->category->name}}</b></p>
                                <a class="text-primary float-right" href="{{url('case/'.$case->id)}}">Read More >> </a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>



@endsection
