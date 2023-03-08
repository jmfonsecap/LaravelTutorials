@extends('layouts.app')

@section("title", $viewData["title"])

@section('content')

<div class="container">

<div class="row justify-content-center">

<div class="col-md-8">

<div class="card">

<div class="card-header">Create user</div>

<div class="card-body">

@if($errors->any())

<ul id="errors" class="alert alert-danger list-unstyled">

@foreach($errors->all() as $error)

<li>{{ $error }}</li>

@endforeach

</ul>

@endif

<form method="POST" action="{{ route('user.save') }}">

@csrf

<input type="text" class="form-control mb-2" placeholder="Enter name" name="name" value="{{ old('name') }}" />

<input type="text" class="form-control mb-2" placeholder="Enter email" name="email" value="{{ old('email') }}" />



<input type="text" class="form-control mb-2" placeholder=
"Enter phone number" name="phoneNumber" value="{{ old('phoneNumber') }}" />

<input type="text" class="form-control mb-2" placeholder="Enter address" name="address" value="{{ old('address') }}" />

<datalist id="card payment options">
  <option value="Cash">
  <option value="Credit card">
  <option value="Debit card">
</datalist>

<input list="card payment options" class="form-control mb-2" placeholder="Enter payment method"
name="paymentMethod" value="{{ old('paymentMethod') }}"/>

<input type="text" class="form-control mb-2" placeholder="Enter country" name="country" value="{{ old('country') }}" />

<input type="text" class="form-control mb-2"
placeholder="Enter postal code" name="postalCode" value="{{ old('postalCode') }}" />

<input type="submit" class="btn btn-primary" value="Send" />

</form>

</div>

</div>

</div>

</div>

</div>

</div>

@endsection