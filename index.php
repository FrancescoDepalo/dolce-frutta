<? session_start()?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Dolce Frutta</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>-->
    <link rel="stylesheet" href="style.css"/>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<script type="text/javascript">
var _iub = _iub || [];
_iub.csConfiguration = {"countryDetection":true,"lang":"it","siteId":1885559,"cookiePolicyId":00000000, "banner":{ "acceptButtonDisplay":true,"customizeButtonDisplay":true,"position":"float-bottom-right","backgroundOverlay":true,"acceptButtonColor":"#0073CE","acceptButtonCaptionColor":"white","customizeButtonColor":"#DADADA","customizeButtonCaptionColor":"#4D4D4D","rejectButtonColor":"#0073CE","rejectButtonCaptionColor":"white","textColor":"black","backgroundColor":"white" }};
</script>
<script type="text/javascript" src="//cdn.iubenda.com/cs/iubenda_cs.js" charset="UTF-8" async></script>
    
<style>
@font-face {
   font-family: 'caviar';
   src: url(CaviarDreams.ttf);
   src: local('caviar'), url('CaviarDreams.ttf') format('truetype');
}


@media screen and (max-width: 600px) {#loading_screen p{font-size: larger;}#loading_screen img{width: 160px;}}
@media screen and (min-width: 601px) {#loading_screen p{font-size: xx-large;}}
#loading_screen
{  
  display: none;
  position: fixed;
  left: 0px;
  top: 0px;
  height: 100%;
  width: 100%;
  color: #FFF;  
  text-align: center;
  padding: 80px;
  background-color: white;
  box-sizing: border-box;
  z-index:10;
}
#loading_screen p
{
    color: black;font-family: sans-serif;
}
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: lightgreen; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: green; 
}

@media screen and (max-width: 840px) 
{
#box{position: fixed;width: 101%;height: 82px;bottom: 0%;background: aliceblue;left: -1%;box-shadow: 0px -2px 5px 1px #dedede;}
#box #dis a{padding-top: 22px;text-decoration: none;top: 20px;font-size: 13px;position: relative;font-family:caviar, sans-serif;font-weight: bolder;color: black;padding-left: 0px;padding-right: 0px;padding-bottom: 31px;}
#box #dis a:hover{color:darkgreen;}
#box #sen a:hover{color:darkgreen;}
#box #sen a{padding-top: 22px;text-decoration: none;top: 20px;position: relative;font-family:caviar, sans-serif;font-weight: bolder;color: black;padding-bottom: 31px;padding-right: 20px;padding-left: 20px;font-size: 13px;}
#box #sen{float: none;position: absolute;height: 100px;width: 50%;text-align: center;}
#box #dis{position: absolute;height: 64px;width: 50%;text-align: center;right: 1%;}
#box img{display:none!important;}
}
@media screen and (min-width: 841px) 
{
#box{position: fixed;width: 101%;height: 82px;bottom: -4%;background: aliceblue;left: -1%;box-shadow: 0px -2px 5px 1px #dedede;}
#box #sen{float: none;position: absolute;height: 65px;width: 50%;text-align: center;}
#box #dis{position: absolute;height: 63px;width: 50%;text-align: center;top: 1px;right: 0%;}
#box #dis a{padding-top: 24px;text-decoration: none;top: 21px;position: relative;font-family:caviar, sans-serif;font-weight: bolder;padding-bottom: 23px;color: black;padding-left: 0px;padding-right: 15px;font-size: 13px;}
#box #sen a:hover{color:darkgreen;}
#box #dis a:hover{color:darkgreen;}
#box #sen a{padding-top: 24px;text-decoration: none;top: 22px;position: relative;font-family:caviar, sans-serif;font-weight: bolder;color: black;padding-bottom: 23px;padding-right: 50px;padding-left: 50px;font-size: 13px;}
}
@media screen and (min-width: 601px)
{
#logo{width: 97px;left: 45%;position: fixed;top: 0px;z-index: 2;}
#ll{width: 0px;height: 0px;padding: 0px 0px;}
#menut{display:none!important}
#menu{display:none!important;}
#menum ul{padding: 0;margin: 0;list-style-type:none;}
#ordine{position: relative;float: right;width: 150px;text-align: center;list-style: none;right:11px;top: 15px;margin-top:5px;}
#altro2 {position: relative;float: left;width: 55px;text-align: center;list-style: none;margin-top: 75px;left: 11px;}
#altro1{top: 20px;position: relative;float: left;width: 115px;text-align: center;list-style: none;left: 90px;margin-top: 5px;}
#ordi{padding-top: 5px;height: 19px;background-color: aliceblue;color: black;padding: 11px 20px;text-decoration: none;display: block;font-family: caviar,fantasy;}
.altro3{width: 120px;padding: 9px;height: 24px;font-family: caviar,fantasy;color: black;text-decoration: none;display: block;}
.altro4{width: 120px;padding: 9px;height: 24px;font-family: fantasy;color: black;text-decoration: none;display: block;}
.altro5{width: 120px;padding: 9px;height: 24px;font-family: fantasy;color: black;text-decoration: none;display: block;}
.altro6{text-align: center;
    width: 120px;
    padding: 9px;
    height: 24px;
    font-family: caviar,fantasy;
    color: black;
    text-decoration: none;
    display: block;}  
.altro3:hover:after
{
    -webkit-transform: scaleX(1);
    transform: scaleX(1);
}
.altro3:after
{
    content: '';
    position: absolute;
    top: 100%;
    height: 4px;
    background: green;
    left: 0;
    right: 0;
    -webkit-transition: -webkit-transform 0.15s;
    transition: -webkit-transform 0.15s;
    transition: transform 0.15s;
    transition: transform 0.15s, -webkit-transform 0.15s;
    -webkit-transform-origin: left;
    transform-origin: left;
    -webkit-transform: scaleX(0);
    transform: scaleX(0);
}
.altro:hover:after
{
    -webkit-transform: scaleX(1);
    transform: scaleX(1);
}
.altro:after
{
    content: '';
    position: absolute;
    top: 100%;
    height: 4px;
    background: green;
    left: 0;
    right: 0;
    -webkit-transition: -webkit-transform 0.15s;
    transition: -webkit-transform 0.15s;
    transition: transform 0.15s;
    transition: transform 0.15s, -webkit-transform 0.15s;
    -webkit-transform-origin: left;
    transform-origin: left;
    -webkit-transform: scaleX(0);
    transform: scaleX(0);
}
.altro6:hover:after
{
    -webkit-transform: scaleX(1);
    transform: scaleX(1);
}
.altro6:after
{
    content: '';
    position: absolute;
    top: 100%;
    height: 4px;
    background: green;
    left: 0;
    right: 0;
    -webkit-transition: -webkit-transform 0.15s;
    transition: -webkit-transform 0.15s;
    transition: transform 0.15s;
    transition: transform 0.15s, -webkit-transform 0.15s;
    -webkit-transform-origin: left;
    transform-origin: left;
    -webkit-transform: scaleX(0);
    transform: scaleX(0);
}
#ordi:hover:after
{
    -webkit-transform: scaleX(1);
    transform: scaleX(1);
}
#ordi:after
{
    content: '';
    position: absolute;
    top: 100%;
    height: 4px;
    background: green;
    left: 0;
    right: 0;
    -webkit-transition: -webkit-transform 0.15s;
    transition: -webkit-transform 0.15s;
    transition: transform 0.15s;
    transition: transform 0.15s, -webkit-transform 0.15s;
    -webkit-transform-origin: left;
    transform-origin: left;
    -webkit-transform: scaleX(0);
    transform: scaleX(0);
}
.altro7:hover:after
{
    -webkit-transform: scaleX(1);
    transform: scaleX(1);
}
.altro7:after
{
    content: '';
    position: absolute;
    top: 100%;
    height: 4px;
    background: green;
    left: 0;
    right: 0;
    -webkit-transition: -webkit-transform 0.15s;
    transition: -webkit-transform 0.15s;
    transition: transform 0.15s;
    transition: transform 0.15s, -webkit-transform 0.15s;
    -webkit-transform-origin: left;
    transform-origin: left;
    -webkit-transform: scaleX(0);
    transform: scaleX(0);
}
#menun ul li a{list-style-type: none;}
#menum li .altro{    background-color: aliceblue;
    color: black;
    padding: 2px 0px;
    text-decoration: none;
    display: block;
    height: 31px;
    font-family: caviar,fantasy;
    padding-top: 9px;}
#menum li .altro7{background-color: aliceblue;color: black;padding: 2px 20px;text-decoration: none;display: block;height: 31px;font-family: caviar,fantasy;padding-top: 9px;}
#menum li a:hover {background-color: white;color:green;text-shadow: 0px 0px 1px #FFF;}
#menum ul ul {position: absolute;top: 42px;visibility: hidden;z-index: 2;}
#menum ul li:hover ul {visibility: visible;}
#menum ul ul:hover {box-shadow: 0px 5px 9px -3px #dedede;}
#menum ul ul li a {background-color: aliceblue;}
#menum ul ul li a:hover {background-color: azure;}
}
@media screen and (min-width: 601px)  and (max-width:1400px)
{
#menum{width: 100%;height: 117px;margin-top: -30px;z-index: 2;position: fixed;left: 0px;box-shadow: 0px 1px 5px 1px #dedede;background-color: aliceblue;}
}
@media screen and (min-width: 1401px)
{
#menum{width: 100%;height: 130px;margin-top: -35px;z-index: 2;position: fixed;left: 0px;box-shadow: 0px 1px 5px 1px #dedede;background-color: aliceblue;}
}

@media screen and (max-width: 600px) {
#tastino{background-color: #4CAF50;color: #FFF;border: none;border-radius: 3px;cursor: pointer;}
#tastino:hover{background-color: #45a049;}
#menut{position: fixed;width: 100%;height: 89px;background-color: white;z-index: 3;top: 0px;left: 0px;box-shadow: 0px 1px 5px 1px #dedede;}
#menum{display:none!important}
#menuToggle {display: flex;flex-direction: column;position:fixed;top: 35px;left: 25px;z-index: 3;-webkit-user-select: none;user-select: none;}
#menuToggle input{display: flex;width: 40px;height: 32px;position: absolute;cursor: pointer;opacity: 0;z-index: 2;}
#menuToggle span{display: flex;width: 40px;height: 4px;margin-bottom: 7px;position: relative;background: black;border-radius: 3px;z-index: 1;transform-origin: 5px 0px;transition: transform 1.2s cubic-bezier(0.77,0.2,0.05,1.0),background 0.5s cubic-bezier(0.77,0.2,0.05,1.0),opacity 0.55s ease;}
#menuToggle span:first-child{transform-origin: 0% 0%;}
#menuToggle span:nth-last-child(2){ transform-origin: 0% 100%;}
#menuToggle input:checked ~ span{opacity: 1;transform: rotate(45deg) translate(-3px, -1px);background: #36383F;}
#menuToggle input:checked ~ span:nth-last-child(3){opacity: 0;transform: rotate(0deg) scale(0.2, 0.2);}
#menuToggle input:checked ~ span:nth-last-child(2){transform: rotate(-45deg) translate(0, -1px);}
#menu{position: absolute;width: 150px;height: 1000px;box-shadow: 0 0 10px #85888C;margin: -57px 0 0 -50px;padding: 50px;padding-top: 125px;background-color: #F5F6FA;-webkit-font-smoothing: antialiased;transform-origin: 0% 0%;transform: translate(-100%, 0);transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0);}

#menu1
{
  position: absolute;
    width: 136px;
    height: 290px;
    top: 211px;
    left: 110px;
    margin: -50px 0 0 -50px;
    -webkit-font-smoothing: antialiased;
    transform-origin: 0% 0%;
    transform: translate(-170%, 0);
    transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0);
    padding-left: 20px;
    border-left-style: solid;
    border-left-width: 2px;
    border-color:darkgreen;
}
.crea a
{
    text-decoration: none;
    color: #1E1E23;
    opacity: 1;
    font-family: 'work sans', sans serif;
    font-size: 1.0em;
    font-weight: 400;
    transition: 200ms;
}
#menu input
{
  display: flex;
    width: 35px;
    height: 35px;
    position: absolute;
    cursor: pointer;
    opacity: 0;
    z-index: 2;
    left: 140px;
    top: 121px;
}
#menu span
{
  display: flex;
  width: 25px;
  height: 2px;
  margin-bottom: 5px;
  position: relative;
  background: black;
  border-radius: 3px;
  z-index: 1;
  transform-origin: 5px 0px;
  transition: transform 1.2s cubic-bezier(0.77,0.2,0.05,1.0),
              background 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
              opacity 0.55s ease;
}
#menu1 .crea
{
  padding: 7px 0;
  transition-delay: 2s;
  transition: transform .4s ease;
}

#menu #span1
{
  
  top: -26px;
    left: 93px;background: black;transform: rotate(45deg);
}

#menu #span2
{
top: -32px;
    left: 120px;
    background: black;transform: rotate(133deg);
}

#menu input:checked ~ #span1
{
  opacity: 1;
    transform: rotate(-45deg);
    background: #36383F;
}
#menu input:checked ~ #span2
{
  transform: rotate(230deg) translate(0, -1px);
}
#menu #sposta1
{
  padding: 5px 0;
  transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0);
  transition-delay: 0s;
}
#menu #sposta2
{
  padding: 10px 0;
  transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0);
  transition-delay: 0s;
}
.sposta
{
    padding: 10px 0;
    transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0);
    transform: none;
    transition-delay: 0.5s;
}
#menu #sposta1:hover
{
transform:scale(1.5) translate(25px);
}
#menu input:checked ~ #sposta2:hover
{
  transform: none;
}
#menu #sposta2:hover
{
transform:scale(1.5) translate(25px);
}
#menu input:checked ~ .sposta
{
  transform: translate(0, 270px);
    transition: transform .4s ease;
    transition-delay: 0s;
}
#menu input:checked ~ #menu1
{
  transform: none;
}

#menu a{text-decoration: none;color: #1E1E23;opacity:1;font-family: 'work sans', sans serif;font-size: 1.4em;font-weight: 400;transition: 200ms;}
#menu li{list-style: none;padding: 10px 0;font-size: 14px;}
#menu #sposta1:hover{transform:scale(1.3) translate(15px);}
#menuToggle input:checked ~ ul{ transform: none;}
#log{position: fixed; width: 88px;left: 37%;top: 0%;z-index: 1;}
}
</style>
     <link rel="stylesheet" href="/styless.css">
     <?
     require('session1.php');
     require('session4.php');
     require('db_con.php');
     
     if(isset($_POST['indirizzo']))
    {   
                
                $id=$_SESSION['id'];
                $indirizzo= $_POST["via"];
                $civico= $_POST["civico"];
                $citta= $_POST["citta"];
                $cap= $_POST["cap"];
                $costo= $_POST["costo"];
                $sas="UPDATE Ordini SET indirizzoP = '$indirizzo', civicoP= '$civico', cittaP= '$citta', capP= '$cap', costoS= '$costo' WHERE Ordini.stato='o' AND Ordini.id_utente='$id'";
                $q=mysqli_query($conn,$sas) or die('non va!'.mysqli_error());
                ?><script type="text/javascript">
                window.location.replace("/index.php?par=18&par2=1");</script><?
    }
    
if(isset($_POST['caricaP']))
    {   
                $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
    $uploadOk = 1;
  } else {
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
    ?><script>alert("Il file esiste già.");</script><?
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 10000000) {
    ?><script>alert("Il file è troppo grande.");</script><?
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  ?><script>alert("Solo i file JPG, JPEG, PNG & GIF sono consentiti.");</script><?
  $uploadOk = 0;
}

$file = $_FILES["fileToUpload"]['tmp_name'];
$info = getimagesize($file);

$larghezza = 1000;
$altezza = 1000;

if($info[0] != $larghezza and $info[1] != $altezza)
{
    ?><script>alert("La dimensione dell'immagine deve essere 1000 x 1000 pixels.");</script><?
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {

} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      $prod=$_POST["prodotto"];
      $spec=$_POST["specificazione"];
      $prezzo=$_POST["prezzo"];
      $type=$_POST["tipo"];
      $pik=$_POST["pk"];
      $sql = "INSERT INTO `Sql1429387_1`.`Prodotti` (`ID_articolo`, `nomeArticolo`, `nomeProdotto`, `immagine`, `prezzo`, `prezzoO`, `offerta`, `tipo`, `disponibile`, `pk`) VALUES (NULL, '$prod', '$spec', '$target_file', '$prezzo', '0', '0', '$type', '0', '$pik')";
    $query_ordine = mysqli_query($conn,$sql) or die(mysqli_error());
  } else {
      ?><script>alert("Il file non è stato caricato.");</script><?
  }
}
                ?><script type="text/javascript">
                window.location.replace("/index.php?par=17");</script><?
    }
           
if(isset($_POST['ora']))
    {   ?><script>alert("ciao");</script><?
                $consegna= $_POST["consegna"];
                $id=$_SESSION['id'];
                $ora= $_POST["orario"];
                $sas="UPDATE Ordini SET orario = '$ora' WHERE Ordini.nomeOrdine='$consegna' AND Ordini.stato='a'";
                //$s="UPDATE Ordini SET orario='10' WHERE Ordini.nomeOrdine='$consegna' AND Ordini.stato='a' AND Ordini.id_utente='$id'";
                $q=mysqli_query($conn,$sas) or die('non va!'.mysqli_error());
                ?><script type="text/javascript">
                window.location.replace("/index.php?par=17");</script><?
    }
    
if(isset($_POST['consegnato']))
    {   
                $consegna= $_POST["consegna"];
                $id=$_SESSION['id'];
                $s="UPDATE Ordini SET Ordini.stato='c' WHERE Ordini.nomeOrdine='$consegna' AND Ordini.stato='a'";
                $q=mysqli_query($conn,$s) or die('non va!'.mysqli_error());
                ?><script type="text/javascript">
                window.location.replace("/index.php?par=17");</script><?
    }
                
     
if(isset($_POST['compra']))
    {   
                if($_POST['sped']!=NULL){
                    ?><script type="text/javascript">
                window.location.replace("/index.php?par=18&par2=1");</script><?
                }
                else if($_POST['sped']==NULL) 
                {
                     ?><script type="text/javascript">
                window.location.replace("/index.php?par=18&par2=0");</script><?
                }}
     
     if(isset($_POST['eliminaPa']))
    {   
                $id=$_POST['eliminaPa'];
                $s="SELECT immagine FROM Prodotti WHERE Prodotti.ID_articolo='$id'";
                $q=mysqli_query($conn,$s) or die('non va!'.mysqli_error());
                $row= mysqli_fetch_array($q);
                $imm=$row['immagine'];
                unlink("$imm");
                $s="DELETE FROM Prodotti WHERE Prodotti.ID_articolo='$id'";
                $q=mysqli_query($conn,$s) or die('non va!'.mysqli_error());
                ?><script type="text/javascript">
                var prodotto = "<?php echo $_POST['prodotto']; ?>";
                window.location.replace("/index.php?par=17&ricerca=Cerca&prodotto="+prodotto);</script><?
                }
if(isset($_POST['cambiaPPP']))
    {   
                $prodotto=$_POST['prodotto1'];
                //echo $prezzo1.'<br>';
                //echo $_POST['disponibile'].'<br>';
                //echo $dis.'<br>';
                $prezzo1=$_POST["prezzo2"];
                $prezzoO=$_POST['prezzoO2'];
                if($_POST["disponibile2"]!=NULL)$dis=0;
                    else if($_POST["disponibile2"]==NULL) $dis=1;
                    if($_POST["pk2"]!=NULL)$pk=0;
                    else if($_POST["pk2"]==NULL) $pk=1;
                    if($_POST["offerta".$id]!=NULL)$offerta=1;
                    else if($_POST["offerta".$id]==NULL) $offerta=0;
                    if($prezzo1!=NULL && $prezzoO!=NULL){
                    $s="UPDATE Prodotti SET Prodotti.prezzo='$prezzo1',Prodotti.disponibile='$dis',Prodotti.pk='$pk',Prodotti.prezzoO='$prezzoO',Prodotti.offerta='$offerta' WHERE Prodotti.ID_articolo='2'";
                $q=mysqli_query($conn,$s) or die('non va!'.mysqli_error());}
                $read="SELECT ID_articolo FROM Prodotti";
                $raw=mysqli_query($conn,$read )or die('non va!'.mysqli_error());
                $row= mysqli_fetch_array($raw);
                while($row= mysqli_fetch_array($raw)){
                    //echo "sono qua";
                    $id=$row['ID_articolo'];
                    //echo $id;
                    $prezzo1=$_POST["prezzo".$id];
                    $prezzoO=$_POST['prezzoO'.$id];
                    //echo $prezzo1;
                    if($_POST["disponibile".$id]!=NULL)$dis=0;
                    else if($_POST["disponibile".$id]==NULL) $dis=1;
                    if($_POST["pk".$id]!=NULL)$pk=0;
                    else if($_POST["pk".$id]==NULL) $pk=1;
                    if($_POST["offerta".$id]!=NULL)$offerta=1;
                    else if($_POST["offerta".$id]==NULL) $offerta=0;
                    if($prezzo1!=NULL && $prezzoO!=NULL){
                $s="UPDATE Prodotti SET Prodotti.prezzo='$prezzo1',Prodotti.disponibile='$dis',Prodotti.pk='$pk',Prodotti.prezzoO='$prezzoO',Prodotti.offerta='$offerta' WHERE Prodotti.ID_articolo='$id'";
                $q=mysqli_query($conn,$s) or die('non va!'.mysqli_error()); }}?>

                <script type="text/javascript">
                var prodotto = "<?php echo $_POST['prodotto']; ?>";
                window.location.replace("/index.php?par=17&ricerca=Cerca&prodotto="+prodotto);</script><?
                }
                
if(isset($_POST['cambiaPa']))
    {           
                $read="SELECT ID_articolo FROM Prodotti";
                $raw=mysqli_query($conn,$read )or die('non va!'.mysqli_error());
                $row= mysqli_fetch_array($raw);
                if($_POST["cambiaPa"]==2){$fine=2;}else
                while($row= mysqli_fetch_array($raw)){
                    $idd=$row['ID_articolo'];
                    if($_POST["cambiaPa"]==$idd){$fine=$idd;}
                    //echo $_POST["id1".$idd];
                    //echo $idd;
                }
                $prezzo1=$_POST["prezzo".$fine];
                $prodotto=$_POST['prodotto1'];
                $prezzoO=$_POST['prezzoO'.$fine];
                //echo $_POST['disponibile'].'<br>';
                if($_POST["disponibile".$fine]!=NULL)$dis=0;
                else if($_POST["disponibile".$fine]==NULL) $dis=1;
                if($_POST["pk".$fine]!=NULL)$pk=0;
                    else if($_POST["pk".$fine]==NULL) $pk=1;
                if($_POST["offerta".$fine]!=NULL)$offerta=1;
                else if($_POST["offerta".$fine]==NULL) $offerta=0;
                $s="UPDATE Prodotti SET Prodotti.prezzo='$prezzo1',Prodotti.disponibile='$dis',Prodotti.pk='$pk',Prodotti.prezzoO='$prezzoO',Prodotti.offerta='$offerta' WHERE Prodotti.ID_articolo='$fine'";
                $q=mysqli_query($conn,$s) or die('non va!'.mysqli_error()); ?>
                <script type="text/javascript">
                var prodotto = "<?php echo $_POST['prodotto']; ?>";
                window.location.replace("/index.php?par=17&ricerca=Cerca&prodotto="+prodotto);</script><?
                }

if(isset($_POST['elacc']))
    {   
                $id=$_SESSION['id'];
                $s="DELETE FROM Utenti WHERE Utenti.ID_utente='$id'";
                $q=mysqli_query($conn,$s) or die('non va!'.mysqli_error());
                session_destroy();
                ?><script>alert("Account cancellato correttamente!");window.location.replace("/index.php?par=1");</script><?
                }
                
                
if(isset($_POST["emailchange"])){
                                $cambia=strtolower(stripslashes(strip_tags($_POST['email1'])));
                                $read="SELECT Count( * ) AS Conta FROM Utenti  WHERE Utenti.email = '$cambia'";
$raw=mysqli_query($conn,$read);
$row= mysqli_fetch_array($raw);
if ($row['Conta']>0 ){
?><script>alert("E-mail già registrata!"); window.location.replace("/index.php?par=16");</script><?
}
else{
                                $id=$_SESSION['id'];
								$result1="UPDATE Utenti SET Utenti.email = '$cambia',Utenti.conferma=0 WHERE Utenti.ID_utente = '$id'";
								$raw1=mysqli_query($conn,$result1)  or die("failed to change email!");
							 	$_SESSION['email']=$cambia;
								$to = $cambia;
                  $subject = "Conferma Email!";
                  $body = "Ciao $nome1,Clicca sul <a href='http://dolcefrutta.it/conferma.php?id=$id'>link</a> per confermare l'account,<br /><br>Oppure copiando questo link:<br>http://dolcefrutta.it/conferma.php?id=$id";
                  $headers = "MIME-Version: 1.0\r\n";
                  $headers .= "Content-type:text/html;charset=UTF-8\r\n";
                  $headers .= "From: You <dolcefrutta@dolcefrutta.it>\r\n";
                 if( mail($to,$subject,$body,$headers))
                 {
                  ?><script>alert("Controlla La Tua Email Per Confermare La Registrazione!");
                  </script><?
                 }
								
								;?>
								<script>alert("E-mail cambiata correttamente!");window.location.replace("/index.php?par=1");</script><?
}}



if(isset($_POST['elimina']) || isset($_POST['quantita1']))
    {
    $idA=$_POST['idA'];
    $idU=$_SESSION['id'];
    //if($_POST['quantita']!=0){
        $read="SELECT Count( * ) AS Conta FROM Ordini  WHERE Ordini.id_articolo = '$idA' AND Ordini.id_utente = '$idU' AND Ordini.stato='o'";
                $raw=mysqli_query($conn,$read);
                $row= mysqli_fetch_array($raw);
                if ($row['Conta']!=0 ){
                $s="DELETE FROM Ordini WHERE Ordini.id_articolo = '$idA' AND Ordini.id_utente = '$idU'";
                $q=mysqli_query($conn,$s);
                    ?><script>location.replace("/index.php?par=15");</script><?
                }}//} 
                
                
if(isset($_POST['inc1']))
    {
    $idA=$_POST['idA'];
    $idU=$_SESSION['id'];
    if($_POST['quantita']!=0){
        $read="SELECT Count( * ) AS Conta FROM Ordini  WHERE Ordini.id_articolo = '$idA' AND Ordini.id_utente = '$idU' AND Ordini.stato='o'";
                $raw=mysqli_query($conn,$read);
                $row= mysqli_fetch_array($raw);
                if ($row['Conta']!=0 ){
                $s="SELECT Prodotti.prezzo, Ordini.prezzoTotale, Ordini.quantitaAcquistata, Prodotti.prezzoO, Prodotti.offerta FROM ((Prodotti INNER JOIN Ordini ON Ordini.id_articolo = Prodotti.ID_articolo)INNER JOIN Utenti ON Ordini.id_utente = Utenti.ID_utente) WHERE Prodotti.ID_articolo='$idA' AND Utenti.ID_utente='$idU' AND Ordini.stato='o'";
                $q=mysqli_query($conn,$s);
                while($r=mysqli_fetch_array($q))
                {
                    $quantitaA=$r['quantitaAcquistata'];
                    if($r['offerta']==0) $prezzo=$r['prezzo'];
                    else $prezzo=$r['prezzoO'];
                    $prezzoT=$r['prezzoTotale'];
                }
                $prezzoC=$prezzoT + $prezzo;
                $quantitaA=$quantitaA + 1;
                    $sql = "UPDATE Ordini SET Ordini.prezzoTotale='$prezzoC', Ordini.quantitaAcquistata='$quantitaA'  WHERE Ordini.id_articolo='$idA' AND  Ordini.id_utente='$idU'";
                    $query_ordine = mysqli_query($conn,$sql)
                    or die ("query di registrazione non riuscita".mysqli_error());
                    ?><script>location.replace("/index.php?par=15");</script><?
                }}}
if(isset($_POST['dec1']))
    {
    $idA=$_POST['idA'];
    $idU=$_SESSION['id'];
    if($_POST['quantita']!=0){
        $read="SELECT Count( * ) AS Conta FROM Ordini  WHERE Ordini.id_articolo = '$idA' AND Ordini.id_utente = '$idU' AND Ordini.stato='o'";
                $raw=mysqli_query($conn,$read);
                $row= mysqli_fetch_array($raw);
                if ($row['Conta']!=0 ){
                $s="SELECT Prodotti.prezzo, Ordini.prezzoTotale, Ordini.quantitaAcquistata, Prodotti.prezzoO, Prodotti.offerta FROM ((Prodotti INNER JOIN Ordini ON Ordini.id_articolo = Prodotti.ID_articolo)INNER JOIN Utenti ON Ordini.id_utente = Utenti.ID_utente) WHERE Prodotti.ID_articolo='$idA' AND Utenti.ID_utente='$idU' AND Ordini.stato='o'";
                $q=mysqli_query($conn,$s);
                while($r=mysqli_fetch_array($q))
                {
                    $quantitaA=$r['quantitaAcquistata'];
                    if($r['offerta']==0) $prezzo=$r['prezzo'];
                    else $prezzo=$r['prezzoO'];
                    $prezzoT=$r['prezzoTotale'];
                }
                $prezzoC=$prezzoT - $prezzo;
                $quantitaA=$quantitaA- 1;
                    $sql = "UPDATE Ordini SET Ordini.prezzoTotale='$prezzoC', Ordini.quantitaAcquistata='$quantitaA'  WHERE Ordini.id_articolo='$idA' AND  Ordini.id_utente='$idU' AND Ordini.stato='o'";
                    $query_ordine = mysqli_query($conn,$sql)
                    or die ("query di registrazione non riuscita".mysqli_error());
                    ?><script>location.replace("/index.php?par=15");</script><?
                }}}
                
                
if(isset($_POST['inc']))
    {
    $idA=$_POST['idA'];
    $idU=$_SESSION['id'];
    if($_POST['quantita']!=0){
        $read="SELECT Count( * ) AS Conta FROM Ordini  WHERE Ordini.id_articolo = '$idA' AND Ordini.id_utente = '$idU' AND Ordini.stato='o'";
                $raw=mysqli_query($conn,$read);
                $row= mysqli_fetch_array($raw);
                if ($row['Conta']!=0 ){
                $s="SELECT Prodotti.prezzo, Ordini.prezzoTotale, Ordini.quantitaAcquistata, Prodotti.prezzoO, Prodotti.offerta FROM ((Prodotti INNER JOIN Ordini ON Ordini.id_articolo = Prodotti.ID_articolo)INNER JOIN Utenti ON Ordini.id_utente = Utenti.ID_utente) WHERE Prodotti.ID_articolo='$idA' AND Utenti.ID_utente='$idU' AND Ordini.stato='o'";
                $q=mysqli_query($conn,$s);
                while($r=mysqli_fetch_array($q))
                {
                    $quantitaA=$r['quantitaAcquistata'];
                    if($r['offerta']==0) $prezzo=$r['prezzo'];
                    else $prezzo=$r['prezzoO'];
                    $prezzoT=$r['prezzoTotale'];
                }
                $prezzoC=$prezzoT + ($prezzo*0.1);
                $quantitaA=$quantitaA + 0.1;
                    $sql = "UPDATE Ordini SET Ordini.prezzoTotale='$prezzoC', Ordini.quantitaAcquistata='$quantitaA'  WHERE Ordini.id_articolo='$idA' AND  Ordini.id_utente='$idU'";
                    $query_ordine = mysqli_query($conn,$sql)
                    or die ("query di registrazione non riuscita".mysqli_error());
                    ?><script>location.replace("/index.php?par=15");</script><?
                }}}
if(isset($_POST['dec']))
    {
    $idA=$_POST['idA'];
    $idU=$_SESSION['id'];
    if($_POST['quantita']!=0){
        $read="SELECT Count( * ) AS Conta FROM Ordini  WHERE Ordini.id_articolo = '$idA' AND Ordini.id_utente = '$idU' AND Ordini.stato='o'";
                $raw=mysqli_query($conn,$read);
                $row= mysqli_fetch_array($raw);
                if ($row['Conta']!=0 ){
                $s="SELECT Prodotti.prezzo, Ordini.prezzoTotale, Ordini.quantitaAcquistata, Prodotti.prezzoO, Prodotti.offerta FROM ((Prodotti INNER JOIN Ordini ON Ordini.id_articolo = Prodotti.ID_articolo)INNER JOIN Utenti ON Ordini.id_utente = Utenti.ID_utente) WHERE Prodotti.ID_articolo='$idA' AND Utenti.ID_utente='$idU' AND Ordini.stato='o'";
                $q=mysqli_query($conn,$s);
                while($r=mysqli_fetch_array($q))
                {
                    $quantitaA=$r['quantitaAcquistata'];
                    if($r['offerta']==0) $prezzo=$r['prezzo'];
                    else $prezzo=$r['prezzoO'];
                    $prezzoT=$r['prezzoTotale'];
                }
                $prezzoC=$prezzoT - ($prezzo*0.1);
                $quantitaA=$quantitaA- 0.1;
                    $sql = "UPDATE Ordini SET Ordini.prezzoTotale='$prezzoC', Ordini.quantitaAcquistata='$quantitaA'  WHERE Ordini.id_articolo='$idA' AND  Ordini.id_utente='$idU' AND Ordini.stato='o'";
                    $query_ordine = mysqli_query($conn,$sql)
                    or die ("query di registrazione non riuscita".mysqli_error());
                    ?><script>location.replace("/index.php?par=15");</script><?
                }}}
                
if(isset($_POST['aggiungi1']))
{
    $idA=$_POST['idA'];
    $qu=$_POST['quantita'];
    $idU=$_SESSION['id'];
    if($_POST['quantita']!=0){
        $read="SELECT Count( * ) AS Conta FROM Ordini  WHERE Ordini.id_articolo = '$idA' AND Ordini.id_utente = '$idU' AND Ordini.stato='o'";
                $raw=mysqli_query($conn,$read);
                $row= mysqli_fetch_array($raw);
                if ($row['Conta']!=0 ){
                $s="SELECT Prodotti.prezzoO, Ordini.prezzoTotale, Ordini.quantitaAcquistata FROM ((Prodotti INNER JOIN Ordini ON Ordini.id_articolo = Prodotti.ID_articolo)INNER JOIN Utenti ON Ordini.id_utente = Utenti.ID_utente) WHERE Prodotti.ID_articolo='$idA' AND Utenti.ID_utente='$idU' AND Ordini.stato='o'";
                $q=mysqli_query($conn,$s);
                while($r=mysqli_fetch_array($q))
                {
                    $quantitaA=$r['quantitaAcquistata'];
                    $prezzoO=$r['prezzoO'];
                    $prezzoT=$r['prezzoTotale'];
                }
                $prezzoC=($qu*$prezzoO)+$prezzoT;
                $quantitaA=$quantitaA+$qu;
                    $sql = "UPDATE Ordini SET Ordini.prezzoTotale='$prezzoC', Ordini.quantitaAcquistata='$quantitaA'  WHERE Ordini.id_articolo='$idA' AND  Ordini.id_utente='$idU' AND Ordini.stato='o'";
                    $query_ordine = mysqli_query($conn,$sql)
                    or die ("query di registrazione non riuscita".mysqli_error());
                    ?><script>location.replace("/index.php?par=9");</script><?
                }
else
	{
    $s="SELECT Prodotti.prezzoO FROM Prodotti WHERE ID_articolo='$idA'";
    $q=mysqli_query($conn,$s);
    while($r=mysqli_fetch_array($q))
    {
        $prezzoO=$r['prezzoO'];
    }
    $prezzoT= ($prezzoO * $qu);
    $stato='o';
    $sql = "INSERT INTO Ordini (quantitaAcquistata, prezzoTotale, stato, id_utente, id_articolo)
VALUES ('$qu', '$prezzoT', '$stato', '$idU', '$idA')";
    $query_ordine = mysqli_query($conn,$sql)
or die ("query di registrazione non riuscita".mysqli_error());
?><script>location.replace("/index.php?par=9");</script><?
	}
}}
     
if(isset($_POST['aggiungi']))
{
    $idA=$_POST['idA'];
    $qu=$_POST['quantita'];
    $idU=$_SESSION['id'];
    if($_POST['quantita']!=0){
        $read="SELECT Count( * ) AS Conta FROM Ordini  WHERE Ordini.id_articolo = '$idA' AND Ordini.id_utente = '$idU' AND Ordini.stato='o'";
                $raw=mysqli_query($conn,$read);
                $row= mysqli_fetch_array($raw);
                if ($row['Conta']!=0 ){
                $s="SELECT Prodotti.prezzo, Ordini.prezzoTotale, Ordini.quantitaAcquistata FROM ((Prodotti INNER JOIN Ordini ON Ordini.id_articolo = Prodotti.ID_articolo)INNER JOIN Utenti ON Ordini.id_utente = Utenti.ID_utente) WHERE Prodotti.ID_articolo='$idA' AND Utenti.ID_utente='$idU' AND Ordini.stato='o'";
                $q=mysqli_query($conn,$s);
                while($r=mysqli_fetch_array($q))
                {
                    $quantitaA=$r['quantitaAcquistata'];
                    $prezzo=$r['prezzo'];
                    $prezzoT=$r['prezzoTotale'];
                }
                $prezzoC=($qu*$prezzo)+$prezzoT;
                $quantitaA=$quantitaA+$qu;
                    $sql = "UPDATE Ordini SET Ordini.prezzoTotale='$prezzoC', Ordini.quantitaAcquistata='$quantitaA'  WHERE Ordini.id_articolo='$idA' AND  Ordini.id_utente='$idU' AND Ordini.stato='o'";
                    $query_ordine = mysqli_query($conn,$sql)
                    or die ("query di registrazione non riuscita".mysqli_error());
                    ?><script>location.replace("/index.php?par=9");</script><?
                }
else
	{
    $s="SELECT Prodotti.prezzo FROM Prodotti WHERE ID_articolo='$idA'";
    $q=mysqli_query($conn,$s);
    while($r=mysqli_fetch_array($q))
    {
        $prezzo=$r['prezzo'];
    }
    $prezzoT= ($prezzo * $qu);
    $stato='o';
    $sql = "INSERT INTO Ordini (quantitaAcquistata, prezzoTotale, stato, id_utente, id_articolo)
VALUES ('$qu', '$prezzoT', '$stato', '$idU', '$idA')";
    $query_ordine = mysqli_query($conn,$sql)
or die ("query di registrazione non riuscita".mysqli_error());
?><script>location.replace("/index.php?par=9");</script><?
	}
}}

/*     $expireAfter = 180;
     if(isset($_SESSION['last_action'])){
     $secondsInactive = time() - $_SESSION['last_action'];
     $expireAfterSeconds = $expireAfter * 60;
     if($secondsInactive >= $expireAfterSeconds){
        //User has been inactive for too long.
        //Kill their session.
        $id=$_SESSION["id"];
        $s="DELETE FROM Ordini WHERE Ordini.stato='o' AND Ordini.id_utente='$id'";
        $q=mysqli_query($conn,$s) or die('non va!'.mysqli_error());
        session_unset();
        session_destroy();
        ?><script>alert("Sessione scaduta!");
         window.location.replace("/index.php?par=2");</script><?
    }
    
}*/
     
     if(isset($_POST['emailR'])){
	$errore=0; 
	if($_POST['emailR']==""){
		$errore=1;
	}else{
    			$emailR=$_POST['emailR'];
                $nick = strtolower(stripslashes(strip_tags($_POST['emailR'])));
                $read1="SELECT Count( * ) AS Conta FROM Utenti  WHERE Utenti.email = '$nick'";
                $raw1=mysqli_query($conn,$read1);
                $row1= mysqli_fetch_array($raw1);
                if ($row1['Conta']==0 ){
                $errore=1;
                ?><script>alert("E-mail non presente!"); window.location.replace("/index.php?par=12");</script><?
                }
                else{
                        $s="SELECT Utenti.ID_utente, Utenti.password FROM Utenti WHERE email='".$nick."' LIMIT 0,1";
                        $q=mysqli_query($conn,$s);
                        while($r=mysqli_fetch_array($q))
                        {
                        $ID=$r['ID_utente'];
                        }
                        if($errore==0){
                        		$daR="dolcefrutta@dolcefrutta.it";
                                $header3= "From: ".$daR."\n";
                                $header3 .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";
                                $header3 .= "Content-Transfer-Encoding: 7bit\n\n";				
                                $subject= "Dolce Frutta - Nuova password utente";
                                $mess_invio="<html><body>";
                                $mess_invio.="
		Clicca sul <a href=\"http://dolcefrutta.it/index.php?par=13&par2=".$ID."\">link</a> per cambiare la password.<br /><br>
		Se il link non &egrave; visibile, copia la riga qui sotto e incollala sul tuo browser: <br />
		http://dolcefrutta.it/index.php?par=13&par2=".$ID."
		<br>";
		
		$mess_invio.='</body><html>';
		
		//invio email
		if(mail($emailR, $subject, $mess_invio, $header3)){
			?><script>alert("E-mail spedita!");</script><?
			unset($_POST); //elimino le variabili post, in modo che non appaiano nel form
                        }
                        }
                }   
                }
                }
                
                
if (isset($_POST["submit"])){

$a = "dolcefrutta@dolcefrutta.it";
if(!isset($_SESSION['attiva'])) $da = $_POST['da'];
else $da= $_SESSION['email'];
$obj = $_POST['obj'];
$testo = $_POST['testo'];

  $attachment = $_FILES['attachment']['tmp_name'];
  $attachment_type = $_FILES['attachment']['type'];
  $attachment_name = $_FILES['attachment']['name'];
  
$intestazioni = "From: " . $da;
  $messaggio = "";
  if ($_FILES['attachment']['size'] > 4194304) {
  			?><script>alert("Il file è troppo grande!");
            window.location.replace("/index.php?par=11");</script><?
  			exit;
			}
            $ext_ok = array('doc', 'docx', 'pdf');
		$temp = explode('.', $_FILES['attachment']['name']);
		$ext = end($temp);
		if (!in_array($ext, $ext_ok)) {
        ?><script>alert("Il file ha un estensione non ammessa! \n Estensioni consentite: .doc, .docx e .pdf");
         window.location.replace("/index.php?par=11");</script><?
  		exit;
		}
  

if (is_uploaded_file($attachment))
  {
  $file = fopen($attachment,'rb');
  $data = fread($file, filesize($attachment));
  fclose($file);
  $data = chunk_split(base64_encode($data));
  $rand = md5(time());
  $boundary = "==Multipart_Boundary_x{$rand}x";
  
  $intestazioni .= "\nMIME-Version: 1.0\n";
  $intestazioni .= "Content-Type: multipart/mixed;\n";
  $intestazioni .= " boundary=\"{$boundary}\"";
  
  $messaggio .= "This is a multi-part message in MIME format.\n\n";
  $messaggio .= "--{$boundary}\n";
  $messaggio .= "Content-Type: text/plain; charset=\"iso-8859-1\"\n";
  $messaggio .= "Content-Transfer-Encoding: 7bit\n\n";
  $messaggio .= $testo . "\n\n";
  $messaggio .= "--{$boundary}\n";
  $messaggio .= "Content-Disposition: attachment;\n";
  $messaggio .= " filename=\"{$attachment_name}\"\n";
  $messaggio .= "Content-Transfer-Encoding: base64\n\n";
  $messaggio .= $data . "\n\n";
  $messaggio .= "--{$boundary}--\n";
  }
  else{
  $messaggio = $testo;
 }

if (mail($a, $obj, $messaggio, $intestazioni))
  {
  ?><script>alert("E-mail spedita!");</script><?
  $userMessage = '<html>
   						<head>
      							<title>Grazie per averci contattato</title>
    					</head>
    				<body>
      				<h1>Grazie per averci contattato</h1>
      				<p>La tua richiesta è stata inoltrata. Ti risponderemo al più presto.</p>
      				<p>Lo Staff di Dolce Frutta</p>
    				</body>
  					</html>';
                    	    $intestazioni1 = "From: " . $a;
                            $intestazioni1 .= "\nMIME-Version: 1.0\n";
			    $intestazioni1 .= 'Content-type: text/html; charset=utf-8';
                            $intestazioni1 .= " boundary=\"{$boundary}\"";
				mail($da, 'Richiesta di contatto effettuata con successo', $userMessage, $intestazioni1);
  }else{
  ?><script>alert("Si è verificato un errore nell'invio.");</script><?
  }}
     ?>
<body background-color="white" style="overflow-x: hidden;overflow-y: auto;">
 <div id="loading_screen">
  <img src="images/loading.gif"> 
  <p>La pagina è in building!<br/>
  Presto usciranno aggiornamenti!</p>
</div>
         <div id="menum">
		<!-- Lista generale -->
        <?
                                if(isset($_SESSION['attiva'])){
                                    if($_SESSION['attiva']==true)
                                {
                                $username = $_SESSION['username'];?>
								<p style='position: absolute;top: 17px;color: black;right: 27px;font-family: caviar,fantasy;'>Ciao <? echo "$username"; ?>!</p><? }}?>
		<ul>
                        <li id="altro2">
                                <a Class="altro" href="#">&#9660;</a>
				<ul>
                    <li><a class="altro3" href="index.php?par=11">Lavora con noi</a></li>
                    <li><a class="altro3" style="height: 40px;" href="index.php?par=7">Dove siamo e contatti</a></li>
                    <? if(isset($_SESSION['attiva'])){
                                    if($_SESSION['attiva']==true)
                                {
                                    if($_SESSION['previlegio']==1){
                                ?>
                                <li><a class="altro3" href="index.php?par=16">Impostazioni</a></li><? }
                                if($_SESSION['previlegio']==2){
                                ?>
                                <li><a class="altro3" href="index.php?par=17">Impostazioni</a></li><? }?>
                    <li><a class="altro3" href="session4.php?var=1">Logout</a></li><?}}?>
				</ul>
                        </li>
                        <?
                                if(!isset($_SESSION['attiva'])){
                                    if($_SESSION['attiva']=='')
                                {
                                ?>
                        <li style="position: absolute;top: 20px;right: 161px;margin-top:0px;"><a class="altro7" href="index.php?par=2">Accedi</a></li><?}}?>
                        <li style="top: -30px;position: relative;"><a id="ll" href="index.php?par=1"><img id="logo" src="images/logopc.gif" title="logo"></a></li>
			<!-- 2° Elemento -->
			<li id="altro1"><a class="altro" href="index.php?par=19">Orari</a></li>
			    <? if(!isset($_SESSION['attiva'])){
                                    if($_SESSION['attiva']=='')
                                {
                                ?>
                        <li id="ordine"><a id="ordi" href="index.php?par=8">Registrati</a></li><? }} ?>
                        <li style="position: absolute;left: 8px;top: 25px;" id="altro5">
                                <a Class="altro6" href="index.php?par=9">Prodotti</a>
				<ul>
					<li><a class="altro6" href="index.php?par=9&p=1">Frutta</a></li>
                                        <li><a class="altro6" href="index.php?par=9&p=2">Verdura</a></li>
					<li><a class="altro6" href="index.php?par=9&p=3">Vino</a></li>
                                        <li><a class="altro6" style="padding-bottom:25px;" href="index.php?par=9&p=4">Generi alimentari</a></li>
                                        <li><a class="altro6" href="index.php?par=9&p=5">Grappa</a></li>
                                        <li><a class="altro6" href="index.php?par=9&p=6">Amaro</a></li>
                                        <li><a class="altro6" href="index.php?par=9&p=7">Spumante</a></li>
                                        <li><a class="altro6" href="index.php?par=9&p=8">Superalcolici</a></li>
				</ul>
                        </li>
                        <li><a target="_blank" href="https://www.instagram.com/davidestaffiero/"><img style="width: 32px;right: 25px;margin-top: 72px;position: absolute;" src="images/instagram.png" alt="Instagram"></a></li>
                        <li><a target="_blank" href="https://www.facebook.com/davidestaffiero11/"><img style="position: absolute;width: 37px;margin-top: 70px;right: 60px;" src="images/facebook.png" alt="Facebook"></a></li>
                        
                        <? if(isset($_SESSION['attiva'])){
                                    if($_SESSION['attiva']==true)
                                {
                                    $idC=$_SESSION['id'];
                                $contaO="SELECT Count( * ) AS Conta FROM Ordini  WHERE Ordini.id_utente = '$idC' AND Ordini.stato='o'";
                        $contatore1=mysqli_query($conn,$contaO);
                        $contatore2= mysqli_fetch_array($contatore1);
                        $contatoreO=$contatore2['Conta'];
                        if ($contatore2['Conta']!=0 ){
                                                        echo "<p style='width: 23px;height: 21px;text-align: center;position: absolute;right: 107px;z-index: -1;top: 52px;font-family:caviar,fantasy;font-size: 12px;background-color: orange;border-radius: 12px;color:black;'>".$contatoreO.'</p>';}
                            ?>
                            <li><a href="index.php?par=15"><img style="width: 32px;margin-top: 72px;right: 99px;position: absolute;" src="images/carrello.png" alt="Carrello"></a></li><?}}
                            else
                            {
                ?>
                        
                        <li><a href="index.php?par=2"><img style="position: absolute;width: 32px;float: right;margin-top: 73px;right: 100px;" src="images/carrello.png" alt="Carrello"></a></li>
                        <? } ?>
			<!-- 3° Elemento: (Sottomenu) -->
		</ul>
	</div>
        <div id="menut">
        <?
                                if(isset($_SESSION['attiva'])){
                                    if($_SESSION['attiva']==true)
                                {
                                     $idC=$_SESSION['id'];
                                $contaO="SELECT Count( * ) AS Conta FROM Ordini  WHERE Ordini.id_utente = '$idC' AND Ordini.stato='o'";
                        $contatore1=mysqli_query($conn,$contaO);
                        $contatore2= mysqli_fetch_array($contatore1);
                        $contatoreO=$contatore2['Conta'];
                        if ($contatore2['Conta']!=0 ){
                                                        echo "<p style='width: 23px;height: 21px;text-align: center;position: absolute;right: 33px;z-index: -1;top: 25px;font-family:caviar,fantasy;font-size: 12px;background-color: orange;border-radius: 12px;color:black;'>".$contatoreO.'</p>';}
                                $username = $_SESSION['username'];?>
								<p style="position: absolute;top: 0px;color: black;right: 15px;font-family: caviar,'work sans','sans serif';font-weight: bold;">Ciao <? echo "$username"; ?>!</p>
                                                                <a href="index.php?par=15"><img style="width: 40px;float: right;top: 43px;right: 20px;position: relative;" src="images/carrello.png" title="carrello"></a><? }}?>
        <a href="index.php?par=1"><img id="log" src="images/logo.gif" alt="logo"></a>
        <?
                                if(!isset($_SESSION['attiva'])){
                                    if($_SESSION['attiva']=='')
                                {
                                ?>
        <button id="tastino" style="position: relative;float: right;margin-right: 35px;top: 34px;width: 65px;height: 30px;"><a style="margin-left: 0px;vertical-align: -webkit-baseline-middle;font-family: sans-serif;font-size: small;text-decoration: none;color: white;font-weight: bolder;text-transform: uppercase;" href="index.php?par=2">Accedi</a></button><?}}?>
        <div id="menuToggle">
                            <input type="checkbox" />
                            <span></span>
                            <span></span>
                            <span></span>
                            <ul id="menu">
                            	<li><a href="index.php?par=9"><b>Prodotti</b></a></li><input type="checkbox"  />                            <span id="span1"></span>
                            <span id="span2" ></span>
                            <ul id="menu1">
                                <li class="crea" id="sposta1"><a  href="index.php?par=9&p=1"><b>Frutta</b></a></li>
                                <li class="crea" id="sposta1"><a  href="index.php?par=9&p=2"><b>Verdura</b></a></li>
                                <li class="crea" id="sposta1"><a  href="index.php?par=9&p=3"><b>Vino</b></a></li>
                                <li class="crea" id="sposta1"><a  href="index.php?par=9&p=4"><b>Generi alimentari</b></a></li>
                                <li class="crea" id="sposta1"><a  href="index.php?par=9&p=5"><b>Grappa</b></a></li>
                                <li class="crea" id="sposta1"><a  href="index.php?par=9&p=6"><b>Amaro</b></a></li>
                                <li class="crea" id="sposta1"><a  href="index.php?par=9&p=7"><b>Spumante</b></a></li>
                                <li class="crea" id="sposta1"><a  href="index.php?par=9&p=8"><b>Superalcolici</b></a></li>
                                </ul>
                                <li class="sposta"><a href="index.php?par=19"><b>Orari</b></a></li>
                                <li class="sposta"><a href="index.php?par=10"><b>Social</b></a></li>
                                <li class="sposta"><a href="index.php?par=11"><b>Lavora con noi</b></a></li>
                                <li class="sposta"><a href="index.php?par=7"><b>Dove siamo e contatti</b></a></li>
                                <? if(!isset($_SESSION['attiva'])){
                                    if($_SESSION['attiva']=='')
                                {
                                ?>
                                <li class="sposta"><a href="index.php?par=8"><b>Registrati</b></a></li>
                                  <? }}
                                if(isset($_SESSION['attiva'])){
                                    if($_SESSION['attiva']==true)
                                {
                                    if($_SESSION['previlegio']==1){
                                ?>
                                <li class="sposta"><a href="index.php?par=16"><b>Impostazioni</b></a></li><? }
                                if($_SESSION['previlegio']==2){
                                ?>
                                <li class="sposta"><a href="index.php?par=17"><b>Impostazioni</b></a></li><? }?>
                                <li class="sposta"><a href="session4.php?var=1"><b>Logout</b></a></li><?}}?>
                            </ul>
                        </div>
        </div>
        <?php
					$pagina="principale.php";
					if (isset($_GET['par'])) 
						{ 
                                        if($_GET['par']==2)
                                            $pagina="login.php";
					if($_GET['par']==3)
                                                $pagina="contatta.php";
					if($_GET['par']==4)
						$pagina="info.php";
					if($_GET['par']==5)
						$pagina="social.php";
                                        if($_GET['par']==7)
						$pagina="dove.php";
                                        if($_GET['par']==8)
						$pagina="registrazione.php";
                                        if($_GET['par']==9)
						$pagina="prodotti.php";
                                        if($_GET['par']==10)
						$pagina="social.php";
                                        if($_GET['par']==11)
						$pagina="lavora.php";
                                        if($_GET['par']==12)
						$pagina="recupero.php";
                                        if($_GET['par']==12) 
                                                $pagina="recupero.php";
                                        if($_GET['par']==13) 
                                                $pagina="nuova_pass.php";
                                        if($_GET['par']==14) 
                                                $pagina="chisiamo.php";
                                        if($_GET['par']==15) 
                                                $pagina="carrello.php";
                                         if($_GET['par']==16) 
                                                $pagina="impostazioni.php";
                                                if($_GET['par']==17) 
                                                $pagina="impostazioniA.php";  
                                                if($_GET['par']==18) 
                                                $pagina="acquista.php"; 
                                                if($_GET['par']==19) 
                                                $pagina="orari.php"; 
						}
									
								include  $pagina;
								 #flush("false");
					 ?>
 <div id="box">
 <? if(!isset($_SESSION['attiva'])){
                                    if($_SESSION['attiva']=='')
                                {
                                ?>
               <div id="sen"><a href="index.php?par=2">FAI LA SPESA</a></div><? }}else{?><div id="sen"><a href="#">FAI LA SPESA</a></div><?}?>
               <img src="images/frecce.png" style="position:absolute;width:60px;left:48%;" title="Frecce"/>
               <div id="dis"><a href="#">WORK IN PROGRESS</a></div>
        </div>
        </body>