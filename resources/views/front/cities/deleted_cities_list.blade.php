@extends('front.layout')

@section('pagetitle')
Deleted Cities List
@endsection

@section('pagecontent')
  <h1 class="display-2">Deleted city List</h1>
  <a href="/cities" class="mx-2 my-3 btn btn-secondary">Back</a>
  <a href="/cities/restoreall" class="mx-2 my-3 btn btn-warning">Restore All</a>
  <a href="/cities/forcedelete" class="mx-2 my-3 btn btn-danger">Empty Recycled</a>
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
         
        <a href="/cities/{{$city->id}}/restore" class="mx-2  btn btn-success">restore</a>
        <a href="/cities/{{$city->id}}/forcedelete" class="mx-2  btn btn-danger">Delete From Recycled</a>
        {{-- <form action="/cities/{{$city->id}}/delete" class="form-inline" method="post">
          @method('DELETE')
          <button class=" mx-2 btn btn-danger" type="submit">Delete From Recycled</button>
        </form> --}}


        </div>
        
      </td>
    </tr>
      @endforeach
    </table>
@endsection
