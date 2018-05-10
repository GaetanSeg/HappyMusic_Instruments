# HappyMusic_Instruments

Site d'instruments de musique et de logiciel musical. (Projet d'étude)

## Version
  PHP 7.2.4
  Apache/2.4.33
  MySQL Ver 14.14

## Installation

  - git clone https://github.com/HappyMusic/HappyMusic_Instruments.git
  - Editer le fichier application/config/database.php Modifier les lignes 79 / 80 'username' / 'password' avec les identifiants de votre base de donnée
  - Importer le fichier DB/happy_music_instruments.sql qui contient la structure de la base de donnée
  - Créer un nouveau host dans /etc/hosts
  ```
  127.0.0.1 happymusic.local
  ```
  - Editer le fichier application/config/config.php Modifier la ligne 26 avec le nom de host que vous avez configuré
  ```
  http://happymusic.local/
  ```
  - Créer un vhost
  ```
  NameVirtualHost happymusic.local


  <Directory "/Users/seggiogaetan/Documents/">
      AllowOverride All
      Options Indexes MultiViews FollowSymLinks
      Require all granted
  </Directory>

  <VirtualHost *:80>
      ServerName happymusic.local

      DocumentRoot "/Users/nomUser/Documents/HappyMusic-Instruments/"
  </VirtualHost>

  ```

  - Test
  ```
  consulter son compte pour vérifier les transactions

 https://www.sandbox.paypal.com/myaccount/home

 login et password pour le payement PayPal(client)

 LOGIN:client@happymusic.com
 PASSWORD:happymusic


 login et password pour PayPal(boutique)

 LOGIN: testBusinessHappyMusic@gmail.com
 PASSWORD :testhappymusic


 compte administrateur du projet happymusic

 LOGIN: supra3946@gmail.com
 PASSWORD: 12345

 compte d’un simple client

 LOGIN : test@test.com
 PASSWORD :12345

  ```
