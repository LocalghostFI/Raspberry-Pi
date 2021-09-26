###  RPI hallinta etäkäyttöön. 

Lisää /etc/sudoers tiedostoon oikeus www-data:lle

```www-data ALL=(root) NOPASSWD: /sbin/reboot```

Myös jos ajat <RPI IP>/reboot.php. RPI käynnistyy uudelleen.
  
  ![](https://www.cdn.mb24.fi/Kuvat/RPI_Hallinta.PNG)   

  
Koodi on luotu PlayoutBee ohjelmalle josta puuttuu Reboot komento (Versio: 0.9.2). Koodit toimii myös normaalissa Linux käyttöjärjestelmissä. Tätä voi hyödyntää jos RPI on hankalassa paikassa tai Raspberry Pi:lle ei ole virta nappia.     

  ---
  ### Reboot PI:n ulkopuolelta
  RPI IP/reboot.php koodin voi upottaa muulle sivulle / palvelimelle jolla on pääsy kyseiseen koneeseen.
```html
<form action="<RPI IP>/reboot.php" method="get">
  <input type="submit" value="Uudelleen käynnistä">
</form>
```

  ---

(c) Atte "Mixerboy24" Oksanen // LocalghostFI / github@fleromedia.fi
