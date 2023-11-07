@extends('layout.app')

@section('title')
INVENTORY
@endsection

@section('content')

<div class="card my-4">
    <form action="{{ route('save')}}" method="POST">
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="col mb-3">
                    <label for="p_name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" name="p_name" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" name="description" required>
                </div>
                <div class="col mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" name="price" required>
                </div>
                <div class="col mb-3">
                    <label for="quantityinstock" class="form-label">Quantity Stock</label>
                    <input type="number" class="form-control" name="quantityinstock" required>
                </div>
                <div class="col mb-3 d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-primary">ADD</button>
                </div>
            </div>
        </div>
    </form>
</div>
<table class="table table-hover text-center">
    <thead class="table-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Product Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity Stock</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

            @foreach ($products as $product)
                <tr>
                    <th>{{$product->product_id}}</th>
                    <td>{{$product->p_name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->quantityinstock}}</td>
                    <td>
                        <button type="button" class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
                        <button type="button" class="btn btn-danger"> <i class="bi bi-trash"></i></button>
                    </td>
                </tr>
        @endforeach

    </tbody>
</table>
@endsection 