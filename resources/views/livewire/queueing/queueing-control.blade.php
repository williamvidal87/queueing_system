<div>
    <body id="page-top">
    
        <!-- Page Wrapper -->
        <div id="wrapper">
    
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
    
                <!-- Main Content -->
                <div id="content">
                <br><br><br><br><br>
                    <!-- Begin Page Content -->
                    <div class="container-fluid">
    
                        <!-- Content Row -->
                        <div class="row">
                            
                            <div class="col-lg-4 mb-4">
                            </div>
                            <div class="col-lg-4 mb-4">
    
                                <!-- Illustrations -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Queueing Control</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-center">
                                                <span style="color: #000000;font-family:Arial, Helvetica, sans-serif;font-size: 97pt;"><strong>
                                                <div wire:poll>
                                                    C{{ $show_serving_number->id ?? '0' }}
                                                </div>
                                                </strong></span>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                        <a class="btn btn-warning btn-icon-split" wire:click='recall'>
                                            <span class="icon text-white-50">
                                                <i class="fas fa-undo"></i>
                                            </span>
                                            <span class="text">Recall Number</span>
                                        </a>
                                        <a class="btn btn-secondary btn-icon-split" wire:click='next'>
                                            <span class="icon text-white-50">
                                                <i class="fas fa-arrow-right"></i>
                                            </span>
                                            <span class="text">Next Number</span>
                                        </a>
                                        </div>
                                    </div>
                                </div>
    
    
                            </div>
                            <div class="col-lg-4 mb-4">
                            </div>
                            
                        </div>
    
                    </div>
                    <!-- /.container-fluid -->
                    <br><br><br><br><br><br><br><br><br>
                </div>
                <!-- End of Main Content -->
    
            </div>
            <!-- End of Content Wrapper -->
    
    
        </div>
        <!-- End of Page Wrapper -->
    
    </body>
</div>
