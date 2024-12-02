
# Gestionnaire de Cartes en PHP

Cette application console en PHP permet de créer une liste de cartes, où chaque carte contient une question et une réponse. Vous pouvez ajouter plusieurs cartes et afficher les informations des cartes enregistrées.

## Prérequis

Avant d'utiliser cette application, assurez-vous d'avoir les éléments suivants installés sur votre système :

- Git 
- Composer
- PHP version 7.4 ou supérieure

## Installation

1. Dans un répertoire local, lancez un terminal (Il devra rester ouvert jusqu'à la fin d'execution du programme qui vous sera signifié plus bas).
2. Téléchargez le projet en exécutant les commandes suivantes l'une après l'autres :

```bash
git clone https://github.com/VDelnatte/TpPoo
cd TpPoo
```

3. Il vous faut maintenant installez les dépendances avec Composer en tapant la commande suivante : 

```bash
composer install
```

## Utilisation

1. Pour lancer le programme, il faut exécutez le script PHP principal avec la commande suivante :

```bash
php index.php
```

2. Suivez les instructions dans le terminal :
   - Entrez le nombre de cartes que vous souhaitez ajouter (cela doit être un entier supérieur à zéro et si vous vous trompez il vous faudra relancer le script en executant la commande de l'étape 1 ).
   - Pour chaque carte, saisissez une question et une réponse.

3. Une fois toutes les cartes ajoutées, l'application affichera un résumé des cartes créées.

### Exemple d'exécution

```text
Combien de cartes voulez vous ajouter ? 2


Saisissez une question pour la carte 1 : Qui va obtenir son diplôme de développeur web ?

Saisissez une réponse pour la carte 1 : Valentin Delnatte

Saisissez une question pour la carte 2 : De quelle couleur est le cheval blanc d'henri IV ?

Saisissez une réponse pour la carte 2 : Blanc


Listing des cartes contenues dans la liste :

Info sur la carte 1 :
Question : Qui va obtenir son diplôme de développeur web ?
Réponse : Valentin Delnatte

Info sur la carte 2 :
Question : De quelle couleur est le cheval blanc d'henri IV ?
Réponse : Blanc
```

Le programme étant terminé, vous pouvez fermer le terminal.

## Structure des fichiers

- `index.php` : Point d'entrée de l'application.
- `src/Card.php` : Classe représentant une carte avec une question et une réponse.
- `src/ListCards.php` : Classe permettant de gérer une liste de cartes et d'en afficher le contenu .

## Licence

Ce projet est sous licence libre. Vous êtes libre de le modifier et de le distribuer.
