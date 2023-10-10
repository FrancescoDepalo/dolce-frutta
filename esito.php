<?
session_start();
include "db_con.php";
if(isset($_GET['mac'])){
    $CHIAVESEGRETA = "---";

// Controllo che ci siano tutti i parametri di ritorno obbligatori per calcolare il MAC
$requiredParams = array('codTrans', 'esito', 'importo', 'divisa', 'data', 'orario', 'codAut', 'mac');
foreach ($requiredParams as $param) {
    if (!isset($_REQUEST[$param])) {
        echo 'Paramentro mancante ' . $param;
        exit;
    }
}

// Calcolo MAC con i parametri di ritorno
$macCalculated = sha1('codTrans=' . $_REQUEST['codTrans'] .
        'esito=' . $_REQUEST['esito'] .
        'importo=' . $_REQUEST['importo'] .
        'divisa=' . $_REQUEST['divisa'] .
        'data=' . $_REQUEST['data'] .
        'orario=' . $_REQUEST['orario'] .
        'codAut=' . $_REQUEST['codAut'] .
        $CHIAVESEGRETA
);

// Verifico corrispondenza tra MAC calcolato e parametro mac di ritorno
if ($macCalculated != $_REQUEST['mac']) {
     ?><script type="text/javascript">alert("Pagamento non riuscito!");
                window.location.replace("/index.php");</script><?
    exit;
    
}

// Nel caso in cui non ci siano errori gestisco il parametro esito
if ($_REQUEST['esito'] == 'OK') {
                                date_default_timezone_set('Europe/Rome');
                                $domani = date('Y-m-d', strtotime("+1 day"));
                                $giorno =date("l",strtotime("+1 day"));
                                if($giorno=="Sunday"){$domani = date('Y-m-d', strtotime("+2 day"));}
                                $id=$_SESSION["id"];
                                $read="SELECT Count( * ) AS Conta FROM Ordini WHERE Ordini.stato = 'a' AND Ordini.data='$domani' AND Ordini.ora='830'";
                                $raw=mysqli_query($conn,$read)or die("failed to change email!".mysqli_error());
                                $row= mysqli_fetch_array($raw);
                                if ($row['Conta']==0 ){
                                    
                                    $sql = "UPDATE Ordini SET Ordini.data='$domani', Ordini.ora='1630'  WHERE Ordini.id_utente='$id' AND  Ordini.stato='o'";
                                    $query_ordine = mysqli_query($conn,$sql)
                                    or die ("query di registrazione non riuscita".mysqli_error());
                                    $esci=1;
                                }
                                else
                                {
                                    $d=1;
                                    $i=17;
                                    $giorno =date("l",strtotime("+$d day"));
                                    if($giorno=="Sunday"){$d++;}
                                    $salva=$i;
                                    while($esci!=1){
                                        
                                        if($salva==20){$i=17;$salva=17;$d++;$domani = date('Y-m-d', strtotime("+$d day"));$giorno =date("l",strtotime("+$d day"));
                                        if($giorno=="Sunday"){$d++;$domani = date('Y-m-d', strtotime("+$d day"));}}
                                        if(strlen($salva)>=3){
                                        $read="SELECT Count( * ) AS Conta FROM Ordini WHERE Ordini.stato = 'a' AND Ordini.data='$domani' AND Ordini.ora='$salva'";
                                        $raw=mysqli_query($conn,$read)or die("failed to change email!".mysqli_error());}
                                        else
                                        {
                                            $read="SELECT Count( * ) AS Conta FROM Ordini WHERE Ordini.stato = 'a' AND Ordini.data='$domani' AND Ordini.ora='".$salva.'00'."'";
                                        $raw=mysqli_query($conn,$read)or die("failed to change email!".mysqli_error());
                                        }
                                        $row= mysqli_fetch_array($raw);
                                        if ($row['Conta']==0 ){
                                            if(strlen($salva)>=3){
                                            $sql = "UPDATE Ordini SET Ordini.data='$domani', Ordini.ora='$salva' WHERE Ordini.id_utente='$id' AND  Ordini.stato='o'";
                                            $query_ordine = mysqli_query($conn,$sql)
                                            or die ("query di registrazione non riuscita".mysqli_error());
                                            }else
                                            {
                                                $sql = "UPDATE Ordini SET Ordini.data='$domani', Ordini.ora='".$salva."00"."' WHERE Ordini.id_utente='$id' AND  Ordini.stato='o'";
                                            $query_ordine = mysqli_query($conn,$sql)
                                            or die ("query di registrazione non riuscita".mysqli_error());
                                            }
                                            $esci=1;
                                            }
                                        if($salva==$i){$j=($i*100)+30;$salva=$j;}
                                        else {$i++;$salva=$i;}
                                }
                                }
                                if($esci==1){
								$result1="SELECT Utenti.email, Utenti.nome, Utenti.cognome FROM Utenti WHERE Utenti.ID_utente='$id' ";
								$raw1=mysqli_query($conn,$result1)  or die("failed to change email!");
								 while($r=mysqli_fetch_array($raw1))
                                {
							 	$mail=$r['email'];
								$to = $mail;
                                }
								$result2="SELECT Ordini.data, Ordini.ora FROM Ordini WHERE Ordini.id_utente='$id' AND Ordini.stato='o'";
								$raw2=mysqli_query($conn,$result2)  or die("failed to change email!");
								while($r=mysqli_fetch_array($raw2))
                                {
                                $date = date_create($r['data']);
							 	$data=date_format($date,"d/m/Y");
								$ora=$r['ora'];
                                }
                  $subject = "Orario consegna ordine ".$_REQUEST['codAut']."";
                  $body = "L'ordine ".$_REQUEST['codAut']." arriverà il giorno $data.<br><br>Per stabilire l'orario di consegna chiamare il numero 03621731510";
                  $headers = "MIME-Version: 1.0\r\n";
                  $headers .= "Content-type:text/html;charset=UTF-8\r\n";
                  $headers .= "From: Dolce Frutta <dolcefrutta@dolcefrutta.it>\r\n";
                 if( mail($to,$subject,$body,$headers))
                 {
                  ?><script>alert("Controlla la mail per vedere il giorno di consegna!");
                  </script><?
                 }
                                $subject = "Ordine ".$_REQUEST['codAut']."";
                                $to="dolcefrutta@dolcefrutta.it";
                                $body ="<table><tr><th>Nome prodotto</th><th>Quantità</th><th>Prezzo</th></tr>";
								$s="SELECT  Utenti.nome, Utenti.cognome, Utenti.indirizzo, Utenti.cap, Utenti.citta, Utenti.numeroCivico, Utenti.telefono, Prodotti.nomeArticolo, Prodotti.nomeProdotto, Ordini.quantitaAcquistata, Prodotti.prezzo, Prodotti.pk FROM ((Prodotti INNER JOIN Ordini ON Ordini.id_articolo = Prodotti.ID_articolo)INNER JOIN Utenti ON Ordini.id_utente = Utenti.ID_utente) WHERE Ordini.stato='o' AND Ordini.id_utente='$id'";
                        $q=mysqli_query($conn,$s);
                        while($r=mysqli_fetch_array($q))
                        {
                                $nome1=$r['nome'];
                                $cognome=$r['cognome'];
                                $indirizzo=$r['indirizzo'];
                                $cap=$r['cap'];
                                $citta=$r['citta'];
                                $tel=$r['telefono'];
                                $civico=$r['numeroCivico'];
							 	$nome=$r['nomeArticolo'];
							 	$prodotto=$r['nomeProdotto'];
							 	$quantita=$r['quantitaAcquistata'];
							 	$prezzo=$r['prezzo'];
							 	$pk=$r['pk'];
							 	if($pk==0)
								    $body .="<tr><td>$nome $prodotto</td><td>$quantita Pz</td><td>".number_format($prezzo,2)." €</td></tr>";
								else
								    $body .="<tr><td>$nome $prodotto</td><td>".number_format($quantita,2)." Kg</td><td>".number_format($prezzo,2)." €</td></tr>";
                            
                        }
                        $body .= "</table>";
                        if($_GET["Note1"]==0)
                        $body .= "<h3>Informazioni utente:</h3><p>Nome: $nome1</p><p>Cognome: $cognome</p><p>Indirizzo: $indirizzo, $civico</p><p>Città: $citta, $cap</p><p>Telefono: $tel</p><br>";
                        else
                        {
                                $sed="SELECT Ordini.costoS, Ordini.indirizzoP, Ordini.civicoP, Ordini.cittaP, Ordini.capP FROM ((Prodotti INNER JOIN Ordini ON Ordini.id_articolo = Prodotti.ID_articolo)INNER JOIN Utenti ON Ordini.id_utente = Utenti.ID_utente) WHERE Ordini.stato='o' AND Ordini.id_utente='$id'";
                                $qud=mysqli_query($conn,$sed);
                                $qad= mysqli_fetch_array($qud);
                                $indi= $qad['indirizzoP'];
                                $civi= $qad['civicoP'];
                                $cit= $qad['cittaP'];
                                $capp= $qad['capP'];
                                $body .= "<h3>Informazioni utente:</h3><p>Nome: $nome1</p><p>Cognome: $cognome</p><p>Indirizzo: $indi, $civi</p><p>Città: $cit, $capp</p><p>Telefono: $tel</p><br><p>Da consegnare come regalo.</p>";
                        }
                  $body .= "<p>Data: $data</p>";
                  $headers = "MIME-Version: 1.0\r\n";
                  $headers .= "Content-type:text/html;charset=UTF-8\r\n";
                  $headers .= "From: Dolce Frutta <dolcefrutta@dolcefrutta.it>\r\n";
                  $nomeOrdine=$_REQUEST['codAut'];
                  $fine = "UPDATE Ordini SET nomeOrdine='$nomeOrdine', Ordini.stato='a'  WHERE Ordini.id_utente='$id' AND  Ordini.stato='o'";
                  $query_ordine = mysqli_query($conn,$fine) or die(mysqli.error());
                 if( mail($to,$subject,$body,$headers))
                 {
                  ?><script>window.location.replace("/index.php");
                  </script><?
                 }}
} else {
    echo 'La transazione ' . $_REQUEST['codTrans'] . " è stata rifiutata; descrizione errore: " . $_REQUEST['messaggio'];
}}
	else
	{
                ?><script type="text/javascript">
                window.location.replace("/index.php");</script><?
    } 
    ?>