# Technical Tests

##Installation

`composer install`

`symfony server:start -d`

##Instructions
* [junior](README_JUNIOR.md)
* [medior](README_MEDIOR.md)


##Livraison
- zipper le projet et envoyer-le par email 
- donner en quelques phrases l'explication technique de votre développement ci-dessous dans le README

J'ai créer un service prive et son alias afin de pouvoir utiliser ce service au niveau de mon controller UsersController.
Ce service se charge de la création d'une entity User et de son historisation en session.
Le custom validator s'occupe quant à lui de la validation pour la majuscule de name.
Le validator de symfony lui s'occupe du nombre de caractères compris entre 2 et 50. 
