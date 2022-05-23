@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">{{ __('PLEACE FILL property INFORMATION ') }}</div>
 <div class="card-body">
 <form method="POST" action="{{ route('/Service/register') }}"
>
 @csrf
 <div class="form-group row">
 <label for="type" class="col-md-4 col-formlabel text-md-right">{{ __('Type') }}</label>
 <div class="col-md-6">
 <input id="type" type="text" class="formcontrol @error('type') isinvalid @enderror" name="type" value="{{ old('type') }}" required autocomplete="
 type" autofocus>
 @error('type')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 @csrf
 <div class="form-group row">
 <label for="name" class="col-md-4 col-formlabel text-md-right">{{ __('Name') }}</label>
 <div class="col-md-6">
 <input id="name" type="text" class="formcontrol @error('name') isinvalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="
 name" autofocus>
 @error('name')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="address" class="col-md-4 col-formlabel text-md-right">{{ __('Address') }}</label>
 <div class="col-md-6">
 <input id="address" type="text" class="formcontrol @error('address') isinvalid @enderror" name="address" value="{{ old('address') }}" required autocomplete
="address">
 @error('address')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="cost" class="col-md-4 col-formlabel text-md-right">{{ __('Cost') }}</label>
 <div class="col-md-6">
 <input id="cost" type="text" class="formcontrol @error('cost') isinvalid @enderror" name="cost" value="{{ old('cost') }}" required autocomplete
="cost">
 @error('cost')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="postedate" class="col-md-4 col-formlabel text-md-right">{{ __('Postedate') }}</label>
 <div class="col-md-6">
 <input id="postedate" type="text" class="formcontrol @error('postedate') isinvalid @enderror" name="postedate" value="{{ old('postedate') }}" required autocomplete
="postedate">
 @error('postedate')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row mb-0">
 <div class="col-md-6 offset-md-4">
 <button type="submit" class="btn btn-primary">
 {{ __('Register') }}
 </button>
 </div>
 </div>
 </form>
 </div>
 </div>
 </div>
 </div>
</div>
@endsection