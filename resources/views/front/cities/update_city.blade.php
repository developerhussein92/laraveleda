@extends('front.layout')

@section('pagetitle')
Update City
@endsection

@section('pagecontent')
<h1 class="display-3">Update City</h1>
  <form action="/cities/{{$city->id}}/update" method="post">
    @method('put')
    <div class="form-group">
      <label for="ar_city_name">Arabic City Name:</label>
    <input type="text" name="ar_city_name" class="form-control" value="{{$city->ar_city_name}}">
    </div>

    <div class="form-group">
      <label for="en">English City Name :</label>
      <input type="text" name="en_city_name" class="form-control" value="{{$city->en_city_name}}"> 
    </div>
   

    <button type="submit" class="btn btn-success btn-lg">Save</button>
    <a href="/cities" class="btn btn-secondary btn-lg">Back</a>
  </form>
@endsection
