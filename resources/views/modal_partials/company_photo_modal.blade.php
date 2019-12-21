<style>
        .modal-content {
            background-color: #1c2331b8 !important;
            color: whitesmoke;
        }
    
    
        .form-control {
            color: whitesmoke !important;
        }
    
    </style>
    <div class="modal fade  mt-5" id="company_photo_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
        <div class="modal-dialog modal-lg  custom-primary" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold custom-secondary-text">Upload New Photo</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <form id="photo_upload" enctype="multipart/form-data">
                        @csrf
                        <div id="id">
    
                        </div>
    
                        <div class="md-form col-12 ml-auto">
    
                            <div class="file-field">
                                <div class="btn custom-secondary btn-sm float-left">
                                    <span>Choose file</span>
                                    <input type="file" name="attachement">
                                </div>
                                <div class="file-path-wrapper">
                                    <input id="attachement" class="file-path validate" type="text" placeholder="Upload your file">
                                </div>
                            </div>
    
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="submit" class="btn btn-rounded custom-secondary">Upload <i class="fas fa-paper-plane-o ml-1"></i></button>
                        </div>
                    </form>
    
                </div>
                
            </div>
        </div>
    </div>