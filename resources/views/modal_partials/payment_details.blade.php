<div class="modal fade" id="payment_details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">


    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content  custom-primary-transparent">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold custom-secondary-text">Payment Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form id="payment_form" method="POST" action="{{route('paymentNotification')}}" enctype="multipart/form-data">
                <div class="modal-body mx-3 text-center mt-5 mb-5">

                    <h5 class="text-center custom-secondary-text">Upload attachement</h5>

                    <div class="md-form col-12 ml-auto">

                        <div class="file-field">
                            <div class="btn custom-tertiary btn-sm float-left">
                                <span>Choose file</span>
                                <input type="file" name="img">
                            </div>
                            <div class="file-path-wrapper">
                                <input id="attachment" class="file-path validate" type="text" placeholder="Upload your file">
                            </div>
                        </div>

                    </div>

                </div>


                <div class="modal-footer d-flex justify-content-center">
                    <button type="submit" class="btn btn-rounded custom-secondary">Send <i class="fas fa-paper-plane ml-1"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $('#payment_form').submit(function (e) {
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
