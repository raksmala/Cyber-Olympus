@extends('layouts.app')
@section('content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Product</h4>
    </div>
    <div class="col-sm-4" style="margin-top:10px;margin-bottom:20px;">
        <form action="/product" method="get" role="form" autocomplete="off">
            <select class="selectpicker" name="category" data-style="btn-default">
                @foreach ($category as $cat)
                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-success waves-effect waves-light" style="margin-top:10px;">Select Category</button>
        </form>
    </div>
</div>

<div class="col-lg-12">
    <div class="card-box table-responsive">

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Type</th>
                    <th>Item</th>
                    <th>Price Sell</th>
                    <th>Price Agent</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($product as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->product_name }}</td>
                    <td>{{ $data->cat->name }}</td>
                    <td>{{ $data->type }}</td>
                    <td>{{ $data->item }}</td>
                    <td>{{ $data->price_sell }}</td>
                    <td>{{ $data->price_agent }}</td>
                    <td>{{ $data->description }}</td>
                </tr> 
                @endforeach       
            </tbody>
            {{ $product->links() }}
        </table>
    </div>
</div>
</div> <!-- End row -->
@endsection