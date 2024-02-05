@extends('layouts.admin')

@section('content')

@php
   $page_title = "Make An Entry";
   $seven_class_active = "active";
@endphp
<p style="height: 50px"></p>
  <!-- Main content -->


<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">2% Milk</h1>
        </div><!-- /.col -->
        {{-- <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
          </ol>
        </div><!-- /.col --> --}}
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section>
    <div class="col-md-12">

        <div class="card card-info">
        <div class="card-header">
        <h3 class="card-title">Total Quantity <b style="color: red;">150</b> Bags</h3>
        <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
        <i class="fas fa-minus"></i>
        </button>
        </div>
        </div>
        <div class="card-body p-0">
        <table class="table">
        <thead>
        <tr>
        <th>Expiry Date</th>
        <th>Quantity</th>
        {{-- <th></th> --}}
        </tr>
        </thead>
        <tbody>
        <tr>
        <td>11/10/2023</td>
        <td>100 Bags</td>
        <td class="text-right py-0 align-middle">
        {{-- <div class="btn-group btn-group-sm">
        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
        </div> --}}
        </td>
        </tr><tr>
        <td>11/08/2023</td>
        <td>50 Bags</td>
        <td class="text-right py-0 align-middle">
        <div class="btn-group btn-group-sm">
        {{-- <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a> --}}
        </div>
        </td>
        </tr></tbody>
        </table>
        </div>

        </div>

        </div>
  </section>
  <section class="content">

    <div class="row">
    <div class="col-md-6">
    <div class="card card-primary collapsed-card">
    <div class="card-header">
    <h3 class="card-title">Inventory In</h3>
    <div class="card-tools">
    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
    <i class="fas fa-plus"></i>
    </button>
    </div>
    </div>
    <div class="card-body" style="display: none;">
        <div class="form-group">
            <label>Date:</label>
            <div class="input-group date" id="reservationdate" data-target-input="nearest">
            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate">
            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
            </div>
        </div>
    <div class="form-group">
    <label for="inputName">Quantity</label>
    <input type="text" id="inputName" class="form-control">
    </div>
    <div class="form-group">
        <label>Expiry Date:</label>
        <div class="input-group date" id="reservationdate" data-target-input="nearest">
        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate">
        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
        </div>
        </div>
    </div>
    <a href="#" class="btn btn-secondary">ADD</a>
    </div>
    </div>
    </div>



    <div class="col-md-6">
        <div class="card card-primary collapsed-card">
        <div class="card-header">
        <h3 class="card-title">Inventory Out</h3>
        <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
        <i class="fas fa-plus"></i>
        </button>
        </div>
        </div>
        <div class="card-body" style="display: none;">
            <div class="form-group">
                <label>Date:</label>
                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate">
                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
                </div>
            </div>
            <div class="form-group">
                <label>Expiry Date:</label>
                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate">
                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
                </div>
            </div>
            <div class="form-group">
            <label for="inputName">Quantity</label>
            <input type="text" id="inputName" class="form-control">
            </div>
            {{-- <div class="form-group">
            <label for="inputName">Lot Code</label>
            <input type="text" id="inputName" class="form-control">
            </div> --}}
            <div class="form-group">
            <label for="inputName">REQUESTER</label>
                <select class="form-control" name="product" id="product">
                    <option>SELECT</option>
                    <option value="CELCOM">YONGE</option>
                    <option value="CELCOM">KIKI</option>
                    <option value="CELCOM">SHUBA</option>
                </select>
            </div>
            <a href="#" class="btn btn-secondary">OUT</a>
        </div>

        </div>

    </div>

        <div class="col-md-6">
            <div class="card card-primary collapsed-card">
            <div class="card-header">
            <h3 class="card-title">Picked Up Inventory</h3>
            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-plus"></i>
            </button>
            </div>
            </div>
            <div class="card-body" style="display: none;">
                <div class="form-group">
                    <label>Date:</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate">
                    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                    </div>
                </div>
                <div class="form-group">
                <label for="inputName">Quantity</label>
                <input type="text" id="inputName" class="form-control">
                </div>
                <div class="form-group">
                <label for="inputName">Lot Code</label>
                <input type="text" id="inputName" class="form-control">
                </div>
                <div class="form-group">
                <label for="inputName">REQUESTER</label>
                    <select class="form-control" name="product" id="product">
                        <option>SELECT</option>
                        <option value="CELCOM">YONGE</option>
                        <option value="CELCOM">KIKI</option>
                        <option value="CELCOM">SHUBA</option>
                    </select>
                </div>
                <div class="form-group">
                <label for="inputName">PICKED UP BY</label>
                <input type="text" id="inputName" class="form-control">

                </div>
                <a href="#" class="btn btn-secondary">ADD</a>
            </div>

            </div>

            </div>

    <div class="col-md-6">
    <div class="card card-secondary collapsed-card">
    <div class="card-header">
    <h3 class="card-title">Dispose</h3>
    <div class="card-tools">
    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
    <i class="fas fa-plus"></i>
    </button>
    </div>
    </div>
    <div class="card-body" style="display: none;">
        <div class="form-group">
            <label>Date:</label>
            <div class="input-group date" id="reservationdate" data-target-input="nearest">
            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate">
            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
            </div>
        </div>
        <div class="form-group">
        <label for="inputName">QUANTITY</label>
        <input type="text" id="inputName" class="form-control">
        </div>
        <div class="form-group">
        <label for="inputName">Lot Code</label>
        <input type="text" id="inputName" class="form-control">
        </div>

        <div class="form-group">
            <label for="inputName">SELECT ITEM</label>
                <select class="form-control" name="product" id="product">
                    <option>SELECT</option>
                    <option value="CELCOM">APPLE</option>
                    <option value="CELCOM">YOGURT</option>
                    <option value="CELCOM">MILK</option>
                </select>
            </div>
        <div class="form-group">
        <label for="inputName">APPROVED BY</label>
            <select class="form-control" name="product" id="product">
                <option>SELECT</option>
                <option value="CELCOM">HARIHARAN RAMESH</option>
                <option value="CELCOM">ALAN TONG</option>
            </select>
        </div>

        <div class="form-group">
            <label for="inputName">DISPOSED BY</label>
                <select class="form-control" name="product" id="product">
                    <option>SELECT</option>
                    <option value="CELCOM">VAMSI</option>
                    <option value="CELCOM">GOKUL</option>
                    <option value="CELCOM">MINAZ</option>
                    <option value="CELCOM">ALFRED</option>
                    <option value="CELCOM">DENNIS</option>
                    <option value="CELCOM">ALIREZA</option>
                </select>
            </div>
        <div class="form-group">
        <label for="inputName">REASON</label>
        <input type="text" id="inputName" class="form-control">

        </div>
        <a href="#" class="btn btn-secondary">DISPOSE</a>
    </div>

    </div>

    </div>
    </div>
    <div class="row">
    <div class="col-12">
    {{-- <a href="#" class="btn btn-secondary">Cancel</a> --}}
    {{-- <input type="submit" value="Create new Project" class="btn btn-success float-right"> --}}
    </div>
    </div>
    </section>

  @endsection
