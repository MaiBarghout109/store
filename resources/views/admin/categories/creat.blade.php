@extends('layouts.admin')
@section('content')
<div class="py-4">
<form action="{{url('categories/store')}}" method="post">
@csrf
    <div class="mb-3">
        <label for="name" class="form-label">Category name</label><p>
        <input type="text" class="form-control" id="name" name="name" placeholder="name">
    </div>


    <div class="mb-3">
        <input type="submit" value="save" class="btn btn-info">
        </div>
</form>
</div>
@endsection

