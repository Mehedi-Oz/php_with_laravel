@extends('master')

@section('content')

    <section class="py-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-10 offset-1">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3>STUDENT LIST</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-striped table-bordered">
                                <tr>
                                    <th>Sl</th>
                                    <th>Name</th>
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
                                        <td>{{$i++}}</td>
                                        <td>{{$student['name']}}</td>
                                        <td>{{$student['email']}}</td>
                                        <td>{{$student['phone']}}</td>
                                        <td>{{$student['address']}}</td>
                                        <td>{{$student['department']}}</td>
                                        <td>{{$student['course_name']}}</td>
                                        <td class="btn-group">
                                            <a href="{{route('edit.student', ['id'=>$student->id])}}"
                                               class="btn btn-primary btn-sm mx-1">Edit</a>
                                            {{--                                            <a href="{{route('delete.student', ['id'=>$student->id])}}"--}}
                                            {{--                                               class="btn btn-danger btn-sm">Delete</a>--}}

                                            <form action="{{route('delete.student')}}" method="post">
                                                @csrf
                                                <input type="hidden" value="{{$student->id}}" name="id">
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete this student? Action cannot be undone.')">Delete</button>
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
    </section>
@endsection
