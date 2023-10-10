<?
 session_start();
// includo il file di connessione al database
include("db_con.php");
if($_POST["register"]!=""){
$nome=$_POST['email'];
$cost=$_POST["costo"];
$pa=password_hash($_POST["password"],PASSWORD_BCRYPT);
$nick = stripslashes(strip_tags($_POST['email']));

$read="SELECT Count( * ) AS Conta FROM Utenti  WHERE Utenti.email = '$nick'";
$raw=mysqli_query($conn,$read);
$row= mysqli_fetch_array($raw);
if ($row['Conta']>0 ){
?><script>alert("E-mail già registrata!"); window.location.replace("/index.php?par=8");</script><?
}
else{
    $id = uniqid();
    $str = password_hash($id, PASSWORD_DEFAULT);
    $str= strtolower(preg_replace('/[^a-z0-9]+/i', '', $str));
if($_POST["nome"]!=""){  // se i parametri iscritto non sono vuoti non sono vuote
$query_registrazione = mysqli_query($conn,"INSERT INTO Utenti (ID_utente, previlegio, nome, cognome, password, citta, cap, costo, indirizzo, numeroCivico, telefono, email)
VALUES ('$str','".$_POST["previlegio"]."','".$_POST["nome"]."','".$_POST["cognome"]."','".$pa."','".$_POST["citta"]."','".$_POST["cap"]."','".$cost."','".$_POST["indirizzo"]."','".$_POST["num"]."','".$_POST["telefono"]."','".strtolower($_POST["email"])."')") // scrivo sul DB questi valori
or die ("query di registrazione non riuscita".mysqli_error()); // se la query fallisce mostrami questo errore
}else{
header('location:index.php?action=registration&errore=Non hai compilato tutti i campi obbligatori'); // se le prime condizioni non vanno bene entra in questo ramo else
}}
if(isset($query_registrazione)){
//se la reg è andata a buon fine
$_SESSION['attiva']=true; //restituisci vero alla chiave logged in SESSION
$_SESSION['username']=$_POST["nome"];
$_SESSION['last_action']=time();
$_SESSION['email'] = $nome;
$_SESSION['id'] = $str;
$_SESSION['previlegio']=$_POST["previlegio"];
if ($_SESSION['attiva']==true)
                  {
                  $sqlquery = "SELECT ID_utente FROM Utenti WHERE email='$nome'";
                  $g=true;
                  $result = mysqli_query($conn,$sqlquery);
                  $number = mysqli_num_rows($result);
                    while ($row = mysqli_fetch_assoc($result)) 
                     {
                       $id= $row["ID_utente"];
                     }
                 } 
                 if($g==true)
                 {
                  $to = $_POST['email'];
                  $subject = "Conferma Email!";
                  $body = "Ciao $nome1,Clicca sul <a href='http://dolcefrutta.it/conferma.php?id=$id'>link</a> per confermare l'account,<br /><br>Oppure copiando questo link:<br>http://dolcefrutta.it/conferma.php?id=$id";
                  $headers = "MIME-Version: 1.0\r\n";
                  $headers .= "Content-type:text/html;charset=UTF-8\r\n";
                  $headers .= "From: www.dolcefrutta.it <dolcefrutta@dolcefrutta.it>\r\n";
                 if( mail($to,$subject,$body,$headers))
                 {
                  ?><script>alert("Controlla La Tua Email Per Confermare La Registrazione!"); window.location.replace("/index.php?par=1");</script><?
                 }

}


}
function uniq_user_token() {
    $id = uniqid();
    $str = password_hash($id, PASSWORD_DEFAULT);
    return strtolower(preg_replace('/[^a-z0-9]+/i', '', $str));
}
mysqli_close($conn);}?>