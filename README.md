
# ```Back-End : PHP / PDO / SQL / Bdd```
## Transmission des données

### L'idée : _travailler dans un premier temps :_  
  > - [x] Un formulaire d'inscription.  
  > - [x] Un formulaire de connexion.
---
#### ```Fonctionnalitées à ajouter```
  > _**Formulaire d'inscription et formulaire de connexion.**_
  - [ ] Ajouter un flash message pour indiquer que le mot de passe ne doit pas dépasser
  12 caractères.  

  > _**Formulaire d'inscription.**_
  - [ ] Ajouter un message quand on est redirigé vers la page index :
    - [ ] lorsque l'insertion en Bdd C'est bien faites.
    - [ ] ou lorsqu'il y a eu problème.  

  > _**Ajouter une page admind.**_   
  - [ ] En ce connectant via un email et un password admin specifique.
  - [ ] Sur la page afficher la liste des comptes en Bdd.
  - [ ] Créer un bouton _Supp_ et un bouton _Modif_.

  #### ```Faire du CSS correct```
  >_**Appliquer du style et de la mise en forme.**_
  - [x] HTML sur les fichiers concernés
  - [x] CSS sur les fichiers concernés également.

  ---

- Branche **master**  

        └> Ajout de la Bdd.
        └> Arborescence de fichiers et dossiers simple.
             ----------------------
             | Bouton Inscription |
             ----------------------
              => tpl_navbar.php                      <-| vws_formRegistrationModal.php  
                 |
              => vws_formRegistrationModal.php
                 |                                     | inc_connexBdd.php
                 └> Ctrl_insertDatasRegistration.php <-| mod_sqlSelectDatasReg.php                                 
                     |                                 | mod_sqlInsertDatasReg.php
                     |
                     └> index.php
                        vws_404error.php

              --------------------              
              | Bouton Connexion |
              --------------------
               => tpl_navbar.php                     <-| vws_formConnexionModal.php  
                  |
               => vws_formConnexionModal.php
                  |
                  └> Ctrl_selectDatasForConnex.php   <-| inc_connexBdd.php
                      |                                | mod_sqlSelectDatasForConnex.php
                      |
                      └> vws_userHome.php            <-| inc_logOutUserConnex.php
                         vws_404error.php
                         index.php                         



- Branche **modifs**

        └> Arborescence de fichiers et dossiers simple.
        └> Arborescence des dossiers type MVC.
            ----------------------
            | Bouton Inscription |
            ----------------------
             => views/tpl_navbar.php                            <-| views/vws_formRegistrationModal.php  
                |
             => views/vws_formRegistrationModal.php
                |                                                 | inc/inc_connexBdd.php
                └> Controllers/Ctrl_insertDatasRegistration.php <-| modeles/mod_sqlSelectDatasReg.php                                 
                                |                                 | modeles/mod_sqlInsertDatasReg.php
                                |
                                └> ../index.php
                                   ../views/vws_404error.php

             --------------------              
             | Bouton Connexion |
             --------------------
              => views/tpl_navbar.php                           <-| views/vws_formConnexionModal.php  
                 |
              => views/vws_formConnexionModal.php
                 |                                                
                 └> Controllers/Ctrl_selectDatasForConnex.php   <-| inc/inc_connexBdd.php
                                 |                                | modeles/mod_sqlSelectDatasForConnex.php                                                           
                                 |
                                 └> ../views/vws_userHome.php   <-| ../inc/inc_logOutUserConnex.php
                                    ../views/vws_404error.php
                                    ../index.php
