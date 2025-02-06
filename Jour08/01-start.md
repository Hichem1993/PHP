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


## via phpMyAdmin

créer dans la base de données `demo` une nouvelle table qui s'appelle `articles` et qui contient les 5 colonnes suivantes 

- id INT PRIMARY KEY AUTOINCREMENT
- titre VARCHAR( 255)
- description TEXT
- dt_publication DATE
- auteur VARCHAR(255)