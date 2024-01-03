@extends('layout.default')

@section('content')

 
<div class="container mt-3">    


  <nav class="navbar navbar-expand-sm bg-light">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('complaints.create') }}">Do Complaint</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('complaints.index')}}">Complainted</a>
        </li>
       
      </ul>
    </div>
  </nav>
  
    <h2>Complaint form</h2>
    <form action="{{ route('complaints.update' , $complaint->id)}}" method="post">
        @csrf
        @method('PUT')

    
        <div class="mb-3 mt-3 col-4">
          <label for="number">No</label>
          <input type="typeNumber" name="no" value="{{ $complaint->no }}" class="form-control" id="number">

        </div>


        <div class="mb-3 mt-3 col-4">
          <label for="department">Department</label>
          <input type="text" name="department" value="{{ $complaint->department }}" class="form-control" id="department">
        </div>
        
        <div class="mb-3 mt-3 col-4">
          <label for="problem">Problem</label>
          <input type="text" name="problem" value="{{ $complaint->problem}}"  class="form-control" id="problem">
        </div>
    
        

        <div class="mb-3 mt-3 col-4">
          <label for="types_of_maintenance">Types Of Maintenance</label>
          <input type="text" name="types_of_maintenance" value="{{ $complaint->types_of_maintenance }}" class="form-control" id="types_of_maintenance">
        </div>


        <div class="mb-3 mt-3 col-4">
          <label for="complaint_date">Complaint Date</label>
          <input type="date" name="complaint_date" value="{{$complaint->complaint_date}}" class="form-control" id="complaint_date">
        </div>


        <div class="mb-3 mt-3 col-4">
          <label for="maintained_by">Complaint By</label>
          <input type="text" name="maintained_by" value="{{ $complaint->maintained_by }}" class="form-control" id="complaint_by">
        </div>


        <select class="form-select mb-3 mt-3 col-2" name="maintenance_require"  aria-label="Default select example">
          <option selected>Maintenance Require</option>
          <option value="1"> no </option>
          <option value="2"> yes </option>
          
        </select>

        <div class="mb-3 mt-3 col-4">
          <label for="edp_maintenance_supervisor">Edp Supervisor</label>
          <input type="text" name="edp_maintenance_supervisor" class="form-control"  value="{{ $complaint->edp_maintenance_supervisor }}" id="edp_maintenance_supervisor">
        </div>


        <select class="form-select mb-3 mt-3 col-1" name="complaint_by" aria-label="Default select example">
          <option selected>Complainted By</option>
          
          <option value="1">jaysukhbhai</option>
          <option value="2">vishal</option>
          <option value="3">jayesh</option>
          <option value="3">bhavesh</option>
          <option value="3">sapna</option>
          <option value="3">janki</option>
      
        </select>
      


      <div class="mb-3 mt-3 col-2">
        <label for="completed_at">Completed At</label>
        <input type="date" name="completed_at" value="{{ $complaint->completed_at }}" class="form-control" id="completed_at">
     
      </div>

      <div class="mb-3 mt-3 col-2">
        <label for="remark">Remark</label>
        <input type="text" name="remark" class="form-control" value="{{ $complaint->remark}}" id="remark">
     
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>


    </form>
  </div>

@endsection

