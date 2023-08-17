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
                                        <h6 class="m-0 font-weight-bold text-primary">Upload Video</h6>
                                    </div>
                                    <div class="card-body">
                                        <center>
                                            <video autoplay muted loop id="myVideo">
                                                <source src="video/norsuvideo.mp4" type="video/mp4">
                                            </video>
                                        </center>
                                        <form wire:submit.prevent="store" enctype="multipart/form-data">
                                            <div class="mb-3">
                                                <label for="videos" class="form-label">Video Type</label>
                                                <input type="file" id="videos" class="form-control" wire:model="videos" multiple>
                                                @error('videos.*') <span class="error">{{ $message }}</span> @enderror
                                            </div>
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </form>
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
