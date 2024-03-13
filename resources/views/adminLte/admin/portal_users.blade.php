@extends('layouts.admin')

@section('content')

@php
   $page_title = "Portal Users";
   $four_class_active = "active";
   $four_one_drop_active = "block";
   $four_one_class_active = "active-tree";
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

                 {{-- <div class="form-group">
                 <input type="text" class="form-control" id="datepicker2" name="to" data-date-format='yyyy-mm-dd' placeholder="TO" autocomplete="off"/>
                </div> --}}

                <div class="form-group">
                    <input type="text" class="form-control" id="" name="to" placeholder="Name" autocomplete="off"/>
                   </div>

               </div>


               <div class="col-md-6">

                <div class="form-group">
                   <select class="form-control" name="product" id="product">
                       <option>User Type</option>
                       <option value="CELCOM">Receiver</option>
                       <option value="CELCOM">Admin</option>
                       <option value="CELCOM">Audit</option>
                     </select>
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
  </div>

</section>

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
                      <th style="background: #f04d23;color: white;">ID</th>
                      <th style="background: #f04d23;color: white;">Name</th>
                      <th style="background: #f04d23;color: white;">Email</th>
                      <th style="background: #f04d23;color: white;">User Type</th>
                      <th style="background: #f04d23;color: white;">Status</th>
                      <th style="background: #f04d23;color: white;">Approved By</th>
                      <th style="background: #f04d23;color: white;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Hariharan R</td>
                      <td>hariharan.ramesh@wholesomekids.ca</td>
                      <td>ADMIN</td>
                      <td>Active</td>
                      <td>Hariharan Ramesh</td>
                      <td>
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-eye"></i> Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                        <i class="fas fa-print">
                        </i>
                        Delete
                        </a>
                      </td>

                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Vamsi Mudunuri</td>
                      <td>vamsi.mudunuri@wholesomekids.ca</td>
                      <td>RECEIVER</td>
                      <td>Active</td>
                      <td>Hariharan Ramesh</td>
                      <td>
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-eye"></i> Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                        <i class="fas fa-print">
                        </i>
                        Delete
                        </a>
                      </td>

                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Jamey Heaton</td>
                      <td>jamey.heaton@wholesomekids.ca</td>
                      <td>AUDIT</td>
                      <td>Active</td>
                      <td>Hariharan Ramesh</td>
                      <td>
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-eye"></i> Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                        <i class="fas fa-print">
                        </i>
                        Delete
                        </a>
                      </td>

                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Yong Chen</td>
                      <td>yong.chen@wholesomekids.ca</td>
                      <td>REQUESTER</td>
                      <td>Active</td>
                      <td>Hariharan Ramesh</td>
                      <td>
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-eye"></i> Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                        <i class="fas fa-print">
                        </i>
                        Delete
                        </a>
                      </td>

                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Nata Taing</td>
                      <td>nata.taing@wholesomekids.ca</td>
                      <td>QA</td>
                      <td>Active</td>
                      <td>Hariharan Ramesh</td>
                      <td>
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-eye"></i> Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                        <i class="fas fa-print">
                        </i>
                        Delete
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
