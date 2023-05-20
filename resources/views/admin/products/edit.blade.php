@extends('layouts.admin')
@section('content')

<div class="py-4">

    <form action="{{url('products/update/'.$product->id)}}" method="post">

        @csrf
        @method('patch')

    <div class="mb-3">
        <label for="id" class="form-label">Product id</label><p>
        <input type="id" class="form-control" id="id" name="id" placeholder="id" value="{{$product->id}}">
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Product name</label><p>
        <input type="text" class="form-control" id="name" name="name" placeholder="name" value="{{$product->name}}">
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Product price</label><p>
        <input type="number" class="form-control" id="price" name="price" placeholder="price"  value="{{$product->price}}">
    </div>

    <div class="mb-3">
        <label for="quantity" class="form-label">Quantity</label><p>
        <input type="number" class="form-control" id="quantity" name="quantity" placeholder="quantity" value="{{$product->quantity}}">
    </div>

    <div class="mb-3">
        <label for="category_id" class="form-label">Category id</label><p>
        <input type="number" class="form-control" id="number" name="number" placeholder="Category id" value="{{$product->category_id}}">
    </div>


    <div class="mb-3">
        <label for="choos_category" class="form-label"> Choos Category </label><p>
        <select class="form-control" name="category" id="category">
            <option value="{{$category_name->id}}">{{$category_name->name }}</option>

            @foreach ($categories as $category )
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach

        </select>
    </div>

    <div class="mb-3">
        <label for="details" class="form-label">Details</label>
        <textarea class="form-control" id="details" name="details" rows="3">{{$product->details}}</textarea>
    </div>

    <div class="mb-3">
        <input type="submit" value="save" class="btn btn-info">
        </div>
</form>
</div>
@endsection



