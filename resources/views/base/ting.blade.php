@include('base/header_page')
@extends('base/script_page5')

<?php
  $url = isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : '';
?>

<input type="button" value="Go Back" onclick="history.back(-1)" />