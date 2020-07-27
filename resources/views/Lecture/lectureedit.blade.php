@extends('Layouts.admin-home')
@section('title')
    Lecture Edit
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
                    <input type="text" name="contentname" id="contentname" value="{{$data->course_content_title}}" class="form-control">   
                    <input type="hidden" name="catname" id="id" value="{{$id}}" class="form-control">   
                                
                </div>
                <div class="form-group">
                    <label for="">Lecture Short Discription</label><br><br><br>
                    <textarea id="udescription" name="udescription" cols="48" rows="10">{{$data->course_content_description}}</textarea>  
                                
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save changes</button>            
                </div>
            </form>
        </div>
    </div>
</div>


    
@endsection