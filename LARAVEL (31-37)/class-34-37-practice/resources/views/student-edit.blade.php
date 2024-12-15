@extends('master')

@section('content')
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-1">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>EDIT STUDENT FORM</h3>
                        {{ session('message') }}
                    </div>
                    <div class="card-body">
                        <form id="editStudentForm" action="{{ route('update.student') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{ $student->id }}">
                            <input type="hidden" id="original_data" value='@json($student)'>


                            <div class="form-group row my-3">
                                <label class="col-md-3 col-form-label">Student Id</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="student_id" id="student_id"
                                        value="{{ $student->student_id }}">
                                </div>
                            </div>
                            <div class="form-group row my-3">
                                <label class="col-md-3 col-form-label">Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="name" id="name"
                                        value="{{ $student->name }}">
                                </div>
                            </div>
                            <div class="form-group row my-3">
                                <label class="col-md-3 col-form-label">Email</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="email" id="email"
                                        value="{{ $student->email }}">
                                </div>
                            </div>
                            <div class="form-group row my-3">
                                <label class="col-md-3 col-form-label">Phone</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="phone" id="phone"
                                        value="{{ $student->phone }}">
                                </div>
                            </div>
                            <div class="form-group row my-3">
                                <label class="col-md-3 col-form-label">Address</label>
                                <div class="col-md-9">
                                    <textarea name="address" class="form-control"
                                        id="address">{{ $student->address }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row my-3">
                                <label for="department" class="col-form-label col-md-3">Department</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="department" id="department">
                                        <option>Select Department</option>
                                        @foreach($departments as $department)
                                            <option value="{{ $department->id }}" {{ $department->id == $student->department ? 'selected' : '' }}>
                                                {{ $department->department_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="form-group row my-3">
                                <label class="col-md-3 col-form-label">Course Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="course_name" id="course_name"
                                        value="{{ $student->course_name }}">
                                </div>
                            </div>
                            <div class="form-group row my-3">
                                <label class="col-md-3 col-form-label">Image</label>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" name="image" id="image">
                                    <img src="{{asset($student->image)}}" class="img-fluid"
                                        style="height: 150px; width: 150px" alt="">

                                </div>
                            </div>
                            <div class="form-group row my-3">
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-outline-success form-control"
                                        value="Update Student Info">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('editStudentForm').addEventListener('submit', function (e) {
        const originalData = JSON.parse(document.getElementById('original_data').value);
        let isChanged = false;

        // Check if any value has changed
        ['student_id', 'name', 'email', 'phone', 'address', 'department', 'course_name'].forEach(field => {
            const currentValue = document.getElementById(field).value;
            if (currentValue !== originalData[field]) {
                isChanged = true;
            }
        });
    });
</script>
@endsection