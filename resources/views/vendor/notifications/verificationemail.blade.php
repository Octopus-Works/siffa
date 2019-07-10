<html>

<head>
</head>

<body class="text-center">
    <div class="card m-auto" style="width:50%; border:1px solid blue">
        <div class="row">
            <div class="col-12">
                <img style="
                height: auto !important;
                width: 150px !important;" class="mt-4" src="{{url('/img/Logos/logo_xs_1.png')}}" />
            </div>
        </div>
        <h3 class="mt-3 mb-3"> Your login credentials are: </h3>
        <div class="mb-3">
            <p class="dark-grey-text">Username: {{$username }} </p>
            <p class="dark-grey-text">Password: {{$password }}</p>
        </div>
    </div>
</body>

</html>
