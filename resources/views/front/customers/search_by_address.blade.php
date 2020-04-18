@extends('front.layout')

@section('title')
    Search By Address
@endsection

@section('pagecontent')

<h3 class="display-1">Search By Address</h3>



<form class="form-inline" method="post" class="form-control">
    <input type="text" name="sa" class="form-control mx-2  w-50 my-3" value="{{request('sa')}}">
    <button type="submit" class="btn btn-primary">Search</button>
    <a href="/customers" class="mx-3 my-3 btn btn-secondary">Back</a>
  </form>

  @include('front.customers.search_results')
@endsection