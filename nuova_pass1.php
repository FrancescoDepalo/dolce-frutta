<?
include("db_con.php");
if(isset($_POST["Recupera"])){
                                $id=$_POST['id'];
								$password=$_POST["password"];
								$result1="UPDATE Utenti SET Utenti.password = '".PASSWORD_HASH($password,PASSWORD_BCRYPT)."' WHERE Utenti.ID_utente = '$id'";
								$raw1=mysqli_query($conn,$result1)  or die("failed to insert logout time");?>
								<script>alert("Password cambiata correttamente!");window.location.replace("/index.php?par=1");</script><?
                                }else{?><script>alert("Accesso Negato!");window.location.replace("/index.php?par=1");</script><?}
?>