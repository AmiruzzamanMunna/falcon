@extends('Layouts.admin-home')
@section('title')
    Lecture Add
@endsection
@section('content')

<div class="container">
    
    <div class="card" style="margin-top: 10%">

        <div class="card-header">
            <div class="row">
                <div class="col-md-6">Course</div>
                <div class="col-md-1 ml-auto">
                   
                    
                </div>
            </div>
        </div>
        <div class="card-body">

            <form action="" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Lecture Name</label>
                    <input type="text" name="contentname" id="contentname" class="form-control">   
                                
                </div>
    
                <div class="form-group">
                    <label for="">Lecture Short Discription</label><br><br><br>
                    <textarea id="description" name="description" cols="48" rows="10"></textarea>  
                                
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" onclick="insertCourseContent()">Save changes</button>            
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </form>
        </div>
    </div>
</div>


    
@endsection