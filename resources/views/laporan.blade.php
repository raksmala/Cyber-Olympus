@extends('layouts.app')
@section('content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12" style="margin-bottom:20px;">
        <h4 class="page-title">Laporan Total</h4>
    </div>
</div>

<div class="col-lg-12">
    <div class="card-box table-responsive">
        <div style="text-align:left;">
            <div class="col-md-10" style="margin-bottom:20px;">
                <form action="" method="get" role="form" autocomplete="off">
                    <label class="col-md-4 control-label" style="text-align:right;margin-top:6px;">Periode</label>
                    <div class="col-sm-5">
                        <div class="input-daterange input-group" id="date-range">
                            <input type="text" class="form-control" name="start"/>
                            <span class="input-group-addon bg-custom b-0 text-white">s/d</span>
                            <input type="text" class="form-control" name="end"/>
                        </div>
                    </div>
                    <button type="submit" class="on-default edit-row btn btn-info" >Cari</Button>
                </form>
            </div>
        </div>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th></th>
                    <th>Order</th>
                    <th>Item</th>
                    <th>Qty</th>
                    <th>Ongkir</th>
                    <th>Discount</th>
                    <th>Pembayaran</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Total</td>
                    <td>{{ $order }}</td>
                    <td>{{ $item }}</td>
                    <td>{{ $qty }}</td>
                    <td>{{ $ongkir }}</td>
                    <td>{{ $diskon }}</td>
                    <td>{{ $pembayaran }}</td>
                </tr>         
            </tbody>
        </table>
    </div>
</div>
</div> <!-- End row -->
@endsection