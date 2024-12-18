<div class="container">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{route('home')}}">
                        <img src="{{asset('asset')}}/image/student_logo.png" alt="" class="img-fluid"
                             style="height: 60px;">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active nav-padding" aria-current="page"
                                   href="{{route('home')}}">Home</a>
                            </li>
                            <li class=" nav-item">
                                <a class="nav-link nav-padding" href="{{route('list.student')}}">Student List</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-padding" href="{{route('department')}}">Add Department</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-padding" href="{{route('list.department')}}">Department List</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
