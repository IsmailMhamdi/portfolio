<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="logo.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
         @import url("https://fonts.googleapis.com/css2?family=Kumbh+Sans&family=Poppins:ital,wght@0,300;1,200&family=Roboto:wght@300;400&display=swap");
        * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins",sans-serif;

}
</style>
</head>
<body>
  <form method="post" class="w-50 text-center  rounded-4 container p-3 mt-5 fw-bolder" >
    <div class="d-flex justify-content-between align-items-center mt-5 mx-2 "><div>
            <img src="logo.png" width="70px"></div><div><a href="index.php" class="fs-2">
              <i class="fa-solid fa-house"></i></a></div></div>           
        <label for="" class="form-label h5">Email</label><br>
        <input type="email" name="emaila" class="form-control" ><br>
        <label for=""class="form-label h5">Password</label><br>
        <input type="password" class="form-control" name="pwda" ><br>
        <input type="submit" class="btn btn-success fw-bold w-25" value="LOGIN" name="login">
    </form>
    <?php
 include_once "connexion.php";
 session_start();
    if(isset($_POST['login'])){
        $sql="SELECT email,pwd FROM admin WHERE email=? AND pwd=?";
        $req=$db->prepare($sql);   
        $req->execute(array($_POST["emaila"],$_POST["pwda"]));
        if($req->rowCount()===1){

           
            while($donnees=$req->fetch()){
                $_SESSION["emaila"]=$donnees["email"];  
          }
            header ("location: dashboard.php");
            
        }
        else{
            echo "<h1 class='h1 text-danger text-center mt-2'>Incorrect Email or Password</h>";
        }
    }
    ?>
    
</body>
</html>