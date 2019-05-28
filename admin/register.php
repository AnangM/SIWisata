<?php
require $_SERVER['DOCUMENT_ROOT'] . '/header.php';
require $_SERVER['DOCUMENT_ROOT'] . '/navbar.php';
?>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="register-act.php" method="post">
                <label for="uname">Username</label>
                <input type="text" name="uname" id="uname" class="form-control">
                <p class="text-danger d-none" id="unameError">Username merupakan huruf kecil,angka dan underscore</p>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control">
                <label for="email">Emai</label>
                <input type="email" name="email" id="email" class="form-control">
                <label for="passwd">Password</label>
                <input type="password" name="passwd" id="passwd" class="form-control">
                <p class="text-danger d-none" id="passwdError"></p>
                <label for="cpasswd">Password</label>
                <input type="password" name="cpasswd" id="cpasswd" class="form-control">
                <p class="text-danger d-none" id="cpasswdError"></p>


                <div class="text-right" style="margin-top:1em;">
                    <button class="btn text-white main-bg" type="submit" >Login!</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
// var regexUname = new RegExp("([a-z0-9_]{6,})");
// $('#uname').on('input',function(){
//     if(!regexUname.test(this.value)){
//         $('#unameError').removeClass('d-none');
//     }else{
//         $('#unameError').addClass('d-none');

//     }
// }); 
</script>
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
?>