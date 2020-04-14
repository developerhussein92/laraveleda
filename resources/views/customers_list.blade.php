@extends('layout')

@section('pagetitle')
Customers List
@endsection

@section('pagecontent')
  <h1 class="display-2">Customer List</h1>
  <a href="/customers/create" class="btn btn-success mt-2 mb-2">Create New</a>
  <table class="table">
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
@endsection
