@extends('layouts.admin')

@section('content')

    <section class="content-header">
        <h1>
            Laptop
            <small>Registered Laptop</small>
        </h1>

    </section>

    <br>
    <div class="pull-right">
        <a class="btn btn-success text-center" href="{{ route('laptop.create') }}"> Create New laptop</a>
    </div>

    <br>

    <div class="col-sm-8">

        @if(session()->get('success'))
            <div class="alert alert-warning">
                {{ session()->get('success') }}
            </div>
        @endif
    </div>

<div class="container">


    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Type</th>
            <th scope="col">Model</th>
            <th scope="col">Body</th>

        </tr>
        </thead>
        <tbody>

        @foreach($laptop as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->type}}</td>
            <td>{{$item->model}}</td>
            <td>{{$item->body}}</td>

            <td>

                <form action="{{ route('laptop.destroy', $item->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                    <a href="{{route('laptop.edit', $item->id)}}" class="btn btn-warning">Update</a>
                    <a href="{{route('laptop.show', $item->id)}}" class="btn btn-info">Show</a>

                </form>


            </td>

        </tr>
        @endforeach

        </tbody>
    </table>




    <div class="text-center">
    {{$laptop->links()}}
    </div>
    </div>


    <script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if(exist){
            alert(msg);
        }
    </script>
    @stop
