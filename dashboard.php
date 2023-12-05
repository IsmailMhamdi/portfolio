<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
    <?php
include "connexion.php" ;
    session_start();
    if(empty($_SESSION["emaila"])){
        header ("location: admin.php");
    }
    ?>
    <div class="d-flex justify-content-between px-5 py-2 align-items-center">
        <img src="logo.png" width="82px">
        <a href="logout.php" class="text-danger fs-3"><i class="fa-solid fa-power-off"></i></a>
    </div>
    <div class="container w-75">
    <h1 class="text-primary mb-3 mt-5 text-center fw-bold">Contact</h1>
    <table class="table text-center">
        <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
        <th>Delete</th>
    </tr>
    
    
        <?php
        include_once("connexion.php");
        $sql='SELECT*FROM contact';
        $re=$db->prepare($sql);
        $re->execute();
        while($donnees=$re->fetch()){  
            ?>
                    <tr><td><?php echo $donnees['name'] ?></td>
            <td><?php echo $donnees['email'] ?></td>
            <td><?php echo $donnees['message'] ?></td>
            <td><a href="delete.php?id=<?=$donnees['idc']?>" class="fs-4" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet enregistrement?')"><i class="fa-solid fa-trash"></i></a></td>
            </tr>
        
        <?php
        }
        ?>
    </table>
    </div>
</body>
</html>