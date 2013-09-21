Cache + SSL / TLS
========================

Topic discussed the 17th of september 2013 at La Pépinière 27 in Paris

[Slideshow - HTML - French version](http://cache-ssl-tls.weaving-the-web.org/show#Cover)

[Slideshow - PDF - French version](https://github.com/thierrymarianne/cache-ssl-tls/blob/master/CACHE_SSL_TLS.pdf)

[Meetup Event](http://www.meetup.com/afsy-sfpot/events/139415812/)

[Best practices (SSLLabs)](https://www.ssllabs.com/projects/best-practices/)

[Testing SSL server (SSLLabs)](https://www.ssllabs.com/ssltest/index.html)

[AFSY (Association francophone des utilisateurs de Symfony)](http://afsy.fr/)

Generate your Diffie-Hellman key using following openssl command (it may take a while)

    openssl dhparam -out /etc/ssl/private/dh4096.pem -5 4096

TODO
========================

DNSSEC configuration for TLSA

Changelog
========================

Benjamin Sonntag talking about SSL/TLS the 20th of Septembre 2013 at La Cantine in Paris, led me to apply the following changes
* Reduction of the cipher suites list offered by the SSL proxy (nginx)
* SSL v3.0 has been removed from the list of protocols offered by the SSL proxy
* A Diffie-Hellman key directive has been added to the SSL proxy configuration ([Perfect Forward Secrecy](http://news.netcraft.com/archives/2013/06/25/ssl-intercepted-today-decrypted-tomorrow.html))
* A HTTP Strict Transport Security directive has been added to the SSL proxy configuration (nginx)
