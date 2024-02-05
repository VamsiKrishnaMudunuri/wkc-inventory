@extends('layouts.admin')

@section('content')

@php
   $page_title = "Adjust Inventory";
   $four_class_active = "active";
   $four_one_drop_active = "block";
   $four_five_class_active = "active-tree";
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
                   <select class="form-control" name="product" id="product">
                     <option>Area</option>
                     <option value="CELCOM">Freezer</option>
                     <option value="CELCOM">Fridge</option>
                     <option value="CELCOM">Dry Snacks</option>
                     <option value="CELCOM">Dry Utensils</option>
                   </select>
                 </div>




               </div>

               <div class="col-md-6">

                 <div class="form-group">
                    <select class="form-control" name="product" id="product">
                        <option>Category</option>
                        <option value="CELCOM">Milk</option>
                        <option value="CELCOM">Cheese</option>
                        <option value="CELCOM">Yogurt</option>
                        <option value="CELCOM">Veg</option>
                        <option value="CELCOM">FRT</option>
                        <option value="CELCOM">Others</option>
                      </select>
                </div>

               </div>

             </div>
            <br>
           </div>

           <div class="col-md-6">

            {{-- <div class="form-group">
            <input type="text" class="form-control" id="datepicker2" name="to" data-date-format='yyyy-mm-dd' placeholder="TO" autocomplete="off"/>
           </div> --}}

           <div class="form-group">
               <input type="text" class="form-control" id="" name="to" placeholder="JF Code" autocomplete="off"/>
              </div>

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
                      <th style="background: #f04d23;color: white;">JF Code</th>
                      <th style="background: #f04d23;color: white;">Item</th>
                      <th style="background: #f04d23;color: white;">System Count</th>
                      <th style="background: #f04d23;color: white;">Present Count</th>
                      <th style="background: #f04d23;color: white;">Remarks</th>
                      <th style="background: #f04d23;color: white;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                                        <tr>
                      <td>1</td>
                      <td>1004</td>
                      <td>Milk - 2%</td>
                      <td><input type="text" class="form-control" id="" name="to" value="370 BAGS" autocomplete="off" disabled/></td>
                      <td><input type="text" class="form-control" id="" name="to" placeholder="" autocomplete="off"/></td>
                      <td><input type="text" class="form-control" id="" name="to" placeholder="" autocomplete="off"/></td>
                      <td>
                        <a class="btn btn-info btn-sm" href="#">
                        <i class="fas fa-upload">
                        </i>
                        Update
                        </a>
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-eye"></i> View
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
