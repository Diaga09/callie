<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Add Your favicon here -->
    <!--<link rel="icon" href="img/favicon.ico">-->

    <title>{{ Config::get('global.web_name') }} | {{ $title }}</title>
    @section('head')
        <!-- Bootstrap core CSS -->
        {{ HTML::style('frontend/css/bootstrap.min.css') }}

        <!-- Animation CSS -->
        {{ HTML::style('frontend/css/animate.min.css')}}
        
        {{ HTML::style('frontend/font-awesome/css/font-awesome.min.css') }}
        

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Custom styles for this template -->
        {{ HTML::style('frontend/css/style.css')}}
    @show
</head>
