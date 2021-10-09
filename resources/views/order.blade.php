@extends('layouts.app')
@section('content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12" style="margin-bottom:20px;">
        <h4 class="page-title">Order</h4>
    </div>
</div>

<div class="col-lg-12">
    <div class="card-box table-responsive">

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Invoice ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Agent Name</th>
                    <th>Total Item</th>
                    <th>Total Qty</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order as $data)
                <tr>
                    <td>{{ $data->order->invoice_id }}</td>
                    <td>{{ $data->order->name }}</td>
                    <td>{{ $data->order->address }}</td>
                    <td>{{ $data->order->agent->store_name }}</td>
                    <td>1</td>
                    <td>{{ $data->qty }}</td>
                </tr>  
                @endforeach      
            </tbody>
            {{ $order->links() }}
        </table>
    </div>
</div>
</div> <!-- End row -->
@endsection