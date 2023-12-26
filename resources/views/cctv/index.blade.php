@extends('layout.default')

@section('content')

 
@php
$i = 0;
@endphp





<div class="container pt-5 ">


  <nav class="navbar navbar-expand-sm bg-light sidebar">
 
    
       
        <a class="btn btn-primary" role="button" href="{{ route('cctv.create') }}">Do Complaint</a>
      
        <a class="btn btn-secondary"  role="button" href="{{ route('cctv.index')}}">Complainted</a>
      
        <a class="btn btn-success"  role="button" href="{{ route('export.complaints') }}"> Export Complaint Data </a>
       
       
   
  </nav> 


</div>
@endsection

