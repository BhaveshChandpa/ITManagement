@extends('layout.default')

@section('content')



<div class="container  mt-3 center"> 
      

  <nav class="navbar navbar-expand-sm bg-light">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('cctv.create') }}">Do Complaint</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('cctv.index')}}">Complainted</a>
        </li>
       
      </ul>
    </div>
  </nav>
 
  
  <?php 

  $month = date('m');
  $day = date('d');
  $year = date('Y');
  
  $today = $year . '-' . $month . '-' . $day;
  ?>
    <h2>Complaint form</h2>
    <form action="{{ route('cctv.store') }}" method="post">
        @csrf

      


        <div class="mb-3 mt-3 col-4">
          <label for="location">Location</label>
          <input type="text" name="location" class="form-control" id="location">
        </div>
        
        <div class="mb-3 mt-3 col-4">
          <label for="ip">Ip</label>
          <input type="text" name="ip" class="form-control" id="ip">
        </div>
    
        

        <div class="mb-3 mt-3 col-4">
          <label for="type">Types</label>
          <input type="text"  name="type" class="form-control" id="type">
        </div>


        <div class="mb-3 mt-3 col-4">
          <label for="remark">Remark</label>
          <input type="text"  name="remark" class="form-control" id="remark">
        </div>



      <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>

@endsection

