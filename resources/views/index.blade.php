<?php
session_start();
if(!isset($_SESSION["active_user"]))
{
    $_SESSION["active_user"] = 3;
}
if(!isset($_SESSION["login"]))
{
    $_SESSION["login"] = false;
}
?>

@include('layout.header')
<!-- navigationbar for the whole project -->
@include('layout.navigation')

@yield('content')

@include('layout.footer')
