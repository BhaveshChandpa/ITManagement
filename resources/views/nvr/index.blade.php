@extends('layout.default')

@section('content')

 
@php
$i = 0;
@endphp





<div class="container pt-5 ">
  

  <nav class="navbar navbar-expand-sm bg-light sidebar">
 
    
       
        <a class="btn btn-primary" role="button" href="{{ route('nvr.create') }}">Do Complaint</a>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <a class="btn btn-secondary"  role="button" href="{{ route('nvr.index')}}">Complainted</a>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <a class="btn btn-success"  role="button" href="{{ route('nvr.upload') }}"> Import Complaint Data </a>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <a class="btn btn-success"  role="button" href="{{ route('export.nvrs') }}"> Export Complaint Data </a>
       
       
   
  </nav> 

  <br>



<table class="table table-bordered  table-striped-columns">
    
        
  
    <thead class="text-center">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Location</th>
        <th scope="col">IP</th>
        <th scope="col">Channel</th>
        <th scope="col">HDD</th>
        <th scope="col">Storage</th>
        <th scope="col">2 TB</th>
        <th scope="col">6 TB</th>
        <th scope="col">8 TB</th>
        <th scope="col">10 TB</th>
        <th scope="col">Remark</th>
        <th  scope="col">Action</button></th>
        
      </tr>
    </thead>
    @foreach ($nvr as $nvr)
    <tbody>
      <tr class="text-center">
        <th scope="row">{{ ++$i }}</th>
        <td>{{ $nvr->location }}</td>
        <td>{{ $nvr->ip }}</td>
        <td>{{ $nvr->channel }}</td>
        <td>{{ $nvr->hdd }}</td>
        <td>{{ $nvr->storage }}</td>
        <td>{{ $nvr->two_tb }}</td>
        <td>{{ $nvr->six_tb }}</td>
        <td>{{ $nvr->eight_tb }}</td>
        <td>{{ $nvr->ten_tb }}</td>
        <td>{{ $nvr->remark }}</td>
        
    
        <td>
        <form action="{{ route('nvr.destroy' , $nvr->id) }}" method="Post">
          @csrf
          {{-- <a class="btn btn-primary" href="{{ route('nvr.edit', $nvr->id) }}">Edit</a> --}}

         
          @method('DELETE')
          <button type="submit" class="btn btn-danger ">Delete</button>

          <a class="btn btn-primary" href="{{ route('nvr.hpe', $nvr->id) }}">Switch</a>

          <a class="btn btn-primary" href="{{ route('nvr.cctv', $nvr->id) }}">CCTV</a>

        </form>

        </td>
      </tr>
      
    </tbody>
    @endforeach
  </table> 








</div>
@endsection

