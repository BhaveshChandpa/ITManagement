@extends('layout.default')

@section('content')



<div class="container  mt-3 center"> 
      

  <nav class="navbar navbar-expand-sm bg-light">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('nvr.create') }}">Do Complaint</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('nvr.index')}}">Complainted</a>
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
    <form action="{{ route('nvr.store') }}" method="post">
        @csrf

       

      <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>

@endsection

