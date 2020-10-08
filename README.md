# Wishlist
devops-Laura857 created by GitHub Classroom

Lors de grands évènements tels qu’un mariage, un anniversaire ou encore Noël, des listes de souhaits sont faites. 
Ces listes permettent de répertorier des cadeaux que l’on souhaiterait se voir offrir, ou offrir à une personne qui nous est cher.
Ce projet présente un site web de gestion de wishlists, permettant à ses utilisateurs de se connecter pour y créer leurs propres wishlists.



## Installation

- Tout d'abord, cloner le repository à l'aide de la commande suivante ``git clone``
- Déplacer vous dans le dossier où vous avez cloné le projet
- Executer ensuite la commande ``composer install``



## CI/CD push

Lors de push sur master et develop, une CI/CD est déclanchée

#### Continuous Integration

   - `actions/checkout@v2` : (Init) permet d'extraire notre repository pour que le workflow travaille dessus
   - `michaelw90/PHP-Lint@master` : (Linter) permet de vérifier qu'il n'y a aucune erreur de syntaxe dans le code php

#### Continous Deployment on Heroku

   - `akhileshns/heroku-deploy@v3.5.6` : permet de déployer le site sur Heroku     
   Trois variables sont obligatoire pour cette action :     
          - l'API_KEY (unique sur Heroku)    
          - l'API_EMAIL (l'email pour recevoir les alertes)    
          - l'API_APP (nom de l'appli)   
   Dans notre cas nous avons défini deux API_APP, une pour master et une pour develop. 
   Cela permet de lancer deux applications Heroku différentes en fonction de l'environnement sur lequel le push aura été executé.



## CI pull request

Lors de la création d'une pull request une CI est déclanchée

#### Continuous Integration 

   - `actions/checkout@v2` : (Init) permet d'extraire notre repository pour que le workflow travaille dessus
   - `michaelw90/PHP-Lint@master` : (Linter) permet de vérifier qu'il n'y a aucune erreur de syntaxe dans le code php
   - `symfonycorp/security-checker-action@v2` : (Checker) permet de vérifier qu'aucune vulnérabilité n'est présente dans le fichier composer.lock
   - `php-actions/composer@v1` : permet d'executer la commande composer install pour avoir toutes les dépendances du projet
   - `php-actions/phpunit@v9` : (Tests) permet d'executer les tests qui se trouvent dans le dossier tests/phpunit.xml
   
   
   
 ## Deploiement
 
  - [URL Prod](https://iim-devops-projet-master.herokuapp.com) 
  - [URL Préprod](https://iim-devops-projet-develop.herokuapp.com)
   
   
