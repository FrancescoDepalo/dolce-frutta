<style>
@media screen and (min-width: 601px){#linkD{margin-left: 21%;}#linkS{right: 25%;}#contratti{position: absolute;
    top: 745px;
    width:100%;
    text-align:center;}}
@media screen and (max-width: 600px){#linkD{margin-left: -20px;}#linkS{right:0px;}#contratti {
    position: absolute;
    top: 748px;
    width:100%;
    text-align:center;
}}
.lean{text-decoration: none;
    font-style: italic;
    color: gray;}
.lean:hover{color:black;}
form{position: relative;
    top: -25px;
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

    #prod h1{font-family: caviar,sans-serif;
    font-size: 15px;
    font-weight: 800;
            width: 98%;
    }
    #prod .icona{width:100px;}
    #prod p{font-family:caviar,fantasy;font-weight: bold;}
    #prod input[type=button],input[type=submit],button{border: none;
    background-color: #4CAF50;;
    height: 29px;
    border-radius: 3px;
    color: #FFF;
    font-family: sans-serif;
        cursor: pointer;
    }
    input[type=text]{width: 53px;
    text-align: center;
    border: none;
    background: transparent;
    font-size: larger;}
    #prod input[type=button]:hover,input[type=submit]:hover,button:hover{
   background-color: #45a049;}
@media screen and (max-width:600px){
    .finestra img{width: 339px;}
    #Prodotti{height:30px;}form{margin-left:0px;}
#corpo {text-align: center;position: absolute;left: 0%;top: 105px;margin-top: 0px;overflow: auto;height: 510px;width:100%;
}
#prod {position: relative;width: 160px;height: 270px;margin-left: 14px;margin-top: 10px;margin-bottom: 10px;background-color: whitesmoke;float: left;box-shadow: 0px 1px 5px 2px #dedede;
}
    #prod div:first-child{width: 38px;
    height: 0;
    border-left: 23px solid transparent;
    border-right: 23px solid transparent;
    border-bottom: 23px solid red;
    position: absolute;
    transform: rotate(45deg);
    left: 97px;
    top: 9px;}
    #prod div p{font-size: 9px;
    font-family: sans-serif;
    text-transform: uppercase;
        width: 60px;
    margin-left: -10px;
    margin-top: 7px;
    color: white;
    }
}
@media screen and (min-width:601px){#corpo{text-align: center;position: absolute;width: 60%;left: 20%;top: 105px;margin-top: 0px;overflow: auto;height: 510px;}#prod{position: relative;width: 171px;height: 260px;margin-left: 25px;margin-top: 10px;margin-bottom: 10px;background-color: whitesmoke;float: left;box-shadow: 0px 1px 5px 2px #dedede;}
    .finestra img{width: 500px;}
    #prod div:first-child{width: 51px;
    height: 0;
    border-left: 23px solid transparent;
    border-right: 23px solid transparent;
    border-bottom: 23px solid red;
    position: absolute;
    transform: rotate(45deg);
    left: 97px;
    top: 15px;}
    #prod div p{color: white;
    font-size: 10px;
    font-family: sans-serif;
    text-transform: uppercase;
        width: 70px;
    margin-left: -9px;
    margin-top: 6px;
    }
}
.finestra {
        display: none;
    text-align: center;
    margin: 0 auto;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 49;
    opacity: 1;
    overflow: hidden;
}
.finestra img{margin-top: 40px;}
.overlay {
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
<?
include("db_con.php");
if(!isset($_GET['p'])){
if($_GET['p']=='')
{
$s="SELECT * FROM Prodotti ORDER BY Prodotti.tipo, Prodotti.nomeArticolo";
$q=mysqli_query($conn,$s);
while($r=mysqli_fetch_array($q))
{
$id=$r['ID_articolo'];
$nomeP=$r['nomeArticolo'];
$prodotto=$r['nomeProdotto'];
$imm=$r['immagine'];
$stato=$r['tipo'];
$dispo=$r['disponibile'];
$pk=$r['pk'];
$prezzoO=number_format($r['prezzoO'],2);
$offerta=$r['offerta'];
$prezzo=number_format($r['prezzo'],2);
if(!isset($_SESSION['attiva'])){
if($_SESSION['attiva']=='')
{
        if($dispo==0){
            if($pk!=0){
                if($offerta==0){
                    echo "<div id='prod'><h1>$nomeP $prodotto</h1><img src='$imm' class='icona' onmousedown='toggle($id)' title='$prodotto'><p>$prezzo €/Kg</p>
                    <a href='index.php?par=2'><button type='button'>Compra ora!</button></a>
                     <div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
                else{
                    echo "<div id='prod'><div><p>In offerta</p></div><h1>$nomeP $prodotto</h1><img class='icona' src='$imm' onmousedown='toggle($id)' title='$prodotto'><p style='position: absolute;left: 35px;top: 130px;font-size: 13px;text-decoration: line-through;'>$prezzo</p><p>$prezzoO €/Kg</p><a href='index.php?par=2'><button type='button'>Compra ora!</button></a><div class='overlay' id='overlay$id' onClick='toggle($id)'></div> <div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
            }
            else{
                if($offerta==0){
                    echo "<div id='prod'><h1>$nomeP $prodotto</h1><img class='icona' src='$imm' onmousedown='toggle($id)' title='$prodotto'><p>$prezzo €/Pz</p>
                    <a href='index.php?par=2'><button type='button'>Compra ora!</button></a><div class='overlay' id='overlay$id' onClick='toggle($id)'></div> <div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
                else{
                    echo "<div id='prod'><div><p>In offerta</p></div><h1>$nomeP $prodotto</h1><img class='icona' src='$imm' onmousedown='toggle($id)' title='$prodotto'><p style='position: absolute;left: 35px;top: 130px;font-size: 13px;text-decoration: line-through;'>$prezzo</p><p>$prezzoO €/Pz</p><a href='index.php?par=2'><button type='button'>Compra ora!</button></a> <div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
            }
        }
}}
else
{
        if($dispo==0){
            if($pk!=0){
                if($offerta==1){
                        echo "<div id='prod'><div><p>In offerta</p></div><h1>$nomeP $prodotto</h1><img class='icona' src='$imm' onmousedown='toggle($id)' title='$prodotto'><p style='position: absolute;left: 35px;top: 123px;font-size: 13px;text-decoration: line-through;'>$prezzo</p><p style='position: relative;top: -15px;'>$prezzoO €/Kg</p>
                              <form action='index.php' method='POST' onSubmit='return controllo($id)' ><input type='hidden' name='idA' value='".$id."'><input type='button' style='width: 30px;padding:0px 10px;' value='-' onClick='decrementa1(".$id.");'><input type='text' name='quantita' id='quantita".$id."'
                                value='0' readonly><input type='button' value='+' style='width: 30px;padding: 0px 10px;' onClick='incrementa1(".$id.");'>
                            <input type='submit' style='position: relative;top: 8px;' name='aggiungi1' value='Aggiungi al carrello!'></form><div class='overlay' id='overlay$id' onClick='toggle($id)'></div>
                                        <div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
                else{
                        echo "<div id='prod'><h1>$nomeP $prodotto</h1><img src='$imm' class='icona' onmousedown='toggle($id)' title='$prodotto'><p style='position: relative;top: -15px;'>$prezzo €/Kg</p>
                              <form action='index.php' method='POST' onSubmit='return controllo($id)' ><input type='hidden' name='idA' value='".$id."'><input type='button' style='width: 30px;padding:0px 10px;' value='-' onClick='decrementa1(".$id.");'><input type='text' name='quantita' id='quantita".$id."'
                                value='0' readonly><input type='button' value='+' style='width: 30px;padding: 0px 10px;' onClick='incrementa1(".$id.");'>
                            <input type='submit' style='position: relative;top: 8px;' name='aggiungi' value='Aggiungi al carrello!'></form><div class='overlay' id='overlay$id' onClick='toggle($id)'></div> <div class='finestra' onClick='toggle($id)' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
            }
        else{
            if($offerta==0){
            echo "<div id='prod'><h1>$nomeP $prodotto</h1><img src='$imm' class='icona' onmousedown='toggle($id)' title='$prodotto'><p style='position: relative;top: -15px;'>$prezzo €/Pz</p>
<form action='index.php' method='POST' onSubmit='return controllo($id)' ><input type='hidden' name='idA' value='".$id."'><input type='button' style='width: 30px;padding:0px 10px;' value='-' onClick='decrementa(".$id.");'>
<input type='text' name='quantita' id='quantita".$id."'
value='0' readonly><input type='button' value='+' style='width: 30px;padding: 0px 10px;' onClick='incrementa(".$id.");'>
<input type='submit' style='position: relative;top: 8px;' name='aggiungi' value='Aggiungi al carrello!'></form><div class='overlay' id='overlay$id' onClick='toggle($id)'></div> <div class='finestra' onClick='toggle($id)' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
                else{
                    echo "<div id='prod'><div><p>In offerta</p></div><h1>$nomeP $prodotto</h1><img class='icona' src='$imm' onmousedown='toggle($id)' title='$prodotto'><p style='position: absolute;left: 35px;top: 123px;font-size: 13px;text-decoration: line-through;'>$prezzo</p><p style='position: relative;top: -15px;'>$prezzoO €/Pz</p>
                              <form action='index.php' method='POST' onSubmit='return controllo($id)' ><input type='hidden' name='idA' value='".$id."'><input type='button' style='width: 30px;padding:0px 10px;' value='-' onClick='decrementa(".$id.");'><input type='text' name='quantita' id='quantita".$id."'
                                value='0' readonly><input type='button' value='+' style='width: 30px;padding: 0px 10px;' onClick='incrementa(".$id.");'>
                            <input type='submit' style='position: relative;top: 8px;' name='aggiungi1' value='Aggiungi al carrello!'></form> <div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div class='finestra' onClick='toggle($id)' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
        }
  
}
}}}}

if(isset($_GET['p'])){
if($_GET['p']=='')
{
$s="SELECT * FROM Prodotti ORDER BY Prodotti.tipo, Prodotti.nomeArticolo";
$q=mysqli_query($conn,$s);
while($r=mysqli_fetch_array($q))
{
$id=$r['ID_articolo'];
$nomeP=$r['nomeArticolo'];
$prodotto=$r['nomeProdotto'];
$imm=$r['immagine'];
$stato=$r['tipo'];
$dispo=$r['disponibile'];
$pk=$r['pk'];
$prezzoO=number_format($r['prezzoO'],2);
$offerta=$r['offerta'];
$prezzo=number_format($r['prezzo'],2);
if(!isset($_SESSION['attiva'])){
if($_SESSION['attiva']=='')
{                
     if($dispo==0){
            if($pk!=0){
                if($offerta==0){
                    echo "<div id='prod'><h1>$nomeP $prodotto</h1><img class='icona' onmousedown='toggle($id)' src='$imm' title='$prodotto'><p>$prezzo €/Kg</p>
                    <a href='index.php?par=2'><button type='button'>Compra ora!</button></a><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
                else{
                    echo "<div id='prod'><div><p>In offerta</p></div><h1>$nomeP $prodotto</h1><img onmousedown='toggle($id)' class='icona' src='$imm' title='$prodotto'><p style='position: absolute;left: 35px;top: 130px;font-size: 13px;text-decoration: line-through;'>$prezzo</p><p>$prezzoO €/Kg</p>
                    <a href='index.php?par=2'><button type='button'>Compra ora!</button></a><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
            }
            else{
                if($offerta==0){
                    echo "<div id='prod'><h1>$nomeP $prodotto</h1><img class='icona' onmousedown='toggle($id)' src='$imm' title='$prodotto'><p>$prezzo €/Pz</p>
                    <a href='index.php?par=2'><button type='button'>Compra ora!</button></a><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
                else{
                    echo "<div id='prod'><h1>$nomeP $prodotto</h1><img class='icona' src='$imm' title='$prodotto'><p>$prezzo</p><p>$prezzoO €/Pz</p>
                    <a href='index.php?par=2'><button type='button'>Compra ora!</button></a><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
            }
        }
}}
else
{
    if($dispo==0){
            if($pk!=0){
                if($offerta==1){
                        echo "<div id='prod'><div><p>In offerta</p></div><h1>$nomeP $prodotto</h1><img onmousedown='toggle($id)' class='icona' src='$imm' title='$prodotto'><p style='position: absolute;left: 35px;top: 123px;font-size: 13px;text-decoration: line-through;'>$prezzo</p><p style='position: relative;top: -10px;'>$prezzoO €/Kg</p>
                              <form action='index.php' method='POST' onSubmit='return controllo($id)' ><input type='hidden' name='idA' value='".$id."'><input type='button' style='width: 30px;padding:0px 10px;' value='-' onClick='decrementa1(".$id.");'><input type='text' name='quantita' id='quantita".$id."'
                                value='0' readonly><input type='button' value='+' style='width: 30px;padding: 0px 10px;' onClick='incrementa1(".$id.");'>
                            <input type='submit' style='position: relative;top: 8px;' name='aggiungi1' value='Aggiungi al carrello!'></form><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
                else{
                        echo "<div id='prod'><h1>$nomeP $prodotto</h1><img class='icona' src='$imm' onmousedown='toggle($id)' title='$prodotto'><p style='position: relative;top: -15px;'>$prezzo €/Kg</p>
                              <form action='index.php' method='POST' onSubmit='return controllo($id)' ><input type='hidden' name='idA' value='".$id."'><input type='button' style='width: 30px;padding:0px 10px;' value='-' onClick='decrementa1(".$id.");'><input type='text' name='quantita' id='quantita".$id."'
                                value='0' readonly><input type='button' value='+' style='width: 30px;padding: 0px 10px;' onClick='incrementa1(".$id.");'>
                            <input type='submit' style='position: relative;top: 8px;' name='aggiungi' value='Aggiungi al carrello!'></form><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
            }
        else{
            if($offerta==0){
            echo "<div id='prod'><h1>$nomeP $prodotto</h1><img onmousedown='toggle($id)' class='icona' src='$imm' title='$prodotto'><p style='position: relative;top: -15px;'>$prezzo €/Pz</p><form action='index.php' method='POST' onSubmit='return controllo($id)' ><input type='hidden' name='idA' value='".$id."'><input type='button' style='width: 30px;padding:0px 10px;' value='-' onClick='decrementa(".$id.");'><input type='text' name='quantita' id='quantita".$id."' value='0' readonly><input type='button' value='+' style='width: 30px;padding: 0px 10px;' onClick='incrementa(".$id.");'><input type='submit' style='position: relative;top: 8px;' name='aggiungi' value='Aggiungi al carrello!'></form><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
                else{
                    echo "<div id='prod'><div><p>In offerta</p></div><h1>$nomeP $prodotto</h1><img onmousedown='toggle($id)' src='$imm' class='icona' title='$prodotto'><p style='position: absolute;left: 35px;top: 123px;font-size: 13px;text-decoration: line-through;'>$prezzo</p><p style='position: relative;top: -15px;'>$prezzoO €/Pz</p>
                              <form action='index.php' method='POST' onSubmit='return controllo($id)' ><input type='hidden' name='idA' value='".$id."'><input type='button' style='width: 30px;padding:0px 10px;' value='-' onClick='decrementa(".$id.");'><input type='text' name='quantita' id='quantita".$id."'
                                value='0' readonly><input type='button' value='+' style='width: 30px;padding: 0px 10px;' onClick='incrementa(".$id.");'>
                            <input type='submit' style='position: relative;top: 8px;' name='aggiungi1' value='Aggiungi al carrello!'></form><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
        }}}}}
if($_GET['p']=='1')
{
$s="SELECT * FROM Prodotti WHERE Prodotti.tipo=1 ORDER BY Prodotti.nomeArticolo";
$q=mysqli_query($conn,$s);
while($r=mysqli_fetch_array($q))
{
$nomeP=$r['nomeArticolo'];
$id=$r['ID_articolo'];
$prodotto=$r['nomeProdotto'];
$imm=$r['immagine'];
$dispo=$r['disponibile'];
$pk=$r['pk'];
$prezzoO=number_format($r['prezzoO'],2);
$offerta=$r['offerta'];
$prezzo=number_format($r['prezzo'],2);
if(!isset($_SESSION['attiva'])){
if($_SESSION['attiva']=='')
{    
    if($dispo==0){
            if($pk!=0){
                if($offerta==0){
                    echo "<div id='prod'><h1>$nomeP $prodotto</h1><img onmousedown='toggle($id)' class='icona' src='$imm' title='$prodotto'><p>$prezzo €/Kg</p>
                    <a href='index.php?par=2'><button type='button'>Compra ora!</button></a><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
                else{
                    echo "<div id='prod'><div><p>In offerta</p></div><h1>$nomeP $prodotto</h1><img onmousedown='toggle($id)' class='icona' src='$imm' title='$prodotto'><p style='position: absolute;left: 35px;top: 130px;font-size: 13px;text-decoration: line-through;'>$prezzo</p><p>$prezzoO €/Kg</p>
                    <a href='index.php?par=2'><button type='button'>Compra ora!</button></a><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
            }
            else{
                if($offerta==0){
                    echo "<div id='prod'><h1>$nomeP $prodotto</h1><img onmousedown='toggle($id)' class='icona' src='$imm' title='$prodotto'><p>$prezzo €/Pz</p>
                    <a href='index.php?par=2'><button type='button'>Compra ora!</button></a><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
                else{
                    echo "<div id='prod'><h1>$nomeP $prodotto</h1><img onmousedown='toggle($id)' src='$imm' title='$prodotto'><p>$prezzo</p><p>$prezzoO €/Pz</p>
                    <a href='index.php?par=2'><button type='button'>Compra ora!</button></a><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
            }
        }}}
else
{
    if($dispo==0){
            if($pk!=0){
                if($offerta==1){
                        echo "<div id='prod'><div><p>In offerta</p></div><h1>$nomeP $prodotto</h1><img onmousedown='toggle($id)' class='icona' src='$imm' title='$prodotto'><p style='position: absolute;left: 35px;top: 123px;font-size: 13px;text-decoration: line-through;'>$prezzo</p><p style='position: relative;top: -10px;'>$prezzoO €/Kg</p>
                              <form action='index.php' method='POST' onSubmit='return controllo($id)' ><input type='hidden' name='idA' value='".$id."'><input type='button' style='width: 30px;padding:0px 10px;' value='-' onClick='decrementa1(".$id.");'><input type='text' name='quantita' id='quantita".$id."'
                                value='0' readonly><input type='button' value='+' style='width: 30px;padding: 0px 10px;' onClick='incrementa1(".$id.");'>
                            <input type='submit' style='position: relative;top: 8px;' name='aggiungi1' value='Aggiungi al carrello!'></form><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
                else{
                        echo "<div id='prod'><h1>$nomeP $prodotto</h1><img class='icona' onmousedown='toggle($id)' src='$imm' title='$prodotto'><p style='position: relative;top: -15px;'>$prezzo €/Kg</p>
                              <form action='index.php' method='POST' onSubmit='return controllo($id)' ><input type='hidden' name='idA' value='".$id."'><input type='button' style='width: 30px;padding:0px 10px;' value='-' onClick='decrementa1(".$id.");'><input type='text' name='quantita' id='quantita".$id."'
                                value='0' readonly><input type='button' value='+' style='width: 30px;padding: 0px 10px;' onClick='incrementa1(".$id.");'>
                            <input type='submit' style='position: relative;top: 8px;' name='aggiungi' value='Aggiungi al carrello!'></form><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
            }
        else{
            if($offerta==0){
            echo "<div id='prod'><h1>$nomeP $prodotto</h1><img src='$imm' onmousedown='toggle($id)' class='icona' title='$prodotto'><p style='position: relative;top: -15px;'>$prezzo €/Pz</p>
<form action='index.php' method='POST' onSubmit='return controllo($id)' ><input type='hidden' name='idA' value='".$id."'><input type='button' style='width: 30px;padding:0px 10px;' value='-' onClick='decrementa(".$id.");'>
<input type='text' name='quantita' id='quantita".$id."'
value='0' readonly><input type='button' value='+' style='width: 30px;padding: 0px 10px;' onClick='incrementa(".$id.");'>
<input type='submit' style='position: relative;top: 8px;' name='aggiungi' value='Aggiungi al carrello!'></form><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
                else{
                    echo "<div id='prod'><div><p>In offerta</p></div><h1>$nomeP $prodotto</h1><img onmousedown='toggle($id)' class='icona' src='$imm' title='$prodotto'><p style='position: absolute;left: 35px;top: 123px;font-size: 13px;text-decoration: line-through;'>$prezzo</p><p style='position: relative;top: -10px;'>$prezzoO €/Pz</p>
                              <form action='index.php' method='POST' onSubmit='return controllo($id)' ><input type='hidden' name='idA' value='".$id."'><input type='button' style='width: 30px;padding:0px 10px;' value='-' onClick='decrementa(".$id.");'><input type='text' name='quantita' id='quantita".$id."'
                                value='0' readonly><input type='button' value='+' style='width: 30px;padding: 0px 10px;' onClick='incrementa(".$id.");'>
                            <input type='submit' style='position: relative;top: 8px;' name='aggiungi1' value='Aggiungi al carrello!'></form><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
        }}}
}}}
if($_GET['p']=='2')
{
    
$s="SELECT * FROM Prodotti WHERE Prodotti.tipo=2 ORDER BY Prodotti.nomeArticolo";
$q=mysqli_query($conn,$s);
while($r=mysqli_fetch_array($q))
{
$nomeP=$r['nomeArticolo'];
$id=$r['ID_articolo'];
$prodotto=$r['nomeProdotto'];
$imm=$r['immagine'];
$dispo=$r['disponibile'];
$pk=$r['pk'];
$prezzoO=number_format($r['prezzoO'],2);
$offerta=$r['offerta'];
$prezzo=number_format($r['prezzo'],2);
if(!isset($_SESSION['attiva'])){
if($_SESSION['attiva']=='')
{             
    if($dispo==0){
            if($pk!=0){
                if($offerta==0){
                    echo "<div id='prod'><h1>$nomeP $prodotto</h1><img class='icona' onmousedown='toggle($id)' src='$imm' title='$prodotto'><p>$prezzo €/Kg</p>
                    <a href='index.php?par=2'><button type='button'>Compra ora!</button></a><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
                else{
                    echo "<div id='prod'><div><p>In offerta</p></div><h1>$nomeP $prodotto</h1><img onmousedown='toggle($id)' class='icona' src='$imm' title='$prodotto'><p style='position: absolute;left: 35px;top: 130px;font-size: 13px;text-decoration: line-through;'>$prezzo</p><p>$prezzoO €/Kg</p>
                    <a href='index.php?par=2'><button type='button'>Compra ora!</button></a><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
            }
            else{
                if($offerta==0){
                    echo "<div id='prod'><h1>$nomeP $prodotto</h1><img class='icona' onmousedown='toggle($id)' src='$imm' title='$prodotto'><p>$prezzo €/Pz</p>
                    <a href='index.php?par=2'><button type='button'>Compra ora!</button></a><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
                else{
                    echo "<div id='prod'><h1>$nomeP $prodotto</h1><img class='icona' onmousedown='toggle($id)' src='$imm' title='$prodotto'><p>$prezzo</p><p>$prezzoO €/Pz</p>
                    <a href='index.php?par=2'><button type='button'>Compra ora!</button></a><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
            }
        }}}
else
{
    if($dispo==0){
            if($pk!=0){
                if($offerta==1){
                        echo "<div id='prod'><div><p>In offerta</p></div><h1>$nomeP $prodotto</h1><img onmousedown='toggle($id)' class='icona' src='$imm' title='$prodotto'><p style='position: absolute;left: 35px;top: 123px;font-size: 13px;text-decoration: line-through;'>$prezzo</p><p style='position: relative;top: -10px;'>$prezzoO €/Kg</p>
                              <form action='index.php' method='POST' onSubmit='return controllo($id)' ><input type='hidden' name='idA' value='".$id."'><input type='button' style='width: 30px;padding:0px 10px;' value='-' onClick='decrementa1(".$id.");'><input type='text' name='quantita' id='quantita".$id."'
                                value='0' readonly><input type='button' value='+' style='width: 30px;padding: 0px 10px;' onClick='incrementa1(".$id.");'>
                            <input type='submit' style='position: relative;top: 8px;' name='aggiungi1' value='Aggiungi al carrello!'></form><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
                else{
                        echo "<div id='prod'><h1>$nomeP $prodotto</h1><img src='$imm' class='icona' onmousedown='toggle($id)' title='$prodotto'><p style='position: relative;top: -15px;'>$prezzo €/Kg</p>
                              <form action='index.php' method='POST' onSubmit='return controllo($id)' ><input type='hidden' name='idA' value='".$id."'><input type='button' style='width: 30px;padding:0px 10px;' value='-' onClick='decrementa1(".$id.");'><input type='text' name='quantita' id='quantita".$id."'
                                value='0' readonly><input type='button' value='+' style='width: 30px;padding: 0px 10px;' onClick='incrementa1(".$id.");'>
                            <input type='submit' style='position: relative;top: 8px;' name='aggiungi' value='Aggiungi al carrello!'></form><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
            }
        else{
            if($offerta==0){
            echo "<div id='prod'><h1>$nomeP $prodotto</h1><img src='$imm' onmousedown='toggle($id)' class='icona' title='$prodotto'><p style='position: relative;top: -15px;'>$prezzo €/Pz</p>
<form action='index.php' method='POST' onSubmit='return controllo($id)' ><input type='hidden' name='idA' value='".$id."'><input type='button' style='width: 30px;padding:0px 10px;' value='-' onClick='decrementa(".$id.");'>
<input type='text' name='quantita' id='quantita".$id."'
value='0' readonly><input type='button' value='+' style='width: 30px;padding: 0px 10px;' onClick='incrementa(".$id.");'>
<input type='submit' style='position: relative;top: 8px;' name='aggiungi' value='Aggiungi al carrello!'></form><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
                else{
                    echo "<div id='prod'><div><p>In offerta</p></div><h1>$nomeP $prodotto</h1><img src='$imm' onmousedown='toggle($id)' class='icona' title='$prodotto'><p style='position: absolute;left: 35px;top: 123px;font-size: 13px;text-decoration: line-through;'>$prezzo</p><p style='position: relative;top: -10px;'>$prezzoO €/Pz</p>
                              <form action='index.php' method='POST' onSubmit='return controllo($id)' ><input type='hidden' name='idA' value='".$id."'><input type='button' style='width: 30px;padding:0px 10px;' value='-' onClick='decrementa(".$id.");'><input type='text' name='quantita' id='quantita".$id."'
                                value='0' readonly><input type='button' value='+' style='width: 30px;padding: 0px 10px;' onClick='incrementa(".$id.");'>
                            <input type='submit' style='position: relative;top: 8px;' name='aggiungi1' value='Aggiungi al carrello!'></form><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
        }}}}}
if($_GET['p']=='3')
{  
$s="SELECT * FROM Prodotti WHERE Prodotti.tipo=3 ORDER BY Prodotti.nomeArticolo";
$q=mysqli_query($conn,$s);
while($r=mysqli_fetch_array($q))
{
$nomeP=$r['nomeArticolo'];
$id=$r['ID_articolo'];
$prodotto=$r['nomeProdotto'];
$imm=$r['immagine'];
$dispo=$r['disponibile'];
$prezzoO=number_format($r['prezzoO'],2);
$offerta=$r['offerta'];
$prezzo=number_format($r['prezzo'],2);
if(!isset($_SESSION['attiva'])){
if($_SESSION['attiva']=='')
{        
    if($dispo==0){
            if($pk!=0){
                if($offerta==0){
                    echo "<div id='prod'><h1>$nomeP $prodotto</h1><img src='$imm' onmousedown='toggle($id)' class='icona' title='$prodotto'><p>$prezzo €/Kg</p>
                    <a href='index.php?par=2'><button type='button'>Compra ora!</button></a><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
                else{
                    echo "<div id='prod'><div><p>In offerta</p></div><h1>$nomeP $prodotto</h1><img src='$imm' onmousedown='toggle($id)' class='icona' title='$prodotto'><p style='position: absolute;left: 35px;top: 130px;font-size: 13px;text-decoration: line-through;'>$prezzo</p><p>$prezzoO €/Kg</p>
                    <a href='index.php?par=2'><button type='button'>Compra ora!</button></a><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
            }
            else{
                if($offerta==0){
                    echo "<div id='prod'><h1>$nomeP $prodotto</h1><img src='$imm' onmousedown='toggle($id)' class='icona' title='$prodotto'><p>$prezzo €/Pz</p>
                    <a href='index.php?par=2'><button type='button'>Compra ora!</button></a><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
                else{
                    echo "<div id='prod'><h1>$nomeP $prodotto</h1><img src='$imm' onmousedown='toggle($id)' class='icona' title='$prodotto'><p>$prezzo</p><p>$prezzoO €/Pz</p>
                    <a href='index.php?par=2'><button type='button'>Compra ora!</button></a><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
            }
        }}}
else
{
if($dispo==0){
            if($pk!=0){
                if($offerta==1){
                        echo "<div id='prod'><div><p>In offerta</p></div><h1>$nomeP $prodotto</h1><img src='$imm' onmousedown='toggle($id)' class='icona' title='$prodotto'><p style='position: absolute;left: 35px;top: 123px;font-size: 13px;text-decoration: line-through;'>$prezzo</p><p style='position: relative;top: -10px;'>$prezzoO €/Kg</p>
                              <form action='index.php' method='POST' onSubmit='return controllo($id)' ><input type='hidden' name='idA' value='".$id."'><input type='button' style='width: 30px;padding:0px 10px;' value='-' onClick='decrementa1(".$id.");'><input type='text' name='quantita' id='quantita".$id."'
                                value='0' readonly><input type='button' value='+' style='width: 30px;padding: 0px 10px;' onClick='incrementa1(".$id.");'>
                            <input type='submit' style='position: relative;top: 8px;' name='aggiungi1' value='Aggiungi al carrello!'></form><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
                else{
                        echo "<div id='prod'><h1>$nomeP $prodotto</h1><img src='$imm' class='icona' onmousedown='toggle($id)' title='$prodotto'><p style='position: relative;top: -15px;'>$prezzo €/Kg</p>
                              <form action='index.php' method='POST' onSubmit='return controllo($id)' ><input type='hidden' name='idA' value='".$id."'><input type='button' style='width: 30px;padding:0px 10px;' value='-' onClick='decrementa1(".$id.");'><input type='text' name='quantita' id='quantita".$id."'
                                value='0' readonly><input type='button' value='+' style='width: 30px;padding: 0px 10px;' onClick='incrementa1(".$id.");'>
                            <input type='submit' style='position: relative;top: 8px;' name='aggiungi' value='Aggiungi al carrello!'></form><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
            }
        else{
            if($offerta==0){
            echo "<div id='prod'><h1>$nomeP $prodotto</h1><img src='$imm' onmousedown='toggle($id)' class='icona' title='$prodotto'><p style='position: relative;top: -15px;'>$prezzo €/Pz</p>
<form action='index.php' method='POST' onSubmit='return controllo($id)' ><input type='hidden' name='idA' value='".$id."'><input type='button' style='width: 30px;padding:0px 10px;' value='-' onClick='decrementa(".$id.");'>
<input type='text' name='quantita' id='quantita".$id."'
value='0' readonly><input type='button' value='+' style='width: 30px;padding: 0px 10px;' onClick='incrementa(".$id.");'>
<input type='submit' style='position: relative;top: 8px;' name='aggiungi' value='Aggiungi al carrello!'></form><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
                else{
                    echo "<div id='prod'><div><p>In offerta</p></div><h1>$nomeP $prodotto</h1><img src='$imm' onmousedown='toggle($id)' class='icona' title='$prodotto'><p style='position: absolute;left: 35px;top: 123px;font-size: 13px;text-decoration: line-through;'>$prezzo</p><p style='position: relative;top: -10px;'>$prezzoO €/Pz</p>
                              <form action='index.php' method='POST' onSubmit='return controllo($id)' ><input type='hidden' name='idA' value='".$id."'><input type='button' style='width: 30px;padding:0px 10px;' value='-' onClick='decrementa(".$id.");'><input type='text' name='quantita' id='quantita".$id."'
                                value='0' readonly><input type='button' value='+' style='width: 30px;padding: 0px 10px;' onClick='incrementa(".$id.");'>
                            <input type='submit' style='position: relative;top: 8px;' name='aggiungi1' value='Aggiungi al carrello!'></form><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
        }}
}}}
if($_GET['p']=='4')
{    
$s="SELECT * FROM Prodotti WHERE Prodotti.tipo=4 ORDER BY Prodotti.nomeArticolo";
$q=mysqli_query($conn,$s);
while($r=mysqli_fetch_array($q))
{
$nomeP=$r['nomeArticolo'];
$id=$r['ID_articolo'];
$prodotto=$r['nomeProdotto'];
$imm=$r['immagine'];
$dispo=$r['disponibile'];
$prezzoO=number_format($r['prezzoO'],2);
$offerta=$r['offerta'];
$prezzo=number_format($r['prezzo'],2);
if(!isset($_SESSION['attiva'])){
if($_SESSION['attiva']=='')
{        
    if($dispo==0){
            if($pk!=0){
                if($offerta==0){
                    echo "<div id='prod'><h1>$nomeP $prodotto</h1><img src='$imm' onmousedown='toggle($id)' class='icona' title='$prodotto'><p>$prezzo €/Kg</p>
                    <a href='index.php?par=2'><button type='button'>Compra ora!</button></a><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
                else{
                    echo "<div id='prod'><div><p>In offerta</p></div><h1>$nomeP $prodotto</h1><img class='icona' src='$imm' onmousedown='toggle($id)' title='$prodotto'><p style='position: absolute;left: 35px;top: 130px;font-size: 13px;text-decoration: line-through;'>$prezzo</p><p>$prezzoO €/Kg</p>
                    <a href='index.php?par=2'><button type='button'>Compra ora!</button></a><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
            }
            else{
                if($offerta==0){
                    echo "<div id='prod'><h1>$nomeP $prodotto</h1><img class='icona' src='$imm' onmousedown='toggle($id)' title='$prodotto'><p>$prezzo €/Pz</p>
                    <a href='index.php?par=2'><button type='button'>Compra ora!</button></a><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
                else{
                    echo "<div id='prod'><h1>$nomeP $prodotto</h1><img class='icona' src='$imm' onmousedown='toggle($id)' title='$prodotto'><p>$prezzo</p><p>$prezzoO €/Pz</p>
                    <a href='index.php?par=2'><button type='button'>Compra ora!</button></a><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
            }
        }}}
else
{
if($dispo==0){
            if($pk!=0){
                if($offerta==1){
                        echo "<div id='prod'><div><p>In offerta</p></div><h1>$nomeP $prodotto</h1><img onmousedown='toggle($id)' class='icona' src='$imm' title='$prodotto'><p style='position: absolute;left: 35px;top: 123px;font-size: 13px;text-decoration: line-through;'>$prezzo</p><p style='position: relative;top: -10px;'>$prezzoO €/Kg</p>
                              <form action='index.php' method='POST' onSubmit='return controllo($id)' ><input type='hidden' name='idA' value='".$id."'><input type='button' style='width: 30px;padding:0px 10px;' value='-' onClick='decrementa1(".$id.");'><input type='text' name='quantita' id='quantita".$id."'
                                value='0' readonly><input type='button' value='+' style='width: 30px;padding: 0px 10px;' onClick='incrementa1(".$id.");'>
                            <input type='submit' style='position: relative;top: 8px;' name='aggiungi1' value='Aggiungi al carrello!'></form><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
                else{
                        echo "<div id='prod'><h1>$nomeP $prodotto</h1><img class='icona' src='$imm' onmousedown='toggle($id)' title='$prodotto'><p style='position: relative;top: -15px;'>$prezzo €/Kg</p>
                              <form action='index.php' method='POST' onSubmit='return controllo($id)' ><input type='hidden' name='idA' value='".$id."'><input type='button' style='width: 30px;padding:0px 10px;' value='-' onClick='decrementa1(".$id.");'><input type='text' name='quantita' id='quantita".$id."'
                                value='0' readonly><input type='button' value='+' style='width: 30px;padding: 0px 10px;' onClick='incrementa1(".$id.");'>
                            <input type='submit' style='position: relative;top: 8px;' name='aggiungi' value='Aggiungi al carrello!'></form><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
            }
        else{
            if($offerta==0){
            echo "<div id='prod'><h1>$nomeP $prodotto</h1><img class='icona' onmousedown='toggle($id)' src='$imm' title='$prodotto'><p style='position: relative;top: -15px;'>$prezzo €/Pz</p>
<form action='index.php' method='POST' onSubmit='return controllo($id)' ><input type='hidden' name='idA' value='".$id."'><input type='button' style='width: 30px;padding:0px 10px;' value='-' onClick='decrementa(".$id.");'>
<input type='text' name='quantita' id='quantita".$id."'
value='0' readonly><input type='button' value='+' style='width: 30px;padding: 0px 10px;' onClick='incrementa(".$id.");'>
<input type='submit' style='position: relative;top: 8px;' name='aggiungi' value='Aggiungi al carrello!'></form><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
                else{
                    echo "<div id='prod'><div><p>In offerta</p></div><h1>$nomeP $prodotto</h1><img  onmousedown='toggle($id)' class='icona' src='$imm' title='$prodotto'><p style='position: absolute;left: 35px;top: 123px;font-size: 13px;text-decoration: line-through;'>$prezzo</p><p style='position: relative;top: -10px;'>$prezzoO €/Pz</p>
                              <form action='index.php' method='POST' onSubmit='return controllo($id)' ><input type='hidden' name='idA' value='".$id."'><input type='button' style='width: 30px;padding:0px 10px;' value='-' onClick='decrementa(".$id.");'><input type='text' name='quantita' id='quantita".$id."'
                                value='0' readonly><input type='button' value='+' style='width: 30px;padding: 0px 10px;' onClick='incrementa(".$id.");'>
                            <input type='submit' style='position: relative;top: 8px;' name='aggiungi1' value='Aggiungi al carrello!'></form><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
        }}
}}}
if($_GET['p']=='5')
{  
$s="SELECT * FROM Prodotti WHERE Prodotti.tipo=5 ORDER BY Prodotti.nomeArticolo";
$q=mysqli_query($conn,$s);
while($r=mysqli_fetch_array($q))
{
$nomeP=$r['nomeArticolo'];
$id=$r['ID_articolo'];
$prodotto=$r['nomeProdotto'];
$imm=$r['immagine'];
$dispo=$r['disponibile'];
$prezzoO=number_format($r['prezzoO'],2);
$offerta=$r['offerta'];
$prezzo=number_format($r['prezzo'],2);
if(!isset($_SESSION['attiva'])){
if($_SESSION['attiva']=='')
{        
    if($dispo==0){
            if($pk!=0){
                if($offerta==0){
                    echo "<div id='prod'><h1>$nomeP $prodotto</h1><img  onmousedown='toggle($id)' class='icona' src='$imm' title='$prodotto'><p>$prezzo €/Kg</p>
                    <a href='index.php?par=2'><button type='button'>Compra ora!</button></a><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
                else{
                    echo "<div id='prod'><div><p>In offerta</p></div><h1>$nomeP $prodotto</h1><img onmousedown='toggle($id)' class='icona' src='$imm' title='$prodotto'><p style='position: absolute;left: 35px;top: 130px;font-size: 13px;text-decoration: line-through;'>$prezzo</p><p>$prezzoO €/Kg</p>
                    <a href='index.php?par=2'><button type='button'>Compra ora!</button></a><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
            }
            else{
                if($offerta==0){
                    echo "<div id='prod'><h1>$nomeP $prodotto</h1><img class='icona' src='$imm' onmousedown='toggle($id)' title='$prodotto'><p>$prezzo €/Pz</p>
                    <a href='index.php?par=2'><button type='button'>Compra ora!</button></a><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
                else{
                    echo "<div id='prod'><h1>$nomeP $prodotto</h1><img src='$imm' class='icona' onmousedown='toggle($id)' title='$prodotto'><p>$prezzo</p><p>$prezzoO €/Pz</p>
                    <a href='index.php?par=2'><button type='button'>Compra ora!</button></a><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
            }
        }}}
else
{
if($dispo==0){
            if($pk!=0){
                if($offerta==1){
                        echo "<div id='prod'><div><p>In offerta</p></div><h1>$nomeP $prodotto</h1><img onmousedown='toggle($id)' src='$imm' class='icona' title='$prodotto'><p style='position: absolute;left: 35px;top: 123px;font-size: 13px;text-decoration: line-through;'>$prezzo</p><p style='position: relative;top: -10px;'>$prezzoO €/Kg</p>
                              <form action='index.php' method='POST' onSubmit='return controllo($id)' ><input type='hidden' name='idA' value='".$id."'><input type='button' style='width: 30px;padding:0px 10px;' value='-' onClick='decrementa1(".$id.");'><input type='text' name='quantita' id='quantita".$id."'
                                value='0' readonly><input type='button' value='+' style='width: 30px;padding: 0px 10px;' onClick='incrementa1(".$id.");'>
                            <input type='submit' style='position: relative;top: 8px;' name='aggiungi1' value='Aggiungi al carrello!'></form><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
                else{
                        echo "<div id='prod'><h1>$nomeP $prodotto</h1><img src='$imm' class='icona' onmousedown='toggle($id)' title='$prodotto'><p style='position: relative;top: -15px;'>$prezzo €/Kg</p>
                              <form action='index.php' method='POST' onSubmit='return controllo($id)' ><input type='hidden' name='idA' value='".$id."'><input type='button' style='width: 30px;padding:0px 10px;' value='-' onClick='decrementa1(".$id.");'><input type='text' name='quantita' id='quantita".$id."'
                                value='0' readonly><input type='button' value='+' style='width: 30px;padding: 0px 10px;' onClick='incrementa1(".$id.");'>
                            <input type='submit' style='position: relative;top: 8px;' name='aggiungi' value='Aggiungi al carrello!'></form><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
            }
        else{
            if($offerta==0){
            echo "<div id='prod'><h1>$nomeP $prodotto</h1><img src='$imm' class='icona' onmousedown='toggle($id)' title='$prodotto'><p style='position: relative;top: -15px;'>$prezzo €/Pz</p><form action='index.php' method='POST' onSubmit='return controllo($id)' ><input type='hidden' name='idA' value='".$id."'><input type='button' style='width: 30px;padding:0px 10px;' value='-' onClick='decrementa(".$id.");'><input type='text' name='quantita' id='quantita".$id."' value='0' readonly><input type='button' value='+' style='width: 30px;padding: 0px 10px;' onClick='incrementa(".$id.");'><input type='submit' style='position: relative;top: 8px;' name='aggiungi' value='Aggiungi al carrello!'></form><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
                else{
                    echo "<div id='prod'><div><p>In offerta</p></div><h1>$nomeP $prodotto</h1><img src='$imm' onmousedown='toggle($id)' class='icona' title='$prodotto'><p style='position: absolute;left: 35px;top: 123px;font-size: 13px;text-decoration: line-through;'>$prezzo</p><p style='position: relative;top: -10px;'>$prezzoO €/Pz</p>
                              <form action='index.php' method='POST' onSubmit='return controllo($id)' ><input type='hidden' name='idA' value='".$id."'><input type='button' style='width: 30px;padding:0px 10px;' value='-' onClick='decrementa(".$id.");'><input type='text' name='quantita' id='quantita".$id."'
                                value='0' readonly><input type='button' value='+' style='width: 30px;padding: 0px 10px;' onClick='incrementa(".$id.");'>
                            <input type='submit' style='position: relative;top: 8px;' name='aggiungi1' value='Aggiungi al carrello!'></form><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
        }}
}}}
if($_GET['p']=='6')
{  
$s="SELECT * FROM Prodotti WHERE Prodotti.tipo=6 ORDER BY Prodotti.nomeArticolo";
$q=mysqli_query($conn,$s);
while($r=mysqli_fetch_array($q))
{
$nomeP=$r['nomeArticolo'];
$id=$r['ID_articolo'];
$prodotto=$r['nomeProdotto'];
$imm=$r['immagine'];
$dispo=$r['disponibile'];
$prezzoO=number_format($r['prezzoO'],2);
$offerta=$r['offerta'];
$prezzo=number_format($r['prezzo'],2);
if(!isset($_SESSION['attiva'])){
if($_SESSION['attiva']=='')
{        
    if($dispo==0){
            if($pk!=0){
                if($offerta==0){
                    echo "<div id='prod'><h1>$nomeP $prodotto</h1><img src='$imm' onmousedown='toggle($id)' class='icona' title='$prodotto'><p>$prezzo €/Kg</p>
                    <a href='index.php?par=2'><button type='button'>Compra ora!</button></a><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
                else{
                    echo "<div id='prod'><div><p>In offerta</p></div><h1>$nomeP $prodotto</h1><img  onmousedown='toggle($id)' src='$imm' class='icona' title='$prodotto'><p style='position: absolute;left: 35px;top: 130px;font-size: 13px;text-decoration: line-through;'>$prezzo</p><p>$prezzoO €/Kg</p>
                    <a href='index.php?par=2'><button type='button'>Compra ora!</button></a><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
            }
            else{
                if($offerta==0){
                    echo "<div id='prod'><h1>$nomeP $prodotto</h1><img src='$imm' class='icona' onmousedown='toggle($id)' title='$prodotto'><p>$prezzo €/Pz</p>
                    <a href='index.php?par=2'><button type='button'>Compra ora!</button></a><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
                else{
                    echo "<div id='prod'><h1>$nomeP $prodotto</h1><img src='$imm' class='icona' onmousedown='toggle($id)' title='$prodotto'><p>$prezzo</p><p>$prezzoO €/Pz</p>
                    <a href='index.php?par=2'><button type='button'>Compra ora!</button></a><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
            }
        }}}
else
{
if($dispo==0){
            if($pk!=0){
                if($offerta==1){
                        echo "<div id='prod'><div><p>In offerta</p></div><h1>$nomeP $prodotto</h1><img onmousedown='toggle($id)' src='$imm' class='icona' title='$prodotto'><p style='position: absolute;left: 35px;top: 123px;font-size: 13px;text-decoration: line-through;'>$prezzo</p><p style='position: relative;top: -10px;'>$prezzoO €/Kg</p>
                              <form action='index.php' method='POST' onSubmit='return controllo($id)' ><input type='hidden' name='idA' value='".$id."'><input type='button' style='width: 30px;padding:0px 10px;' value='-' onClick='decrementa1(".$id.");'><input type='text' name='quantita' id='quantita".$id."'
                                value='0' readonly><input type='button' value='+' style='width: 30px;padding: 0px 10px;' onClick='incrementa1(".$id.");'>
                            <input type='submit' style='position: relative;top: 8px;' name='aggiungi1' value='Aggiungi al carrello!'></form><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
                else{
                        echo "<div id='prod'><h1>$nomeP $prodotto</h1><img src='$imm' onmousedown='toggle($id)' class='icona' title='$prodotto'><p style='position: relative;top: -15px;'>$prezzo €/Kg</p>
                              <form action='index.php' method='POST' onSubmit='return controllo($id)' ><input type='hidden' name='idA' value='".$id."'><input type='button' style='width: 30px;padding:0px 10px;' value='-' onClick='decrementa1(".$id.");'><input type='text' name='quantita' id='quantita".$id."'
                                value='0' readonly><input type='button' value='+' style='width: 30px;padding: 0px 10px;' onClick='incrementa1(".$id.");'>
                            <input type='submit' style='position: relative;top: 8px;' name='aggiungi' value='Aggiungi al carrello!'></form><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
            }
        else{
            if($offerta==0){
            echo "<div id='prod'><h1>$nomeP $prodotto</h1><img src='$imm' onmousedown='toggle($id)' class='icona' title='$prodotto'><p style='position: relative;top: -15px;'>$prezzo €/Pz</p><form action='index.php' method='POST' onSubmit='return controllo($id)' ><input type='hidden' name='idA' value='".$id."'><input type='button' style='width: 30px;padding:0px 10px;' value='-' onClick='decrementa(".$id.");'><input type='text' name='quantita' id='quantita".$id."' value='0' readonly><input type='button' value='+' style='width: 30px;padding: 0px 10px;' onClick='incrementa(".$id.");'><input type='submit' style='position: relative;top: 8px;' name='aggiungi' value='Aggiungi al carrello!'></form><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
                else{
                    echo "<div id='prod'><div><p>In offerta</p></div><h1>$nomeP $prodotto</h1><img onmousedown='toggle($id)' src='$imm' class='icona' title='$prodotto'><p style='position: absolute;left: 35px;top: 123px;font-size: 13px;text-decoration: line-through;'>$prezzo</p><p style='position: relative;top: -10px;'>$prezzoO €/Pz</p>
                              <form action='index.php' method='POST' onSubmit='return controllo($id)' ><input type='hidden' name='idA' value='".$id."'><input type='button' style='width: 30px;padding:0px 10px;' value='-' onClick='decrementa(".$id.");'><input type='text' name='quantita' id='quantita".$id."'
                                value='0' readonly><input type='button' value='+' style='width: 30px;padding: 0px 10px;' onClick='incrementa(".$id.");'>
                            <input type='submit' style='position: relative;top: 8px;' name='aggiungi1' value='Aggiungi al carrello!'></form><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
        }}
}}}
if($_GET['p']=='7')
{  
$s="SELECT * FROM Prodotti WHERE Prodotti.tipo=7 ORDER BY Prodotti.nomeArticolo";
$q=mysqli_query($conn,$s);
while($r=mysqli_fetch_array($q))
{
$nomeP=$r['nomeArticolo'];
$id=$r['ID_articolo'];
$prodotto=$r['nomeProdotto'];
$imm=$r['immagine'];
$dispo=$r['disponibile'];
$prezzoO=number_format($r['prezzoO'],2);
$offerta=$r['offerta'];
$prezzo=number_format($r['prezzo'],2);
if(!isset($_SESSION['attiva'])){
if($_SESSION['attiva']=='')
{        
    if($dispo==0){
            if($pk!=0){
                if($offerta==0){
                    echo "<div id='prod'><h1>$nomeP $prodotto</h1><img src='$imm' onmousedown='toggle($id)' class='icona' title='$prodotto'><p>$prezzo €/Kg</p>
                    <a href='index.php?par=2'><button type='button'>Compra ora!</button></a><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
                else{
                    echo "<div id='prod'><div><p>In offerta</p></div><h1>$nomeP $prodotto</h1><img src='$imm' onmousedown='toggle($id)' class='icona' title='$prodotto'><p style='position: absolute;left: 35px;top: 130px;font-size: 13px;text-decoration: line-through;'>$prezzo</p><p>$prezzoO €/Kg</p>
                    <a href='index.php?par=2'><button type='button'>Compra ora!</button></a><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
            }
            else{
                if($offerta==0){
                    echo "<div id='prod'><h1>$nomeP $prodotto</h1><img src='$imm' onmousedown='toggle($id)' class='icona' title='$prodotto'><p>$prezzo €/Pz</p>
                    <a href='index.php?par=2'><button type='button'>Compra ora!</button></a><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
                else{
                    echo "<div id='prod'><h1>$nomeP $prodotto</h1><img src='$imm' onmousedown='toggle($id)' class='icona' title='$prodotto'><p>$prezzo</p><p>$prezzoO €/Pz</p>
                    <a href='index.php?par=2'><button type='button'>Compra ora!</button></a><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
            }
        }}}
else
{
if($dispo==0){
            if($pk!=0){
                if($offerta==1){
                        echo "<div id='prod'><div><p>In offerta</p></div><h1>$nomeP $prodotto</h1><img src='$imm' onmousedown='toggle($id)' class='icona' title='$prodotto'><p style='position: absolute;left: 35px;top: 123px;font-size: 13px;text-decoration: line-through;'>$prezzo</p><p style='position: relative;top: -10px;'>$prezzoO €/Kg</p>
                              <form action='index.php' method='POST' onSubmit='return controllo($id)' ><input type='hidden' name='idA' value='".$id."'><input type='button' style='width: 30px;padding:0px 10px;' value='-' onClick='decrementa1(".$id.");'><input type='text' name='quantita' id='quantita".$id."'
                                value='0' readonly><input type='button' value='+' style='width: 30px;padding: 0px 10px;' onClick='incrementa1(".$id.");'>
                            <input type='submit' style='position: relative;top: 8px;' name='aggiungi1' value='Aggiungi al carrello!'></form><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
                else{
                        echo "<div id='prod'><h1>$nomeP $prodotto</h1><img src='$imm' onmousedown='toggle($id)' class='icona' title='$prodotto'><p style='position: relative;top: -15px;'>$prezzo €/Kg</p>
                              <form action='index.php' method='POST' onSubmit='return controllo($id)' ><input type='hidden' name='idA' value='".$id."'><input type='button' style='width: 30px;padding:0px 10px;' value='-' onClick='decrementa1(".$id.");'><input type='text' name='quantita' id='quantita".$id."'
                                value='0' readonly><input type='button' value='+' style='width: 30px;padding: 0px 10px;' onClick='incrementa1(".$id.");'>
                            <input type='submit' style='position: relative;top: 8px;' name='aggiungi' value='Aggiungi al carrello!'></form><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
            }
        else{
            if($offerta==0){
            echo "<div id='prod'><h1>$nomeP $prodotto</h1><img src='$imm' onmousedown='toggle($id)' class='icona' title='$prodotto'><p style='position: relative;top: -15px;'>$prezzo €/Pz</p><form action='index.php' method='POST' onSubmit='return controllo($id)' ><input type='hidden' name='idA' value='".$id."'><input type='button' style='width: 30px;padding:0px 10px;' value='-' onClick='decrementa(".$id.");'><input type='text' name='quantita' id='quantita".$id."' value='0' readonly><input type='button' value='+' style='width: 30px;padding: 0px 10px;' onClick='incrementa(".$id.");'><input type='submit' style='position: relative;top: 8px;' name='aggiungi' value='Aggiungi al carrello!'></form><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
                else{
                    echo "<div id='prod'><div><p>In offerta</p></div><h1>$nomeP $prodotto</h1><img src='$imm' onmousedown='toggle($id)' class='icona' title='$prodotto'><p style='position: absolute;left: 35px;top: 123px;font-size: 13px;text-decoration: line-through;'>$prezzo</p><p style='position: relative;top: -10px;'>$prezzoO €/Pz</p>
                              <form action='index.php' method='POST' onSubmit='return controllo($id)' ><input type='hidden' name='idA' value='".$id."'><input type='button' style='width: 30px;padding:0px 10px;' value='-' onClick='decrementa(".$id.");'><input type='text' name='quantita' id='quantita".$id."'
                                value='0' readonly><input type='button' value='+' style='width: 30px;padding: 0px 10px;' onClick='incrementa(".$id.");'>
                            <input type='submit' style='position: relative;top: 8px;' name='aggiungi1' value='Aggiungi al carrello!'></form><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
        }}
}}}
if($_GET['p']=='8')
{  
$s="SELECT * FROM Prodotti WHERE Prodotti.tipo=8 ORDER BY Prodotti.nomeArticolo";
$q=mysqli_query($conn,$s);
while($r=mysqli_fetch_array($q))
{
$nomeP=$r['nomeArticolo'];
$id=$r['ID_articolo'];
$prodotto=$r['nomeProdotto'];
$imm=$r['immagine'];
$dispo=$r['disponibile'];
$prezzoO=number_format($r['prezzoO'],2);
$offerta=$r['offerta'];
$prezzo=number_format($r['prezzo'],2);
if(!isset($_SESSION['attiva'])){
if($_SESSION['attiva']=='')
{        
    if($dispo==0){
            if($pk!=0){
                if($offerta==0){
                    echo "<div id='prod'><h1>$nomeP $prodotto</h1><img class='icona' src='$imm' onmousedown='toggle($id)' title='$prodotto'><p>$prezzo €/Kg</p>
                    <a href='index.php?par=2'><button type='button'>Compra ora!</button></a><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
                else{
                    echo "<div id='prod'><div><p>In offerta</p></div><h1>$nomeP $prodotto</h1><img onmousedown='toggle($id)' class='icona' src='$imm' title='$prodotto'><p style='position: absolute;left: 35px;top: 130px;font-size: 13px;text-decoration: line-through;'>$prezzo</p><p>$prezzoO €/Kg</p>
                    <a href='index.php?par=2'><button type='button'>Compra ora!</button></a><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
            }
            else{
                if($offerta==0){
                    echo "<div id='prod'><h1>$nomeP $prodotto</h1><img class='icona' src='$imm' onmousedown='toggle($id)' title='$prodotto'><p>$prezzo €/Pz</p>
                    <a href='index.php?par=2'><button type='button'>Compra ora!</button></a><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
                else{
                    echo "<div id='prod'><h1>$nomeP $prodotto</h1><img class='icona' onmousedown='toggle($id)' src='$imm' title='$prodotto'><p>$prezzo</p><p>$prezzoO €/Pz</p>
                    <a href='index.php?par=2'><button type='button'>Compra ora!</button></a><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
            }
        }}}
else
{
if($dispo==0){
            if($pk!=0){
                if($offerta==1){
                        echo "<div id='prod'><div><p>In offerta</p></div><h1>$nomeP $prodotto</h1><img onmousedown='toggle($id)' class='icona' src='$imm' title='$prodotto'><p style='position: absolute;left: 35px;top: 123px;font-size: 13px;text-decoration: line-through;'>$prezzo</p><p style='position: relative;top: -10px;'>$prezzoO €/Kg</p>
                              <form action='index.php' method='POST' onSubmit='return controllo($id)' ><input type='hidden' name='idA' value='".$id."'><input type='button' style='width: 30px;padding:0px 10px;' value='-' onClick='decrementa1(".$id.");'><input type='text' name='quantita' id='quantita".$id."'
                                value='0' readonly><input type='button' value='+' style='width: 30px;padding: 0px 10px;' onClick='incrementa1(".$id.");'>
                            <input type='submit' style='position: relative;top: 8px;' name='aggiungi1' value='Aggiungi al carrello!'></form><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
                else{
                        echo "<div id='prod'><h1>$nomeP $prodotto</h1><img src='$imm' onmousedown='toggle($id)' class='icona' title='$prodotto'><p style='position: relative;top: -15px;'>$prezzo €/Kg</p>
                              <form action='index.php' method='POST' onSubmit='return controllo($id)' ><input type='hidden' name='idA' value='".$id."'><input type='button' style='width: 30px;padding:0px 10px;' value='-' onClick='decrementa1(".$id.");'><input type='text' name='quantita' id='quantita".$id."'
                                value='0' readonly><input type='button' value='+' style='width: 30px;padding: 0px 10px;' onClick='incrementa1(".$id.");'>
                            <input type='submit' style='position: relative;top: 8px;' name='aggiungi' value='Aggiungi al carrello!'></form><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
            }
        else{
            if($offerta==0){
            echo "<div id='prod'><h1>$nomeP $prodotto</h1><img src='$imm' onmousedown='toggle($id)' class='icona' title='$prodotto'><p style='position: relative;top: -15px;'>$prezzo €/Pz</p><form action='index.php' method='POST' onSubmit='return controllo($id)' ><input type='hidden' name='idA' value='".$id."'><input type='button' style='width: 30px;padding:0px 10px;' value='-' onClick='decrementa(".$id.");'><input type='text' name='quantita' id='quantita".$id."' value='0' readonly><input type='button' value='+' style='width: 30px;padding: 0px 10px;' onClick='incrementa(".$id.");'><input type='submit' style='position: relative;top: 8px;' name='aggiungi' value='Aggiungi al carrello!'></form><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
                else{
                    echo "<div id='prod'><div><p>In offerta</p></div><h1>$nomeP $prodotto</h1><img src='$imm' onmousedown='toggle($id)' class='icona' title='$prodotto'><p style='position: absolute;left: 35px;top: 123px;font-size: 13px;text-decoration: line-through;'>$prezzo</p><p style='position: relative;top: -10px;'>$prezzoO €/Pz</p>
                              <form action='index.php' method='POST' onSubmit='return controllo($id)' ><input type='hidden' name='idA' value='".$id."'><input type='button' style='width: 30px;padding:0px 10px;' value='-' onClick='decrementa(".$id.");'><input type='text' name='quantita' id='quantita".$id."'
                                value='0' readonly><input type='button' value='+' style='width: 30px;padding: 0px 10px;' onClick='incrementa(".$id.");'>
                            <input type='submit' style='position: relative;top: 8px;' name='aggiungi1' value='Aggiungi al carrello!'></form><div class='overlay' id='overlay$id' onClick='toggle($id)'></div><div onClick='toggle($id)' class='finestra' id='finestra$id'><img src='$imm' title='$prodotto'></div></div>";}
        }}
}}}

mysqli_close($conn);
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
var quantita=document.getElementById("quantita"+x);
quantita.value++;
}
function decrementa1(x)
{
var quantita=document.getElementById("quantita"+x);
if(quantita.value==0) y=0; else
//(quantita.value==1) {quantita.value-=1;} else
if(quantita.value>0) {quantita.value=quantita.value*10;quantita.value=quantita.value-1;
if(quantita.value==0){quantita.value=0;}else{quantita.value=quantita.value/10;}
}}
function incrementa1(x)
{
var quantita=document.getElementById("quantita"+x);
if(quantita.value>=0)
{
quantita.value=quantita.value*10;
quantita.value=quantita.value-(-1);
quantita.value=quantita.value/10;
}
}
function toggle(x){
var overlay = document.getElementById('overlay'+x);
var finestra = document.getElementById('finestra'+x);
if(overlay.style.display == "block"){
overlay.style.display = "none";
finestra.style.display = "none";
} else {
overlay.style.display = "block";
finestra.style.display = "block";
}
}
</script>