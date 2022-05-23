@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 {{ __('Service Detail') }}
 </div>
 <div class="card-body">
 Id : {{ $service->id }}
 <br>
 Type : {{ $service->type }}
 <br>
 Name : {{ $service->name }}
 <br>
 Address : {{ $service->address }}
 <br>
 Cost : {{ $service->cost }}
 <br>
 Postedate : {{ $service->postedate }}
 <br>
 <br>
 </div>
 </div>
 </div>
 </div>
</div>
<div class="container ">
 <div class="col-md-8">
 <a class="btn btnsuccess" href="{{ route('Service/list') }}" role="button"> {{ __('Back') }}</a>
 </div>
</div>
@endsection
