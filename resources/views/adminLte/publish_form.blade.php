@extends('layouts.admin')

@section('content')

@php
   $page_title = "Publish New";
   $two_class_active = "active";
@endphp
  <!-- /.content-header -->
<p style="height: 75px"></p>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-3"> </div>
        <div class="col-md-6">
            <!-- general form elements disabled -->
            <div class="card" >
              <div class="card-header"style="background-color: #f04d23">
                <h3 class="card-title" style="color:white;">General Elements</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Subject</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-12">
                      <!-- select -->
                      <div class="form-group">
                        <label>User Type</label>
                        <select class="form-control">
                          <option>SELECT</option>
                          <option>ALL</option>
                          <option>MERCHANTS</option>
                          <option>CUSTOMERS</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-12">
                      <!-- Select multiple-->
                      <div class="form-group">
                        <label>ATX Portals</label>
                        <select multiple="" class="form-control">
                          <option>SELECT</option>
                          <option>ALL</option>
                          <option>GOPAY</option>
                          <option>MYPOSPAY</option>
                          <option>KISS</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <button type="button" class="btn btn-block btn-lg" style="background-color: #f04d23; color:white;">SEND</button>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
          </div>

        </div>
    </div><!-- /.container-fluid -->
  </section>

  @endsection
