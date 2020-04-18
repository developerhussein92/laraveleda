@if(isset($customers))
  <table class="table mt-4">
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
      <td><img src="/storage/images/customers/{{ $customer->cimg }}" width=40 height=40/></td>
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