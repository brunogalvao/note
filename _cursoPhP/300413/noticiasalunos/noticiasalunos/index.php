<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>A (Very) Happy Child (featuring Bulletproof Slants)</title>



	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="style.css" type="text/css"/></head>
<body>

	<div id="header">
		<h1>A (Very) Happy Child</h1>
	</div>
	<div id="navigation">
	<ul id="nav">
		<li id="nav-1"><a href="#">Home</a></li>
		<li id="nav-2"><a href="#">About</a></li>
		<li id="nav-3"><a href="http://suggestd.net/">Links</a></li>
		<li id="nav-4"><a href="http://odinassemble.blogspot.com/">Blog</a></li>
		<li id="nav-5"><a href="#">Contact</a></li>
	</ul>
	</div>
	<div id="body">

		<div id="rightColumn">
			<h2>Right Column</h2>
			<p>
<?
include "conecta.php";

$resultado = mysql_query("select max(idnoticia) ultima from noticia");
$linha = mysql_fetch_array($resultado);
$ultima = $linha['ultima'];

#echo $ultima

$resultado = mysql_query("select titulo,noticia from noticia where idnoticia = $ultima");
$linha = mysql_fetch_array($resultado);

$titulo = $linha['titulo'];
$noticia = $linha['noticia'];




#$titulo = ' O Borussia ganhou do real madri';

echo '<h4>'.$titulo.'</h4>';

#$noticia = 'ababababababaabbbbbbbbbbbbbbbbbb<br>bbbbbbbbbbbbbbbbbbbbbbbbbbbbbb<br>
#bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb';
echo $noticia.'<br/><br/>';

			
?>
            
           </p>
		</div>

		<h1>Welcome</h1>
		<p><img src="Felicidade_A_very_happy_boy.jpg" class="img right" alt="A (Very) Happy Child"/>Welcome to "<strong>A (Very) Happy Child</strong>" a brand new open source template from <a href="http://www.openwebdesign.org/userinfo.phtml?user=aybabtu" title="My Portfolio">Aybabtu</a>.  This is a fluid design with two columns.  The navigation in this design is taken from the "<a href="http://www.simplebits.com/notebook/2004/07/12/bulletproof_slants.html">Bulletproof Slants</a>" tutorial found at <a href="http://www.simplebits.com/">Simple Bits</a>.  I've implemented the navigation in in a fluid two column layout.  This full screen red layout features an image from <a href="http://www.openstockphotography.org/">Open Stock Photography</a>.  Since I was working in a red I used the <a href="http://www.openstockphotography.org/color-search/f00000">color search</a> and stumbled upon the photo of the templates mascot, "<a href="http://www.openstockphotography.org/image-licensing/by-color/Felicidade_A_very_happy_boy.jpg">a (very) happy child</a>."  </p>

		<p>If you'd like to see more free <a href="http://www.openwebdesign.org/userinfo.phtml?user=aybabtu" title="My Portfolio">Aybabtu</a> templates be sure to visit my <a href="http://www.openwebdesign.org/userinfo.phtml?user=aybabtu" title="My Portfolio">OWD portfolio page</a>.  (If you are really bored maybe you'd like to stop by <a href="http://www.f8d.net/" title="f8d">f8d.net</a>.)</p>

		<h1>Lorem Ipsum</h1>
		<p>Augur et fulgente decorus arcu Phoebus acceptusque novem Camenis, qui salutari levat arte fessos corporis artus, si Palatinas videt aequos aras remque Romanam Latiumque felix alterum in lustrum meliusque semper prorogat aevom, quaeque Aventinum tenet Algidumque, quindecim Diana preces virorum curat et votis puerorum amicas adplicat auris.</p>
	</div>
	<br clear="all" />
	<div id="footer">
		&copy; Copyright Your Name. All Rights Reserved.
		<!-- if you use this template please leave this credit intact --> | Designed: <a class="white" href="http://suggestd.net/">Suggestd</a><!-- end credit -->
	</div>


</body></html>