@extends('product_types.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Product Type Page</div>
  <div class="card-body">
      
      <form action="{{ url('productType') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="description" id="description" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop