@extends('layouts.admin')

@section('content')

    <div class="container"><div class="row"><div class="col-sm-10">

    <a href="{{route('mobile.index')}}">back to index</a>

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
                        <th scope="row">{{$mobile->id}}</th>
                        <td>{{$mobile->name}}</td>
                        <td>{{$mobile->type}}</td>
                        <td>{{$mobile->model}}</td>
                        <td>{{$mobile->color}}</td>
                        <td>{{$mobile->created_at}}</td>

                    </tr>

                    </tbody>
                </table>


        </div></div></div>
@stop
