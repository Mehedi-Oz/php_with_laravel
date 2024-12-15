@extends('master')

@section('title')
    Student List
@endsection

@section('content')

    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-1">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3>ALL STUDENT LIST</h3>
                        </div>

                        <div class="card-body">
                            <table class="table table-responsive table-striped text-center table-bordered">
                                <tr>
                                    <th>Sl</th>
                                    <th>Student ID</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Department</th>
                                    <th>Course Name</th>
                                    <th>Action</th>
                                </tr>

                                @php $i=1 @endphp

                                @foreach($students as $student)
                                    <tr>
                                        <td>{{ $i++  }}</td>
                                        <td>{{ $student->student_id  }}</td>
                                        <td>{{ $student->name  }}</td>
                                        <td>
                                            <img src="{{ $student->image  }}" alt="" class="img-fluid"
                                                 style="height: 100px; width: 100px">
                                        </td>
                                        <td>{{ $student->email  }}</td>
                                        <td>{{ $student->phone  }}</td>
                                        <td>{{ $student->address  }}</td>
                                        <td>{{ $student->department_name  }}</td>
                                        <td>{{ $student->course_name  }}</td>
                                        <td class="btn-group">
                                            <a href="{{route('edit.student', ['id'=>$student->id])}}"
                                               class="btn btn-sm btn-primary mx-1">Edit</a>
                                            <form action="{{route('delete.student')}}" method="post">
                                                @csrf
                                                <input type="hidden" value="{{$student->id}}" name="id">
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Delete this student? Action cannot be undone.')">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
