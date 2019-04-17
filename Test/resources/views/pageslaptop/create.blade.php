@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <a href="{{route('laptop.index')}}" class="btn btn-success">back To Index</a>

        <div class="col-lg-8">

        <br>
        <br>
            @method('POST')
            <form method="post" action="{{route('laptop.index') }}">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" name="name" placeholder="Enter Name">
            </div>

            <div class="form-group">
                <label>Type</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" name="type" placeholder="Enter type">
            </div>

            <div class="form-group">
                <label>Model</label>
                <input type="date" class="form-control" aria-describedby="emailHelp" name="model" placeholder="Enter model">
            </div>


            <div class="form-group">

                <label>Color</label>
                <textarea name="body" class="form-control" placeholder="enter body"></textarea>
            </div>



            <br><br><br>

           <div class="text-center"><button type="submit" class="btn btn-primary">Submit</button></div>
            </form>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif

    </div>

</div>

</div>

    @stop
