<?php
require $_SERVER['DOCUMENT_ROOT'] . '/header.php';
require $_SERVER['DOCUMENT_ROOT'] . '/navbar.php';
?>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="login-act.php" method="post">
                <label for="uname">Username</label>
                <input type="text" name="uname" id="uname" class="form-control">
                <label for="passwd">Password</label>
                <input type="password" name="passwd" id="passwd" class="form-control">
                <div class="text-right" style="margin-top:1em;">
                    <button class="btn text-white main-bg" type="submit" >Login!</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
?>