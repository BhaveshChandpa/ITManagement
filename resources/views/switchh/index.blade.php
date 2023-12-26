@extends('layout.default')

@section('content')

 
@php
$i = 0;
@endphp





<div class="container pt-5 ">


  <nav class="navbar navbar-expand-sm bg-light sidebar">
 
    
       
        <a class="btn btn-primary" role="button" href="{{ route('switch.create') }}">Do Complaint</a>
      
        <a class="btn btn-secondary"  role="button" href="{{ route('switch.index')}}">Complainted</a>
      
        {{-- <a class="btn btn-success"  role="button" href="{{ route('export.switch') }}"> Export Complaint Data </a> --}}
       
       
   
  </nav> 

{{-- 

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
    @foreach ($switches as $switch)
    <tbody>
      <tr>
        <th scope="row">{{ ++$i }}</th>
        <td>{{ $switch->department }}</td>
        <td>{{ $switch->problem }}</td>
        <td>{{ $switch->types_of_maintenance }}</td>
        <td>{{ $switch->complaint_date }}</td>
        <td>{{ $switch->complaint_by }}</td>
        <td>{{ $switch->maintenance_require }}</td>
        <td>{{ $switch->edp_maintenance_supervisor }}</td>
        <td>{{ $switch->maintained_by }}</td>
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
  </table> --}}

</div>
@endsection

