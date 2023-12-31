<?php include('config/db.php');
?>
<?php session_start();?>
<?php
$admin_user_id=$_SESSION['admin_user_id'];
if(!isset($admin_user_id)){
    header('location:Login.php');
}
?>
<?php include('inc/header.php');?>

<div class="container">
    <div class="col-md-3">
        <?php include('sidebar/adminsidebar.php');?>
    </div>
    <div class="col-md-9">
    <div class="admin" style="display: flex; margin-top: 20px;">
  <div class="guide" style="width: 20%; height: 180px; padding:15px 15px 25px; border: 1px solid #ccc; text-align: center; margin-right: 10px; background: #FA7070;">
    <i class="fas fa-users" style="display: block; font-size: 40px; color: #FFF; margin-bottom: 16px;"></i>
    <span style="font-size: 16px; font-weight: bold;">Guide(0)</span>
  </div>
  <div class="tourists" style="width: 20%; height: 180px; padding: 15px 15px 25px; border: 1px solid #ccc; text-align: center; margin-right: 10px; background: #d9c67b;">
    <i class="fas fa-users" style="display: block; font-size: 40px; color: #FFF; margin-bottom: 16px;"></i>
    <span style="font-size: 16px; font-weight: bold;">Tourists(0)</span>
  </div>
  <div class="enrolled" style="width: 20%; height: 180px; padding: 15px 15px 25px; border: 1px solid #ccc; text-align: center; margin-right: 10px; background: #b1e7af;">
    <i class="fas fa-list-alt" style="display: block; font-size: 40px; color: #FFF; margin-bottom: 16px;"></i>
    <span style="font-size: 16px; font-weight: bold;">Enrollments(0)</span>
  </div>
  <div class="guide" style="width: 20%; height: 180px; padding: 15px 15px 25px; border: 1px solid #ccc; text-align: center; margin-right: 10px; background: #A1C298;">
    <i class="fas fa-plus" style="display: block; font-size: 40px; color: #FFF; margin-bottom: 16px;"></i>
    <span style="font-size: 16px; font-weight: bold;">Destinations(0)</span>
  </div>
    </div>
</div>
<script>$( '.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')

</script><?php include('inc/footer.php');?>