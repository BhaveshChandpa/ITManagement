@extends('layout.default')

@section('content')

<div class="container mt-3">    
  <h2>Add Computer Details</h2>
  <form action="{{ route('computer.store')}}" method="post">
      @csrf  

  

      <div class="mb-3 mt-3 col-4">
        <label for="shed">Shed</label>
        <input type="text"  name="shed" class="form-control" id="shed">
      </div>
   



      <div class="mb-3 mt-3 col-4">
        <label for="username">Username</label>
        <input type="text"  name="username" class="form-control" id="username">
      </div>



      <div class="mb-3 mt-3 col-4">
        <label for="ip">IP</label>
        <input type="text"  name="ip" class="form-control" id="ip">
      </div>

      

      <div class="mb-3 mt-3 col-4">
        <label for="os_name">OS Name</label>
        <input type="text" name="os_name" class="form-control" id="os_name">
      </div>



      <div class="mb-3 mt-3 col-4">
        <label for="remote_name">Remote Address</label>
        <input type="text"  name="remote_name" class="form-control" id="remote_name">
      </div>



      <div class="mb-3 mt-3 col-4">
        <label for="pc_passwd">PC Password</label>
        <input type="text"  name="pc_passwd" class="form-control" id="pc_passwd">
      </div>



      
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>


@endsection

