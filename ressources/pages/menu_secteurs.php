<head>
	<link rel="stylesheet" href="css_ines.css">
</head>

<body class="fond_menu">
<div class="menu_gauche">
	<p class="texte" align="center"><b>Secteurs</b></p>
	<a href="planif_jour.php" id="lien1" class="lien" target="contenu_principal">• Aix</a>
	<br/> <br/>
	<a href="planif_periode.php" id="lien2" class="lien" target="contenu_principal">• Batz</a>
	<br/> <br/>
	<a href="modif_type.php" id="lien3" class="lien" target="contenu_principal">• Belle-Ile-En-Mer</a>
	<br/> <br/>
	<a href="modif_im_planif.php" id="lien4" class="lien" target="contenu_principal">• Bréhat</a>
	<br/> <br/>
	<a href="modif_cat_planif.php" id="lien5" class="lien" target="contenu_principal">• Houat</a>
	<br/> <br/>
	<a href="modif_date.php" id="lien6" class="lien" target="contenu_principal">• Ile de Groix</a>
	<br/> <br/>
	<a href="annul_planif.php" id="lien7" class="lien" target="contenu_principal">• Molène</a>
	<br/> <br/>
	<a href="liste_planif.php" id="lien8" class="lien" target="contenu_principal">• Ouessant</a>
	<br/> <br/>
	<a href="liste_planif.php" id="lien9" class="lien" target="contenu_principal">• Sein</a>
	<br/> <br/>
	<a href="liste_planif.php" id="lien10" class="lien" target="contenu_principal">• Yeu</a>
</div>
</body>

<!-- ////////// JavaScript ////////// -->
<script type='text/javascript'>
	var lien1 = document.getElementById("lien1");
	var lien2 = document.getElementById("lien2");
	var lien3 = document.getElementById("lien3");
	var lien4 = document.getElementById("lien4");
	var lien5 = document.getElementById("lien5");
	var lien6 = document.getElementById("lien6");
	var lien7 = document.getElementById("lien7");
	var lien8 = document.getElementById("lien8");
	var lien9 = document.getElementById("lien9");
	var lien10 = document.getElementById("lien10");
	
	lien1.classList.add("lien_actif_menugauche");
		
	document.getElementById("lien1").addEventListener("click", function(){
		lien1.classList.add("lien_actif_menugauche");
		lien2.classList.remove("lien_actif_menugauche");
		lien3.classList.remove("lien_actif_menugauche");
		lien4.classList.remove("lien_actif_menugauche");
		lien5.classList.remove("lien_actif_menugauche");
		lien6.classList.remove("lien_actif_menugauche");
		lien7.classList.remove("lien_actif_menugauche");
		lien8.classList.remove("lien_actif_menugauche");
		lien9.classList.remove("lien_actif_menugauche");
		lien10.classList.remove("lien_actif_menugauche");
	});
		
	document.getElementById("lien2").addEventListener("click", function(){
		lien1.classList.remove("lien_actif_menugauche");
		lien2.classList.add("lien_actif_menugauche");
		lien3.classList.remove("lien_actif_menugauche");
		lien4.classList.remove("lien_actif_menugauche");
		lien5.classList.remove("lien_actif_menugauche");
		lien6.classList.remove("lien_actif_menugauche");
		lien7.classList.remove("lien_actif_menugauche");
		lien8.classList.remove("lien_actif_menugauche");
		lien9.classList.remove("lien_actif_menugauche");
		lien10.classList.remove("lien_actif_menugauche");
	});
		
	document.getElementById("lien3").addEventListener("click", function(){
		lien1.classList.remove("lien_actif_menugauche");
		lien2.classList.remove("lien_actif_menugauche");
		lien3.classList.add("lien_actif_menugauche");
		lien4.classList.remove("lien_actif_menugauche");
		lien5.classList.remove("lien_actif_menugauche");
		lien6.classList.remove("lien_actif_menugauche");
		lien7.classList.remove("lien_actif_menugauche");
		lien8.classList.remove("lien_actif_menugauche");
		lien9.classList.remove("lien_actif_menugauche");
		lien10.classList.remove("lien_actif_menugauche");
	});
	
	document.getElementById("lien4").addEventListener("click", function(){
		lien1.classList.remove("lien_actif_menugauche");
		lien2.classList.remove("lien_actif_menugauche");
		lien3.classList.remove("lien_actif_menugauche");
		lien4.classList.add("lien_actif_menugauche");
		lien5.classList.remove("lien_actif_menugauche");
		lien6.classList.remove("lien_actif_menugauche");
		lien7.classList.remove("lien_actif_menugauche");
		lien8.classList.remove("lien_actif_menugauche");
		lien9.classList.remove("lien_actif_menugauche");
		lien10.classList.remove("lien_actif_menugauche");
	});
	
	document.getElementById("lien5").addEventListener("click", function(){
		lien1.classList.remove("lien_actif_menugauche");
		lien2.classList.remove("lien_actif_menugauche");
		lien3.classList.remove("lien_actif_menugauche");
		lien4.classList.remove("lien_actif_menugauche");
		lien5.classList.add("lien_actif_menugauche");
		lien6.classList.remove("lien_actif_menugauche");
		lien7.classList.remove("lien_actif_menugauche");
		lien8.classList.remove("lien_actif_menugauche");
		lien9.classList.remove("lien_actif_menugauche");
		lien10.classList.remove("lien_actif_menugauche");
	});
	
	document.getElementById("lien6").addEventListener("click", function(){
		lien1.classList.remove("lien_actif_menugauche");
		lien2.classList.remove("lien_actif_menugauche");
		lien3.classList.remove("lien_actif_menugauche");
		lien4.classList.remove("lien_actif_menugauche");
		lien5.classList.remove("lien_actif_menugauche");
		lien6.classList.add("lien_actif_menugauche");
		lien7.classList.remove("lien_actif_menugauche");
		lien8.classList.remove("lien_actif_menugauche");
		lien9.classList.remove("lien_actif_menugauche");
		lien10.classList.remove("lien_actif_menugauche");
	});
	
	document.getElementById("lien7").addEventListener("click", function(){
		lien1.classList.remove("lien_actif_menugauche");
		lien2.classList.remove("lien_actif_menugauche");
		lien3.classList.remove("lien_actif_menugauche");
		lien4.classList.remove("lien_actif_menugauche");
		lien5.classList.remove("lien_actif_menugauche");
		lien6.classList.remove("lien_actif_menugauche");
		lien7.classList.add("lien_actif_menugauche");
		lien8.classList.remove("lien_actif_menugauche");
		lien9.classList.remove("lien_actif_menugauche");
		lien10.classList.remove("lien_actif_menugauche");
	});
	
	document.getElementById("lien8").addEventListener("click", function(){
		lien1.classList.remove("lien_actif_menugauche");
		lien2.classList.remove("lien_actif_menugauche");
		lien3.classList.remove("lien_actif_menugauche");
		lien4.classList.remove("lien_actif_menugauche");
		lien5.classList.remove("lien_actif_menugauche");
		lien6.classList.remove("lien_actif_menugauche");
		lien7.classList.remove("lien_actif_menugauche");
		lien8.classList.add("lien_actif_menugauche");
		lien9.classList.remove("lien_actif_menugauche");
		lien10.classList.remove("lien_actif_menugauche");
	});
	
	document.getElementById("lien9").addEventListener("click", function(){
		lien1.classList.remove("lien_actif_menugauche");
		lien2.classList.remove("lien_actif_menugauche");
		lien3.classList.remove("lien_actif_menugauche");
		lien4.classList.remove("lien_actif_menugauche");
		lien5.classList.remove("lien_actif_menugauche");
		lien6.classList.remove("lien_actif_menugauche");
		lien7.classList.remove("lien_actif_menugauche");
		lien8.classList.remove("lien_actif_menugauche");
		lien9.classList.add("lien_actif_menugauche");
		lien10.classList.remove("lien_actif_menugauche");
	});
	
	document.getElementById("lien10").addEventListener("click", function(){
		lien1.classList.remove("lien_actif_menugauche");
		lien2.classList.remove("lien_actif_menugauche");
		lien3.classList.remove("lien_actif_menugauche");
		lien4.classList.remove("lien_actif_menugauche");
		lien5.classList.remove("lien_actif_menugauche");
		lien6.classList.remove("lien_actif_menugauche");
		lien7.classList.remove("lien_actif_menugauche");
		lien8.classList.remove("lien_actif_menugauche");
		lien9.classList.remove("lien_actif_menugauche");
		lien10.classList.add("lien_actif_menugauche");
	});
</script>