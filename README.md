# Fake image url
___

This project exposes image and fetch Ipv4 from client.

## Run environment

```bash
docker run -dit --name "fake-image-url" -v "%cd%:/var/www/html" -p 80:80 php:8.1.8-apache
```

### Rewrite module & Override enabled rule

Enable __AllowOverride__ directive as *All* in */etc/apache2/apache2.conf*

Turn off server signature, add this directives:

__ServerSignature Off__

__ServerTokens Prod__

Enable rewrite module
```bash
a2enmod rewrite
```
