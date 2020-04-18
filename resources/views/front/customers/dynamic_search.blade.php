@extends('front.layout')

@section('title')
    Dynamic Search
@endsection

@section('pagecontent')

<h3 class="display-1">Dynamic Search</h3>



<form class="form-inline" method="post" class="form-control">
    <input type="text" name="ds" class="form-control mx-2  w-50 my-3" value="{{request('ds')}}">
    
    <select name="matching" id="" class="form-control mx-3 my-3">
        <option   {{ request('matching') == 'like'?'selected':''}}  value="like">Part Match</option>
        <option   {{ request('matching') == '='?'selected':''}}  value="=">Full Match</option>
    </select> 
    <button type="submit" class="btn btn-primary">Search</button>
    <a href="/customers" class="mx-3 my-3 btn btn-secondary">Back</a>
  </form>

  @include('front.customers.search_results')
@endsection