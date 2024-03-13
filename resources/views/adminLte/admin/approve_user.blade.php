@extends('layouts.admin')

@section('content')

@php
   $page_title = "Approve User";
   $four_class_active = "active";
   $four_one_drop_active = "block";
   $four_two_class_active = "active-tree";
@endphp


  <!-- /.content-header -->
<p style="height: 75px"></p>
  <!-- Main content -->


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
                      <th style="background: #f04d23;color: white;">Assign User Type</th>
                      <th style="background: #f04d23;color: white;">Registered On</th>
                      <th style="background: #f04d23;color: white;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                                        <tr>
                      <td>1</td>
                      <td>Gokul Krishnan</td>
                      <td>gokul.krishnan@wholesomekids.ca</td>
                      <td>
                        <select class="form-control" name="product" id="product">
                            <option>Select</option>
                            <option value="CELCOM">Admin</option>
                            <option value="CELCOM">Audit</option>
                            <option value="CELCOM">Receiver</option>
                            <option value="CELCOM">Requester</option>
                          </select>
                      </td>
                      <td>25-08-2020 16:30:28</td>
                      <td>
                        <a onclick="saveDetails()" class="btn btn-success btn-sm" href="#">
                            <i class="fas fa-check"></i> Approve
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                        <i class="fas fa-ban">
                        </i>
                        Reject
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
  <script>

    function saveDetails(){
        Swal.fire({
        title: "Are you sure?",
        text: "You want to approve the user?",
        type: "question",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, approve!"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                title: "Approved!",
                text: "New user has been added.",
                icon: "success"
                });
            }
        });

    };
        </script>
  @endsection
