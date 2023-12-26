@extends('layout.default')

@section('content')

 


<div class="container mt-3">    
    <h2>Add Computer Details</h2>
    <form action="{{ route('computer.update', $computer->id)}}" method="post">
        @csrf  
        @method('PUT')

    

        <div class="mb-3 mt-3 col-4">
          <label for="shed">Shed</label>
          <input type="text" value="{{ $computer->shed }}" name="shed" class="form-control" id="shed">
        </div>
     



        <div class="mb-3 mt-3 col-4">
          <label for="username">Username</label>
          <input type="text" value="{{ $computer->username }}" name="username" class="form-control" id="username">
        </div>



        <div class="mb-3 mt-3 col-4">
          <label for="ip">IP</label>
          <input type="text" value="{{ $computer->ip }}" name="ip" class="form-control" id="ip">
        </div>

        

        <div class="mb-3 mt-3 col-4">
          <label for="os_name">OS Name</label>
          <input type="text" value="{{ $computer->os_name }}" name="os_name" class="form-control" id="os_name">
        </div>



        <div class="mb-3 mt-3 col-4">
          <label for="remote_name">Remote Address</label>
          <input type="text" value="{{ $computer->remote_name }}" name="remote_name" class="form-control" id="remote_name">
        </div>



        <div class="mb-3 mt-3 col-4">
          <label for="pc_passwd">PC Password</label>
          <input type="text" value="{{ $computer->pc_passwd }}" name="pc_passwd" class="form-control" id="pc_passwd">
        </div>



        
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

@endsection

