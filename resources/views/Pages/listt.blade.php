@section('title', '| CONTACT')
@extends('main')
@section('content')
          <div class="row">
            <div class="col-md-12">
              <h1>About me</h1>
              <hr>
              <form>
                <div class="form-group">
                  <label name="email">Email: </label>
                  <input id="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                  <label name="subject">Subject: </label>
                  <input id="subject" name="subject" class="form-control">
                </div>
                <div class="form-group">
                  <label name="message">message: </label>
                  <textarea id="message" name="message" class="form-control">Type your messaage here!</textarea>
                  <input type="submit" name="Send Message" class="btn btn-success">
                </div>
              </form>
            </div>
          </div>
@endsection