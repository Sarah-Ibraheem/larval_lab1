@extends('layouts.app')
@section('mainBlock')



<div class="container">
  <div class="row">
    <div class="col-12">
    <a href="{{route('posts.create')}}" class="btn btn-success mb-5">Create Post</a>

      <table class="table table-bordered">
        <thead>
          <tr>
          <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">created_on</th>
                        <th scope="col">updated_at</th>
                        <th scope="col">Description</th>
                        <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($posts as $post)
          <tr>
                                <td>{{$post->id}}</td>
								<td>{{$post->title}}</td>
								<td>{{$post->user->name}}</td>
								<td>{{$post->created_at}}</td>
								<td>{{$post->updated_at}}</td>
								<td>{{$post->description}}</td>
            <td>
              <a href="{{route('posts.show',['post' => $post->id])}}" class="btn btn-primary">details</a>
              <a href="{{route('posts.edit',['post'=>$post->id])}}" class="btn btn-success">update</a>
              <a onclick="return confirm('Are you sure you want to delete this post?')" href="{{route('posts.destroy',['post'=>$post->id])}}" class="btn btn-danger">delete</a>
            
            </td>
          </tr>
        @endforeach
         
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection