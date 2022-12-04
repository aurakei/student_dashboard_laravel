@extends('students.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Product</h2>
        </div>
        <div class="pull-right">
            <a href="{{ route('students.index')}}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>

@if($errors->any())
<div class="alert alert-danger">
    <strong>Whoops</strong> There are some issues in your input. <br><br>
    <ul>
        @foreach($errors->all()as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>

@endif

<form action="{{route('students.update', $student->id)}}" method="post">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>StudName:</strong>
                <input name="studname" class="form-control" placeholder="Name" value="{{$student->studname}}" type="text">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Course:</strong>
                <input name="course" class="form-control" placeholder="Course" value="{{$student->course}}" type="text">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fee</strong>
                <input name="fee" class="form-control" placeholder="fee" value="{{$student->fee}}" type="text">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </div>
</form>
@endsection