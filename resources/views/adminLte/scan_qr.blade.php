@extends('layouts.admin')

@section('content')

@php
   $page_title = "Scan QR";
   $one_class_active = "active";
@endphp
<style>

/* .container {
    width: 100%;
    max-width: 500px;
    margin: 5px;
} */

.container h1 {
    color: #ffffff;
}

.section {
    background-color: #ffffff;
    padding: 50px 30px;
    border: 1.5px solid #b2b2b2;
    border-radius: 0.25em;
    box-shadow: 0 20px 25px rgba(0, 0, 0, 0.25);
}

#my-qr-reader {
    padding: 20px !important;
    border: 1.5px solid #b2b2b2 !important;
    border-radius: 8px;
}

#my-qr-reader img[alt="Info icon"] {
    display: none;
}

#my-qr-reader img[alt="Camera based scan"] {
    width: 100px !important;
    height: 100px !important;
}

button {
    padding: 10px 20px;
    border: 1px solid #b2b2b2;
    outline: none;
    border-radius: 0.25em;
    color: white;
    font-size: 15px;
    cursor: pointer;
    margin-top: 15px;
    margin-bottom: 10px;
    background-color: #008000ad;
    transition: 0.3s background-color;
}

button:hover {
    background-color: #008000;
}

#html5-qrcode-anchor-scan-type-change {
    text-decoration: none !important;
    color: #1d9bf0;
}

video {
    width: 100% !important;
    border: 1px solid #b2b2b2 !important;
    border-radius: 0.25em;
}
</style>
<p style="height: 75px"></p>
<section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card">
        <div class="card-header" style="display:none;">
        <br>

        </div>
        <!-- /.card-header -->
        <div class="card-body" style="border-radius: 6px; border-color: #f04d23; border-style: solid;">
            <h3 style="text-decoration: underline; text-align: center;">Scan QR / Enter JF Code</h3>

            <br>



             <div class="row">

                <div class="col-md-12" style="text-align: center;">
                    <div class="container">
                    <div class="section">
                        <div id="my-qr-reader">
                        </div>
                    </div>
                    <p style="height: 50px"></p>
                    <div class="form-group section">
                        <label for="inputName">JF Code</label>
                        <input type="text" id="inputName" class="form-control">
                        <button name="" id="" class="btn" style="background-color:#f04d23;color:white;" >
                            Search
                            </button>
                    </div>

                    </div>
                </div>
            </div>
         </div>
      <!-- /.card -->


      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

</section>
  <!-- /.content-header -->

  <!-- Main content -->

    {{-- <div class="container">
        <h1>Scan QR Codes</h1>
        <div class="section">
            <div id="my-qr-reader">
            </div>
        </div>
    </div> --}}
    <script
        src="https://unpkg.com/html5-qrcode">
    </script>
    <script src="/script.js"></script>



<script>
function domReady(fn) {
    if (
        document.readyState === "complete" ||
        document.readyState === "interactive"
    ) {
        setTimeout(fn, 1000);
    } else {
        document.addEventListener("DOMContentLoaded", fn);
    }
};

domReady(function () {

    // If found you qr code
    function onScanSuccess(decodeText, decodeResult) {
        alert("You Qr is : " + decodeText, decodeResult);
    }

    let htmlscanner = new Html5QrcodeScanner(
        "my-qr-reader",
        { fps: 10, qrbos: 250 }
    );
    htmlscanner.render(onScanSuccess);
});

</script>


  @endsection
