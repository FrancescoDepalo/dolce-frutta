<style>
@media screen and (min-width: 601px){#linkD{margin-left: 21%;}#linkS{right: 25%;}#corpo{width: 60%;left: 20%;top: 120px;}.ordine img{right: 130px;}
    .info p:first-child{  width: max-content;
    margin-left: -45px;}
}
@media screen and (max-width: 600px){#linkD{margin-left: -20px;}#linkS{right:0px;}#corpo{width: 90%;left: 5%;top: 105px;}.ordine img{right: 90px;}
    .info p:first-child{font-size: 13px;}
    .info p:nth-child(2){font-size: 13px;}
}
@media screen and (max-width: 600px){.info {left: 50%;}}
@media screen and (min-width: 601px) and (max-width: 940px){.info {left: 38%;}}
@media screen and (max-width: 940px){.ordine,#chiudi{width: 100%;}#box1{display:none!important;}#compra{width: 50%;}}
@media screen and (min-width: 941px){.ordine,#chiudi{width: 400px;}.info{left: 170px;}#box2{display:none!important;}#compra{width: 90%;}}
@media screen and (min-width: 941px) and (max-width: 1050px){
    #box1 input[type=checkbox]{margin-left: 14px;}
    #box1 form p{width: 98px;margin-right: 10px;}
    #box1{width: 138px;height: 153px;}}
@media screen and (min-width: 1051px) and (max-width: 1180px){
    #box1 input[type=checkbox]{margin-left: 13px;}
    #box1 form p{width: fit-content;margin-right: 10px;}
    #box1{width: 205px;height: 137px;}}
@media screen and (min-width: 1181px){
    #box1 input[type=checkbox]{margin-left: 36px;}
    #box1 form p{width: fit-content;margin-right: 63px;}
    #box1{width: 283px;height: 120px;}}
.lean{text-decoration: none;
    font-style: italic;
    color: gray;}
.lean:hover{color:black;}
#none{font-size: larger;font-family:caviar, sans-serif;}
#barra{position: relative;
    top: 620px;
    width: 100%;
    height: 6px;
    background-color: black;
    z-index: -1;
    left: 0%;
    border-radius: 10px;}
#footer{position: relative;
    top: 620px;
    z-index: -1;
    text-align: center;
    height: 290px;}
#compra{
    width: 90%;
    height: 32px;
    background-color: lightgreen;
    border-style: solid;
    border-width: thin;
    border-color: green;
    border-radius: 5px;
}
#box1
{
    position: relative;
    float: right;
    border-style: solid;
    border-width: thin;
    border-color: lightgray;
    border-radius: 15px;
    background-color: whitesmoke;
    right: 1%;
    top: 1%;
    box-shadow: #dedede 0px 0px 8px;
}
#corpo{
    overflow-x: hidden;
    overflow-y: auto;
    text-align: center;
    position: absolute;
   height: 500px;}
    .ordine{
        position: relative;
    top: 1%;
        height: 110px;
    border-top-style: solid;
    border-top-width: thin;
    border-color: lightgray;}
    .tasti{border: none;
    background-color: palegreen;
    height: 29px;
    border-radius: 10px;
    color: black;
    font-family: sans-serif;
    font-weight: 700;
        width: 32px;
    }
    input[type=text]{width: 53px;
    right: 10px;
    text-align: center;
    border: none;
    background: transparent;
    font-size: larger;
    position: relative;
    top: -40px;}
    #elimina1
    {
        background: url(images/cestino.png);
    background-size: 23px;
    background-repeat: no-repeat;
    background-position-x: center;
    background-position-y: center;
    background-color: lightgreen;
    position: relative;
    top: 4px;
    }
    #elimina
    {
        background: url(images/cestino.png);
    background-size: 23px;
    background-repeat: no-repeat;
    background-position-x: center;
    background-position-y: center;
    background-color: lightgreen;
    position: relative;
    top: 4px;
    }
    #elimina:hover{background-color:greenyellow;}
    #compra1{background-color: lightgreen;}
    #compra1:hover{background-color:green;}
    .tasti:hover{color: darkgreen;
    background-color: greenyellow;}
    .info{position: relative;width: 129px;height: 69px;text-align: center;top: -110px;}
.ordine img{width: 100px;position: relative;    margin-top: 2px;}
#noname{display:none!important;}
@media screen and (max-width: 600px){h1{font-size: 21px;}#del{display:none!important;}
    #contratti {
    position: absolute;
    top: 748px;
    width: 100%;
    text-align: center;
}
#piu{top:-6px;}
}
@media screen and (min-width: 601px){#elimina1{display:none!important;}
    #contratti{position: absolute;
    top: 745px;
    width: 100%;
    text-align: center;}
}
h1{font-family: sans-serif;font-weight: 900;color: darkgreen;
}

</style>
<div id="corpo">
    <?
    if(isset($_SESSION['attiva'])){
        if($_SESSION['attiva']==true){
    $id=$_SESSION['id'];
    $read="SELECT Count( * ) AS Conta FROM Ordini INNER JOIN Utenti ON Ordini.id_utente=Utenti.ID_utente WHERE Ordini.stato='o' AND Ordini.id_utente='$id'";
                $raw=mysqli_query($conn,$read);
                $row= mysqli_fetch_array($raw);
                if ($row['Conta']==0 ){
                echo "<p id='none'>Non ci sono elementi nel carrello.</p><br><a href='index.php?par=9'><button id='compra1' style='border-style: none;width: 100px;height: 39px;border-radius: 11px;font-family: sans-serif;' value='Compra ora'>Compra ora!</button></a>";
                }
                else{
                        $s="SELECT SUM(Ordini.prezzoTotale) AS Somma, Count( * ) AS Conta FROM ((Prodotti INNER JOIN Ordini ON Ordini.id_articolo = Prodotti.ID_articolo)INNER JOIN Utenti ON Ordini.id_utente = Utenti.ID_utente) WHERE Ordini.stato='o' AND Ordini.id_utente='$id'";
                        $q=mysqli_query($conn,$s);
                        while($r=mysqli_fetch_array($q))
                        {
                        $spesa=number_format($r['Somma'],2);
                        $numeroA= $row['Conta'];
                        echo "<div id='box1'><p style='font-family: sans-serif;'>Totale provvisorio ($numeroA ordini): $spesa €</p><form action='index.php' METHOD='POST'><input type='hidden' name='spesa' value='$spesa'><input style='float: left;' type='checkbox' name='sped' value='1'><p style='float: right;margin-top: 0px;font-size: 13px;font-family: sans-serif;'>Spedisci ordine come regalo</p><br><input id='compra' type='submit' name='compra' value='Procedi all&rsquo;ordine'></form><br></div><div id='box2'><p style='font-family: sans-serif;'>Totale provvisorio ($numeroA ordini): $spesa €</p><form action='index.php' METHOD='POST'><input type='hidden' name='spesa' value='$spesa'><div style='width: fit-content;position: relative;left: 20%;'><input type='checkbox' name='sped' value='1'><p style='width: fit-content;float: right;margin-top: 3px;margin-right: 63px;font-size: 13px;font-family: sans-serif;'>Spedisci ordine come regalo</p></div><br><input id='compra' type='submit' name='compra' value='Procedi all&rsquo;ordine'></form><br></div>";
                        }
                        $s="SELECT Prodotti.immagine, Prodotti.nomeArticolo, Prodotti.nomeProdotto, Prodotti.tipo, Ordini.prezzoTotale, Ordini.quantitaAcquistata, Prodotti.prezzo, Prodotti.ID_articolo, Prodotti.pk, Prodotti.prezzoO, Prodotti.offerta FROM ((Prodotti INNER JOIN Ordini ON Ordini.id_articolo = Prodotti.ID_articolo)INNER JOIN Utenti ON Ordini.id_utente = Utenti.ID_utente) WHERE Ordini.stato='o' AND Ordini.id_utente='$id'";
                        $q=mysqli_query($conn,$s);
                        while($r=mysqli_fetch_array($q))
                        {
                        $quantitaA=$r['quantitaAcquistata'];
                        $articolo=$r['nomeArticolo'];
                        $nome=$r['nomeProdotto'];
                        $imm=$r['immagine'];
                        $stato=$r['tipo'];
                        $id=$r['ID_articolo'];
                        $pk=$r['pk'];
                        if($quantitaA<1){
                            echo "<form id='noname' name='noname' action='index.php' method='POST' ><input type='hidden' name='idA' value='".$id."'><input type='hidden' name='quantita1' id='quantita".$id."'value='$quantitaA' ><input type='submit' name='elimina' value=''></form><script>document.getElementById('noname').submit();</script>";}
                            if($r['offerta']==0)
                                $prezzo=number_format($r['prezzo'],2);
                            else $prezzo=number_format($r['prezzoO'],2);
                        $prezzoTotale=$r['prezzoTotale'];
                        if($pk!=0){
                            if($quantitaA!=1){
                                        echo "<div class='ordine'><img src='$imm' title='$articolo"." "."$nome'><div class='info' ><p style='font-family: sans-serif;'>$articolo"." "."$nome</p><p style='position: relative;top: -9px;font-family: caviar,sans-serif;'>$prezzo €/Kg</p><form style='width: fit-content;top: -15px;right: 6px;position: relative;' action='index.php' method='POST' ><input type='hidden' name='idA' value='".$id."'><input type='hidden' name='quantita' id='quantita".$id."'value='$quantitaA' readonly><input class='tasti' type='submit' style='font-size: x-large;padding:0px 10px;' name='dec' value='-' ></form><input type='text' name='quantita' id='quantita1".$id."' value='$quantitaA' readonly><form style='position: relative;width: fit-content;top: -69px;left: 79px;' action='index.php' method='POST' ><input type='hidden' name='idA' value='".$id."'><input type='hidden' name='quantita' id='quantita".$id."'value='$quantitaA' ><input class='tasti' type='submit' name='inc' value='+' id='piu' style='font-size: x-large;padding: 0px 10px;position: relative;'><input class='tasti' type='submit' id='del' name='elimina' value='Elimina' style='font-size: medium;padding: 0px 10px;left: 6px;width: 81px;top: -4px;position: relative;'><input class='tasti' type='submit' style='font-size: medium;padding: 0px 10px;left: 6px;width: 32px;top: 0px;position: relative;' id='elimina1' name='elimina' value=''></form></div></div>";
                                }
                                else{
                                        echo "<div class='ordine'><img src='$imm' title='$articolo"." "."$nome'><div class='info' ><p style='font-family: sans-serif;'>$articolo"." "."$nome</p><p style='position: relative;top: -9px;font-family: caviar,sans-serif;'>$prezzo €/Kg</p><form style='width: fit-content;top: -15px;right: 6px;position: relative;' action='index.php' method='POST' ><input type='hidden' name='idA' value='".$id."'><input type='hidden' name='quantita' id='quantita".$id."'value='$quantitaA' readonly><input class='tasti' type='submit' style='font-size: x-large;padding:0px 10px;' id='elimina' name='elimina' value=''></form><input type='text' name='quantita' id='quantita1".$id."' value='$quantitaA' readonly><form style='position: relative;width: fit-content;top: -69px;left: 79px;' action='index.php' method='POST' ><input type='hidden' name='idA' value='".$id."'><input type='hidden' name='quantita' id='quantita".$id."'value='$quantitaA' ><input class='tasti' type='submit' name='inc' value='+' id='piu' style='font-size: x-large;padding: 0px 10px;position: relative;'></form></div></div>";
                            }}
                            else
                            {
                                if($quantitaA!=1){
                                echo "<div class='ordine'><img src='$imm' title='$articolo"." "."$nome'><div class='info' ><p style='font-family: sans-serif;'>$articolo"." "."$nome</p><p style='position: relative;top: -9px;font-family: caviar,sans-serif;'>$prezzo €/Pz</p><form style='width: fit-content;top: -15px;right: 6px;position: relative;' action='index.php' method='POST' ><input type='hidden' name='idA' value='".$id."'><input type='hidden' name='quantita' id='quantita".$id."'value='$quantitaA' readonly><input class='tasti' type='submit' style='font-size: x-large;padding:0px 10px;' name='dec1' value='-' ></form><input type='text' name='quantita' id='quantita1".$id."' value='$quantitaA' readonly><form style='position: relative;width: fit-content;top: -69px;left: 79px;' action='index.php' method='POST' ><input type='hidden' name='idA' value='".$id."'><input type='hidden' name='quantita' id='quantita".$id."'value='$quantitaA' ><input class='tasti' type='submit' name='inc1' value='+' id='piu' style='font-size: x-large;padding: 0px 10px;position: relative;'><input class='tasti' type='submit' id='del' name='elimina' value='Elimina' style='font-size: medium;padding: 0px 10px;left: 6px;width: 81px;top: -4px;position: relative;'><input class='tasti' type='submit' style='font-size: medium;padding: 0px 10px;left: 6px;width: 32px;top: 0px;position: relative;' id='elimina1' name='elimina' value=''></form></div></div>";
                                }else
                                {
                                echo "<div class='ordine'><img src='$imm' title='$articolo"." "."$nome'><div class='info' ><p style='font-family: caviar,sans-serif;'>$articolo"." "."$nome</p><p style='position: relative;top: -9px;font-family: caviar,sans-serif;'>$prezzo €/Pz</p><form style='width: fit-content;top: -15px;right: 6px;position: relative;' action='index.php' method='POST' ><input type='hidden' name='idA' value='".$id."'><input type='hidden' name='quantita' id='quantita".$id."'value='$quantitaA' ><input class='tasti' type='submit' style='font-size: x-large;padding:0px 10px;' id='elimina' name='elimina' value=''></form><input type='text' name='quantita' id='quantita1".$id."' value='$quantitaA' readonly><form style='position: relative;width: fit-content;top: -69px;left: 79px;' action='index.php' method='POST' ><input type='hidden' name='idA' value='".$id."'><input type='hidden' name='quantita' id='quantita".$id."'value='$quantitaA' ><input name='inc1' class='tasti' type='submit' value='+' style='font-size: x-large;padding: 0px 10px;'></form></div></div>";
                                }
                        }
                        }
                        echo "<div id='chiudi' style='height: 1px;background-color: lightgray;'></div>";
                }
        }}else{?><script>window.location.replace("index.php?par=2");</script><?}
    ?>
</div>
<div id="barra"></div>
<div id="footer">
<ul id="linkD" style="list-style-type: none;width: fit-content;position: absolute;top: -10px;font-family: sans-serif;">
        <li style="font-weight: 600;margin-bottom: 5px;color: darkgreen;">Scopri di pi&ugrave;</li>
        <li><a class="lean" href="index.php?par=14">Chi siamo</a></li>
        <li><a class="lean" href="#">Fornitori</a></li>
        <li><a class="lean" href="index.php?par=10">Social</a></li>
        <li><a class="lean" href="index.php?par=7">Dove siamo</a></li>
</ul>
<ul id="linkS" style="list-style-type: none;width: fit-content;position: absolute;top: -10px;font-family: sans-serif;">
        <li style="font-weight: 600;margin-bottom: 5px;color: darkgreen;">Fai la spesa</li>
        <li><a class="lean" href="index.php?par=8">Registrati</a></li>
        <li><a class="lean" href="index.php?par=9&p=1">Prodotti</a></li>
        <li style="width: 145px;"><a class="lean" href="#">Scegli box predefinito</a></li>
</ul>
<a href="index.php?par=1"><img style="width: 100px;" src="images/logopc.gif" alt="logo"></a></div>
<div id="contratti">
<small>Copyright &copy; 2020 Francesco Depalo</small><br><small>Via Paolo sarpi, 61 - 00000 Milano (Mi) - Italia | Tel. 00000000000 | P.I. 00000000000 | All Rights Reserved</small>
<br><a href="https://www.iubenda.com/privacy-policy/00000000" class="iubenda-white no-brand iubenda-embed" title="Privacy Policy ">Privacy Policy</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>
<a href="https://www.iubenda.com/privacy-policy/00000000/cookie-policy" class="iubenda-white no-brand iubenda-embed" title="Cookie Policy ">Cookie Policy</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>
<a href="https://www.iubenda.com/termini-e-condizioni/00000000" class="iubenda-white iubenda-embed" title="Termini e Condizioni ">Termini e Condizioni</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>
</div>

<script>
function controllo(x)
{
    var quantita=document.getElementById("quantita"+x);
    if(quantita.value==0){return false;}else{return true;}
}
function decrementa(x)
{
var quantita=document.getElementById("quantita"+x);
if(quantita.value==0) y=0; else quantita.value--;
}
function incrementa(x)
{
var quantita=document.getElementById("quantita1"+x);
var quantita=document.getElementById("quantita"+x);
quantita.value++;
quantita1.value++;
}
</script>