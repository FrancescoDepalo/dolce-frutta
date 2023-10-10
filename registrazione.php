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

#barra{position: relative;
    top: 640px;
    width: 100%;
    height: 6px;
    background-color: black;
    z-index: -1;
    left: 0%;
    border-radius: 10px;}
#footer{position: relative;
    top: 640px;
    z-index: -1;
    text-align: center;
    height: 290px;}
#corpo{
text-align: center;
position: absolute;
    width: 100%;
    top: 80px;
    height: 510px;
    margin-top: 30px;}
       form {
  font-family: Arial, Helvetica, sans-serif;
  overflow:visible;
}
#nome,#tel,#password,#Cpassword,#email
{
	width: 290px;
}
#indirizzo
{
	width: 237px;
}
select
{
	border: 1px solid #CCC;
    width: 291px;
    height: 38px;
    border-radius: 4px;
    font-family: sans-serif;
}
select:focus
{
box-shadow: 0 0 20px 0 dodgerblue;
}
label, input[type=text], textarea {
  
  box-sizing: border-box;
  width: 290px;
  
}
input[type=text], textarea {
  padding: 10px;
  border: 1px solid #CCC;
  border-radius: 3px;
  box-sizing: border-box;
  margin-top: 3px;
  margin-bottom: 2px;
  resize: vertical;
 
}
input[type=password] {
  padding: 10px;
  border: 1px solid #CCC;
  border-radius: 3px;
  box-sizing: border-box;
  margin-top: 3px;
  margin-bottom: 2px;
  resize: vertical;
 
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
input[type=reset] {
  background-color: #4CAF50;
  color: #FFF;
  padding: 10px 20px;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #45a049;
  z-index:0;
}
input[type=reset]:hover {
  background-color: #45a049;
  z-index:0;
}
#contact
{
	position:absolute;
    top:10%;
    right:15%;
    z-index: -1;
}
input[type=text]:focus{
    border-color:dodgerBlue;
    box-shadow:0 0 20px 0 dodgerBlue;
  }
  input[type=password]:focus{
    border-color:dodgerBlue;
    box-shadow:0 0 20px 0 dodgerBlue;
  }
 textarea:focus{
    border-color:dodgerBlue;
    box-shadow:0 0 20px 0 dodgerBlue;
  }
</style>
<div id="corpo">
<form name="frm1" action="session1.php" method="POST">
<input type="hidden" name="previlegio" value="1" />
<input type="text" name="nome" id="nome" placeholder="Nome"  value="" required><br>
<input type="text" name="cognome" id="cognome" placeholder="Cognome"  value="" required><br>
<input type="password" name="password" id="password" placeholder="Password"  value="" required><br>
<input type="password" name="Cpassword" id="Cpassword" placeholder="Conferma password"  value="" required><br>
<select id="citta" name="citta">
  <option value="" selected><h1>Scegli città</h1></option>
  <option value="Giussano">Giussano</option>
  <option value="Mariano Comense">Mariano Comense</option>
  <option value="Carate Brianza">Carate Brianza</option>
  <option value="Verano Brianza">Verano Brianza</option>
  <option value="Arosio">Arosio</option>
  <option value="Inverigo">Inverigo</option>
  <option value="Lambrugo">Lambrugo</option>
  <option value="Seregno">Seregno</option>
  <option value="Lurago D&rsquo;Erba">Lurago D&rsquo;Erba</option>
  </select><br>
<input type="hidden" id="cap" name="cap">
<input type="hidden" id="costo" name="costo">
<input type="text" id="indirizzo" placeholder="Indirizzo" name="indirizzo" required>
<input type="text" style="width:50px;" id="num" placeholder="NC" name="num" required><br>
<input type="text" id="telefono" placeholder="Telefono" name="telefono" required><br>
<p style="position: relative;font-size: 12px;font-family: sans-serif;">(senza spazi nè simboli)</p>
<input type="text" id="email" placeholder="E-mail" name="email" required><br>
<p style="font-size: 15px;">Registrandoti dichiari di aver letto e accetti integralmente i nostri <a href="https://www.iubenda.com/termini-e-condizioni/00000000" class="iubenda-nostyle no-brand iubenda-embed" title="Termini e Condizioni ">Termini e Condizioni</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>.</p><p style="font-size: 15px;"> Prendi visione della nostra <a href="https://www.iubenda.com/privacy-policy/00000000" class="iubenda-nostyle no-brand iubenda-embed" title="Privacy Policy ">Privacy Policy</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script> e della nostra <a href="https://www.iubenda.com/privacy-policy/00000000/cookie-policy" class="iubenda-nostyle no-brand iubenda-embed" title="Cookie Policy ">Cookie Policy</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script></p>
<input type="submit" value="Registrati" name="register" onclick="return verifica()">
<input type="reset" value="annulla" >
</form>
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
 <?if(isset($_SESSION['attiva'])){
                                    if($_SESSION['attiva']==true)
                                {
                                ?>
                                <script>
                                alert("Sei già loggato!");
                                window.location.replace("/index.php?par=1");</script><?
                                }}?>

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
function validaPass(p) 
{
var passw=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
if(p.match(passw)) 
{ return true;}
else{ alert('Deve contenere almeno un numero, una lettera maiuscola e una lettera minuscola!');return false;}
}


function verifica()
{
    
if (document.getElementById("nome").value=="")
{
 alert("Inserire un nome valido!");
 document.getElementById("nome").focus();
 return(false);
}
if (document.getElementById("cognome").value=="")
{
 alert("Inserire un cognome valido!");
 document.getElementById("cognome").focus();
 return(false);
}
if (document.getElementById("password").value=="")
{
 alert("Inserire una password valida!");
 document.getElementById("password").focus();
 return(false);
}
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
if (document.getElementById("citta").value=="")
{
alert("Scegli una città!");
document.getElementById("citta").focus();
return false;
}

if (document.getElementById("citta").value=="Giussano"){document.getElementById("cap").value="20833";document.getElementById("costo").value="0";}
if (document.getElementById("citta").value=="Mariano Comense"){document.getElementById("cap").value="22066";document.getElementById("costo").value="2";}
if (document.getElementById("citta").value=="Carate Brianza"){document.getElementById("cap").value="20841";document.getElementById("costo").value="2";}
if (document.getElementById("citta").value=="Verano Brianza"){document.getElementById("cap").value="20843";document.getElementById("costo").value="2";}
if (document.getElementById("citta").value=="Arosio"){document.getElementById("cap").value="22060";document.getElementById("costo").value="2";}
if (document.getElementById("citta").value=="Inverigo"){document.getElementById("cap").value="22044";document.getElementById("costo").value="2.50";}
if (document.getElementById("citta").value=="Lambrugo"){document.getElementById("cap").value="22045";document.getElementById("costo").value="3.00";}
if (document.getElementById("citta").value=="Seregno"){document.getElementById("cap").value="22831";document.getElementById("costo").value="3.00";}
if (document.getElementById("citta").value=="Lurago D&rsquo;erba"){document.getElementById("cap").value="22040";document.getElementById("costo").value="2.50";}


if (document.getElementById("indirizzo").value=="")
{
alert("Il campo Indirizzo è obbligatorio.");
document.getElementById("indirizzo").focus();
return false;
}
if (document.getElementById("num").value=="")
{
alert("Il campo numero civico è obbligatorio!");
document.getElementById("num").focus();
return false;
}
else if (document.getElementById("num").value.length>3)
{
alert("Il campo numero civico è errato!");
document.getElementById("num").focus();
return false;
}
if (document.getElementById("telefono").value=="" || isNaN(document.getElementById("telefono").value))
{
alert("Inserire un numero di telefono valido!");
document.getElementById("telefono").focus();
return false;
}
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

   document.getElementById("frm1").submit();
}

</script>