@extends('layout.default')

@section('content')



<div class="container  mt-3 center"> 
      

  <nav class="navbar navbar-expand-sm bg-light">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('hpe.create') }}">Do Complaint</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('hpe.index')}}">Complainted</a>
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
    <form action="{{ route('hpe.store') }}" method="post">
        @csrf


        <div class="mb-3 mt-3 col-4">
          <label for="location">Location</label>
          <input type="text" name="location" class="form-control" id="location">

        </div>


        <div class="mb-3 mt-3 col-4">
          <label for="ip">IP</label>
          <input type="Number" name="ip" class="form-control" id="ip">

        </div>


        <div class="mb-3 mt-3 col-4">
          <label for="total_port">Total Port</label>
          <input type="Number" name="total_port" class="form-control" id="total_port">

        </div>




        <div class="mb-3 mt-3 col-4">
          <label for="computer">Computer</label>
          <input type="Number" name="computer" class="form-control" id="computer">

        </div>




        <div class="mb-3 mt-3 col-4">
          <label for="cctv">CCTV</label>
          <input type="Number" name="cctv" class="form-control" id="cctv">

        </div>


        <div class="mb-3 mt-3 col-4">
          <label for="uplink">Uplink</label>
          <input type="Number" name="uplink" class="form-control" id="uplink">

        </div>

        <div class="mb-3 mt-3 col-4">
          <label for="remark">Remark</label>
          <input type="text" name="remark" class="form-control" id="remark">

        </div>



      <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>

@endsection

