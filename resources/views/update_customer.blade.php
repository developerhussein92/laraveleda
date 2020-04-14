@extends('layout')

@section('pagetitle')
Update Customer
@endsection

@section('pagecontent')
<h1 class="display-3">Update Customer</h1>
  <form action="/customers/{{$customer->id}}" method="post">
  @method('put')
    <div class="form-group">
      <label for="cname">Customer Name:</label>
      <input type="text" name="cname" value="{{ $customer->cname }}" class="form-control">
    </div>
    <div class="form-group">
      <label for="cphone">Customer phone:</label>
      <input type="text" name="cphone" value="{{ $customer->cphone }}" class="form-control">
    </div>
    <div class="form-group">
      <label for="caddress">Customer Address:</label>
      <input type="text" name="caddress" value="{{ $customer->caddress }}" class="form-control">
    </div>
    <div class="form-group">
      <label for="cemail">Customer Email:</label>
      <input type="text" name="cemail" value="{{ $customer->cemail }}" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary btn-lg">Update</button>
    <a href="/customers" class="btn btn-secondary btn-lg">Back</a>
  </form>
@endsection
