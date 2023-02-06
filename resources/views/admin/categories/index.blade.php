@extends('admin.layout.dashboard_layout')

@section('category')
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-10">
                <table class="table">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>NAME</td>
                            <td>
                                <a class="btn btn-sm btn-info" href="{{ route('categories.create') }}">Create</a>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <form action="{{ route('categories.destroy' , $category->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <a class="btn btn-sm btn-success" href="{{ route('categories.show' , $category->id) }}">Show Detail</a>
                                    <button class="btn btn-sm btn-success">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection