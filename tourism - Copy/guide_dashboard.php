<?php include('config/db.php');
?>
<?php session_start();?>
<?php
$guide_user_id=$_SESSION['guide_user_id'];
if(!isset($guide_user_id)){
    header('location:Login.php');
}
?>
<?php include('inc/header.php');?>
<div class="container">
    <div class="col-md-3">
        <h1>Guide sidebar</h1>
    </div>
    <div class="col-md-9">
        <h1 style="text-transform:uppercase;">Guide Dashboard</h1>
    </div>
</div>
