<?php
    require "action/database.php";

    session_start();
    
    $getAllMyquestions = $bdd->prepare("SELECT id, title, description, content FROM questions WHERE id_auteur = ? ORDER BY id DESC ");
    $getAllMyquestions->execute(array($_SESSION["id"]));
?>