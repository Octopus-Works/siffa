
    <div class="modal fade" id="modaleditrole" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
      <!--Content-->
      <div class="modal-content text-center">
        <!--Header-->
        <div class="modal-header d-flex justify-content-center">
          <p class="heading">Are you sure?</p>
        </div>

        <!--Body-->
        <div class="modal-body container" id="roles">
         <div class="row">
            <div class=" col-4 custom-control custom-checkbox ml-auto mr-auto">
                <input type="checkbox" class="custom-control-input ami " id="admin" value ='admin'   name="Employeedetails[]">
                <label class="custom-control-label  mr-auto ml-auto" for="admin">admin</label>
            </div>
            <div class=" col-4 custom-control custom-checkbox ml-auto mr-auto">
              <input type="checkbox" class="custom-control-input ami " id="user" value ='user'  name="Employeedetails[]">
              <label class="custom-control-label ml-auto mr-auto" for="user">user</label>
          </div>
          <div class="col-4 custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input ml-auto mr-auto ami" id="manger" value ='manager'  name="Employeedetails[]">
            <label class="custom-control-label mr-auto ml-auto" for="manger">manager</label>
           </div>
      </div>
        </div>

        <!--Footer-->
        <div class="modal-footer flex-center">
          <a type="button" id="yes-button-" class="btn  btn-outline-danger" data-dismiss="modal"  onclick="viewChecked()">Yes</a>
          <a type="button" id="no-button" class="btn  btn-danger waves-effect" data-dismiss="modal">No</a>
        </div>
      </div>
      <!--/.Content-->
    </div>
  </div>
