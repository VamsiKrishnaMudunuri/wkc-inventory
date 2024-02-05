@extends('layouts.admin')

@section('content')

@php
   $page_title = "Add New Item";
   $six_class_active = "active";
   $six_one_drop_active = "block";
   $six_two_class_active = "active-tree";
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
                <h3 class="card-title" style="color:white;">Add Item</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Item Name</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Short Name (Max 14 Characters)</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Seller</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>JF Code</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- Select multiple-->
                      <div class="form-group">
                        <label>Unit Type</label>
                        <select class="form-control">
                          <option>SELECT</option>
                          <option>CS</option>
                          <option>CARTON</option>
                          <option>BAG</option>
                          <option>PAIL</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  {{-- <div class="row">
                    <div class="col-sm-12">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                      </div>
                    </div>
                  </div> --}}

                  <div class="row">
                    <div class="col-sm-12">
                      <!-- select -->
                      <div class="form-group">
                        <label>Category</label>
                        <select class="form-control">
                          <option>SELECT</option>
                          <option>MILK</option>
                          <option>CHEESE</option>
                          <option>YOGURT</option>
                          <option>BUTTER</option>
                          <option>VEG</option>
                          <option>FRT</option>
                          <option>EGG</option>
                          <option>OTHER</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-12">
                      <!-- Select multiple-->
                      <div class="form-group">
                        <label>Exp Alert Duration</label>
                        <select class="form-control">
                          <option>SELECT</option>
                          <option>7 Days</option>
                          <option>10 Days</option>
                          <option>30 Days</option>
                          <option>90 Days</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Upload Image</label>
                    <div class="input-group">
                    <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
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
