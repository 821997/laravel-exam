@extends('layouts.admin')

@section('content')

    <div class="container"><div class="row"><div class="col-sm-10">

    <a href="{{route('laptop.index')}}">back to index</a>

                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Type</th>
                        <th scope="col">Model</th>
                        <th scope="col">Color</th>
                        <th scope="col">Created at</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">{{$laptop->id}}</th>
                        <td>{{$laptop->name}}</td>
                        <td>{{$laptop->type}}</td>
                        <td>{{$laptop->model}}</td>
                        <td>{{$laptop->body}}</td>
                        <td>{{$laptop->created_at}}</td>

                    </tr>

                    </tbody>
                </table>


        </div></div></div>
@stop
