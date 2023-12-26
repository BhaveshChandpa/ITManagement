@extends('layout.default')

@section('content')

 
@php
$i = 0;
@endphp





<div class="container pt-5 ">


  <nav class="navbar navbar-expand-sm bg-light sidebar">
 
    
       
        <a class="btn btn-primary" role="button" href="{{ route('complaints.create') }}">Do Complaint</a>
      
        <a class="btn btn-secondary"  role="button" href="{{ route('complaints.index')}}">Complainted</a>
      
        <a class="btn btn-success"  role="button" href="{{ route('export.complaints') }}"> Export Complaint Data </a>
       
        <a class="btn btn-success"  role="button" href="{{ route('complaint.upload') }}"> Import Complaints Data </a>

       
   
  </nav> 



<table class="table table-bordered table-hover  table-dark text-center ">
    
        
  
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Department</th>
        <th scope="col">Problem</th>
        <th scope="col">Types Of Maintenance</th>
        <th scope="col">Complaint Date</th>
        <th scope="col">Complaint By</th>
        <th scope="col">Maintenance Require</th>
        <th scope="col">Edp Supervisor</th>
        <th scope="col">Complainted By</th>
        <th scope="col">Completed At</th>
        <th scope="col">Remark</th>
        <th scope="col">Action</button></th>
        
      </tr>
    </thead>
    @foreach ($complaints as $complaint)
    <tbody>
      <tr>
        <th scope="row">{{ ++$i }}</th>
        <td>{{ $complaint->department }}</td>
        <td>{{ $complaint->problem }}</td>
        <td>{{ $complaint->types_of_maintenance }}</td>
        <td>{{ $complaint->complaint_date }}</td>
        <td>{{ $complaint->complaint_by }}</td>
        <td>{{ $complaint->maintenance_require }}</td>
        <td>{{ $complaint->edp_maintenance_supervisor }}</td>
        <td>{{ $complaint->maintained_by }}</td>
        <td>{{ $complaint->completed_at }}</td>
        <td>{{ $complaint->remark }}</td>
        
    
        <td>
        <form action="{{ route('complaints.destroy' , $complaint->id) }}" method="Post">
          @csrf
          <a class="btn btn-primary" href="{{ route('complaints.edit', $complaint->id) }}">Edit</a>

         
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>

        </td>
      </tr>
      
    </tbody>
    @endforeach
  </table>

</div>
@endsection

