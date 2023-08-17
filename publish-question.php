<?php 
        require ("action/questions/publishQuestionAction.php"); 
        require ("action/users/securityAction.php"); 
  ?>

<!DOCTYPE html>

<html lang="en-us">
  <?php include 'include/head.php'; ?>
<body>

  <!-- navigation -->
  <?php require "include/navbar.php";  ?>
<!-- /navigation -->
<div class="header has-text-centered">
  <div class="container">
    <div class="columns">
      <div class="column is-9-widescreen mx-auto">
        <h1 class="mb-4">Publier </h1>
        <ul class="list-inline">
          <li class="list-inline-item"><a class="text-default" href="index.php">Accueil
              &nbsp; &nbsp; /</a></li>
          <li class="list-inline-item text-primary">Publier une question</li>
        </ul><br>
        <div><img src="assets/images/mission.png" alt="" width="30%"></div>
      </div>
    </div>
  </div>
  
  <?php require "include/design.php";  ?>
</div>

<section class="section-sm">
  <div class="container">
    <div class="columns">
      <div class="column is-8-widescreen mx-auto">

        <?php 
            if(isset ($errorMsg)){ 
             echo "<p>".$errorMsg."</p>";
             } elseif(isset( $succesMsg)){
             echo "<p>". $succesMsg."</p>";
                 }                
           ?> 
        
        <form method="POST" action="#">
         
          <div class="input-group">
              <label for="name">Titre</label>
              <input type="text"  id="name" class="input"  name="title" >
          </div>

          <div class="input-group">
            <label for="message">Description</label>
            <textarea  id="message" class="input" name="description"></textarea>
          </div>

          <div class="input-group">
            <label for="message">Contenu</label>
            <textarea id="message" class="input"  name="content"></textarea>
          </div>

          <button type="submit" class="btn btn-primary" name="validate">Plublié la question</button>

        </form>
      </div>
    </div>
  </div>
</section>

  <!-- footer-->
  <?php require "include/footer.php";  ?>
<!-- /footer-->

</html>