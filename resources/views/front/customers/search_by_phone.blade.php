@extends('front.layout')

@section('pagetitle')
Customers ListSearch By Phone
@endsection

@section('pagecontent')
  <h1 class="display-2">Search By Phone</h1>

  <form class="form-inline" method="post" class="form-control">
    <input type="text" name="sc" class="form-control mx-2  w-50 my-3" value="{{request('sc')}}">
    <button type="submit" class="btn btn-primary">Search</button>
    <a href="/customers" class="mx-3 my-3 btn btn-secondary">Back</a>
  </form>
  
@include('front.customers.search_results')
@endsection
