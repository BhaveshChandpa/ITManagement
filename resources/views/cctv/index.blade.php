@extends('layout.default')

@section('content')

 
@php
$i = 0;
@endphp





<div class="container pt-5 ">


  <nav class="navbar navbar-expand-sm bg-light sidebar">
 
    
       
        <a class="btn btn-primary" role="button" href="{{ route('cctv.create') }}">Do Complaint</a>
        &nbsp;&nbsp;&nbsp;&nbsp;
      
        <a class="btn btn-secondary"  role="button" href="{{ route('cctv.index')}}">Complainted</a>
        &nbsp;&nbsp;&nbsp;&nbsp;
     
        <a class="btn btn-success"  role="button" href="{{ route('cctv.upload') }}"> Import Complaint Data </a>
        &nbsp;&nbsp;&nbsp;&nbsp;
        

        <a class="btn btn-success"  role="button" href="{{ route('export.cctvs') }}"> Export Complaint Data </a>
        
       
       
   
  </nav> 




<table class="table  table-bordered  table-striped-columns">
    
        
  
  <thead>
    <tr class="text-center">
      <th scope="col">ID</th>
      <th scope="col">Location</th>
      <th scope="col">IP</th>
      <th scope="col">Type</th>
      <th scope="col">Remark</th>
      <th scope="col">Action</button></th>
      
    </tr>
  </thead>
  @foreach ($cctv as $cctv)
  <tbody>
    <tr  class="text-center">
      <th scope="row">{{ ++$i }}</th>
      <td>{{ $cctv->location }}</td>
      <td>{{ $cctv->ip }}</td>
      <td>{{ $cctv->type }}</td>
      <td>{{ $cctv->remark }}</td>
      
  
      <td>
      <form action="{{ route('cctv.destroy' , $cctv->id) }}" method="Post">
        @csrf
        <a class="btn btn-primary" href="{{ route('cctv.edit', $cctv->id) }}">Edit</a>

       
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>

        <a class="btn btn-primary" href="{{ route('cctv.hpe', $cctv->id) }}">Switch</a>

        <a class="btn btn-primary" href="{{ route('cctv.nvr', $cctv->id) }}">Nvr</a>

      </form>


      </td>
    </tr>
    
  </tbody>
  @endforeach
</table> 




</div>
@endsection 

