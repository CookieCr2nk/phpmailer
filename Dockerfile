FROM php:7.4-cli
COPY ./phpmailer /usr/src/phpsender/phpmailer
COPY . /usr/src/phpsender
WORKDIR /usr/src/phpsender
CMD [ "php", "send.php" ]