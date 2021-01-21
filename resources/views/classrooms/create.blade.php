@extends('layouts.main')

@section('content')

    <div class="container mb-5">
        <h1> Create a new Classroom </h1>

        <form action="" method="POST">
            @csrf 
            @method('POST')

            <div class="form-group">
                <label for="name">Classroom Name</label>
                <input class="form-control" type="text" name="name">              
            </div>
            <div class="form-group">
                <label for="description">Classroom Description</label>
                <textarea class="form-control" type="text" name="description"></textarea>              
            </div>
            <div class="form-group">
                <input class="btn btn-primary " type="submit" value="Create">              

            </div>
            
        
        
        </form>
        

        

        
    </div>

@endsection