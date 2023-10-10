<style>
@media screen and (min-width: 601px){#linkD{margin-left: 21%;}#linkS{right: 25%;}#contratti{position: absolute;
    top: 745px;
    width:100%;
    text-align:center;}
    .Orari{    width: fit-content;
    margin-left: 40%;}
}
@media screen and (max-width: 600px){#linkD{margin-left: -20px;}#linkS{right:0px;}#contratti {
    position: absolute;
    top: 748px;
    width:100%;
    text-align:center;}
.Orari{    width: fit-content;
    margin-left: 25%;}}
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
@media (max-width:600px)
{
#corpo p{position: relative;right: 50px;font-family: sans-serif;}
#corpo a{position: relative;top: -35px;left: 80px;font-family: sans-serif;text-decoration: none;}
}
@media(min-width:601px)
{
#corpo p{position: relative;right: 50px;font-family: sans-serif;}
#corpo a{position: relative;top: -35px;left: 80px;font-family: sans-serif;text-decoration: none;}
}

#corpo{
text-align: center;
position: absolute;
    width: 100%;
    top: 100px;
    margin-top: 0px;
   height: 510px;}
    
    
#contact
{
	position:absolute;
    top:10%;
    right:15%;
    z-index: -1;
}
.Orari{margin-top: 3px;
    border-collapse: collapse;}
.Orari tr{
    color: #000;}
.giorni{padding-right: 8px;
    text-transform: capitalize;
    font-family: sans-serif;
}
#corpo h1{font-family: caviar;
    color: forestgreen;}
    </style>
    
<div id="corpo">
    <h1>Orari apertura negozio</h1>
    <div>
        <table class="Orari"><tbody><tr><td class="giorni">lunedì</td><td>08–12:30</td></tr><tr><td class="giorni">martedì</td><td>08–12:30, 15–19:30</td></tr><tr><td class="giorni">mercoledì</td><td>08–12:30, 15–19:30</td></tr><tr><td class="giorni">giovedì</td><td>08–12:30, 15–19:30</td></tr><tr><td class="giorni">venerdì</td><td>08–12:30, 15–19:30</td></tr><tr><td class="giorni">sabato</td><td>08–12:30, 15–19:30</td></tr><tr><td class="giorni">domenica</td><td>Chiuso</td></tr></tbody></table>
    </div>
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
function verifica()
{
if (document.getElementById("txtusername").value=="")
{
 alert("Inserire uno username valido!");
 document.getElementById("txtusername").focus();
 return false;
}
if (document.getElementById("txtpassword").value=="")
{
 alert("Inserire una password valida");
 document.getElementById("txtpassword").focus();
 return(false);
}
   document.getElementById("frm1").submit();
}
</script>