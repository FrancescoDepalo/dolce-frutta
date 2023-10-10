<style>
@media screen and (min-width: 601px){ #contratti{position: absolute;
    top: 745px;
     width:100%;
    text-align:center;}#linkD{margin-left: 21%;}#linkS{right: 25%;}}
@media screen and (max-width: 600px){#contratti {
    position: absolute;
    top: 748px;
    width:100%;
    text-align:center;
}#linkD{margin-left: -20px;}#linkS{right:0px;}}
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
top: 87px;
 height: 510px;
margin-top: 30px;
overflow:auto;}


input[type=text]:focus{
    border-color:dodgerBlue;
    box-shadow:0 0 20px 0 dodgerBlue;
  }
input[type=submit]:hover {
  background-color: #45a049;
  z-index:0;
}
input[type=reset]:hover {
  background-color: #45a049;
  z-index:0;
}
input[type=submit] {
  background-color: #4CAF50;
  color: #FFF;
  padding: 10px 20px;
  border: none;
  border-radius: 3px;
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
  font-family: sans-serif;
  resize: none;
 
}
    form {
  font-family: Arial, Helvetica, sans-serif;
  overflow:visible;
}

 textarea:focus{
    border-color:dodgerBlue;
    box-shadow:0 0 20px 0 dodgerBlue;
  }
</style>

<div id="corpo"><?
if(!isset($_SESSION['attiva'])){?>
<br>
<form name="formmail" action="index.php" method="POST" enctype="multipart/form-data">
<input type="hidden" name="par" value="1">
<input type="text" placeholder="Inserisci E-mail" id="da"name="da"><br>
<input type="text" placeholder="Oggetto:" id="obj" name="obj"><br>
<textarea placeholder="Messaggio:" name="testo"></textarea><br>
Inserisci curriculum:<br><p style="font-size:11px;">(Max 4 MB)</p>
<input type="file" id="attachment" name="attachment"><br>
<input type="submit" onClick="return controlloForm();" style="top: 10px;position: relative;" name="submit" value="Spedisci E-mail" />
</form><?}
else
{?>
<form name="formmail" action="index.php" method="POST" enctype="multipart/form-data">
<br>
<input type="hidden" name="par" value="1">
<input type="text" placeholder="Oggetto:" id="obj" name="obj"><br>
<textarea placeholder="Messaggio:" name="testo"></textarea><br>
Inserisci curriculum:<br><p style="font-size:11px;">(Max 4 MB)</p>
<input type="file" id="attachment" name="attachment"><br>
<input type="submit" onClick="return controlloForm1();" style="top: 10px;position: relative;" name="submit" value="Spedisci E-mail" />
</form>
<?}?>
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
function verificaEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}
function controlloForm() {
  var nome = document.forms["formmail"]["da"].value;
  var email = document.forms["formmail"]["obj"].value;
  var file = document.forms["formmail"]["attachment"].value;

  if (nome == "" || email == "" || file == "") {
    alert("L'Email, l'oggetto e il curriculum sono obbligatori!");
    return false;
  }
  else if(verificaEmail(nome) !== true)
  {
    alert("L'indirizzo email non sembra corretto!");
    document.getElementById("da").focus();
    return false; 
  }
  else{
    return true;
  }
}

function controlloForm1() {
  var email = document.forms["formmail"]["obj"].value;
  var file = document.forms["formmail"]["attachment"].value;

  if(email == "" || file == "") {
    alert("L'oggetto e il curriculum sono obbligatori!");
    return false;
  }
  else{
    return true;
  }
}
</script>