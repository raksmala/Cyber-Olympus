@extends('layouts.app')
@section('content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12" style="margin-bottom:20px;">
        <h4 class="page-title">Laporan Top 10</h4>
    </div>
</div>

<div class="col-lg-12">
    <div class="card-box table-responsive">
        <a>TOP 10 Product</a>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Product Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($product as $p)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $p->product_name }}</td>
                </tr>        
                @endforeach
            </tbody>
        </table>

        <a>TOP 10 Customer</a>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Customer Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customer as $c)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $c->address }}</td><!-- Karena waktu terbatas, saya menampilkan alamatnya saja -->
                </tr>        
                @endforeach      
            </tbody>
        </table>

        <a>TOP 10 Agent</a>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Agent Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($agent as $a)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $a->store_name }}</td>
                </tr>        
                @endforeach       
            </tbody>
        </table>
    </div>
</div>
</div> <!-- End row -->
@endsection