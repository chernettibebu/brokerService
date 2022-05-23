@extends('layouts.app')
@section('content')
<div class="container pb-2">
</div>
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 {{ __('THIS IS THE LIST OF AVAILABE SERVICES') }}
 </div>
 <div class="card-body">
 <table class="table table-striped table-bordered ">
 <thead class="thead-inverse">
 <tr>
 <th>
ID
 </th>
 <th>
 TYPE
 </th>
<th>
 NAME
 </th>
<th>
 ADDRESS
 </th>
 <th>
 COST
 </th>
 <th>
  POSTEDATE
</th>
 </tr>
 </thead>
 <tbody>
 @foreach($service as $service)
 <tr>
 <td> {{ $service->id }}</td>
 <td> {{ $service->type }}</td>
 <td> {{ $service->name }}</td>
 <td> {{ $service->address }}</td>
 <td> {{ $service->cost }}</td>
 <td> {{ $service->postedate }}</td>
 <td>
 </td>
 </tr>
@endforeach
 </tbody>
 </table>
 </div>
 </div>
 </div>
 </div>
</div>
@endsection

