<?php
require ('db_con.php');
if(isset($_GET['id'])){
	
	$id=$_GET['id'];
	$read="SELECT Count( * ) AS Conta FROM Utenti  WHERE Utenti.ID_utente = '$id' ";
                $raw=mysqli_query($conn,$read);
                $row= mysqli_fetch_array($raw);
                if ($row['Conta']==0 ){
                ?><script>alert("Parametro non valido!"); window.location.replace("/index.php?par=1");</script><?
                }
                else{
                				$cambia=1;
								$result1="UPDATE Utenti SET Utenti.conferma='1' WHERE Utenti.ID_utente = '$id' ";
								$raw1=mysqli_query($conn,$result1)  or die("failed to insert logout time");?>
								<script>alert("E-mail confermata correttamente!");window.location.replace("/index.php?par=1");</script><?
                                }}else{?><script>alert("Accesso Negato!");window.location.replace("/index.php?par=1");</script><?}?>