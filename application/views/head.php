<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=deivce-width, initial-scale = 1.0">
    <!-- BootStrap -->
    <link href="/static/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <style>
        body {
            padding-top: 60px;
        }
    </style>
    <link href="/static/lib/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
</head>
<div class="navbar navbar-fixed-top">
    <div class="navbar navbar-inner">
        <div class="container">
            <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <!-- Be sure to leave the brand out there if you want it shown -->
            <a class="brand" href="#">JavaScript</a>

            <!-- Everything you want hidden at 940px or less, place within here -->
            <div class="nav-collapse collapse">
                <!-- .nav, .navbar-search, .navbar-form, etc -->
            </div>

        </div>
    </div>
</div>
<?php
if ($this->config->item('is_dev')) {
    ?>
<div class="well span12">
    개발환경 수정중 입니다.
</div>
<?php
}
?>

<body>
    <div class="container">
        <div class="row-fluid">