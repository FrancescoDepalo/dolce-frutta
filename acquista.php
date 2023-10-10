<style>

@media screen and (min-width: 601px){#corpo{width:60%;left: 20%;}#linkD{margin-left: 21%;}#linkS{right: 25%;}
    #contratti{position: absolute;
    top: 745px;
    width: 100%;
    text-align: center;}
    #finestra {
    display:none;
position: fixed;
    z-index: 50;
    margin: 0 auto;
    width: 40%;
    height: 290px;
    background: #FFFFFF;
    color: #000;
    padding: 5%;
    border-radius: 8px;
    margin-top: -170px;
    overflow: auto;
    left: 25%;
}}
@media screen and (max-width: 600px){#corpo{width:90%;left:5%;}#linkD{margin-left: -20px;}#linkS{right:0px;}#contratti {
    position: absolute;
    top: 745px;
    width: 100%;
    text-align: center;
}
     #finestra {
display: none;
    position: fixed;
    z-index: 50;
    margin: 0 auto;
    width: 80%;
    height: 400px;
    background: #FFFFFF;
    color: #000;
    padding: 5%;
    border-radius: 8px;
    margin-top: -170px;
    margin-left: 3%;
    overflow: auto;
}
}
@media screen and (max-width:1144px)
{
    #riepilogo
    {
        height: 170px;
    border-bottom-style: solid;
    border-width: thin;
    float: right;
    border-color: darkseagreen;
    margin-right: 4px;
    margin-top: 134px;
    position: absolute;
    width: 100%;
    }
    #riepilogo table
    {
        float: right;
    margin-top: -63px;
    width: 160px;
    }
    #riepilogo .td1
    {
        font-size: smaller;
    }
    #riepilogo .td2
    {
        font-size: medium;
    }
    /*#button
    {
        width: 150px;
    float: right;
    height: 23px;
    margin-top: 41px;
    border-style: solid;
    border-color: darkgreen;
    border-width: thin;
    background: limegreen;
    border-radius: 8px;
    font-weight: 600;
    position: absolute;
    right: 8px;
    }*/
    #riepilogo h2
    {
        font-family: caviar;
    width: fit-content;
    font-size: larger;
    margin-left: 11px;
    }
    #consegna
    {
      padding-top: 5px;
    width: 100%;
    height: 118px;
    font-size: small;
    position: relative;
    font-family: caviar, sans-serif;
    border-bottom-width: thin;
    border-color: darkseagreen;
    border-bottom-style: solid;
    border-top-style: solid;
    border-width: thin;
    }
}
input[type=submit]{background-color: #4CAF50;
    color: #FFF;
    padding: 5px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;}
@media screen and (min-width:1145px)
{
    #consegna
    {
        width: 450px;height: 170px;border-top-style: solid;border-bottom-style: solid;margin-top: 10px;border-top-width: thin;border-bottom-width: thin;border-color: darkseagreen;
    }
    #riepilogo .td2
    {
        font-size: larger;
    }
    /*#button
    {
        width: 150px;height: 23px;margin-top: 5px;border-style: solid;border-color: darkgreen;border-width: thin;background: limegreen;border-radius: 8px;font-weight: 600;
    }*/
}
@media screen and (min-width:1145px) and (max-width: 1264px)
{
    #riepilogo
    {
        width: 217px;
        height: 220px;border-style: solid;border-radius: 10px;border-width: thin;float: right;border-color: lightgray;background-color: whitesmoke;box-shadow: #dedede 0px 0px 8px;margin-right: 4px;margin-top: 4px;
    }
}
@media screen and (min-width: 1265px)
{
    #riepilogo
    {
        width: 295px;
        height: 220px;border-style: solid;border-radius: 10px;border-width: thin;float: right;border-color: lightgray;background-color: whitesmoke;box-shadow: #dedede 0px 0px 8px;margin-right: 4px;margin-top: 4px;
    }
}
.lean{text-decoration: none;
    font-style: italic;
    color: gray;}
.lean:hover{color:black;}
form{position: relative;
    top: 0px;
    height: 71px;}
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
#corpo{
text-align: center;
    position: absolute;
    top: 105px;
  margin-top: 5px;
    height: 510px;
    overflow: auto;}
p{font-family: sans-serif;}
h1{font-style: italic;color: green;font-weight: bold;font-family: initial;}
#terms:active{box-shadow: inset 0 2px 4px rgba(0,0,0,0.25), 0 1px 2px rgba(0,0,0,0.05);}
#terms:hover{color: #333;}
#terms
{
background-color: #dddddd;
    color: #000000;
    margin-top: 5px;
    padding-left: 8px;
    background: #FFF;
    background-size: auto 14px;
    background-position: 7px 3px;
    background-position-x: 6px;
    background-position-y: 2px;
    text-decoration: none;
    color: #59636D;
    box-shadow: 0 1px 0 rgba(0,0,0,0.08);
    border-top-color: #D0D0D0;
    border-left-color: #C3C3C3;
    border-right-color: #C3C3C3;
    border-bottom-color: #B8B9BA;
    display: inline-block;
    padding: 0 8px;
    border: 1px;
    border-style: solid;
    border-radius: 3px;
    font-size: 11px;
    border: 1px solid #D2D3D3;
    line-height: 18px;
    font-weight: bold;
    height: 20px;
    width: 126px;
    position: relative;
    top: -8px;
}
#overlay {
    display:none;
text-align: center;
    margin: 0 auto;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: black;
    z-index: 49;
    opacity: .80;
    filter: alpha(opacity=80);
    overflow: hidden;
}
#finestra #chiudi{position: absolute;
    right: 6px;
    top: 9px;
    font-family: sans-serif;
    border-width: thin;
    background-color: #dddddd;
    margin-top: 5px;
    padding-left: 8px;
    background: #FFF;
    background-size: auto 14px;
    background-position: 7px 3px;
    background-position-x: 6px;
    background-position-y: 2px;
    text-decoration: none;
    color: #59636D;
    box-shadow: 0 1px 0 rgba(0,0,0,0.08);
    border-top-color: #D0D0D0;
    border-left-color: #C3C3C3;
    border-right-color: #C3C3C3;
    border-bottom-color: #B8B9BA;
    display: inline-block;
    padding: 0 8px;
    border-style: solid;
    border-radius: 13px;
    font-size: 11px;
    border: 1px solid #D2D3D3;
    line-height: 18px;
    font-weight: bold;
    height: 20px;
    width: 5px;}
#finestra p,li,address,span{color: #777;font-family: sans-serif;font-size: medium;}
#finestra h2{font-family: sans-serif;}


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
                ?><script>window.location.replace("index.php?par=9");</script><?
                }
                else{
                $s="SELECT SUM(Ordini.prezzoTotale) AS Somma, Utenti.costo FROM ((Prodotti INNER JOIN Ordini ON Ordini.id_articolo = Prodotti.ID_articolo)INNER JOIN Utenti ON Ordini.id_utente = Utenti.ID_utente) WHERE Ordini.stato='o' AND Ordini.id_utente='$id'";
                        $q=mysqli_query($conn,$s);
                        while($r=mysqli_fetch_array($q))
                        {
                        $spesa=number_format($r['Somma'],2);
                        if(!isset($_GET['par2']) || $_GET['par2']==0)
                        {
                            $cost=number_format($r['costo'],2);
                            $tot=$spesa+$cost;
                        }
                        if($_GET['par2']>=1)
                        {
                            $i=0;
                            $ilo="SELECT Count( Ordini.costoS ), Ordini.costoS AS Conta FROM Ordini WHERE Ordini.stato='o' AND Ordini.id_utente='$id' GROUP BY costoS";
                            $ilos=mysqli_query($conn,$ilo);
                            while($r=mysqli_fetch_array($ilos))
                            {
                                $i++;
                            }
                            if($i==1){
                                $sed="SELECT Ordini.costoS, Ordini.indirizzoP, Ordini.civicoP, Ordini.cittaP, Ordini.capP FROM ((Prodotti INNER JOIN Ordini ON Ordini.id_articolo = Prodotti.ID_articolo)INNER JOIN Utenti ON Ordini.id_utente = Utenti.ID_utente) WHERE Ordini.stato='o' AND Ordini.id_utente='$id'";
                                $qud=mysqli_query($conn,$sed);
                                $qad= mysqli_fetch_array($qud);
                                $indi= $qad['indirizzoP'];
                                $civi= $qad['civicoP'];
                                $cit= $qad['cittaP'];
                                $capp= $qad['capP'];
                                $cost=number_format($qad['costoS'],2);
                                $tot=$spesa+$cost;
                            }
                            else
                            {
                                $cost=number_format(0,2);
                                $tot=$spesa+$cost;
                            }
                        }
                        $tot1=number_format($tot,2);
                        //$ALIAS = 'ALIAS_WEB_00025150'; // Sostituire con il valore fornito da Nexi
                        $ALIAS = 'payment_3562501';
$CHIAVESEGRETA = '---';
$requestUrl = "https://ecommerce.nexi.it/ecomm/ecomm/DispatcherServlet";
$merchantServerUrl = "https://" . $_SERVER['HTTP_HOST'] . "/";

$codTrans = "TESTPS_" . date('YmdHis');
$divisa = "EUR";
$importo = $tot*100;

// Calcolo MAC
$mac = sha1('codTrans=' . $codTrans . 'divisa=' . $divisa . 'importo=' . $importo . $CHIAVESEGRETA);
// Parametri obbligatori
$obbligatori = array(
    'alias' => $ALIAS,
    'importo' => $importo,
    'divisa' => $divisa,
    'codTrans' => $codTrans,
    'url' => $merchantServerUrl . "esito.php",
    'url_back' => $merchantServerUrl . "index.php",
    'mac' => $mac,  
);

// Parametri facoltativi

 if(!isset($_GET['par2']) || $_GET['par2']==0)
                            {
$facoltativi = array(
    'Note1' => '0',
);
} else  if($_GET['par2']>=1)
                            {
$facoltativi = array(
    'Note1' => '1',
);
                            }

$requestParams = array_merge($obbligatori, $facoltativi);
                        echo "<div id='riepilogo'><h2 style='font-family: caviar;'>Riepilogo ordine</h2><br><table style='font-family: sans-serif;'><tr><td class='td1' style='text-align: initial;width: 150px;'>Totale articoli:</td><td class='td1' style='width: 90px;text-align: end;'>$spesa €</td></tr><tr><td class='td1' style='text-align: initial;width: 150px;'>Costo di spedizione:</td><td class='td1' style='width: 90px;text-align: end;'>$cost €</td></tr><td colspan='2' style='border-top-style: solid;border-top-width: thin;border-top-color: gray;'><span></span></td><tr><td class='td2' style='text-align: initial;width: 150px;text-align: initial;width: 150px;color: darkred;'>Totale ordine:</td><td class='td2' style='width: 90px;text-align: end;width: 150px;color: darkred;'>$tot1 €</td></tr></table>";
                         ?>
                        <form method='POST' onSubmit='return controllo();' action='<?php echo $requestUrl ?>'>
            <?php foreach ($requestParams as $name => $value) { ?>
                <input type='hidden' name='<?php echo $name; ?>' value='<?php echo htmlentities($value); ?>' />
            <?php } 
            if(!isset($_GET['par2']) || $_GET['par2']==0){
            ?>
            <input id='button' type='submit' name='acquista' value='Acquista ora!' /><?
            }
                if($_GET['par2']>=1)
                {
                    if($indi==NULL){}
                    else{echo "<input id='button' type='submit' name='acquista' value='Acquista ora!' />";}
                }
            ?>
        </form>
        
                        <?
                        echo "</div>";
                        }
                        $s="SELECT  Utenti.nome, Utenti.cognome, Utenti.indirizzo, Utenti.cap, Utenti.citta, Utenti.numeroCivico FROM Utenti WHERE Utenti.ID_utente='$id'";
                        $q=mysqli_query($conn,$s);
                        while($r=mysqli_fetch_array($q))
                        {
                            $nome=$r['nome'];
                            $cognome=$r['cognome'];
                            $indirizzo=$r['indirizzo'];
                            $cap=$r['cap'];
                            $citta=$r['citta'];
                            $civico=$r['numeroCivico'];
                            if(!isset($_GET['par2']) || $_GET['par2']==0)
                            {
                                echo "<div id='consegna'><div style='width: fit-content;margin-left: 11px;position: relative;font-family: caviar, sans-serif;'><h2>Indirizzo di consegna</h2></div><div style='text-align: end;width: fit-content;margin-right: 5px;margin-top: -45px;float: right;font-size: smaller;'><p>$nome $cognome</p><p>$indirizzo, $civico</p><p>$citta, $cap</p></div></div>";
                            }
                            else  if($_GET['par2']>=1)
                            {   
                                if($indi==NULL)
                                echo "<div id='consegna'><div style='width: fit-content;margin-left: 11px;position: relative;font-family: caviar, sans-serif;'><h2>Indirizzo di consegna</h2></div><div style='text-align: end;width: fit-content;margin-right: 5px;margin-top: -45px;float: right;font-size: smaller;'><form method='POST' onSubmit='return controllo1();' action='index.php'><p>$nome $cognome</p><input placeholder='Via' style='margin-right: 5px;' type='text' id='via' name='via'><input placeholder='NC' type='text' style='width: 30px;' id='civico' name='civico'><br><select  style='width: 222px;border:none;margin-top:5px;' id='citta' name='citta'><option value='' selected><h1>Scegli città</h1></option><option onclick='aggiungi(1);'  value='Giussano'>Giussano</option><option value='Mariano Comense'>Mariano Comense</option><option value='Carate Brianza'>Carate Brianza</option><option value='Verano Brianza'>Verano Brianza</option><option value='Arosio'>Arosio</option><option value='Inverigo'>Inverigo</option><option value='Lambrugo'>Lambrugo</option><option value='Seregno'>Seregno</option></select><br><input type='submit' id='indirizzo' style='    margin-top: 5px;' name='indirizzo' value='Aggiungi indirizzo'><input type='hidden' id='cap' name='cap'><input type='hidden' id='costo' name='costo'></form></div></div>";
                                else
                                echo "<div id='consegna'><div style='width: fit-content;margin-left: 11px;position: relative;font-family: caviar, sans-serif;'><h2>Indirizzo di consegna</h2></div><div style='text-align: end;width: fit-content;margin-right: 5px;margin-top: -45px;float: right;font-size: smaller;'><p>$nome $cognome</p><p>$indi, $civi</p><p>$cit, $capp</p></div></div>";
                            }
                        }
                ?>
        
        <? }}}else{ ?><script>window.location.replace("index.php?par=2");</script><?}?>
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
<br><a href="https://www.iubenda.com/privacy-policy/---" class="iubenda-white no-brand iubenda-embed" title="Privacy Policy ">Privacy Policy</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>
<a href="https://www.iubenda.com/privacy-policy/---/cookie-policy" class="iubenda-white no-brand iubenda-embed" title="Cookie Policy ">Cookie Policy</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>
<a href="https://www.iubenda.com/termini-e-condizioni/---" class="iubenda-white iubenda-embed" title="Termini e Condizioni ">Termini e Condizioni</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>
</div>
<script>
function mac(){
    <?
    $sas="UPDATE Utenti SET Utenti.mac='$mac' WHERE Utenti.ID_utente='$id'";
$qu=mysqli_query($conn,$sas);
    ?>}
function controllo(){
    var x=<?php echo $importo; ?>;
  if(x>2000) return true; 
  //else return true; 
  alert("La spesa minima è di 20 euro.");
  return false;
}
function aggiungi(x){
    if(x==1){ document.getElementById('cap').value="20833";}
}
function controllo1(){
    if(document.getElementById('citta').value=="") return false;
    if(document.getElementById('via').value=="") return false;
    if(document.getElementById('civico').value=="" || document.getElementById('civico').value.length>5) return false;
    if (document.getElementById("citta").value=="Giussano"){document.getElementById("cap").value="20833";document.getElementById("costo").value="0";}
    if (document.getElementById("citta").value=="Mariano Comense"){document.getElementById("cap").value="22066";document.getElementById("costo").value="2";}
    if (document.getElementById("citta").value=="Carate Brianza"){document.getElementById("cap").value="20841";document.getElementById("costo").value="2";}
    if (document.getElementById("citta").value=="Verano Brianza"){document.getElementById("cap").value="20843";document.getElementById("costo").value="2";}
    if (document.getElementById("citta").value=="Arosio"){document.getElementById("cap").value="22060";document.getElementById("costo").value="2";}
    if (document.getElementById("citta").value=="Inverigo"){document.getElementById("cap").value="22044";document.getElementById("costo").value="2.50";}
    if (document.getElementById("citta").value=="Lambrugo"){document.getElementById("cap").value="22045";document.getElementById("costo").value="3.00";}
    if (document.getElementById("citta").value=="Seregno"){document.getElementById("cap").value="22831";document.getElementById("costo").value="3.00";}
    return true;
}
</script>