<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Amara Capital</title>
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/client-header.styles.css" rel="stylesheet">
    <link href="/css/client.styles.css" rel="stylesheet">
    <link href="/css/profile.styles.css" rel="stylesheet">
    <link href="/css/edit-profile.styles.css" rel="stylesheet">
    <link href="/css/edit-details.styles.css" rel="stylesheet">
    <link href="/css/price-chat.styles.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
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

</html>