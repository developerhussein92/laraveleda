@extends('front.layout')

@section('pagetitle')
    View Customer Profile
@endsection

@section('pagecontent')
<h1>Customer Profile</h1>
<ul>
    <li>Customer Name: {{ $customer->cname }}</li>
    <li>Customer Phone: {{ $customer->cphone }}</li>
    <li>Customer Address: {{ $customer->caddress }}</li>
    <li>Customer Email: {{ $customer->cemail }}</li>
</ul>
<a href="/customers/{{ $customer->id }}/edit" class="btn btn-primary">Edit</a>
<form action="/customers/{{$customer->id}}/delete" method="post" style="display:inline-block;" class="form-inline">
@method('DELETE')
    <button class="btn btn-danger" type="submit">Delete</button>
</form>
<a href="/customers" class="btn btn-secondary">Back</a>

@endsection