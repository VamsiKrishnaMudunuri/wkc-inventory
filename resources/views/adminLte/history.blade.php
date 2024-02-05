@extends('layouts.admin')

@section('content')

@php
   $page_title = "Activities";
   $seven_class_active = "active";
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

                 <div class="form-group">
                   <select class="form-control" name="product" id="product">
                     <option>Activity Type</option>
                     <option value="CELCOM">IN</option>
                     <option value="CELCOM">OUT</option>
                     <option value="CELCOM">PICKUP</option>
                     <option value="CELCOM">Disposed</option>
                   </select>
                 </div>

               </div>

               <div class="col-md-6">

                 <div class="form-group">
                 <input type="text" class="form-control" id="datepicker2" name="to" data-date-format='yyyy-mm-dd' placeholder="TO" autocomplete="off"/>
                </div>

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
                      <th style="background: #f04d23;color: white;">Date & Time</th>
                      <th style="background: #f04d23;color: white;">JF Code</th>
                      <th style="background: #f04d23;color: white;">Item</th>
                      <th style="background: #f04d23;color: white;">Quantity</th>
                      <th style="background: #f04d23;color: white;">Action</th>
                      <th style="background: #f04d23;color: white;">Entry By</th>
                      <th style="background: #f04d23;color: white;">Requester</th>
                      <th style="background: #f04d23;color: white;">LOT#</th>
                      <th style="background: #f04d23;color: white;">More</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>02-02-2024 10:30:28</td>
                      <td>1004</td>
                      <td>Milk - 2%</td>
                      <td>370 BAGS</td>
                      <td><button style="background-color:green;color:white;
                        border-radius: 0.25rem;border: 1px solid transparent;">IN</button></td>
                      <td>Vamsi</td>
                      <td> - </td>
                      <td> 02-02-2024 </td>
                      <td><button name="" id="" class="btn" style="background-color:#f04d23;color:white;" >
                        VIEW
                      </button></td>

                    </tr>
                    <tr>
                      <td>2</td>
                      <td>02-02-2024 12:07:37</td>
                      <td>1004</td>
                      <td>Mini Carrots</td>
                      <td>2 CS</td>
                      <td><button style="background-color:orange;color:white;
                        border-radius: 0.25rem;border: 1px solid transparent;">OUT</button></td>
                      <td>Vamsi</td>
                      <td>Yonge</td>
                      <td>01-02-2024</td>
                      <td><button name="" id="" class="btn" style="background-color:#f04d23;color:white;" >
                        VIEW
                      </button></td>

                    </tr>
                    <tr>
                      <td>2</td>
                      <td>02-02-2024 12:07:37</td>
                      <td>1004</td>
                      <td>Spinach</td>
                      <td>2 CS</td>
                      <td><button style="background-color:red;color:white;
                        border-radius: 0.25rem;border: 1px solid transparent;">Disposed</button></td>
                      <td>Vamsi</td>
                      <td> - </td>
                      <td>02-02-2024</td>
                      <td><button name="" id="" class="btn" style="background-color:#f04d23;color:white;" >
                        VIEW
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
