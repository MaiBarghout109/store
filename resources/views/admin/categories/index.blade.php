@extends('layouts.admin')
@section('content')
<div class="py-4">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>

            <th scope="col">Category name</th>
            <th scope="col">Operation</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($categories as $category )
            <tr>
                <th scope="row">1</th>
                <td>{{$category->name}} </td>

            <td>
                <a href="{{url('categories/delete'.$catigory->id)}}" class="btn btn-danger">
                    Delete
                </a>
                <a href="{{url('categories/edit'.$catigory->id)}}" class="btn btn-info">
                    Update
                </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection
