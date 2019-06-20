@extends('layouts.master')

@section('title','Contact')
    
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="well well-sm">
          <form class="form-horizontal" action="{{ url('prosescontact') }}" method="post">
            {{ csrf_field() }}
            <fieldset>
              <legend class="text-center">Contact us</legend>
      
              <!-- Name input-->
              <div class="form-group">
                <label class="col-md-3 control-label" for="name">Name</label>
                <div class="col-md-9">
                  <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                </div>
              </div>
      
              <!-- Email input-->
              <div class="form-group">
                <label class="col-md-3 control-label" for="email">Your E-mail</label>
                <div class="col-md-9">
                  <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                </div>
              </div>
      
              <!-- Message body -->
              <div class="form-group">
                <label class="col-md-3 control-label" for="message">Your message</label>
                <div class="col-md-9">
                  <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
                </div>
              </div>
      
              <!-- Form actions -->
              <div class="form-group">
                <div class="col-md-12 text-right">
                  <button type="submit" value="submit" name="action" class="btn btn-primary btn-lg">Submit</button>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
<div class="row">
  <form role="form" id="contact-form" class="form-horizontal" action={{ url('prosescontact')}}
    method="POST">
    {{csrf_field()}}
      <input type="text"name="txt1" value="">      
      <input type="text"name="txt2" value="">
      <input type="submit" value="+" name="action" class="btn main-btn">
      <input type="submit" value="-" name="action" class="btn main-btn">
      <input type="submit" value="*" name="action" class="btn main-btn">
      <input type="submit" value="/" name="action" class="btn main-btn">
      <input type="submit" value="%" name="action" class="btn main-btn">
  </form>
</div>
{{-- <div class="row">
@if (isset($response))
    {{ $response }} <br>
@endif
</div>
<br> --}}
@endsection

@section('text')
<p>footernya contact</p>
@endsection
