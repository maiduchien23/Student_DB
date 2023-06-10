@extends('students.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Product Management</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top: 10px;margin-bottom: 10px;">
            <a class="btn btn-success" href="{{ route('students.create') }}">
                Add product
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 text-center" style="margin-top: 10px;margin-bottom: 10px;">
            <a class="btn btn-success" href="{{ route('categories.index') }}">
                Category
            </a>
        </div>
    </div>
    @if($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    @if(sizeof($student)>0)
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Student Name</th>
                <th>Student Description</th>
                <th>Qty.</th>

                <th width="280px">More</th>
            </tr>
            @foreach($students as $student)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $student->student_name }}</td>
                    <td>{{ $student->student_desc }}</td>
                    <td>{{ $student->student_qty }}</td>

                    <td>
                        <form action="{{ route('students.destroy',$student->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('students.show',$student->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        <div class="alert alert-alert">Start Adding to the Database.</div>
    @endif
    {!! $students->links() !!}
@endsection
