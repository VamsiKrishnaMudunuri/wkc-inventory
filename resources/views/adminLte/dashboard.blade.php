@extends('layouts.admin')

@section('content')

@php
   $page_title = "Dashboard";
   $two_class_active = "active";
@endphp

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Alert!</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<section class="content">

    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-12 col-12">

        <div class="card">
        <div class="card-header">
        <h3 class="card-title">Fridge</h3>
        <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
        <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
        <i class="fas fa-times"></i>
        </button>
        </div>
        </div>
        <div class="card-body">
        Items below are going to expire soon. Please take required aaction.

        <table class="table table-striped">
            <thead>
            <tr>
            <th style="width: 10px">JF Code</th>
            <th>Item</th>
            <th>Expiry Date</th>
            <th>Received On</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <td>1267</td>
            <td>Vanilla Yogurt</td>
            <td>03/15/2024</td>
            <td>03/07/2024</td>
            </tr>
            <tr>
            <td>2013</td>
            <td>Veg -  Spinach Baby 10 lb</td>
            <td>03/19/2024</td>
            <td>03/10/2024</td>
            </tr>
            <tr>
            <td>1105</td>
            <td>Cheese - Mozzarella, Shredded</td>
            <td>03/22/2024</td>
            <td>03/02/2024</td>
            </tr>
            <tr>
            <td>5670</td>
            <td>2% Milk</td>
            <td>03/23/2024</td>
            <td>03/12/2024</td>
            </tr>
            <tr>
            <td>1006</td>
            <td>Cheese - Cheddar Sliced 21g</td>
            <td>03/27/2024</td>
            <td>03/01/2024</td>
            </tr>
            <tr>
            <td>2090</td>
            <td>Apple Sauce IND</td>
            <td>03/31/2024</td>
            <td>03/02/2024</td>
            </tr>
            </tbody>
            </table>
        </div>

        {{-- <div class="card-footer">
            <a href="javascript:window.print();">Print Page</a>

        </div> --}}

        </div>

        </div>
        </div>
        </div>
</section>

  @endsection
