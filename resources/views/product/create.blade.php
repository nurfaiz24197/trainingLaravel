@extends('layouts.app')
@section('header')
<h4>Product</h4>
@endsection



@section('content')
<form action="{{ route('product.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name ="name">
@error('name')
<span class="invalid-feeback" role=alert>
    <strong>{{ $message }} </strong>
</span>
@enderror
    </div>
    <div class="mb-3">
        <label for="desc" class="form-label">Desc</label>
        <input type="text" class="form-control @error('desc') is-invalid @enderror" id="desc" name ="desc">
  @error('desc')
  <span class="invalid-feeback" role=alert>
      <strong>{{ $message }} </strong>
  </span>
  @enderror
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name ="price" aria-describedby="emailHelp">
  @error('price')
  <span class="invalid-feeback" role=alert>
      <strong>{{ $message }} </strong>
  </span>
  @enderror
      </div>
      <div class="mb-3">
        <label for="stock" class="form-label">Stock</label>
        <input type="text" class="form-control @error('stock') is-invalid @enderror" id="stock" name ="stock" aria-describedby="emailHelp">
  @error('stock')
  <span class="invalid-feeback" role=alert>
      <strong>{{ $message }} </strong>
  </span>
  @enderror
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
