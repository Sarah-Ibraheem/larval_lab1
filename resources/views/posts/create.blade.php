@extends('layouts.app')
@section('content')
<div class="col-md-8 order-md-1">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
      <h4 class="mb-3">Create Post Form</h4>
      <form method="POST" action="{{route('posts.store')}}" class="needs-validation" novalidate>
      @csrf
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Title</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" name="title" >
            
          </div>
        </div>

        <div class="mb-3">
          <label for="username">Description</label>
          <div class="input-group">
            <textarea class="form-control" id="username" placeholder="" name="description"></textarea>
            
          </div>
        </div>

       
          <div class="col-md-4 mb-3">
            <label for="state">Created_BY</label>
            <select name="user_id" class="custom-select d-block w-100" id="state">
              <option value="">Choose User</option>
              @foreach ($users as $user)
              <option value="{{$user->id}}" >{{$user->name}}</option>
              @endforeach
            </select>
           
          </div>
         
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">save</button>
      </form>
    </div>
  </div>

@endsection