@extends('layouts.default')

@section('title', 'Contact')

@section('sidebar')
@@parent

<p>This is appended to the master sidebar.</p>
@stop

@section('content')
<div class="py-5 text-center">
  <img class="d-block mx-auto mb-4" src="{{ asset('img/contact.png') }}" alt="" height="57">
  <h2>Have some questions?</h2>
  <p class="lead">Please fill out our form, and we’ll get in touch shortly.</p>
</div>

<div class="row g-5 d-flex justify-content-centerd-flex justify-content-center">
  <div class="col-md-5 col-lg-4 order-md-last">
    <h4 class="d-flex justify-content-between align-items-center mb-3">
      <span class="text-primary">Address</span>
    </h4>
    <ul class="list-group mb-3">
      <li class="list-group-item d-flex justify-content-between lh-sm">
        <div>
          <h6 class="my-2">Golden Rule Technologies LLC</h6>
          <p>
            <small class="text-muted">
              160 Woodcutters lane<br />
              Staten Island, NY 10306<br />
              andy@GoRuleTech.com<br />
              Direct: 1-201-913-7268<br />
            </small>
          </p>
        </div>
      </li>
    </ul>
  </div>
  <div class="col-md-7 col-lg-6 mb-5">

    @if(session('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>
    @elseif(session('error'))
    <div class="alert alert-danger" role="alert">
      {{ session('error') }}
    </div>
    @endif

    <h4 class="mb-3">Your Information</h4>
    <form action="{{ url('contact/post') }}" method="post" class="needs-validation" novalidate>
      {{ csrf_field() }}
      <div class="row g-3">
        <div class="col-sm-6">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Your name" required>
          <div class="invalid-feedback">
            Valid name is required.
          </div>
        </div>

        <div class="col-sm-6">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required>
          <div class="invalid-feedback">
            Please enter a valid email address.
          </div>
        </div>

        <div class="col-12">
          <label for="message" class="form-label">Message <span class="text-muted">(Optional)</span></label>
          <textarea type="text" class="form-control" id="message" name="message" placeholder="I need information about..." rows=10></textarea>
          <div class="invalid-feedback">
            Please enter message.
          </div>
        </div>

      </div>

      <hr class="my-4">

      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="submit" class="btn btn-primary">Send</button>
        <!-- <button type="submit" class="btn btn-outline-primary">Send</button> -->
      </div>
    </form>
  </div>
</div>
<script src="{{ asset('js/form-validation.js') }}"></script>
@stop