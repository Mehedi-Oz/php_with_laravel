@extends('admin.master')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase text-center">All Blogs</h6>
                        <hr/>
                        <table class="table table-bordered table-striped table-hover text-center ">
                            <tr>
                                <th>Sl</th>
                                <th>Date</th>
                                <th>Blog Title</th>
                                <th>Slug</th>
                                <th>Category</th>
                                <th>Author</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>

                            @php $i=1 @endphp

                            @foreach($blogs as $blog)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$blog->date}}</td>
                                    <td>{{$blog->blog_title}}</td>
                                    <td>{{$blog->slug}}</td>
                                    <td>{{ $blog->category->category_name }}</td>
                                    <td>{{ $blog->author->author_name }}</td>
                                    <td class="text-justify">{{$blog->description}}</td>
                                    <td>
                                        <img src="{{asset($blog->blog_image)}}"
                                             style="height: 50px; width: 50px">
                                    </td>
                                    <td>{{$blog->status==1 ? 'Published': 'Unpublished'}}</td>
                                    <td class="btn-group">
                                        <a href="{{route('blog.edit', ['id'=>$blog->id])}}"
                                           class="btn btn-primary btn-sm">Edit</a>

                                        @if($blog->status==1)
                                            <a href="{{route('blog.status', ['id'=>$blog->id])}}"
                                               class="btn btn-success btn-sm mx-1">Published</a>
                                        @else
                                            <a href="{{route('blog.status', ['id'=>$blog->id])}}"
                                               class="btn btn-warning btn-sm mx-1">Unpublished</a>
                                        @endif

                                        <form action="{{route('blog.delete')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$blog->id}}">
                                            <input type="submit" class="btn btn-danger btn-sm" value="Delete">
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

@endsection
