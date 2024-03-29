@extends('admin.admin_master')
@section('admin')

    <div class="py-12">
<div class="container">
  <div class="row">

  <div class="col-md-10 float-lef">
        <div class="card">

        <h2 class="float-left border border-0"><b>Home Contact</b></h2>

</div>
</div>
<div class="col-md-2 float-right">
        <div class="card">
  <a href="{{route('add.contact')}}" class="btn btn-info btn-lg float-right ">Add</a>

  </div>
</div>
  
  <br><br>

    <div class="col-md-12">
        <div class="card">

        @if (session('success')) 
        <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ session('success') }}</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

            <div class="card-header">All Contact Data</div>
      

  <table class="table">
  <thead>
    <tr>
      <th scope="col" width="5%">SL No.</th>
      <th scope="col" width="15%">Contact Address</th>
      <th scope="col" width="20%">Contact Email</th>
      <th scope="col" width="25%">Contact Phone</th>
      <th scope="col" width="15%">Action</th>
    </tr>
  </thead>
  <tbody>
  @php($i=1)
   @foreach($contacts as $contact)
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>{{ $contact -> address }}</td>
      <td >{{ $contact -> email }}</td>
      <td >{{ $contact -> phone }}</td>
  
    
     
<td>
<a href="{{ url('slider/edit/'.$contact->id) }}" class="btn btn-info" >Edit</a>
<a href="{{ url('slider/destroy/'.$contact->id) }}" onclick="return confirm('Are you sure to Delete?')" 
class="btn btn-danger" >View</a>
</td>
    </tr>
@endforeach
  </tbody>
</table>
</div>
    </div>

    

  </div>
</div>

    
    </div> <!-- //end div for class py-12 -->
@endsection
