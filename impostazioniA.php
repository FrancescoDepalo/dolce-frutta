<style>
    @media screen and (min-width: 601px){#corpo{width:60%;left: 20%;}#linkD{margin-left: 21%;}#linkS{right: 25%;}
    #contratti{position: absolute;
    top: 745px;
    text-align:center;
    width:100%;}
    #finestra {
display: none;
    position: fixed;
    z-index: 50;
    margin: 0 auto;
    width: 250px;
    height: 330px;
    background: #FFFFFF;
    color: #000;
    padding: 5%;
    border-radius: 8px;
    margin-left: 14%;
    overflow: auto;
    top: 50px;
}
}
@media screen and (max-width: 600px){#corpo{width:90%;left:5%;}#linkD{margin-left: -20px;}#linkS{right:0px;}#contratti {
    position: absolute;
    top: 748px;
    text-align:center;
    width:100%;
}
    #finestra {
    display: none;
    position: fixed;
    z-index: 50;
    margin: 0 auto;
    width: 55%;
    height: 330px;
    background: #FFFFFF;
    color: #000;
    padding: 5%;
    border-radius: 8px;
    margin-left: 12%;
    overflow: auto;
    top: 50px;
}
}
p{font-family: sans-serif;}
h1{font-style: italic;color: green;font-weight: bold;font-family: initial;}
#barra{position: relative;
    top: 620px;
    width: 100%;
    height: 6px;
    background-color: black;
    z-index: -1;
    left: 0%;
    border-radius: 10px;}
    .lean{text-decoration: none;
    font-style: italic;
    color: gray;}
.lean:hover{color:black;}
form{position: relative;
    top: -25px;
    height: 71px;}
#footer{position: relative;
    top: 620px;
    z-index: -1;
    text-align: center;
    height: 290px;}
#corpo{
text-align: center;
    position: absolute;
    top: 115px;
    margin-top: 0px;
    height: 510px;
    overflow: auto;}
    input[type=password],input[type=text], textarea {
  border: 1px solid #CCC;
  border-radius: 3px;
  box-sizing: border-box;
  margin-top: 3px;
  margin-bottom: 2px;
  resize: vertical;
 
}
label, #prodotto,input[type=password], textarea {
  
  box-sizing: border-box;
  width: 290px;
  
}
  form {
      
  font-family: Arial, Helvetica, sans-serif;
  overflow:visible;
}
input[type=submit],button {
    padding: 3px 10px;
  background-color: #4CAF50;
  color: #FFF;
  
  border: none;
  border-radius: 3px;
  margin-top:3px;
  cursor: pointer;
}
.consegne th{border-bottom-style: solid;
    border-bottom-width: thin;
    border-bottom-color: tan;}
input[type=submit]:hover,button:hover {
  background-color: #45a049;
  z-index:0;
}
#cerca{top: 35px;
    height: 280px;
    position: relative;
    overflow: auto;
    border-style: solid;
}
.prodotti{
    height: 35px;
    width: 90%;
    font-family: sans-serif;
    border-top-style: solid;
    border-width: thin;
    border-color: tan;
}
.prodotti td{
    border-bottom-style: solid;
    border-bottom-width: thin;
    border-bottom-color: tan;
}
#consegna{
    top: 36px;
    position: relative;
    overflow: auto;
    border-style: solid;
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
</style>
<div id="corpo">
 <?   if($_SESSION['attiva']!=true)
{
    ?><script>alert('Accesso negato!');window.location.replace("/index.php?par=1");</script><?
}
else{
         if($_SESSION['previlegio']==1){
    ?><script>alert('Accesso negato!');window.location.replace("/index.php?par=1");</script><?}else{
    $prodotto1=$_GET['prodotto'];
    ?>
    <form name="cerca" style="top: 15px;" action="index.php" method="GET" >
        <input type="hidden" value="17" name="par">
        <? echo "<input type='text' id='prodotto' style='padding: 10px;' placeholder='Cerca prodotto' name='prodotto' value='$prodotto1' >" ?>
        <input type="submit" style='padding: 10px 20px;' value="Cerca" name="ricerca" >
    </form>
    <div id="cerca">
        <? 
        if(!isset($_GET['ricerca'])){
            $s="SELECT * FROM Prodotti ORDER BY Prodotti.tipo, Prodotti.nomeArticolo";
                $q=mysqli_query($conn,$s);
                echo "<table class='prodotti'><form METHOD='POST' action='index.php'><tr><td><b>Nome prodotto</b></td><td><b>Prezzo</b></td><td><b>Prezzo offerta</b></td><td><b>Offerta</b></td><td><b>Pezzo</b></td><td><b>Disponibilità</b></td><td colspan='2'><input type='submit'  value='Aggiorna tutto' name='cambiaPPP'></td></tr>";
                while($r=mysqli_fetch_array($q))
                {
                    $id=$r['ID_articolo'];
                    $nomeP=$r['nomeArticolo'];
                    $prodotto=$r['nomeProdotto'];
                    $imm=$r['immagine'];
                    $stato=$r['tipo'];
                    $disponibile=$r['disponibile'];
                    $pk=$r['pk'];
                    $prezzo=number_format($r['prezzo'],2);
                    $prezzoO=number_format($r['prezzoO'],2);
                    $offerta=$r['offerta'];
                    if($disponibile==0){
                        if($pk==0)
                            if($offerta==0)
                                echo "<input type='hidden' value='$prodotto1' name='prodotto'><input type='hidden' value='$id' name='id1".$id."'><tr><th>$nomeP $prodotto</th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzo' name='prezzo".$id."'></th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzoO' name='prezzoO".$id."'></th><th><input type='checkbox'  value='1' name='offerta".$id."' ></th><th><input type='checkbox'  value='0' name='pk".$id."' checked></th><th><input type='checkbox'  value='0' name='disponibile".$id."' checked></th><th><input type='submit'  value='Aggiorna' name='cambiaP'><input type='submit'  style='position: absolute;width: 71px;margin-left: -71px;opacity: 0;' value='$id' name='cambiaPa'></th><th><input type='submit'  value='Elimina' onClick='return sicuro()' name='eliminaP'><input type='submit'  style='position: absolute;width: 64px;margin-left: -64px;opacity: 0;' value='$id' onClick='return sicuro()' name='eliminaPa'></th><tr>";
                            else
                                echo "<input type='hidden' value='$prodotto1' name='prodotto'><input type='hidden' value='$id' name='id1".$id."'><tr><th>$nomeP $prodotto</th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzo' name='prezzo".$id."'></th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzoO' name='prezzoO".$id."'></th><th><input type='checkbox'  value='1' name='offerta".$id."' checked></th><th><input type='checkbox'  value='0' name='pk".$id."' checked></th><th><input type='checkbox'  value='0' name='disponibile".$id."' checked></th><th><input type='submit'  value='Aggiorna' name='cambiaP'><input type='submit'  style='position: absolute;width: 71px;margin-left: -71px;opacity: 0;' value='$id' name='cambiaPa'></th><th><input type='submit'  value='Elimina' onClick='return sicuro()' name='eliminaP'><input type='submit'  style='position: absolute;width: 64px;margin-left: -64px;opacity: 0;' value='$id' onClick='return sicuro()' name='eliminaPa'></th><tr>";
                        else
                            if($offerta==0)
                                echo "<input type='hidden' value='$prodotto1' name='prodotto'><input type='hidden' value='$id' name='id1".$id."'><tr><th>$nomeP $prodotto</th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzo' name='prezzo".$id."'></th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzoO' name='prezzoO".$id."'></th><th><input type='checkbox'  value='1' name='offerta".$id."' ></th><th><input type='checkbox'  value='0' name='pk".$id."'></th><th><input type='checkbox'  value='0' name='disponibile".$id."' checked></th><th><input type='submit'  value='Aggiorna' name='cambiaP'><input type='submit'  style='position: absolute;width: 71px;margin-left: -71px;opacity: 0;' value='$id' name='cambiaPa'></th><th><input type='submit'  value='Elimina' onClick='return sicuro()' name='eliminaP'><input type='submit' onClick='return sicuro()'  style='position: absolute;width: 64px;margin-left: -64px;opacity: 0;' value='$id' name='eliminaPa'></th><tr>";
                            else
                                echo "<input type='hidden' value='$prodotto1' name='prodotto'><input type='hidden' value='$id' name='id1".$id."'><tr><th>$nomeP $prodotto</th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzo' name='prezzo".$id."'></th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzoO' name='prezzoO".$id."'></th><th><input type='checkbox'  value='1' name='offerta".$id."' checked></th><th><input type='checkbox'  value='0' name='pk".$id."'></th><th><input type='checkbox'  value='0' name='disponibile".$id."' checked></th><th><input type='submit'  value='Aggiorna' name='cambiaP'><input type='submit'  style='position: absolute;width: 71px;margin-left: -71px;opacity: 0;' value='$id' name='cambiaPa'></th><th><input type='submit'  value='Elimina' onClick='return sicuro()' name='eliminaP'><input type='submit' onClick='return sicuro()'  style='position: absolute;width: 64px;margin-left: -64px;opacity: 0;' value='$id' name='eliminaPa'></th><tr>";
                        
                    }
                    else{
                        if($pk==0)
                            if($offerta==0)
                                echo "<input type='hidden' value='$prodotto1' name='prodotto'><input type='hidden' value='$id' name='id1".$id."'><tr><th>$nomeP $prodotto</th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzo' name='prezzo".$id."'></th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzoO' name='prezzoO".$id."'></th><th><input type='checkbox'  value='1' name='offerta".$id."' ></th><th><input type='checkbox'  value='0' name='pk".$id."' checked></th><th><input type='checkbox'  value='0' name='disponibile".$id."'></th><th><input type='submit'  value='Aggiorna' name='cambiaP'><input type='submit'  value='$id' style='position: absolute;width: 71px;margin-left: -71px;opacity: 0;' name='cambiaPa'></th><th><input type='submit'  value='Elimina' onClick='return sicuro()' name='eliminaP'><input type='submit' onClick='return sicuro()'  style='position: absolute;width: 64px;margin-left: -64px;opacity: 0;' value='$id' name='eliminaPa'></th><tr>";
                            else
                                echo "<input type='hidden' value='$prodotto1' name='prodotto'><input type='hidden' value='$id' name='id1".$id."'><tr><th>$nomeP $prodotto</th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzo' name='prezzo".$id."'></th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzoO' name='prezzoO".$id."'></th><th><input type='checkbox'  value='1' name='offerta".$id."' checked></th><th><input type='checkbox'  value='0' name='pk".$id."' checked></th><th><input type='checkbox'  value='0' name='disponibile".$id."'></th><th><input type='submit'  value='Aggiorna' name='cambiaP'><input type='submit'  value='$id' style='position: absolute;width: 71px;margin-left: -71px;opacity: 0;' name='cambiaPa'></th><th><input type='submit'  value='Elimina' onClick='return sicuro()' name='eliminaP'><input type='submit' onClick='return sicuro()'  style='position: absolute;width: 64px;margin-left: -64px;opacity: 0;' value='$id' name='eliminaPa'></th><tr>";
                        else
                            if($offerta==0)
                                echo "<input type='hidden' value='$prodotto1' name='prodotto'><input type='hidden' value='$id' name='id1".$id."'><tr><th>$nomeP $prodotto</th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzo' name='prezzo".$id."'></th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzoO' name='prezzoO".$id."'></th><th><input type='checkbox'  value='1' name='offerta".$id."' ></th><th><input type='checkbox'  value='0' name='pk".$id."'></th><th><input type='checkbox'  value='0' name='disponibile".$id."'></th><th><input type='submit'  value='Aggiorna' name='cambiaP'><input type='submit'  value='$id' style='position: absolute;width: 71px;margin-left: -71px;opacity: 0;' name='cambiaPa'></th><th><input type='submit'  value='Elimina' onClick='return sicuro()' name='eliminaP'><input type='submit' onClick='return sicuro()'  style='position: absolute;width: 64px;margin-left: -64px;opacity: 0;' value='$id' name='eliminaPa'></th><tr>";
                            else
                                echo "<input type='hidden' value='$prodotto1' name='prodotto'><input type='hidden' value='$id' name='id1".$id."'><tr><th>$nomeP $prodotto</th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzo' name='prezzo".$id."'></th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzoO' name='prezzoO".$id."'></th><th><input type='checkbox'  value='1' name='offerta".$id."' checked></th><th><input type='checkbox'  value='0' name='pk".$id."'></th><th><input type='checkbox'  value='0' name='disponibile".$id."'></th><th><input type='submit'  value='Aggiorna' name='cambiaP'><input type='submit'  value='$id' style='position: absolute;width: 71px;margin-left: -71px;opacity: 0;' name='cambiaPa'></th><th><input type='submit'  value='Elimina' onClick='return sicuro()' name='eliminaP'><input type='submit' onClick='return sicuro()'  style='position: absolute;width: 64px;margin-left: -64px;opacity: 0;' value='$id' name='eliminaPa'></th><tr>";}
        }echo "<tr><th colspan=6></th></tr></form></table>";}
        else
        {
            if(isset($_GET['ricerca'])){
                if($_GET['prodotto']==''){
            $s="SELECT * FROM Prodotti ORDER BY Prodotti.tipo, Prodotti.nomeArticolo";
                $q=mysqli_query($conn,$s);
                echo "<table class='prodotti'><form METHOD='POST' action='index.php'><tr><td><b>Nome prodotto</b></td><td><b>Prezzo</b></td><td><b>Prezzo offerta</b></td><td><b>Offerta</b></td><td><b>Pezzo</b></td><td><b>Disponibilità</b></td><td colspan='2'><input type='submit'  value='Aggiorna tutto' name='cambiaPPP'></td></tr>";
                while($r=mysqli_fetch_array($q))
                {
                    $id=$r['ID_articolo'];
                    $nomeP=$r['nomeArticolo'];
                    $prodotto=$r['nomeProdotto'];
                    $imm=$r['immagine'];
                    $stato=$r['tipo'];
                    $disponibile=$r['disponibile'];
                    $pk=$r['pk'];
                    $prezzo=number_format($r['prezzo'],2);
                    $prezzoO=number_format($r['prezzoO'],2);
                    $offerta=$r['offerta'];
                    if($disponibile==0){
                        if($pk==0)
                            if($offerta==0)
                                echo "<input type='hidden' value='$prodotto1' name='prodotto'><input type='hidden' value='$id' name='id1".$id."'><tr><th>$nomeP $prodotto</th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzo' name='prezzo".$id."'></th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzoO' name='prezzoO".$id."'></th><th><input type='checkbox'  value='1' name='offerta".$id."' ></th><th><input type='checkbox'  value='0' name='pk".$id."' checked></th><th><input type='checkbox'  value='0' name='disponibile".$id."' checked></th><th><input type='submit'  value='Aggiorna' name='cambiaP'><input type='submit'  style='position: absolute;width: 71px;margin-left: -71px;opacity: 0;' value='$id' name='cambiaPa'></th><th><input type='submit'  value='Elimina' onClick='return sicuro()' name='eliminaP'><input type='submit'  style='position: absolute;width: 64px;margin-left: -64px;opacity: 0;' value='$id' onClick='return sicuro()' name='eliminaPa'></th><tr>";
                            else
                                echo "<input type='hidden' value='$prodotto1' name='prodotto'><input type='hidden' value='$id' name='id1".$id."'><tr><th>$nomeP $prodotto</th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzo' name='prezzo".$id."'></th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzoO' name='prezzoO".$id."'></th><th><input type='checkbox'  value='1' name='offerta".$id."' checked></th><th><input type='checkbox'  value='0' name='pk".$id."' checked></th><th><input type='checkbox'  value='0' name='disponibile".$id."' checked></th><th><input type='submit'  value='Aggiorna' name='cambiaP'><input type='submit'  style='position: absolute;width: 71px;margin-left: -71px;opacity: 0;' value='$id' name='cambiaPa'></th><th><input type='submit'  value='Elimina' onClick='return sicuro()' name='eliminaP'><input type='submit'  style='position: absolute;width: 64px;margin-left: -64px;opacity: 0;' value='$id' onClick='return sicuro()' name='eliminaPa'></th><tr>";
                        else
                            if($offerta==0)
                                echo "<input type='hidden' value='$prodotto1' name='prodotto'><input type='hidden' value='$id' name='id1".$id."'><tr><th>$nomeP $prodotto</th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzo' name='prezzo".$id."'></th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzoO' name='prezzoO".$id."'></th><th><input type='checkbox'  value='1' name='offerta".$id."' ></th><th><input type='checkbox'  value='0' name='pk".$id."'></th><th><input type='checkbox'  value='0' name='disponibile".$id."' checked></th><th><input type='submit'  value='Aggiorna' name='cambiaP'><input type='submit'  style='position: absolute;width: 71px;margin-left: -71px;opacity: 0;' value='$id' name='cambiaPa'></th><th><input type='submit'  value='Elimina' onClick='return sicuro()' name='eliminaP'><input type='submit' onClick='return sicuro()'  style='position: absolute;width: 64px;margin-left: -64px;opacity: 0;' value='$id' name='eliminaPa'></th><tr>";
                            else
                                echo "<input type='hidden' value='$prodotto1' name='prodotto'><input type='hidden' value='$id' name='id1".$id."'><tr><th>$nomeP $prodotto</th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzo' name='prezzo".$id."'></th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzoO' name='prezzoO".$id."'></th><th><input type='checkbox'  value='1' name='offerta".$id."' checked></th><th><input type='checkbox'  value='0' name='pk".$id."'></th><th><input type='checkbox'  value='0' name='disponibile".$id."' checked></th><th><input type='submit'  value='Aggiorna' name='cambiaP'><input type='submit'  style='position: absolute;width: 71px;margin-left: -71px;opacity: 0;' value='$id' name='cambiaPa'></th><th><input type='submit'  value='Elimina' onClick='return sicuro()' name='eliminaP'><input type='submit' onClick='return sicuro()'  style='position: absolute;width: 64px;margin-left: -64px;opacity: 0;' value='$id' name='eliminaPa'></th><tr>";
                        
                    }
                    else{
                        if($pk==0)
                            if($offerta==0)
                                echo "<input type='hidden' value='$prodotto1' name='prodotto'><input type='hidden' value='$id' name='id1".$id."'><tr><th>$nomeP $prodotto</th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzo' name='prezzo".$id."'></th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzoO' name='prezzoO".$id."'></th><th><input type='checkbox'  value='1' name='offerta".$id."' ></th><th><input type='checkbox'  value='0' name='pk".$id."' checked></th><th><input type='checkbox'  value='0' name='disponibile".$id."'></th><th><input type='submit'  value='Aggiorna' name='cambiaP'><input type='submit'  value='$id' style='position: absolute;width: 71px;margin-left: -71px;opacity: 0;' name='cambiaPa'></th><th><input type='submit'  value='Elimina' onClick='return sicuro()' name='eliminaP'><input type='submit' onClick='return sicuro()'  style='position: absolute;width: 64px;margin-left: -64px;opacity: 0;' value='$id' name='eliminaPa'></th><tr>";
                            else
                                echo "<input type='hidden' value='$prodotto1' name='prodotto'><input type='hidden' value='$id' name='id1".$id."'><tr><th>$nomeP $prodotto</th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzo' name='prezzo".$id."'></th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzoO' name='prezzoO".$id."'></th><th><input type='checkbox'  value='1' name='offerta".$id."' checked></th><th><input type='checkbox'  value='0' name='pk".$id."' checked></th><th><input type='checkbox'  value='0' name='disponibile".$id."'></th><th><input type='submit'  value='Aggiorna' name='cambiaP'><input type='submit'  value='$id' style='position: absolute;width: 71px;margin-left: -71px;opacity: 0;' name='cambiaPa'></th><th><input type='submit'  value='Elimina' onClick='return sicuro()' name='eliminaP'><input type='submit' onClick='return sicuro()'  style='position: absolute;width: 64px;margin-left: -64px;opacity: 0;' value='$id' name='eliminaPa'></th><tr>";
                        else
                            if($offerta==0)
                                echo "<input type='hidden' value='$prodotto1' name='prodotto'><input type='hidden' value='$id' name='id1".$id."'><tr><th>$nomeP $prodotto</th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzo' name='prezzo".$id."'></th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzoO' name='prezzoO".$id."'></th><th><input type='checkbox'  value='1' name='offerta".$id."' ></th><th><input type='checkbox'  value='0' name='pk".$id."'></th><th><input type='checkbox'  value='0' name='disponibile".$id."'></th><th><input type='submit'  value='Aggiorna' name='cambiaP'><input type='submit'  value='$id' style='position: absolute;width: 71px;margin-left: -71px;opacity: 0;' name='cambiaPa'></th><th><input type='submit'  value='Elimina' onClick='return sicuro()' name='eliminaP'><input type='submit' onClick='return sicuro()'  style='position: absolute;width: 64px;margin-left: -64px;opacity: 0;' value='$id' name='eliminaPa'></th><tr>";
                            else
                                echo "<input type='hidden' value='$prodotto1' name='prodotto'><input type='hidden' value='$id' name='id1".$id."'><tr><th>$nomeP $prodotto</th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzo' name='prezzo".$id."'></th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzoO' name='prezzoO".$id."'></th><th><input type='checkbox'  value='1' name='offerta".$id."' checked></th><th><input type='checkbox'  value='0' name='pk".$id."'></th><th><input type='checkbox'  value='0' name='disponibile".$id."'></th><th><input type='submit'  value='Aggiorna' name='cambiaP'><input type='submit'  value='$id' style='position: absolute;width: 71px;margin-left: -71px;opacity: 0;' name='cambiaPa'></th><th><input type='submit'  value='Elimina' onClick='return sicuro()' name='eliminaP'><input type='submit' onClick='return sicuro()'  style='position: absolute;width: 64px;margin-left: -64px;opacity: 0;' value='$id' name='eliminaPa'></th><tr>";}
                }echo "<tr><th colspan=6></th></tr></form></table>";}
                else
                {
                    $read="SELECT Count( * ) AS Conta FROM Prodotti WHERE Prodotti.nomeArticolo='".ucfirst($_GET['prodotto'])."'";
                    $raw=mysqli_query($conn,$read);
                    $row= mysqli_fetch_array($raw);
                    if ($row['Conta']==0 ){
                        $read="SELECT Count( * ) AS Conta FROM Prodotti WHERE Prodotti.nomeProdotto='".ucfirst($_GET['prodotto'])."'";
                        $raw=mysqli_query($conn,$read);
                        $row= mysqli_fetch_array($raw);
                        if ($row['Conta']==0 )
                        {
                            echo "<p>Non ho trovato nessun prodotto!</p>";
                        }
                        else{
                            $s="SELECT * FROM Prodotti WHERE nomeProdotto='".ucfirst($_GET['prodotto'])."' ORDER BY Prodotti.tipo, Prodotti.nomeArticolo";
                            $q=mysqli_query($conn,$s);
                            echo "<table class='prodotti'><form METHOD='POST' action='index.php'><tr><td><b>Nome prodotto</b></td><td><b>Prezzo</b></td><td><b>Prezzo offerta</b></td><td><b>Offerta</b></td><td><b>Pezzo</b></td><td><b>Disponibilità</b></td><td colspan='2'><input type='submit'  value='Aggiorna tutto' name='cambiaPPP'></td></tr>";
                            while($r=mysqli_fetch_array($q))
                            {
                        $id=$r['ID_articolo'];
                        $nomeP=$r['nomeArticolo'];
                        $prodotto=$r['nomeProdotto'];
                        $imm=$r['immagine'];
                    $stato=$r['tipo'];
                    $disponibile=$r['disponibile'];
                    $prezzo=number_format($r['prezzo'],2);
                    $pk=$r['pk'];
                    $prezzoO=number_format($r['prezzoO'],2);
                    $offerta=$r['offerta'];
                    if($disponibile==0){
                        if($pk==0)
                            if($offerta==0)
                                echo "<input type='hidden' value='$prodotto1' name='prodotto'><input type='hidden' value='$id' name='id1".$id."'><tr><th>$nomeP $prodotto</th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzo' name='prezzo".$id."'></th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzoO' name='prezzoO".$id."'></th><th><input type='checkbox'  value='1' name='offerta".$id."' ></th><th><input type='checkbox'  value='0' name='pk".$id."' checked></th><th><input type='checkbox'  value='0' name='disponibile".$id."' checked></th><th><input type='submit'  value='Aggiorna' name='cambiaP'><input type='submit'  style='position: absolute;width: 71px;margin-left: -71px;opacity: 0;' value='$id' name='cambiaPa'></th><th><input type='submit'  value='Elimina' onClick='return sicuro()' name='eliminaP'><input type='submit'  style='position: absolute;width: 64px;margin-left: -64px;opacity: 0;' value='$id' onClick='return sicuro()' name='eliminaPa'></th><tr>";
                            else
                                echo "<input type='hidden' value='$prodotto1' name='prodotto'><input type='hidden' value='$id' name='id1".$id."'><tr><th>$nomeP $prodotto</th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzo' name='prezzo".$id."'></th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzoO' name='prezzoO".$id."'></th><th><input type='checkbox'  value='1' name='offerta".$id."' checked></th><th><input type='checkbox'  value='0' name='pk".$id."' checked></th><th><input type='checkbox'  value='0' name='disponibile".$id."' checked></th><th><input type='submit'  value='Aggiorna' name='cambiaP'><input type='submit'  style='position: absolute;width: 71px;margin-left: -71px;opacity: 0;' value='$id' name='cambiaPa'></th><th><input type='submit'  value='Elimina' onClick='return sicuro()' name='eliminaP'><input type='submit'  style='position: absolute;width: 64px;margin-left: -64px;opacity: 0;' value='$id' onClick='return sicuro()' name='eliminaPa'></th><tr>";
                        else
                            if($offerta==0)
                                echo "<input type='hidden' value='$prodotto1' name='prodotto'><input type='hidden' value='$id' name='id1".$id."'><tr><th>$nomeP $prodotto</th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzo' name='prezzo".$id."'></th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzoO' name='prezzoO".$id."'></th><th><input type='checkbox'  value='1' name='offerta".$id."' ></th><th><input type='checkbox'  value='0' name='pk".$id."'></th><th><input type='checkbox'  value='0' name='disponibile".$id."' checked></th><th><input type='submit'  value='Aggiorna' name='cambiaP'><input type='submit'  style='position: absolute;width: 71px;margin-left: -71px;opacity: 0;' value='$id' name='cambiaPa'></th><th><input type='submit'  value='Elimina' onClick='return sicuro()' name='eliminaP'><input type='submit' onClick='return sicuro()'  style='position: absolute;width: 64px;margin-left: -64px;opacity: 0;' value='$id' name='eliminaPa'></th><tr>";
                            else
                                echo "<input type='hidden' value='$prodotto1' name='prodotto'><input type='hidden' value='$id' name='id1".$id."'><tr><th>$nomeP $prodotto</th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzo' name='prezzo".$id."'></th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzoO' name='prezzoO".$id."'></th><th><input type='checkbox'  value='1' name='offerta".$id."' checked></th><th><input type='checkbox'  value='0' name='pk".$id."'></th><th><input type='checkbox'  value='0' name='disponibile".$id."' checked></th><th><input type='submit'  value='Aggiorna' name='cambiaP'><input type='submit'  style='position: absolute;width: 71px;margin-left: -71px;opacity: 0;' value='$id' name='cambiaPa'></th><th><input type='submit'  value='Elimina' onClick='return sicuro()' name='eliminaP'><input type='submit' onClick='return sicuro()'  style='position: absolute;width: 64px;margin-left: -64px;opacity: 0;' value='$id' name='eliminaPa'></th><tr>";
                        
                    }
                    else{
                        if($pk==0)
                            if($offerta==0)
                                echo "<input type='hidden' value='$prodotto1' name='prodotto'><input type='hidden' value='$id' name='id1".$id."'><tr><th>$nomeP $prodotto</th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzo' name='prezzo".$id."'></th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzoO' name='prezzoO".$id."'></th><th><input type='checkbox'  value='1' name='offerta".$id."' ></th><th><input type='checkbox'  value='0' name='pk".$id."' checked></th><th><input type='checkbox'  value='0' name='disponibile".$id."'></th><th><input type='submit'  value='Aggiorna' name='cambiaP'><input type='submit'  value='$id' style='position: absolute;width: 71px;margin-left: -71px;opacity: 0;' name='cambiaPa'></th><th><input type='submit'  value='Elimina' onClick='return sicuro()' name='eliminaP'><input type='submit' onClick='return sicuro()'  style='position: absolute;width: 64px;margin-left: -64px;opacity: 0;' value='$id' name='eliminaPa'></th><tr>";
                            else
                                echo "<input type='hidden' value='$prodotto1' name='prodotto'><input type='hidden' value='$id' name='id1".$id."'><tr><th>$nomeP $prodotto</th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzo' name='prezzo".$id."'></th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzoO' name='prezzoO".$id."'></th><th><input type='checkbox'  value='1' name='offerta".$id."' checked></th><th><input type='checkbox'  value='0' name='pk".$id."' checked></th><th><input type='checkbox'  value='0' name='disponibile".$id."'></th><th><input type='submit'  value='Aggiorna' name='cambiaP'><input type='submit'  value='$id' style='position: absolute;width: 71px;margin-left: -71px;opacity: 0;' name='cambiaPa'></th><th><input type='submit'  value='Elimina' onClick='return sicuro()' name='eliminaP'><input type='submit' onClick='return sicuro()'  style='position: absolute;width: 64px;margin-left: -64px;opacity: 0;' value='$id' name='eliminaPa'></th><tr>";
                        else
                            if($offerta==0)
                                echo "<input type='hidden' value='$prodotto1' name='prodotto'><input type='hidden' value='$id' name='id1".$id."'><tr><th>$nomeP $prodotto</th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzo' name='prezzo".$id."'></th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzoO' name='prezzoO".$id."'></th><th><input type='checkbox'  value='1' name='offerta".$id."' ></th><th><input type='checkbox'  value='0' name='pk".$id."'></th><th><input type='checkbox'  value='0' name='disponibile".$id."'></th><th><input type='submit'  value='Aggiorna' name='cambiaP'><input type='submit'  value='$id' style='position: absolute;width: 71px;margin-left: -71px;opacity: 0;' name='cambiaPa'></th><th><input type='submit'  value='Elimina' onClick='return sicuro()' name='eliminaP'><input type='submit' onClick='return sicuro()'  style='position: absolute;width: 64px;margin-left: -64px;opacity: 0;' value='$id' name='eliminaPa'></th><tr>";
                            else
                                echo "<input type='hidden' value='$prodotto1' name='prodotto'><input type='hidden' value='$id' name='id1".$id."'><tr><th>$nomeP $prodotto</th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzo' name='prezzo".$id."'></th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzoO' name='prezzoO".$id."'></th><th><input type='checkbox'  value='1' name='offerta".$id."' checked></th><th><input type='checkbox'  value='0' name='pk".$id."'></th><th><input type='checkbox'  value='0' name='disponibile".$id."'></th><th><input type='submit'  value='Aggiorna' name='cambiaP'><input type='submit'  value='$id' style='position: absolute;width: 71px;margin-left: -71px;opacity: 0;' name='cambiaPa'></th><th><input type='submit'  value='Elimina' onClick='return sicuro()' name='eliminaP'><input type='submit' onClick='return sicuro()'  style='position: absolute;width: 64px;margin-left: -64px;opacity: 0;' value='$id' name='eliminaPa'></th><tr>";}
                            }echo "<tr><th colspan=5></th></tr></form></table>";}
                        }
                else{
                    $s="SELECT * FROM Prodotti WHERE nomeArticolo='".ucfirst($_GET['prodotto'])."' ORDER BY Prodotti.tipo, Prodotti.nomeArticolo";
                $q=mysqli_query($conn,$s);
                echo "<table class='prodotti'><form METHOD='POST' action='index.php'><tr><td><b>Nome prodotto</b></td><td><b>Prezzo</b></td><td><b>Prezzo offerta</b></td><td><b>Offerta</b></td><td><b>Pezzo</b></td><td><b>Disponibilità</b></td><td colspan='2'><input type='submit'  value='Aggiorna tutto' name='cambiaPPP'></td></tr>";
                while($r=mysqli_fetch_array($q))
                {
                    $id=$r['ID_articolo'];
                    $nomeP=$r['nomeArticolo'];
                    $prodotto=$r['nomeProdotto'];
                    $imm=$r['immagine'];
                    $stato=$r['tipo'];
                    $disponibile=$r['disponibile'];
                    $prezzo=number_format($r['prezzo'],2);
                    $pk=$r['pk'];
                    $prezzoO=number_format($r['prezzoO'],2);
                    $offerta=$r['offerta'];
                    if($disponibile==0){
                        if($pk==0)
                            if($offerta==0)
                                echo "<input type='hidden' value='$prodotto1' name='prodotto'><input type='hidden' value='$id' name='id1".$id."'><tr><th>$nomeP $prodotto</th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzo' name='prezzo".$id."'></th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzoO' name='prezzoO".$id."'></th><th><input type='checkbox'  value='1' name='offerta".$id."' ></th><th><input type='checkbox'  value='0' name='pk".$id."' checked></th><th><input type='checkbox'  value='0' name='disponibile".$id."' checked></th><th><input type='submit'  value='Aggiorna' name='cambiaP'><input type='submit'  style='position: absolute;width: 71px;margin-left: -71px;opacity: 0;' value='$id' name='cambiaPa'></th><th><input type='submit'  value='Elimina' onClick='return sicuro()' name='eliminaP'><input type='submit'  style='position: absolute;width: 64px;margin-left: -64px;opacity: 0;' value='$id' onClick='return sicuro()' name='eliminaPa'></th><tr>";
                            else
                                echo "<input type='hidden' value='$prodotto1' name='prodotto'><input type='hidden' value='$id' name='id1".$id."'><tr><th>$nomeP $prodotto</th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzo' name='prezzo".$id."'></th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzoO' name='prezzoO".$id."'></th><th><input type='checkbox'  value='1' name='offerta".$id."' checked></th><th><input type='checkbox'  value='0' name='pk".$id."' checked></th><th><input type='checkbox'  value='0' name='disponibile".$id."' checked></th><th><input type='submit'  value='Aggiorna' name='cambiaP'><input type='submit'  style='position: absolute;width: 71px;margin-left: -71px;opacity: 0;' value='$id' name='cambiaPa'></th><th><input type='submit'  value='Elimina' onClick='return sicuro()' name='eliminaP'><input type='submit'  style='position: absolute;width: 64px;margin-left: -64px;opacity: 0;' value='$id' onClick='return sicuro()' name='eliminaPa'></th><tr>";
                        else
                            if($offerta==0)
                                echo "<input type='hidden' value='$prodotto1' name='prodotto'><input type='hidden' value='$id' name='id1".$id."'><tr><th>$nomeP $prodotto</th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzo' name='prezzo".$id."'></th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzoO' name='prezzoO".$id."'></th><th><input type='checkbox'  value='1' name='offerta".$id."' ></th><th><input type='checkbox'  value='0' name='pk".$id."'></th><th><input type='checkbox'  value='0' name='disponibile".$id."' checked></th><th><input type='submit'  value='Aggiorna' name='cambiaP'><input type='submit'  style='position: absolute;width: 71px;margin-left: -71px;opacity: 0;' value='$id' name='cambiaPa'></th><th><input type='submit'  value='Elimina' onClick='return sicuro()' name='eliminaP'><input type='submit' onClick='return sicuro()'  style='position: absolute;width: 64px;margin-left: -64px;opacity: 0;' value='$id' name='eliminaPa'></th><tr>";
                            else
                                echo "<input type='hidden' value='$prodotto1' name='prodotto'><input type='hidden' value='$id' name='id1".$id."'><tr><th>$nomeP $prodotto</th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzo' name='prezzo".$id."'></th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzoO' name='prezzoO".$id."'></th><th><input type='checkbox'  value='1' name='offerta".$id."' checked></th><th><input type='checkbox'  value='0' name='pk".$id."'></th><th><input type='checkbox'  value='0' name='disponibile".$id."' checked></th><th><input type='submit'  value='Aggiorna' name='cambiaP'><input type='submit'  style='position: absolute;width: 71px;margin-left: -71px;opacity: 0;' value='$id' name='cambiaPa'></th><th><input type='submit'  value='Elimina' onClick='return sicuro()' name='eliminaP'><input type='submit' onClick='return sicuro()'  style='position: absolute;width: 64px;margin-left: -64px;opacity: 0;' value='$id' name='eliminaPa'></th><tr>";
                        
                    }
                    else{
                        if($pk==0)
                            if($offerta==0)
                                echo "<input type='hidden' value='$prodotto1' name='prodotto'><input type='hidden' value='$id' name='id1".$id."'><tr><th>$nomeP $prodotto</th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzo' name='prezzo".$id."'></th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzoO' name='prezzoO".$id."'></th><th><input type='checkbox'  value='1' name='offerta".$id."' ></th><th><input type='checkbox'  value='0' name='pk".$id."' checked></th><th><input type='checkbox'  value='0' name='disponibile".$id."'></th><th><input type='submit'  value='Aggiorna' name='cambiaP'><input type='submit'  value='$id' style='position: absolute;width: 71px;margin-left: -71px;opacity: 0;' name='cambiaPa'></th><th><input type='submit'  value='Elimina' onClick='return sicuro()' name='eliminaP'><input type='submit' onClick='return sicuro()'  style='position: absolute;width: 64px;margin-left: -64px;opacity: 0;' value='$id' name='eliminaPa'></th><tr>";
                            else
                                echo "<input type='hidden' value='$prodotto1' name='prodotto'><input type='hidden' value='$id' name='id1".$id."'><tr><th>$nomeP $prodotto</th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzo' name='prezzo".$id."'></th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzoO' name='prezzoO".$id."'></th><th><input type='checkbox'  value='1' name='offerta".$id."' checked></th><th><input type='checkbox'  value='0' name='pk".$id."' checked></th><th><input type='checkbox'  value='0' name='disponibile".$id."'></th><th><input type='submit'  value='Aggiorna' name='cambiaP'><input type='submit'  value='$id' style='position: absolute;width: 71px;margin-left: -71px;opacity: 0;' name='cambiaPa'></th><th><input type='submit'  value='Elimina' onClick='return sicuro()' name='eliminaP'><input type='submit' onClick='return sicuro()'  style='position: absolute;width: 64px;margin-left: -64px;opacity: 0;' value='$id' name='eliminaPa'></th><tr>";
                        else
                            if($offerta==0)
                                echo "<input type='hidden' value='$prodotto1' name='prodotto'><input type='hidden' value='$id' name='id1".$id."'><tr><th>$nomeP $prodotto</th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzo' name='prezzo".$id."'></th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzoO' name='prezzoO".$id."'></th><th><input type='checkbox'  value='1' name='offerta".$id."' ></th><th><input type='checkbox'  value='0' name='pk".$id."'></th><th><input type='checkbox'  value='0' name='disponibile".$id."'></th><th><input type='submit'  value='Aggiorna' name='cambiaP'><input type='submit'  value='$id' style='position: absolute;width: 71px;margin-left: -71px;opacity: 0;' name='cambiaPa'></th><th><input type='submit'  value='Elimina' onClick='return sicuro()' name='eliminaP'><input type='submit' onClick='return sicuro()'  style='position: absolute;width: 64px;margin-left: -64px;opacity: 0;' value='$id' name='eliminaPa'></th><tr>";
                            else
                                echo "<input type='hidden' value='$prodotto1' name='prodotto'><input type='hidden' value='$id' name='id1".$id."'><tr><th>$nomeP $prodotto</th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzo' name='prezzo".$id."'></th><th><input type='text' style='width: 60px;text-align: center;' value='$prezzoO' name='prezzoO".$id."'></th><th><input type='checkbox'  value='1' name='offerta".$id."' checked></th><th><input type='checkbox'  value='0' name='pk".$id."'></th><th><input type='checkbox'  value='0' name='disponibile".$id."'></th><th><input type='submit'  value='Aggiorna' name='cambiaP'><input type='submit'  value='$id' style='position: absolute;width: 71px;margin-left: -71px;opacity: 0;' name='cambiaPa'></th><th><input type='submit'  value='Elimina' onClick='return sicuro()' name='eliminaP'><input type='submit' onClick='return sicuro()'  style='position: absolute;width: 64px;margin-left: -64px;opacity: 0;' value='$id' name='eliminaPa'></th><tr>";}
        }echo "<tr><th colspan=6></th></tr></form></table>";}}}
                }?> </div><div id="consegna" style="margin-top: 15px;height: 280px;"><?
                    echo "<table style='    font-family: sans-serif;width: 90%;'class='consegne'><tr><th><b>Nome ordine</b></th><th><b>Data</b></th><th><b>Ora</b></th><td></td></tr>";
                    
                        $su="SELECT Ordini.id_utente, Ordini.nomeOrdine, Ordini.data, Ordini.orario FROM Ordini WHERE Ordini.stato='a' GROUP BY nomeOrdine,id_utente,data,orario ORDER BY data,orario";
                    $q=mysqli_query($conn,$su) or die(mysqli_error());
                    while($r=mysqli_fetch_array($q)){
                    $id=$r["id_utente"];
                    $ordine1=$r["nomeOrdine"];
                    $data=$r["data"];
                    $ora1=$r["orario"];
                    echo "<form METHOD='POST' action='index.php'><input type='hidden' value='$ordine1' name='consegna'><tr><td>Ordine $ordine1</td><td>$data</td><td><input type='time' value='$ora1' name='orario'></td><td><input type='submit'  value='Aggiungi orario'  name='ora'></td><td><input type='submit'  value='Consegnato'  name='consegnato'></td></tr></form>";}
                            
                
                echo "</table>";
    ?></div><? }}?>
    <button style="position: relative;top: 50px;" onclick="toggle()">Aggiungi un prodotto</button>
    <div id="overlay" onclick="toggle()"></div>
    <div id="finestra">
        <form style="top: 0px;" onSubmit="return Controlla2()" action="index.php" method="post" enctype="multipart/form-data">
        <input type="text" style="padding: 10px;width: 215px;border-style: solid;border-color: lightgray;border-radius: 3px;margin-top:-10px;" onblur="Controlla()" name="prodotto" id="prod1" class="prodotto" placeholder="Nome Prodotto"  value="" >
        <p id="testo" style="color:red;font-size: 13px;margin-top: 0px;"></p>
        <input type="text"  style="padding: 10px;width: 215px;border-style: solid;border-color: lightgray;border-radius: 3px;margin-top:-10px;" name="specificazione" id="prod2" class="prodotto" placeholder="Specificazione"  value=""><p id="testo1" style="color:red;font-size: 13px;margin-top: 0px;"></p>
        <input type="text" style="padding: 10px;width: 215px;border-style: solid;border-color: lightgray;border-radius: 3px;margin-top:-10px;" onblur="Controlla3()" name="prezzo" id="prod3" class="prodotto" placeholder="Prezzo"  value="" required><p id="testo2" style="color:red;font-size: 13px;margin-top: 0px;"></p>
        <select id="tipo" style="padding: 10px;width: 215px;margin-top: 3px;border-style: solid;border-color: lightgray;border-radius: 3px;margin-top:-10px;" name="tipo">
            <option value="1" selected>Frutta</option>
            <option value="2">Verdura</option>
            <option value="3">Vino</option>
            <option value="4">Generi alimentari</option>
            <option value="5">Grappa</option>
            <option value="6">Amaro</option>
            <option value="7">Spumante</option>
            <option value="8">Superalcolici</option>
        </select><br>
        <input type="hidden" name="disponibile" value="0">
        <select id="pk" style="padding: 10px;width: 215px;margin-top: 5px;border-style: solid;border-color: lightgray;border-radius: 3px;" name="pk">
            <option value="0"><h1>Pezzo</h1></option>
            <option value="1" selected>Kg</option>
        </select><br><br>
        Copertina:
        <input type="file" name="fileToUpload" id="fileToUpload" required><br>
        <input type="submit" onclick="return Controlla2()" value="Aggiungi prodotto" name="caricaP">
        </form>
    </div>
    <p style="padding-top:10px;"></p>
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
    function Controlla() {
  var x = document.getElementById("prod1").value;
  if(x.length==""){
  document.getElementById("prod1").style.borderColor="red";
  document.getElementById("prod1").style.borderWidth="medium";
  document.getElementById("testo").innerHTML="Inserisci prodotto valido";
  }
  else{
  document.getElementById("prod1").style.borderColor="lightGrey";
  document.getElementById("prod1").style.borderWidth="thin";
  document.getElementById("testo").innerHTML="";
  }
}
function Controlla3() 
{
        var p = document.getElementById("prod3").value;
        if(isNaN(p) || p.length==""){
          document.getElementById("prod3").style.borderColor="red";
          document.getElementById("prod3").style.borderWidth="medium";
          document.getElementById("testo2").innerHTML="Inserisci prezzo valido";
          }
        else{
          document.getElementById("prod3").style.borderColor="lightGrey";
          document.getElementById("prod3").style.borderWidth="thin";
          document.getElementById("testo2").innerHTML="";
          }
}
function Controlla2() 
{
   if(document.getElementById("prod1").value.length=="")
          { 
          document.getElementById("prod1").style.borderColor="red";
          document.getElementById("prod1").style.borderWidth="medium";
          document.getElementById("testo").innerHTML="Inserisci prodotto valido";
          return false;
          }
   if(document.getElementById("prod3").value.length=="" || isNaN(document.getElementById("prod3").value))
          { 
          document.getElementById("prod3").style.borderColor="red";
          document.getElementById("prod3").style.borderWidth="medium";
          document.getElementById("testo2").innerHTML="Inserisci prezzo valido";
          return false;
          }
   else return true;
}
function toggle(){
var overlay = document.getElementById('overlay');
if(overlay.style.display == "block"){
overlay.style.display = "none";
finestra.style.display = "none";
} else {
overlay.style.display = "block";
finestra.style.display = "block";
}
}
    function validaEmail(e) {
		if (e.length <= 2) {alert("Email non corretta!");return false;}
        else if(e.indexOf("@") == -1){alert("Manca la chiocciola!");return false;}
        else if(e.indexOf("@") == 1){alert("C'è solo una lettera prima della chiocciola!");return false;}
        else if(e.indexOf("@") != e.lastIndexOf("@")){alert("Email non corretta!");return false;}
        else if(e.indexOf(".") == -1){alert("Manca il punto!");return false;}
        else if(e.lastIndexOf(".") < e.indexOf("@")){alert("Email non corretta!");return false;}
        else {return true;}
}
function sicuro() {
var reimposta= confirm("Sicuro di voler cancellare l'articolo?");
return reimposta;
}
    </script>