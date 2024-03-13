@extends('layouts.admin')

@section('content')

@php
   $page_title = "Donations History";
   $zfiveee_class_active = "active";
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
                      <th style="background: #f04d23;color: white;">Item</th>
                      <th style="background: #f04d23;color: white;">Qty</th>
                      <th style="background: #f04d23;color: white;">Donated By</th>
                      {{-- <th style="background: #f04d23;color: white;">Actions</th> --}}
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>02-16-2024</td>
                      <td>Banana</td>
                      <td>16CS</td>
                      <td>Vamsi M</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>02-25-2024</td>
                      <td>Banana</td>
                      <td>10CS</td>
                      <td>Gokul K</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>03-09-2024</td>
                      <td>Apple Sauce IND</td>
                      <td>7CS</td>
                      <td>Vamsi M</td>
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
