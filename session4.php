<?
session_start();
include "db_con.php";
$user= strtolower($_POST['txtusername']);
$pass= $_POST['txtpassword'];
if(isset($_POST['txtusername'])){
$nick = stripslashes(strip_tags($user));
                $read="SELECT Count( * ) AS Conta FROM Utenti  WHERE Utenti.email = '$nick'";
                $raw=mysqli_query($conn,$read);
                $row= mysqli_fetch_array($raw);
                if ($row['Conta']==0 ){
                $errore=1;
                ?><script>alert("E-mail non presente!"); window.location.replace("/index.php?par=2");</script><?
                }
else
	{
	    $queryL="SELECT * FROM Utenti WHERE Utenti.email = '$nick'";
	    $result=mysqli_query($conn,$queryL);
 		while ($row = mysqli_fetch_array($result)) 
             {
    		    $nome = $row['email'];
                $nome1 = $row['nome'];
                $cognome = $row['cognome'];
                $tel = $row['telefono'];
                $idi = $row['ID_utente'];
    		    $p = $row['password'];
    		    $previ = $row['previlegio'];
                $a=strcmp($nome,$user);
                $b= password_verify($pass, $p);
                if($a==0 && $b==true)
                    {
                    /*if (password_verify($pass, $p)){*/
                    	session_start();
                    	$access=true;
                    	$_SESSION['username'] = $nome1;
                        $_SESSION['email'] = $nome;
                        $_SESSION['id'] = $idi;
                        $_SESSION['attiva']=true;
                        $_SESSION['previlegio']=$previ;
                        $_SESSION['last_action']=time();
                        ?><script>
                        window.location.replace("/index.php?par=1");
                        </script><?
                     }else if(isset($_POST['txtusername'], $_POST['txtpassword']))
                          {   
                          $access==false;
                          /*if($number-1==$i)
                          {*/
                          ?><script>
                                     alert("Username o password errati!"); window.location.replace("/index.php?par=2");</script><?
                          		
                            }
                
  					}
	}
                        }
                        if (isset($_GET['var'])) 
									{ 
                                        if($_GET['var']==1)
                                        {
                                            $id=$_SESSION["id"];
                                            $s="DELETE FROM Ordini WHERE Ordini.stato='o' AND Ordini.id_utente='$id'";
                                    $q=mysqli_query($conn,$s) or die('non va!'.mysqli_error());
                                          session_destroy();
                                          ?><script>
                                            window.location.replace("/index.php?par=1");
                                              </script>
                                      <? }
                                      if($_GET['var']==2)
                                        {
                                          $valido=true;
                                         }
                                        }
mysqli_close($conn);
?>