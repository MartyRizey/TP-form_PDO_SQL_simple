<?php

  require_once __DIR__ . '\vws_formConnexModal.php';
  require_once __DIR__ . '\vws_formRegistrationModal.php';

?>

<nav id="navBar">

  <div id="navBar_links">
    <ul>
      <li><a href="#">Link_1</a></li>
      <li><a href="#">Link_2</a></li>
    </ul>
  </div>

  <div id="navBar_login">
    <ul>
      <li>
        <!--
          Button to Open the Modal.
          L'attribut data-target="#myModal" ici fonction comme une ancre et appel
          l'attribut avec l'id="myModal" dans le fichier requis ligne 2.
          -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalConnexion">Connexion</button>
      </li>
      <li>
        <!-- Pour utiliser un second modal voilà la structure que j'ai trouvé...
          Ajouter une balise avec l'attribut 'data-toggle' dans la balise <button>
        -->
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalInscription"><a data-toggle="modal">Inscription</a></button>
      </li>
    </ul>
  </div>

</nav>
