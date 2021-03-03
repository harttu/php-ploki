### TODO
Kun tämä sivu ladataan, niin A) selvitetään lähetettiinkö parametreja, eli
onko _GET["ktunnus"]:ssa tietoa vai ladattiinko sivu suoraan esim: kirjoitettiinko
hs.fi selaimen kenttään. 
b) luodaan tälle sivulle lista käyttäjätunnuksia ja salasanoja ja testataan
kirjautuminen niitä vastaan. 

TEE: etsi miten tehdään PHP:ssa taulukko, jossa käyttäjätunnuksia ja salasanoja
ja tarkista onko kirjautuva käyttäjä oikea. 
Vinkki: joko kaksi taulukkoa: yksi ktunnuksille, yksi ssanoille
TAI taulukko joka sisältää ktunnus, ssana pareja

myöhemmin -> (B Jos lähetettiin parametrejä, niin muodostetaan yhteys SQL-palvelimelle ja 
haetaan sieltä käyttäjätunnusta vastaava salasana. )
C) Tarkistetaan onko salasana, jos oikein, niin näytetään hellurei Matti yläkulmaan,
 muuten perusaloitussivu
