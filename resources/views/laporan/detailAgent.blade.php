@extends('layouts.app')
@section('content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12" style="margin-bottom:20px;">
        <h4 class="page-title">Laporan Customer Order Agent</h4>
    </div>
</div>

<div class="col-lg-12">
    <div class="card-box table-responsive">
        <div style="text-align:left;">
            <div class="col-md-10" style="margin-bottom:20px;">
                <form action="" method="get" role="form" autocomplete="off">
                {{ csrf_field() }}
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
                    <th>No</th>
                    <th>Invoice ID</th>
                    <td>Agent Name</th>
                    <th>Total Item</th>
                    <th>Total Qty</th>
                    <th>Payment Total</th>
                    <th>Payment Final</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td cellspan="2">Total</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>  
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>        
            </tbody>
        </table>
    </div>
</div>
</div> <!-- End row -->
@endsection