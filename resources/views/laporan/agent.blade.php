@extends('layouts.app')
@section('content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12" style="margin-bottom:20px;">
        <h4 class="page-title">Laporan Agent</h4>
    </div>
</div>

<div class="col-lg-12">
    <div class="card-box table-responsive">

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Total Profit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($agent as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->store_name }}</td>
                    <td></td><!-- Karena waktu terbatas, data didapat dengan melalui model agent dengan relasi order, lalu menjumlah seluruh harga agent dari masing" agent dan juga harga jual lalu mengurangi 2 data tersebut -->
                </tr>        
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div> <!-- End row -->
@endsection