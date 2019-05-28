<?php
session_start();
if(!isset($_SESSION['admin'])){
    header('Location:/admin/login.php');
}else{
require('admin_header.php');
?>
<div class="container">
<h5>howdy <?php echo $_SESSION['admin'];?>!</h5> 
<div class="row">
    
</div>
</div>
<?php
}
require('admin_footer.php');
?>