@extends('students.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Show product</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('students.index') }}">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md12">
            <div class="form-group">
                <strong>Category : </strong>
                {{$student->categories->category_name}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md12">
            <div class="form-group">
                <strong>Student Name : </strong>
                {{ $student->student_name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Student Description : </strong>
                {{ $student->student_desc }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Quantity : </strong>
                {{ $student->student_qty }}
            </div>
        </div>

    </div>
@endsection

