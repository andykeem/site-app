@extends('layouts.default')

@section('title', 'About')

@section('sidebar')
@@parent

<p>This is appended to the master sidebar.</p>
@stop

@section('content')
<div class="d-flex justify-content-sm-center">
  <div class="col-sm-8">
    <h1 class="mt-5">About Us</h1>
    <p class="lead">
      Golden Rule Technologies is the sales, service and parts supplier for Delta Diemaking machines in North America.
      We are committed to providing our customers with the highest level of service.
    </p>
    <p>
      Please contact Andy Park at
      <a href="tel:+12019137268">+1 (201) 913-7268</a> or
      <a href="mailto:andy@GoRuleTech.com">andy@GoRuleTech.com</a>
    </p>
    <p>
      <img src="{{ asset('img/product/Delta-JET-1611.jpg') }}" class="img-fluid" alt="" />
    </p>
  </div>
</div>
@stop