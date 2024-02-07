@extends('layouts.admin')

@section('content')

@php
   $page_title = "Items List";
   $six_class_active = "active";
   $six_one_drop_active = "block";
   $six_one_class_active = "active-tree";
@endphp

<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <div class="container-login100">
        <div class="wrap-login100" style="margin-top:-50px;">
            <form class="login100-form" id="loginForm">
                @csrf
                <label style="margin-top: 14px; margin-bottom: 0px;font-size: 18px; color:#f04d23;">Full Name</label>
                <div class="wrap-input100">
                    <input class="input100" id="userName" type="text" class="form-control" name="userName" value="{{ old('userName') }}" autocomplete="" autofocus>
                    {{-- <span class="focus-input100" data-placeholder="User Name"></span> --}}

                </div>
                <label style="margin-top: 14px; margin-bottom: 0px;font-size: 18px; color:#f04d23;">Email ID</label>
                <div class="wrap-input100">
                    <input class="input100" id="userName" type="text" class="form-control" name="userName" value="{{ old('userName') }}" autocomplete="" autofocus>
                    {{-- <span class="focus-input100" data-placeholder="User Name"></span> --}}

                </div>

                <div class="wrap-input100" data-validate="Enter password" autocomplete="off">
                <label style="margin-bottom: 0px;font-size: 18px; color:#f04d23;">Password</label>
                    <input class="input100" id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
                    {{-- <span class="focus-input100" data-placeholder="Password"></span> --}}

                </div>

                <div class="wrap-input100" data-validate="Enter password" autocomplete="off">
                <label style="margin-bottom: 0px;font-size: 18px; color:#f04d23;">Confirm Password</label>
                    <input class="input100" id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
                    {{-- <span class="focus-input100" data-placeholder="Password"></span> --}}

                </div>



                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <a href="/approve_user" class="login100-form-btn"  style="background-color: #f04d23;">
                            Register
                        </a>
                    </div>
                </div>

            </form>

        </div>

    </div>
    </div>

</div>
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
                      {{-- <td><button name=""   id="myBtn" class="btn" style="background-color:#f04d23;color:white;" >
                        EDIT
                        </button></td> --}}
                        <td>
                            <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal" style="background-color:#f04d23;color:white;">
                                EDIT
                              </button>
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
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">1004 - Milk 2%</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div style="text-align: center;">
                <img src="{{ asset('/images/milk.jpeg') }}" alt="">
            </div>
            <div>
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
                         <label for="exampleInputFile">Exp Alert Duration</label>

                              <div class="form-group">
                                  <div class="input-group mb-3">
                                      <input type="text" class="form-control">
                                      <div class="input-group-append">
                                          <span class="input-group-text">DAY'S</span>
                                      </div>
                                  </div>
                              </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                        <!-- Select multiple-->
                         <label for="exampleInputFile">Min Quantity Alert</label>

                              <div class="form-group">
                                  <div class="input-group mb-3">
                                      <input type="text" class="form-control">
                                      <div class="input-group-append">
                                          <span class="input-group-text">CS</span>
                                      </div>
                                  </div>
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
                 </form>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Update</button>
        </div>
      </div>
    </div>
  </div>

<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
      modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    </script>
    <!--===============================================================================================-->
	<script src="/vendor/jquery/jquery-3.2.1.min.js"></script>

    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.0/cjs/popper.min.js"></script>-->
        <script src="/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->

        <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!--===============================================================================================-->
        <script src="/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->


    <!--===============================================================================================-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js">

    // <!--===============================================================================================-->
        <script src="/js/main.js"></script>
        </script>



    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>

  @endsection
