## Osa A - tietokannan muokkaus

1. lisää users tauluun sarake: rooli, jonka tietotyyppi on VARCHAR. Laita oletularvoksi 'plokkaaja' ja aseta satake niin, ettei NULL arvoa hyväksytä. Testaa SQL-lausekkeella HeidiSQL:ssa että taulu on oikeanlainen.

2. Päivitä create_database.php-tiedostoa, jotta se toimii yllä olevalla 

3. Päivitä myös show_all_users, add_5_users tiedostoja, jotta ne ottavat huomioon uuden sarakkeen.


## Osa B - roolien lisääminen istuntoon

1. Lisää login.php tiedostoon, kohta jossa $_SESSION muuttujaan lisätään tieto käyttäjän roolista.
VIHJE:  $_SESSION["rooli"] = $row["rooli"];

2. Lisää tämä tieto näkymään myös dashboard.php:ssa, eli tulosta muuttuja _SESSION["rooli"]

3. Muokkaa lisää add_5_users.php tiedostoa siten, että yksi käyttäjä on 'admin' ja muut ovat 'plokkaajia'

4. Muokkaa show_users.php -tiedostoa niin, että niitä voidaan suorittaa vain, jos kirjautunut käyttäjä on admin tunnuksilla. 

5. Muokkaa admin-kansiossa olevia tiedostoja sellaisiksi, kuin yllä. Tee tämä erilliseen tiedostoon esim. require_admin.php, jonka voit lisätä jokaisen tiedoston yläosaan. HUOM. Muista lisätä session_start() jokaisen tiedoston alkuun.