@extends('layouts.app')

@section('title', $viewData["title"])

@section('subtitle', $viewData["subtitle"])

@section('content')

<div class="card mb-3">

<div class="row g-0">

<div class="col-md-4">

<img src="https://laravel.com/img/logotype.min.svg" class="img-fluid rounded-start">

</div>

<div class="col-md-8">

<div class="card-body">

<h5 class="card-title">

{{ $viewData["user"]["name"] }}

</h5>

<p class="card-text">{{ $viewData["user"]["email"] }}</p>

<p class="card-text">{{ $viewData["user"]["phoneNumber"] }}</p>

<p class="card-text">{{ $viewData["user"]["address"] }}</p>

<p class="card-text">{{ $viewData["user"]["paymentMethod"] }}</p>

<p class="card-text">{{ $viewData["user"]["postalCode"] }}</p>

<p class="card-text">{{ $viewData["user"]["country"] }}</p>


<a href="{{ route('user.delete', ['id'=> $viewData["id"]]) }}"

class="btn bg-primary text-white">delete </a>

</div>

</div>

</div>

</div>

@endsection