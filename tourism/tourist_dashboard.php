<?php include('config/db.php');
?>
<?php session_start();?>
<?php
$tourist_user_id=$_SESSION['tourist_user_id'];
if(!isset($tourist_user_id)){
    header('location:Login.php');
}
?>
<?php include('inc/header.php');?>
<div class="container">
    <div class="col-md-3">
        <h1>Tourist sidebar</h1>
    </div>
    <div class="col-md-9">
        <h1 style="text-transform:uppercase;">Tourist Dashboard</h1>
    </div>
</div>
<?php include('inc/footer.php');
