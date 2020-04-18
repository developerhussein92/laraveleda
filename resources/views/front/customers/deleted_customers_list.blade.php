@extends('front.layout')

@section('pagetitle')
Deleted Customers List
@endsection

@section('pagecontent')
  <h1 class="display-2">Deleted Customer List</h1>
  <a href="/customers/restoreall" class="btn btn-success mx-3 my-3">Restore All</a>
  
  <table class="table">
    <tr>
      <th>Img</th>
      <th>Customer Name</th>
      <th>Customer Phone</th>
      <th>Customer Email</th>
      <th>Customer address</th>
      <th>Action</th>
    </tr>
    @foreach($customers as $customer)
    <tr>
      <td><img src ="/storage/images/customers/{{ $customer->cimg }}" width=40 height=40/></td>
      <td>{{ $customer->cname }}</td>
      <td>{{ $customer->cphone }}</td>
      <td>{{ $customer->cemail }}</td>
      <td>{{ $customer->caddress }}</td>
      <td>
        {{-- <a href="/customers/{{ $customer->id }}" class="btn btn-secondary">View</a> --}}
        <a href="/customers/{{ $customer->id }}/restore" class="btn btn-success">Restore</a>
      </td>
    </tr>
      @endforeach
    </table>
@endsection
