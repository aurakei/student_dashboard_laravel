@extends('students.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Students</h2>
        </div>
        <div class="pull-right">
            <a href="{{route('students.index')}}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>

@if($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong>There is an issue with your input, <br><br>
    <ul>
        @foreach($errors->all() as $error)

        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{route('students.store')}}" method="post">
    @csrf
 <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>StudentName:</strong>
            <input type="text" name="studname" class="form-control" placeholder="student name">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Course</strong>
            <input name="course" class="form-control" placeholder="course" type="text">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Fee</strong>
            <input name="fee" class="form-control" placeholder="fee" type="text">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </div>
</form>

@endsection