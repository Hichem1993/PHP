Vagrant.configure("2") do |config|

    ## debut machine
    ## OS 
    config.vm.box = "bento/ubuntu-20.04"
    config.vm.box_version = "202407.23.0"
  
    ## appeler notre machine 
    config.vm.network "forwarded_port", guest: 80, host: 1234, host_ip: "127.0.0.1"
  
    ## http://192.168.33.11
    config.vm.network "private_network", ip: "192.168.56.11"
  
    ## dossier est en cours en partagé avec la machine virtuelle 
    config.vm.synced_folder ".", "/var/www/html"
    ## fin machine


    ## installer des logiciels dans la machine
    ## apache2
    ## php8.3
    ## mysql 
    ## phpmyadmin
    config.vm.provision "shell", inline: <<-SHELL
       apt update
       apt upgrade
       apt install vim wget apache2 unzip net-tools -y 
  
       # php
       apt install ca-certificates apt-transport-https software-properties-common lsb-release -y
       add-apt-repository ppa:ondrej/php -y
       apt update
       apt upgrade
       apt install php8.3 libapache2-mod-php8.3 php8.3-cli php8.3-{zip,bz2,gd,curl,mbstring,intl,mysql,xdebug} -y
       
       # mode développement
       sed -i "s/;extension=gd/extension=gd/" /etc/php/8.3/apache2/php.ini
       sed -i "s/;extension=mysqli/extension=mysqli/" /etc/php/8.3/apache2/php.ini
       sed -i "s/error_reporting = .*/error_reporting = E_ALL/" /etc/php/8.3/apache2/php.ini
       sed -i "s/display_errors = .*/display_errors = On/" /etc/php/8.3/apache2/php.ini
  
       
       # mariadb
       apt-get install mariadb-server -y 
  
       sed -i "s/.*bind-address.*/bind-address = 0.0.0.0/" /etc/mysql/mariadb.conf.d/50-server.cnf
  
       # restart services
       service apache2 restart
       service mysql restart
  
       # phpmyadmin 
       wget https://files.phpmyadmin.net/phpMyAdmin/5.2.1/phpMyAdmin-5.2.1-all-languages.zip -O /var/www/html/pma.zip
       cd /var/www/html
       unzip -q /var/www/html/pma.zip
    SHELL
  end