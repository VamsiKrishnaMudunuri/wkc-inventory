@extends('layouts.admin')

@section('content')

@php
   $page_title = "Approval Team";
   $four_class_active = "active";
   $four_one_drop_active = "block";
   $four_four_class_active = "active-tree";
@endphp


  <!-- /.content-header -->
<p style="height: 75px"></p>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->@extends('layouts.admin')

@section('content')




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

             </div>
                <br>
                </div>


                <!-- /.row -->
                <hr style="background-color:#f04d23; margin-left: 110px; margin-right: 110px;">

             <div class="row">

                <div class="col-md-12" style="text-align: center;">
                <button name="" id="" class="btn" style="background-color:#f04d23;color:white;" >
                Search
                </button> | <button name="" id="" class="btn" style="background-color:#28a745;color:white;" >
                    <i class="fas fa-plus"></i>ADD
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
                      <th style="background: #f04d23;color: white;">Department</th>
                      <th style="background: #f04d23;color: white;">Added By</th>
                      <th style="background: #f04d23;color: white;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                                        <tr>
                      <td>1</td>
                      <td>Hariharan Ramesh</td>
                      <td>Inventory Coordinator</td>
                      <td>Alan</td>
                      <td>
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-pencil-alt"></i> Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                        <i class="fas fa-trash">
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

