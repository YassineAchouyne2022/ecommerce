<?php
session_start();
include "inc/db.php";
if (isset($_POST['connecter'])) {
  $email = $_POST['email'];
  $pass = $_POST['password'];

  $sql = $db->prepare("SELECT * from clien where email=:email and passworde=:pas");
  $sql->execute([":email" => $email, ":pas" => $pass]);
  $cp = $sql->rowCount();
  $clien = $sql->fetch();
  if ($cp != 0) {
    $a = $clien['id'];
    $_SESSION['id_clien'] = $clien['id'];
    header("Location:inc/session.php?ses=$a");
  }
}


?>

<?php include "inc/header.php" ?>

<?php
if (!isset($_SESSION['id_clien'])) {
  if (empty($_GET['cle'])) {

?>
    <section id="espas">
      <form action="php/regester.php" method="post" class="form">
        <div class="titre">
          <h2>Register</h2>
        </div>
        <div class="titre">
          <p>creat your accont .It's free only takes a minute</p>
        </div>
        <div>
          <input type="text" name="fname" placeholder="First Name" class="notvide text" required />
          <input type="text" name="lname" placeholder="Last Name" class="notvide text" required />
        </div>
        <div></div>
        <div><input type="email" name="email" id="" placeholder="Email" class="notvide" required /></div>
        <div>
          <input type="password" name="password" id="" placeholder="Password" class="notvide Password" required onkeyup="verificationPassword()" />
        </div>
        <div>
          <input type="password" name="cpassword" id="" placeholder="Confirm Password" class="notvide Password" required onkeyup="verificationPassword()" />
        </div>
        <div>
          <input type="checkbox" name="" id="chec" onclick="ShowPassword()">Show password
        </div>
        <div>
          <a href="?cle=Register">Avez-vous un compte ?</a>
        </div>
        <div><input type="submit" value="Register" name="submit" onclick="verificationRegister()" /></div>
      </form>
    </section>
  <?php } else {

  ?>
    <section id="espas">
      <form action="" method="post" class="form">
        <div class="titre">
          <h2>Se connecter</h2>
        </div>
        <div></div>
        <div><input type="email" name="email" id="" placeholder="Email" class="notvide" required /></div>
        <div>
          <input type="password" name="password" id="" placeholder="Password" class="notvide Password" required onkeyup="verificationPassword()" />
        </div>
        <div>
          <input type="checkbox" name="" id="chec" onclick="ShowPassword()">Show password
        </div>
        <div>
          <a href="mon-compte.php?cle=">Créer un nouveau compte</a>
        </div>
        <div><input type="submit" value="Se connecter" name="connecter" /></div>
      </form>
    </section>

  <?php }
} else {
  $sql = $db->prepare("SELECT * from clien where id=?");
  $sql->execute([$_SESSION['id_clien']]);
  $tab = $sql->fetch();
  if(isset($_POST['nomCmplet'])){
    $req=$db->prepare("UPDATE clien set firstName =? , lastName=? where id=? ");
    $req->execute([$_POST['firstName'],$_POST['lastName'],$_SESSION['id_clien']]);
    header("Location:mon-compte.php");
  }

  if(isset($_POST['vemail'])){
    $req=$db->prepare("UPDATE clien set email =?  where id=? ");
    $req->execute([$_POST['email'],$_SESSION['id_clien']]);
    header("Location:mon-compte.php");
  }

  if(isset($_POST['mpass'])){
    $req=$db->prepare("UPDATE clien set passworde =?  where id=? ");
    $pass=$db->prepare("SELECT count(*) c from clien where passworde=? and id =?");
    $pass->execute([$_POST['ap'],$_SESSION['id_clien']]);
    $pp=$pass->fetch();
    if($pp['c']!=0){
      if($_POST['np']==$_POST['cp']){
        $req->execute([$_POST['cp'],$_SESSION['id_clien']]);
        header("Location:mon-compte.php");
      }else{
        echo "<script>alert(erour de Confirmation mot passe)</script>";
      }
      
    }else{
      echo "<script>alert(erour de mot passe)</script>";
    }
    
    
    
  }


  ?>
  <section class="profil">
    <div>
      <img src="/admin/image/<?= $tab['profil'] ?>" alt="">
      <h3>votre profil</h3>
    </div>
    <div>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

      <form class="was-validated" action="" method="POST">
        <div class="mb-3 row">
          <input type="text" class="form-control is-invalid col" id="validationTextarea" name="firstName" value="<?= $tab['firstName'] ?>" required>
          <input type="text" class="form-control is-invalid col" id="validationTextarea" name="lastName" value="<?= $tab['lastName'] ?>" required>
          <input type="submit" class="btn btn-primary col-2" name="nomCmplet" value="Modifier">
        </div>
      </form>

      <form class="was-validated" action="" method="POST">
        <div class="mb-3 row">
          <input type="email" class="form-control is-invalid col" id="validationTextarea" name="email" value="<?= $tab['email'] ?>" required>
          <input type="submit" class="btn btn-primary  col-2" value="Modifier" name="vemail">
        </div>
      </form>

      <form class="was-validated" action="" method="POST">
        <div class="mb-3 row">
          <input type="password" name="ap" class="form-control is-invalid col" id="validationTextarea" value="" required placeholder="ancien mot de passe">
          <span class="col-2"></span>
        </div>
        <div class="mb-3 row">
          <input type="password" name="np" class="form-control is-invalid col" id="validationTextarea" value="" required placeholder="nouveau mot de passe">
          <span class="col-2"></span>
        </div>
        <div class="mb-3 row">
          <input type="password" name="cp" class="form-control is-invalid col" id="validationTextarea" value="" required placeholder="Confirmation mot de passe">
          <input type="submit" name="mpass" class="btn btn-primary col-2" value="Modifier">
        </div>
      </form>

      <form class="was-validated" action="" method="POST">
        <div class="mb-3 row">
          <input type="file" class="form-control col" aria-label="file example" required>
          <input type="submit" class="btn btn-primary col-2" value="Modifier">
        </div>
      </form>


    </div>
  </section>
<?php
}
?>

<script src="js/main.js"></script>
</body>

</html>