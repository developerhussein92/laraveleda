@extends('front.layout')

@section('title')
    Search By Selected Fields
@endsection

@section('pagecontent')

<h3 class="display-1">Search By Selected Fields</h3>



<form class="form-inline" method="post" class="form-control">
    <input type="text" name="sf" class="form-control mx-2  w-50 my-3 " value="{{request('sf')}}"> In
    <select name="field" id="" class="form-control mx-3 my-3">
        <option   {{ request('field') == 'cname'?'selected':''}}  value="cname">Name</option>
        <option   {{ request('field') == 'cphone'?'selected':''}}  value="cphone">Phone</option>
        <option   {{ request('field') == 'caddress'?'selected':''}}   value="caddress">Address</option>
        <option   {{ request('field') == 'cemail'?'selected':''}}  value="cemail">Email</option>    
    </select> 
    <button type="submit" class="btn btn-primary mx-3 my-3">Search</button>
    <a href="/customers" class="mx-3 my-3 btn btn-secondary">Back</a>
  </form>

  @include('front.customers.search_results')
@endsection