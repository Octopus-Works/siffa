<style>



img {
    vertical-align: middle;
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
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
<div class="modal fade mt-5" id="modal_view_message" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">



  <div class="modal-dialog modal-lg  custom-primary" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold custom-secondary-text">Message</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>



      <div class="modal-body mx-3">
        <div class="md-form mb-5">

 

            <div class="md-form mb-5">
                <i class="fas fa-tag prefix grey-text"></i>
                <input type="text" id="subjetc" name="subject" class="form-control validate">
            </div>

            <div class="md-form">
                <i class="fas fa-pen prefix grey-text"></i>
                <textarea type="text" id="body" name="message" class="md-textarea form-control" rows="4"></textarea>
            </div>

          <div>
            <h5 class="text-center custom-secondary-text">Attachements</h5>
          </div>
          <hr class="mt-3 mb-3 w-75" style="background: whitesmoke !important;">
          <div class="align-content-center" id="att_render">

          </div>

        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button  type="" class="btn btn-rounded custom-secondary black-text" data-dismiss="modal">close </button>
        <button  type="" id="replay" class="btn btn-rounded custom-secondary black-text" data-dismiss="modal">replay </button>

      </div>
    </form>
    </div>
  </div>
</div>
    
    

    
    
    
    