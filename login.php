<?php
//menyertakan file program koneksi.php pada register
require('koneksi.php');
//inisialisasi session
session_start();

$error = '';
$validate = '';

//mengecek apakah sesssion email tersedia atau tidak jika tersedia maka akan diredirect ke halaman index
if( isset($_SESSION['email']) ) header('Location: index.php');

//mengecek apakah form disubmit atau tidak
if( isset($_POST['submit']) ){
        
        // menghilangkan backshlases
        $email = stripslashes($_POST['email']);
        //cara sederhana mengamankan dari sql injection
        $email = mysqli_real_escape_string($con, $email);
         // menghilangkan backshlases
        $password = stripslashes($_POST['password']);
         //cara sederhana mengamankan dari sql injection
        $password = mysqli_real_escape_string($con, $password);
        
       
        //cek apakah nilai yang diinputkan pada form ada yang kosong atau tidak
        if(!empty(trim($email)) && !empty(trim($password))){

            //select data berdasarkan email dari database
            $query      = "SELECT * FROM users WHERE email = '$email'";
            $result     = mysqli_query($con, $query);
            $cek       = mysqli_num_rows($result);

            // if ($rows != 0) {
            //     // $hash   = mysqli_fetch_assoc($result)['password'];
            //     // if(password_verify($password, $hash)){
            //         if(password_verify($password)){
            //         $_SESSION['email'] = $email;
            //         header('Location: index.php');
            //     }
 
            if($cek > 0){

            while($data = mysqli_fetch_array($result)){
                $name = $data['name'];
                $username = $data['username'];
                $level = $data['level'];
                $part = $data['part'];
            }
                $_SESSION['level'] = $level;
                $_SESSION['part'] = $part;
                $_SESSION['email'] = $email;
                $_SESSION['name'] = $name;
                $_SESSION['username'] = $username;
                $_SESSION['status'] = "login";
                header('Location: index.php');              
            //jika gagal maka akan menampilkan pesan error
            } else {
                $error =  'Login Gagal !!';
            }
            
        }else {
            $error =  'Data tidak boleh kosong !!';
        }
    } 

?>


<!DOCTYPE html>
<html lang="en">
<head>
<!-- meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" type="image/x-icon" href="file/pe.ico">
<meta property="og:image" content="http://107.102.39.55/pe_analisa/file/2.jpg" />
<meta property="og:title" content="GOOGLE BUILD APPROVAL" />

<title>GOOGLE BUILD APPROVAL</title>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!-- costum css -->
<link rel="stylesheet" href="style.css">
<style>
body {
    padding-top: 2vh;

}
    </style>    
</head>
<body>
        <section class="container-fluid mb-4">
            <!-- justify-content-center untuk mengatur posisi form agar berada di tengah-tengah -->
            <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-4">
                <form class="form-container" action="login.php" method="POST">
                    <h4 class="text-center font-weight-bold"><a href="index.php"> Sign-In </a></h4>
                    <?php if($error != ''){ ?>
                        <div class="alert alert-danger" role="alert"><?= $error; ?></div>
                    <?php } ?>
                   
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email">
                    </div>
                    <div class="form-group">
                        <label for="InputPassword">Password</label>
                        <input type="password" class="form-control" id="InputPassword" name="password" placeholder="Password">
                        <?php if($validate != '') {?>
                            <p class="text-danger"><?= $validate; ?></p>
                        <?php }?>
                    </div>
                 
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Sign In</button>
                    <div class="form-footer mt-2">
                        <p> Belum punya account? <a href="register.php">Register</a></p>
                    </div>
                </form>
            </section>
            </section>
        </section>

    <!-- Bootstrap requirement jQuery pada posisi pertama, kemudian Popper.js, dan  yang terakhit Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
