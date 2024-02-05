@extends('layouts.admin')

@section('content')

@php
   $page_title = "Items List";
   $six_class_active = "active";
   $six_one_drop_active = "block";
   $six_one_class_active = "active-tree";
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
                 <input type="text" class="form-control" id="datepicker" name="from" data-date-format='yyyy-mm-dd' placeholder="FROM" autocomplete="off"/>
                </div> --}}

                 <div class="form-group">
                   <select class="form-control" name="product" id="product">
                     <option>SELECT</option>
                     <option value="CELCOM">Milk</option>
                     <option value="CELCOM">Cheese</option>
                     <option value="CELCOM">Butter</option>
                     <option value="CELCOM">Yogurt</option>
                     <option value="CELCOM">Veg</option>
                     <option value="CELCOM">Frt</option>
                     <option value="CELCOM">Egg</option>
                     <option value="CELCOM">Others</option>
                   </select>
                 </div>

               </div>

               <div class="col-md-6">

                 {{-- <div class="form-group">
                 <input type="text" class="form-control" id="datepicker2" name="to" data-date-format='yyyy-mm-dd' placeholder="TO" autocomplete="off"/>
                </div> --}}

                <div class="form-group">
                    <input type="text" class="form-control" id="" name="to" placeholder="JF Code" autocomplete="off"/>
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
                      <th style="background: #f04d23;color: white;">JF Code</th>
                      <th style="background: #f04d23;color: white;">Item Name</th>
                      <th style="background: #f04d23;color: white;">Provider</th>
                      <th style="background: #f04d23;color: white;">Qty</th>
                      <th style="background: #f04d23;color: white;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                                        <tr>
                      <td>1</td>
                      <td>1004</td>
                      <td>Milk 2%</td>
                      <td>Raid's Dairy</td>
                      <td>BAG</td>
                      <td><button name="" id="" class="btn" style="background-color:#f04d23;color:white;" >
                        EDIT
                        </button></td>

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
