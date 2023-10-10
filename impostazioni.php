<style>
    @media screen and (min-width: 601px){#corpo{width:60%;left: 20%;}#linkD{margin-left: 21%;}#linkS{right: 25%;}
    #contratti{position: absolute;
    top: 745px;
    width:100%;
        text-align:center;
    }
}
@media screen and (max-width: 600px){#corpo{width:90%;left:5%;}#linkD{margin-left: -20px;}#linkS{right:0px;}#contratti {
    position: absolute;
    top: 748px;
    width:100%;
        text-align:center;
}}
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
    top: 105px;
  margin-top: 30px;
    height: 510px;
    overflow: auto;}
    input[type=password],input[type=text], textarea {
  padding: 10px;
  border: 1px solid #CCC;
  border-radius: 3px;
  box-sizing: border-box;
  margin-top: 3px;
  margin-bottom: 2px;
  resize: vertical;
 
}
label, input[type=text],input[type=password], textarea {
  
  box-sizing: border-box;
  width: 290px;
  
}
  form {
      
  font-family: Arial, Helvetica, sans-serif;
  overflow:visible;
}
input[type=submit] {
  background-color: #4CAF50;
  color: #FFF;
  padding: 10px 20px;
  border: none;
  border-radius: 3px;
  margin-top:3px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #45a049;
  z-index:0;
}
</style>
<div id="corpo">
 <?   if($_SESSION['attiva']!=true)
{
    ?><script>alert('Accesso negato!');window.location.replace("/index.php?par=1");</script><?
}
else{
?>
    <form name="cambiamail" style="top:10px;" action="index.php" method="POST" onSubmit="return verificamail()">
        <input type="text" id="email" placeholder="Cambia E-mail" name="email1" required><br>
        <input type="submit" value="Cambia E-mail" name="emailchange" >
    </form>
    <form method="POST" name="cambia" style="top:30px;" action="nuova_pass1.php" onSubmit="return verifica();">
                <input type="hidden" name="id" value="<? echo $_SESSION['id']?>">
                <input type="password" placeholder="Inserisci password:" id="password" name="password" value="" required><br>
                <input type="password" placeholder="Conferma password:" id="Cpassword" name="Cpassword" value="" required><br>
                <input type="submit" name="Recupera" value="Cambia password">
                </form>
    <form name="cambiamail" style="top:90px;" action="index.php" method="POST" onSubmit="return sicuro()">
        <input type="submit" value="Elimina account" name="elacc" >
    </form><?}?>
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
var reimposta= confirm("Sicuro di voler cancellare l'account?");
return reimposta;
}
function validaPass(p) 
{
var passw=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
if(p.match(passw)) 
{ return true;}
else{ alert('Deve contenere almeno un numero, una lettera maiuscola e una lettera minuscola!');return false;}
}
function verificamail(){
if (document.getElementById("email").value == "" || document.getElementById("email").value == "undefined") 
{
alert("Inserire un indirizzo email corretto!");
document.getElementById("email").focus();
return false;
}else
if(validaEmail(document.getElementById("email").value)==false)
{
document.getElementById("email").focus();
return false;
}
    document.getElementById("cambiamail").submit();
}
function verifica()
{
if (document.getElementById("password").value.length<8)
{
 alert("Inserire una password valida!");
 document.getElementById("password").focus();
 return(false);
}
if (validaPass(document.getElementById("password").value)==false)
{
 document.getElementById("password").focus();
 return(false);
}
if (document.getElementById("Cpassword").value=="")
{
 alert("Inserire una password valida!");
 document.getElementById("Cpassword").focus();
 return(false);
}
else if (document.getElementById("password").value!=document.getElementById("Cpassword").value)
{
 	alert("La password confermata è diversa da quella scelta, controllare!");
	document.getElementById("Cpassword").value = "";
	document.getElementById("Cpassword").focus();
 return(false);
}
document.getElementById("cambia").submit();
}
    </script>