@extends('layouts.admin')

@section('content')

@php
   $page_title = "Count Result";
   $three_class_active = "active";
   $three_one_drop_active = "block";
   $three_three_class_active = "active-tree";
@endphp



  <!-- /.content-header -->
  <p style="height: 75px"></p>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card">
        <div class="card-header" style="display:none;">
        <br>

        </div>
        <!-- /.card-header -->
        <div class="card-body" style="border-radius: 6px; border-color: #f04d23; border-style: solid;">
            <h3 style="text-decoration: underline; text-align: center;">Search Inputs</h3>

            <br>

           <div class="row" id="" style="">
             <div class="col-12 row">

               <div class="col-md-6">

                 <div class="form-group">
                 <input type="text" class="form-control" id="datepicker" name="from" data-date-format='yyyy-mm-dd' placeholder="FROM" autocomplete="off"/>
                </div>


               </div>

               <div class="col-md-6">

                 <div class="form-group">
                 <input type="text" class="form-control" id="datepicker2" name="to" data-date-format='yyyy-mm-dd' placeholder="TO" autocomplete="off"/>
                </div>

               </div>

             </div>
            <br>
           </div>


          <!-- /.row -->
          <hr style="background-color:#f04d23; margin-left: 110px; margin-right: 110px;">

          <div class="row">

            <div class="col-md-12" style="text-align: center;">
             <button name="" id="" class="btn" style="background-color:#f04d23;color:white;" >
               Search
             </button>
            </div>
        </div>
      </div>
      <!-- /.card -->


      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div></section>

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
                      <th style="background: #f04d23;color: white;">File Name</th>
                      <th style="background: #f04d23;color: white;">Audit By</th>
                      <th style="background: #f04d23;color: white;">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>25-02-2024</td>
                      <td>audit_result_file_1223232.pdf</td>
                      <td>Sophia Hamilton</td>
                      <td>
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-print"></i> Print
                        </a>
                        <a class="btn btn-success btn-sm" href="#">
                        <i class="fas fa-download">
                        </i>
                        Download
                        </a>
                      </td>

                    </tr>

                    <tr>
                        <td>1</td>
                        <td>28-01-2024</td>
                        <td>audit_result_file_43432232.pdf</td>
                        <td>Jamey Heaton</td>
                        <td>
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-print"></i> Print
                          </a>
                          <a class="btn btn-success btn-sm" href="#">
                          <i class="fas fa-download">
                          </i>
                          Download
                          </a>
                        </td>

                    </tr>

                    <tr>
                        <td>1</td>
                        <td>29-12-2023</td>
                        <td>audit_result_file_4543345.pdf</td>
                        <td>Jamey Heaton</td>
                        <td>
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-print"></i> Print
                          </a>
                          <a class="btn btn-success btn-sm" href="#">
                          <i class="fas fa-download">
                          </i>
                          Download
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
