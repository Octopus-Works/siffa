<style>

.modal-content {
    background-color: #1c2331b8 !important;  
    color: whitesmoke;
}


.md-form input[type=date], .md-form input[type=datetime-local], .md-form input[type=email], .md-form input[type=number], .md-form input[type=password], .md-form input[type=search-md], .md-form input[type=search], .md-form input[type=tel], .md-form input[type=text], .md-form input[type=time], .md-form input[type=url], .md-form textarea.md-textarea {
    color: snow !important
}


.md-form .prefix.active, .md-form textarea~label.active, .md-form.md-outline .prefix:focus, .md-form.md-outline input[type=date]:focus:not([readonly])+label, .md-form.md-outline input[type=datetime-local]:focus:not([readonly])+label, .md-form.md-outline input[type=email]:focus:not([readonly])+label, .md-form.md-outline input[type=number]:focus:not([readonly])+label, .md-form.md-outline input[type=password]:focus:not([readonly])+label, .md-form.md-outline input[type=search-md]:focus:not([readonly])+label, .md-form.md-outline input[type=search]:focus:not([readonly])+label, .md-form.md-outline input[type=tel]:focus:not([readonly])+label, .md-form.md-outline input[type=text]:focus:not([readonly])+label, .md-form.md-outline input[type=time]:focus:not([readonly])+label, .md-form.md-outline input[type=url]:focus:not([readonly])+label, .md-form.md-outline textarea.md-textarea:focus:not([readonly])+label {
    color: #ffc107!important;
}


.md-form input[type=date]:focus:not([readonly]), .md-form input[type=datetime-local]:focus:not([readonly]), .md-form input[type=email]:focus:not([readonly]), .md-form input[type=number]:focus:not([readonly]), .md-form input[type=password]:focus:not([readonly]), .md-form input[type=search-md]:focus:not([readonly]), .md-form input[type=search]:focus:not([readonly]), .md-form input[type=tel]:focus:not([readonly]), .md-form input[type=text]:focus:not([readonly]), .md-form input[type=time]:focus:not([readonly]), .md-form input[type=url]:focus:not([readonly]), .md-form textarea.md-textarea:focus:not([readonly]) {
    -webkit-box-shadow: 0 1px 0 0 #ffc107;
    box-shadow: 0 1px 0 0 #ffc107;
    border-bottom: 1px solid #ffc107;
    color: whitesmoke !important;
}

.md-form input[type=date]:focus:not([readonly])+label, .md-form input[type=datetime-local]:focus:not([readonly])+label, .md-form input[type=email]:focus:not([readonly])+label, .md-form input[type=number]:focus:not([readonly])+label, .md-form input[type=password]:focus:not([readonly])+label, .md-form input[type=search-md]:focus:not([readonly])+label, .md-form input[type=search]:focus:not([readonly])+label, .md-form input[type=tel]:focus:not([readonly])+label, .md-form input[type=text]:focus:not([readonly])+label, .md-form input[type=time]:focus:not([readonly])+label, .md-form input[type=url]:focus:not([readonly])+label, .md-form textarea.md-textarea:focus:not([readonly])+label {
    color: #ffc107!important;
}

.form-control{
    color:whitesmoke !important;
}
    </style>
<div class="modal fade" id="modal_new_messge" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">



  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold amber-text">Write to us</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
            <form id="app_form" action="{{ route('register')}} " enctype="multipart/form-data" method="POST">
                @csrf
        <div class="md-form mb-5">
          <i class="fas fa-tag prefix grey-text"></i>
          <input type="text" id="form32" name="subject" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form32">Subject</label>
        </div>

        <div class="md-form">
          <i class="fas fa-pencil prefix grey-text"></i>
          <textarea type="text" name="message" id="form8" class="md-textarea form-control" rows="4"></textarea>
          <label data-error="wrong" data-success="right"  for="form8">Your message</label>
        </div>


        <h5 class="text-center amber-text">Upload attachement</h5>
    
        <div class="md-form col-12 ml-auto">

                <div class="file-field">
                    <div class="btn btn-amber btn-sm float-left">
                        <span>Choose file</span>
                        <input type="file" name="attachment">
                    </div>
                    <div class="file-path-wrapper">
                        <input id="attachment" class="file-path validate"
                            type="text" placeholder="Upload your file">
                    </div>
                </div>

            </div>


      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button  type="submit" class="btn btn-rounded btn-amber">Send <i class="fas fa-paper-plane-o ml-1"></i></button>
      </div>
    </form>
    </div>
  </div>
       
    

    </div>
    
    

    
    
    
    
    <script>
             $('#app_form').submit(function (e) {
            e.preventDefault();

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                url: $(this).attr('action'),
                dataType: 'json', // data type
                data: new FormData(this),
                processData: false,
                contentType: false,

            });
        });
        
        </script>