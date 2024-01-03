@extends('layout.default')

@section('content')

 
<div class="container mt-3">    


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
  
    <h2>Complaint form</h2>
    <form action="{{ route('complaints.update' , $complaint->id)}}" method="post">
        @csrf
        @method('PUT')

    
        <div class="mb-3 mt-3 col-4">
          <label for="location">Location</label>
          <input type="text" name="location" class="form-control" id="location">
        </div>
        
        <div class="mb-3 mt-3 col-4">
          <label for="channel">Channel</label>
          <input type="number" name="channel" class="form-control" id="channel">
        </div>
    
        

        <div class="mb-3 mt-3 col-4">
          <label for="hdd">hdd</label>
          <input type="number"  name="hdd" class="form-control" id="hdd">
        </div>


        <div class="mb-3 mt-3 col-4">
          <label for="2tb">2TB</label>
          <input type="number"  name="2tb" class="form-control" id="2tb">
        </div>

        <div class="mb-3 mt-3 col-4">
          <label for="4tb">4TB</label>
          <input type="number"  name="4tb" class="form-control" id="4tb">
        </div>

        <div class="mb-3 mt-3 col-4">
          <label for="6tb">6TB</label>
          <input type="number"  name="6tb" class="form-control" id="6tb">
        </div>


        <div class="mb-3 mt-3 col-4">
          <label for="8tb">8TB</label>
          <input type="number"  name="8tb" class="form-control" id="8tb">
        </div>


        <div class="mb-3 mt-3 col-4">
          <label for="remark">Remark</label>
          <input type="text"  name="remark" class="form-control" id="remark">
        </div>

      <button type="submit" class="btn btn-primary">Submit</button>


    </form>
  </div>

@endsection

