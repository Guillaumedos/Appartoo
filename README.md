# Appartoo
Carnet Adresse

Voici le programme que j'ai préparé, cependant je n'ai pas reussis a faire certaines choses (1er utilisation de Symfony3).

- Comme par exemple je n'ai pas réussis a gérer les routes pour que les différentes chemins soit disponible 
(Par exemple après le login, l'utilisateur n'arrive pas sur la page de son carnet d'adresse)
Donc pour y accéder il faut changer l'url manuellement :

    -\contacts Affiche les contacts avec la posibilité de les modifier ou et supprimer
    -\add pour Ajouter un contact

- Le formulaire entre bien les données mais malheureusement je n'ai pas reussis à coupler les deux formulaire
(celui de FOSUserBundle et le Bundle que j'ai créé) ce qui veut dire que le carnet d'adresse ne gère pas quel utilisateur est
connecté. (Je pense pouvoir le faire en recupérant l'id de la personne connecté pour n'afficher que son carnet d'adresse perso,
mais par manque de temps je n'ai pas pu le faire)

- Cependant j'ai appris beaucoup en 2 jours sur le fonctionnement de Symfony 3 et de FOSUserBundle.
