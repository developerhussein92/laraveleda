@extends('layout')

@section('title')
    Dynamic Search
@endsection

@section('pagecontent')

<h3 class="display-1">Dynamic Search</h3>



<form class="form-inline" method="post" class="form-control">
    <input type="text" name="ds" class="form-control mx-2  w-50 my-3" value="{{request('ds')}}">
    <button type="submit" class="btn btn-primary">Search</button>
    <a href="/customers" class="mx-3 my-3 btn btn-secondary">Back</a>
  </form>

@if(isset($customers))
<table class="table">
    <tr>
        <td>Customer Name</td>
        <td>Customer Phone	</td>
        <td>Customer Email</td>
        <td>Customer address</td>
        <td>Action</td>
    </tr>
    @foreach($customers as $customer)
        <tr>
        <td>{{$customer->cname}}</td>
        <td>{{$customer->cphone}}</td>
        <td>{{$customer->cemail}}</td>
        <td>{{$customer->caddress}}</td>
        <td><a href="/customers/{{$customer->id}}" class="btn btn-secondary">View</a></td>
        </tr>
    @endforeach
</table>
@endif
@endsection