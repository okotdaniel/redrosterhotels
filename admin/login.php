<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'head.php';  ?>

</head>

<style>
.login-container{
    height: 100vh;
    width: 100%;
    position: absolute;
}

body{
    background-color: silver;
    color: grey;
    font-size: 16px;

}
.login-form{
    max-width: 100%;
    width: 370px;
    padding: 16px;
    margin:100px auto;
}
.l-btn{
    background-color: red;
    border-radius: 30px;
    border: 1px solid red;
}
.l-btn:hover{
    background-color: red;
    border:1px solid red;
    box-shadow: 1px 3px 5px red;
}
.footer{
    background-color: silver;
    width: 100%;
    height: 100vh;
    border: 1px solud silver;
    text-align: center;
    bottom: 0;
    position: relative;
}

</style>
<body>
    <div class="login-container align-item-center d-flext justify-content-center ">
        <div class="l-lofin-details">
            
        </div>

        <form class="login-form text-center">
            
                <img src="../assets/images/re_logo.png">
                <h2 class="mb-5 text-center font-weight-light "> ADMIN LOGIN</h2>
            <div class="form-group">
                <input type="text" id="username" placeholder="username" class="form-control">
            </div>

            <div class="form-group">
                <input type="password" id="username" placeholder="password" class="form-control">
            </div>

            <button class="btn-primary btn btn-block l-btn">login</button>
        </form>


<footer>
<div class="footer">
    &copy; 2018-2019 All rights reserverd under <a href="#"> cranebrands </a>
</div>

</footer>
</div>

</body>
</html>