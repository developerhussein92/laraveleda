@extends('front.layout')

@section('pagetitle')
Cities List
@endsection

@section('pagecontent')
  <h1 class="display-2">city List</h1>
  <a href="/cities/create" class="btn btn-success mt-2 mb-2">Create New</a>
  <table class="table">
    <tr>
      <th>City Id</th>
      <th>Ar City Name</th>
      <th>En City Name</th>
      <th>Action</th>
     
    </tr>
    @foreach($cities as $city)
    <tr>
    
      <td>{{ $city->id }}</td>
      <td>{{ $city->en_city_name }}</td>
      <td>{{ $city->ar_city_name }}</td>
    
      <td>
        
        <div class="row">
          <a href="/cities/{{ $city->id }}/edit" class="mx-2  btn btn-primary">Edit</a>

        <form action="/cities/{{$city->id}}/delete" class="form-inline" method="post">
          @method('DELETE')
          <button class=" mx-2 btn btn-danger" type="submit">Delete</button>
        </form>

        </div>
        
      </td>
    </tr>
      @endforeach
    </table>
@endsection
