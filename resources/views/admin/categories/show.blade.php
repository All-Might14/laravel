@extends('admin.layout.dashboard_layout')

@section('category')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="card col-5 mt-5">
                <div class="card-header text-center">
                    <h3>detail</h3>
                </div>
                <div class="card-body mt-5">
                    <div><label for="{{$category->id}}">ID -</label>
                    {{$category->id}}</div>
                    <div><label for="{{$category->name}}">NAME -</label>
                    {{$category->name}}</div>
                    <a class="btn btn-outline-info col-12 mt-5" href="{{route('categories.edit',$category->id)}}">Edit</a>
                    
                </div>
            </div>
        </div>
    </div>

@endsection