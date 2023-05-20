@extends('layouts.admin')
@section('content')
<div class="py-4">
<form action="" method="post">
    <div class="mb-3">
        <label for="id" class="form-label">Product id</label><p>
        <input type="id" class="form-control" id="id" name="id" placeholder="id">
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Product name</label><p>
        <input type="text" class="form-control" id="name" name="name" placeholder="name">
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Product price</label><p>
        <input type="number" class="form-control" id="price" name="price" placeholder="price">
    </div>

    <div class="mb-3">
        <label for="quantity" class="form-label">Quantity</label><p>
        <input type="number" class="form-control" id="quantity" name="quantity" placeholder="quantity">
    </div>

    <div class="mb-3">
        <label for="category_id" class="form-label">Category id</label><p>
        <input type="number" class="form-control" id="number" name="number" placeholder="Category id">
    </div>


    <div class="mb-3">
        <label for="choos_category" class="form-label"> Choos Category </label><p>
        <select class="select-control" name="category" id="category">

            <option value="#">   </option>

            @foreach ($categories as $category )
            <option value="{{ $category->id }}"> {{ $category->name }} </option>
            @endforeach


        </select>
    </div>

    <div class="mb-3">
        <label for="details" class="form-label">Details</label>
        <textarea class="form-control" id="details" name="details" rows="3"></textarea>
    </div>

    <div class="mb-3">
        <input type="submit" value="save" class="btn btn-info">
        </div>
</form>
</div>
@endsection

