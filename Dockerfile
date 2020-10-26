FROM php:7.4-cli

#Copy files into Container
COPY ./phpmailer /usr/src/phpsender/phpmailer
COPY . /usr/src/phpsender

#Set Workdir
WORKDIR /usr/src/phpsender

CMD [ "php", "send.php" ]