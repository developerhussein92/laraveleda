@extends('front.layout')

@section('title')
    Search By Name
@endsection

@section('pagecontent')

<h3 class="display-1">Search By Name</h3>



<form class="form-inline" method="post" class="form-control">
    <input type="text" name="sn" class="form-control mx-2  w-50 my-3" value="{{request('sn')}}">
    <button type="submit" class="btn btn-primary">Search</button>
    <a href="/customers" class="mx-3 my-3 btn btn-secondary">Back</a>
  </form>

  @include('front.customers.search_results')
@endsection