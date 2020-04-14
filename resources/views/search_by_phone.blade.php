@extends('layout')

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
  
@if(isset($customers))
  <table class="table mt-4">
    <tr>
      <th>Customer Name</th>
      <th>Customer Phone</th>
      <th>Customer Email</th>
      <th>Customer address</th>
      <th>Action</th>
    </tr>
    @foreach($customers as $customer)
    <tr>
      <td>{{ $customer->cname }}</td>
      <td>{{ $customer->cphone }}</td>
      <td>{{ $customer->cemail }}</td>
      <td>{{ $customer->caddress }}</td>
      <td>
        <a href="/customers/{{ $customer->id }}" class="btn btn-secondary">View</a>
        
      </td>
    </tr>
      @endforeach
    </table>
@endif
@endsection
