##Instructions
- créer un formulaire avec 2 inputs text qui permettent de renseigner le nom et l'age d'un utilisateur
- un bouton submit permet l'envoi des informations
- créer une classe service privée qui va enregistrer les deux valeurs envoyées par le formulaire dans un objet User
- tous les objets User ainsi créés doivent être historisés en session
- en dessous du formulaire, afficher tout l'historique des utilisateurs sous forme de liste
- créer un validateur personnalisé qui vérifie que la première lettre du nom est bien une majuscule
- mettre en place ce qu'il faut pour passer le service privé défini en public de manière automatique

##Contraintes:
- le code doit être écrit en anglais
- bien documenter chaque classe et chaque méthode en anglais
- bien utiliser les composants symfony
- le code doit fonctionner au moins sous un environnement Ubuntu avec PHP 7.2

##Instructions optionelles 

*Si vous avez du temps ou que vous voulez quand même passer plus de temps sur le test*

- le code doit être valide PSR-2
- faire le test unitaire du service
- le formulaire doit avoir des contraintes :
    * le nom doit au moins avoir 2 caractères et pas plus de 50 caractères
    * l'age doit être un entier positif et être compris entre 0 et 120
- Répondre à la question : Quelle est la différence entre un service public et privé, et que pensez-vous de 
l'exercice à ce sujet ?

Un service public est accessible depuis n'importe quel controller.
Un service prive n'est pas accessible. Il faut obligatoirement passer par un alias de celui-ci. 
