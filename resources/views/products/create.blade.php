@extends('products.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Product Page</div>
  <div class="card-body">
      
      <form action="{{ url('product') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Price</label></br>
        <input type="numbere" name="price" id="price" class="form-control"></br>
        <label>Quantity</label></br>
        <input type="number" name="quantity" id="quantity" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop