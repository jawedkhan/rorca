# Instructiuni integrarea in site #

# Details #

Instructiuni:
- copiati kit-ul dezarhivat pe server intr-u folder in root-ul site-ului numit 'tarifar' (sau cum vreti)

- copiati config.demo.php in folderul 'tarifar' si redenumiti-l in config.php

- schimbat username si parola si adresa webservice-ului conform datele primite de la broker

- accesati tarifarul in http://[adresa site]/tarifar/site.php?t=rca  si verificati functionarea lui (adica tarifare)

- accesati tarifarul in http://[adresa site]/tarifar/site.php?t=pad  si verificati functionarea lui (adica tarifare)

- accesati tarifarul in http://[adresa site]/tarifar/site.php?t=casco  si verificati functionarea cererea in aplicatie

- accesati tarifarul in http://[adresa site]/tarifar/site.php?t=medicale  si verificati functionarea lui (adica tarifare)

- accesati tarifarul in http://[adresa site]/tarifar/site.php?t=rotr  si verificati functionarea lui (adica tarifare)

- accesati tarifarul in http://[adresa site]/tarifar/site.php?t=malpraxis  si verificati functionarea lui (adica tarifare)

- accesati tarifarul in http://[adresa site]/tarifar/site.php?t=sanatate  si verificati functionarea lui (adica tarifare)

- accesati tarifarul in http://[adresa site]/tarifar/site.php?t=petitie  si verificati functionarea lui (adica tarifare)

- integrati tarifarul in site printr-un iframe si configurati thema de culor pe care o gasiti in config sau  'extensions'




&lt;iframe src="http://[adresa site]/tarifar/site.php?t=rca" width=680 height=1200 border=0&gt;&lt;/iframe&gt;



- integrarea prin iframe nu este suportata de noi, si va asumati riscurile folosirii ei, noi va recomandam integrarea prin design (vezi mai jos)

Desigur se poate face si o integrare mult mai precisa doar ca trebuie sa va chinuiti pentru ea, kit-ul fiind doar un punct de plecare.

Integrare prin design:
- se creaza un fisier template in care se introduce codul php : echo cache\_getvalue("body");cache\_setvalue("body","");
- se creaza un fisier css care o sa fie folosit in kit
- se modificata config-ul pentru fisierele template:

> _cache\_setvalue("load\_in\_template","../temp2.php");_
> _cache\_setvalue("load\_in\_css","../css.php");_


Alte setari:
- pentru tema de culori
> $_CONFIG['color\_profile']="1";
- pentru layout
> $_CONFIG['color\_design']="2";
- pentru a cere mailul pe primul ecran se seteaza in config:
> $