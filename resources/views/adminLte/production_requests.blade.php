@extends('layouts.admin')

@section('content')

@php
  $page_title = "Production Requests";
   $fiveee_class_active = "active";
@endphp



  <!-- /.content-header -->
  <p style="height: 75px"></p>
  <!-- Main content -->


  <section class="content" id="lastFive" style="display:block;">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card">
        <div class="card-header" style="display:none;">
        <br>

        </div>
        <!-- /.card-header -->
        <div class="card-body" style="border-radius: 6px; border-color: #f04d23; border-style: solid;">


          <div class="row" id="" style="">
            <div class="col-12">

             <div class="card-body table-responsive p-0">
                <table class="table table-head-fixed" id="">
                  <thead>
                    <tr>
                      <th style="background: #f04d23;color: white;">S.No</th>
                      <th style="background: #f04d23;color: white;">Date</th>
                      <th style="background: #f04d23;color: white;">Request</th>
                      <th style="background: #f04d23;color: white;">Requested By</th>
                      <th style="background: #f04d23;color: white;">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                                        <tr>
                      <td>1</td>
                      <td>02-02-2024</td>
                      <td>production_request_file01.pdf</td>
                      <td>Yonge</td>
                      <td>
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-print"></i> Print
                        </a>
                        <a class="btn btn-success btn-sm" href="#">
                            <i class="fas fa-check"></i> Done
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash"></i> Delete
                        </a>
                      </td>

                    </tr>

                  </tbody>
                </table>
            </div>
            <!-- /.col -->

            </div>

          </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  @endsection
