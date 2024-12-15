@extends('master')

@section('title')
    Department List
@endsection

@section('content')

    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-1">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3>ALL DEPARTMENT LIST</h3>
                        </div>

                        <div class="card-body">
                            <table class="table table-responsive table-striped text-center table-bordered">
                                <tr>
                                    <th>Sl</th>
                                    <th>Department Name</th>
                                    <th>Department Code</th>
                                    <th>Action</th>
                                </tr>

                                @php $i=1 @endphp

                                @foreach($departments as $department)
                                    <tr>
                                        <td>{{ $i++  }}</td>
                                        <td>{{ $department->department_name }}</td>
                                        <td>{{ $department->department_code }}</td>
                                        <td class="btn-group">
                                            <a href="{{route('edit.department', ['id'=>$department->id])}}"
                                               class="btn btn-sm btn-primary mx-1">Edit</a>
                                            <form action="{{route('delete.department')}}" method="post">
                                                @csrf
                                                <input type="hidden" value="{{$department->id}}" name="id">
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Delete this department? Action cannot be undone.')">
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
