@extends('layouts.admin')
@section('content')
<div class="py-4">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Product id</th>
            <th scope="col">Product name</th>
            <th scope="col">Product price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Category id</th>
            <th scope="col">Operation</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td> </td>
            <td> </td>
            <td></td>
            <td></td>
            <td>
                <a href="#" class="btn btn-danger">
                    Delete
                </a>
                <a href="#" class="btn btn-info">
                    Update
                </a>
            </td>
          </tr>
        </tbody>
      </table>
</div>
@endsection
