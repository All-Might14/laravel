@extends('admin.layout.dashboard_layout')

@section('category')
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="card col-5">
                <div class="card-header mt-2">
                    <h3>Add Category</h3>
                </div>
                <form action="{{ route( 'categories.update' , $result->id) }}" method="POST">
                    @method('PATCH')
                    @csrf 
                    <div class="card-body">
                        <div class="form-group mt-3">
                            <label class="mb-2" for="name">Category Name</label>
                            <input type="text" value="{{$result->name}}" name="name" class="form-control"> 
                            <button class="btn btn-outline-info col-12 mt-2">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
