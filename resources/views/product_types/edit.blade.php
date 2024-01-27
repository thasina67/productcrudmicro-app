@extends('product_types.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('productType/' .$product_types->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$product_types->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$product_types->name}}" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="address" id="address" value="{{product_types->description}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop