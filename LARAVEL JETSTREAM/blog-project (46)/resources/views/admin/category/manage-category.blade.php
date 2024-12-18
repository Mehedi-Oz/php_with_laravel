@extends('admin.master')

@section('content')

    <div class="row">
        <div class="col-md-10 offset-1">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase text-center">Category List</h6>
                        <hr/>
                        <table class="table table-bordered table-striped table-hover text-center">
                            <tr>
                                <th>Sl</th>
                                <th>Category Id</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>

                            @php $i=1 @endphp

                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->category_name}}</td>
                                    <td>
                                        <img src="{{asset($category->category_image)}}"
                                             style="height: 50px; width: 50px">
                                    </td>
                                    <td>{{$category->status==1 ? 'Published': 'Unpublished'}}</td>
                                    <td class="btn-group">
                                        <a href="{{route('category.edit', ['id'=>$category->id])}}"
                                           class="btn btn-primary btn-sm">Edit</a>

                                        @if($category->status==1)
                                            <a href="{{route('category.status', ['id'=>$category->id])}}"
                                               class="btn btn-warning btn-sm mx-1">Unpublish</a>
                                        @else
                                            <a href="{{route('category.status', ['id'=>$category->id])}}"
                                               class="btn btn-success btn-sm mx-1">Publish</a>
                                        @endif

                                        <form action="{{route('category.delete')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$category->id}}">
                                            <input type="submit" class="btn btn-danger btn-sm" value="Delete"
                                                   onclick="return confirm('Delete this category? Action cannot be undone!')">
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
