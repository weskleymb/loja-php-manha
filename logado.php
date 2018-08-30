<?php

session_start();
$home = "/loja/";
if (!isset($_SESSION['isLogado']) || !$_SESSION['isLogado']) {
    header("location: $home");
}
