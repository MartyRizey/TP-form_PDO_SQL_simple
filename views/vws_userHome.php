<?php

  session_start();
  // Je requieres le fichier contenant ma fonction pour me déconnecter de mon compte.
  require_once '../inc/inc_logOutUserConnex.php';

  // Si pesudo en Session existe et qu'il n'est pas vide, je rentre dans la condition.
  if(isset($_SESSION['pseudo']) && !empty($_SESSION['pseudo'])): ?>

    <h2>Vous êtes connecté à votre compte <em><?= $_SESSION['pseudo']; ?></em>.</h2>

    <form action="" method="post">
      <!--
        - En cliquant sur le bouton j'active la fonction qui me permet de me
        déconnecter de mon compte.
      -->
      <button type="submit"
              name="button"
              value="<?php logOutUser($_session['pseudo'], $_session['password'], $_session['email']); ?>"
              >Déconnection
      </button>
    </form>

  <?php else: header('Location: ../index.php'); ?>

  <?php endif; ?>


<!-- Attention ce bouton ne me déconnecte pas de ma session personnelle -->
  <div class="return_cta"><a href="../index.php"> Retour</a></div>
