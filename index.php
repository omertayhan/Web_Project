<?php
session_start();
$username="b191210012";
$password="b191210012";

if(isset($_POST['username']) && $_POST['password'] == $password)
{
    header("Location: odev/index.php");
}
else
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div class="row h-50">
        <div class="d-flex justify-content-center mt-5">
            <form action="" method="POST">
                <div class="form-group mt-5">
                    <input type="text" class="form-control " name='username' id='username' maxlength="50" placeholder="Kullanıcı adı">
                </div>
                <div class="form-group ">
                    <input type="password" maxlength="50" class="form-control mt-3" name='password' id='password' placeholder="Şifre">
                </div>
                <div class="d-flex justify-content-center mt-5">
                    <button type="submit" class="btn btn-primary" name="submit" value="submit">Giriş</button>
                </div>
                </form>

        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?php
}
?>
