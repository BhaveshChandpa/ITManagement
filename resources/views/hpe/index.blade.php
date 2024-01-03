@extends('layout.default')

@section('content')

 
@php
$i = 0;
@endphp





<div class="container pt-5 ">


  <nav class="navbar navbar-expand-sm bg-light sidebar">
 
    
       
        <a class="btn btn-primary" role="button" href="{{ route('hpe.create') }}">Do Complaint</a>
      
        &nbsp;&nbsp;&nbsp;&nbsp;

        <a class="btn btn-secondary"  role="button" href="{{ route('hpe.index')}}">Complainted</a>
        &nbsp;&nbsp;&nbsp;&nbsp;
      

        <a class="btn btn-success"  role="button" href="{{ route('hpe.upload') }}"> Import   Complaint Data </a>

        &nbsp;&nbsp;&nbsp;&nbsp;

        <a class="btn btn-success"  role="button" href="{{ route('export.hpes') }}"> Export Complaint Data </a>
       
       
   
  </nav> 








  

<table class="table table-bordered  table-striped-columns">
    
        
  
    <thead class="text-center">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Location</th>
        <th scope="col">IP</th>
        <th scope="col">Total Port</th>
        <th scope="col">Computer</th>
        <th scope="col">CCTV</th>
        <th scope="col">Uplink</th>
        <th scope="col">Remark</th>
        <th scope="col">Action</button></th>
        
      </tr>
    </thead>
    @foreach ($hpe as $hpe)
    <tbody>
      <tr class="text-center">
        <th scope="row">{{ ++$i }}</th>
        <td>{{ $hpe->location }}</td>
        <td>{{ $hpe->ip }}</td>
        <td>{{ $hpe->total_port }}</td>
        <td>{{ $hpe->computer }}</td>
        <td>{{ $hpe->cctv }}</td>
        <td>{{ $hpe->uplink }}</td>
        <td>{{ $hpe->remark }}</td>
        
    
        <td>
        <form action="{{ route('hpe.destroy' , $hpe->id) }}" method="Post">
          @csrf
          <a class="btn btn-primary" href="{{ route('hpe.edit', $hpe->id) }}">Edit</a>

          
          

         
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>

          <a class="btn btn-primary" href="{{ route('hpe.nvr', $hpe->id) }}">NVR</a>

          <a class="btn btn-primary" href="{{ route('hpe.cctv', $hpe->id) }}">CCTV</a>

        </form>

        </td>
      </tr>
      
    </tbody>
    @endforeach
  </table> 

</div>
@endsection

