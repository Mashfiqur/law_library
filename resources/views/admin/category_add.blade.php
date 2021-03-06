@extends('layouts.admin')
@section('content')
    <div class="my-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Add New Category</div>
                        <div class="card-body">
                <form name="my-form"  action="add-category" method="POST">
                    @csrf

                    <div class="form-group row">
                        <label for="first_name" class="col-md-4 col-form-label text-md-right">Category Name</label>
                        <div class="col-md-6">
                            <input type="text" id="name" class="form-control" name="name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 offset-md-4">
                            <button class="btn btn-primary" type="submit">Add Category</button>
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
