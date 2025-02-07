# Base de données :

## MySQL :
- Renommer le dossier 'phpMyAdmin....'  ===> pma
- Lancer virtualBox et vagrant
- http://192.168.56.11/pma/

## Changer le mot de passe : root / root
vagrant ssh 
sudo su 
mysql -u root
ALTER USER 'root'@'localhost' IDENTIFIED BY 'root';
FLUSH PRIVILEGES;


## Ajouter base par terminal :
vagrant ssh 
sudo su 
mysql -u root -p (mot de passe)
USE demo; (nom de la base)




## EXO : via phpMyAdmin

créer dans la base de données `demo` une nouvelle table qui s'appelle `articles` et qui contient les 5 colonnes suivantes 

- id INT PRIMARY KEY AUTOINCREMENT
- titre VARCHAR( 255)
- description TEXT
- dt_publication DATE
- auteur VARCHAR(255)



## EXO :

Créer la table catégorie

qui contient 3 colonnes
id clé primaire
libelle texte avec maximum 255 lettres
position chiffre entier

ajouter une nouvelle colonne sur la table article => categorie_id lien avec la clé primaire de table catégorie 

ajouter 2 catégories 
libellé "Jardinage" / position 1
libellé "Bricolage" / position 2