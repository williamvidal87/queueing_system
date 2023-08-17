<div>
    <style>

        body {
        background-image: url("img/norsubackground.jpg");
        background-color: #000000;
        background-position: center; /* Center the image */
        background-repeat: no-repeat; /* Do not repeat the image */
        background-size: cover; /* Resize the background image to cover the entire container */
        }
        #myVideo {
        right: 0;
        bottom: 0;
        min-width: 100%; 
        min-height: 100%;
        }
        

</style>
    <!-- Page Wrapper -->
    
    <body id="page-top">
        <div id="wrapper">
            <!-- Begin Page Content -->
            <div class="container-fluid">
            <div class="row">
                <div wire:poll>
                        <span style="color: #ffffff;font-family:Arial, Helvetica, sans-serif;font-size: 63pt;-webkit-text-stroke: 5px rgb(0, 0, 0);font-weight: 550;"><strong>{{ now()->format('d/m/y h:i A') }}</strong></span>
                </div>
            </div>
    
                <!-- Content Row -->
                <div class="row">
    
                    <!-- Area Chart -->
                    <div class="col-xl-8 col-lg-7">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <center>
                                    <video autoplay muted loop id="myVideo">
                                        <source src="video/norsuvideo.mp4" type="video/mp4">
                                    </video>
                                </center>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
                    
                    
                    <!-- Pie Chart -->
                    <div class="col-xl-4 col-lg-5">
                        <div class="card shadow mb-4">
                            <!-- Card Body -->
                            <div class="card-body" style="text-align: center;">
                                <span style="color: black;font-family:Arial, Helvetica, sans-serif;font-size: 55pt;"><strong>NOW<br>SERVING</strong></span>
                                <br>
                                <div style="width: auto;border: 10px solid black;padding: 0px;position:center">
                                    <span style="color: #4CAF50;font-family:Arial, Helvetica, sans-serif;font-size: 97pt;"><strong>
                                    <div wire:poll='next_queue'>
                                    C{{ $show_serving_number->id ?? '0' }}
                                    </div>
                                    </strong></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
    
            </div>
        </div>
        <!-- End of Page Wrapper -->
        <footer style="
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        text-align: center;">
                <span style="color: #000000;font-family:Arial, Helvetica, sans-serif;font-size: 40pt;-webkit-text-stroke: 1px rgb(255, 255, 255);font-weight: 550;"><strong><marquee>{{ $this->message }}</strong></span></marquee>
        </footer>
    </body>
</div>



@section('custom_script')
    @include('layouts.scripts.queue-display-scripts'); 
@endsection