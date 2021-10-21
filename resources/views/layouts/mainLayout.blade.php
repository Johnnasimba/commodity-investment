<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Amara Capital</title>
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/client-header.styles.css" rel="stylesheet">
    <link href="/css/guest-header.styles.css" rel="stylesheet">
    <link href="/css/dropdown.styles.css" rel="stylesheet">
    <link href="/css/upload-details.styles.css" rel="stylesheet">
    <link href="/css/upload-docs.styles.css" rel="stylesheet">
    <link href="/css/declaimer.styles.css" rel="stylesheet">
    <link href="/css/client.styles.css" rel="stylesheet">
    <link href="/css/profile.styles.css" rel="stylesheet">
    <link href="/css/history.styles.css" rel="stylesheet">
    <link href="/css/edit-profile.styles.css" rel="stylesheet">
    <link href="/css/edit-details.styles.css" rel="stylesheet">
    <link href="/css/unverified-account.styles.css" rel="stylesheet">
    <link href="/css/no-funds.styles.css" rel="stylesheet">
    <link href="/css/price-chat.styles.css" rel="stylesheet">
    <!-- iconify -->
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Font awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>

    <style>
       
    </style>

</head>

<body>
    @section('sidebar')

    @show
    
    @yield('header')

    <div >
        @yield('content')
    </div>
    
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>

    <script type="text/javascript">
        $(function() {
           $('#datetimepicker').datetimepicker();
        });
    </script>  

</html>