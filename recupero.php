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
#corpo{
text-align: center;
position: absolute;
    width: 100%;
    top: 80px;
    margin-top: 30px;}
    
    form {
  font-family: Arial, Helvetica, sans-serif;
  overflow:visible;
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
  margin-top: 5px;
  margin-bottom: 15px;
  resize: vertical;
 
}
input[type=submit] {
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
input[type=text]:focus{
    border-color:dodgerBlue;
    box-shadow:0 0 20px 0 dodgerBlue;
  }
  </style>

<div id="corpo">
<form action="index.php" method="post" id="login" onSubmit="return verifica();">

	<input type="text" placeholder="Inserisci e-mail:" id="email" name="emailR" value="<?=$_POST['emailR']?>" class="campo" ><br>
	<input type="submit" value="Invia richiesta">
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
<? if(isset($_SESSION['attiva'])){?><script>alert('Sei già loggato!');window.location.replace("/index.php?par=1");</script><?}?>
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

function verifica()
{
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

   return true;
}
</script>