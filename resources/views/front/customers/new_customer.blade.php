@extends('front.layout')

@section('pagetitle')
New Customer
@endsection

@section('pagecontent')
<h1 class="display-3">New Customer</h1>
  <form action="/customers" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="cname">Customer Name:</label>
      <input type="text" name="cname" class="form-control">
    </div>
    <div class="form-group">
      <label for="cphone">Customer phone:</label>
      <input type="text" name="cphone" class="form-control">
    </div>
    <div class="form-group">
      <label for="caddress">Customer Address:</label>
      <input type="text" name="caddress" class="form-control">
    </div>
    <div class="form-group">
      <label for="cemail">Customer Email:</label>
      <input type="text" name="cemail" class="form-control">
    </div>

    <div class="form-group">
      <label for="cimg">Customer Image:</label>
      <input type="file" name="cimg" class="form-control">
    </div>



    <button type="submit" class="btn btn-success btn-lg">Save</button>
    <a href="/customers" class="btn btn-secondary btn-lg">Back</a>
  </form>
@endsection
