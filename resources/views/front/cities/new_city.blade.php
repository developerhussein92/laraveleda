@extends('front.layout')

@section('pagetitle')
Create New City
@endsection

@section('pagecontent')
<h1 class="display-3">New City</h1>
  <form action="/cities" method="post">

    <div class="form-group">
      <label for="ar_city_name">Arabic City Name:</label>
      <input type="text" name="ar_city_name" class="form-control">
    </div>

    <div class="form-group">
      <label for="en">English City Name :</label>
      <input type="text" name="en_city_name" class="form-control">
    </div>
   

    <button type="submit" class="btn btn-success btn-lg">Save</button>
    <a href="/cities" class="btn btn-secondary btn-lg">Back</a>
  </form>
@endsection
