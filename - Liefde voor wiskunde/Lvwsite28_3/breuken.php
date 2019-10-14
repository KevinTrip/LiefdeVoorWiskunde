<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<!--
			
			Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
		-->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
		<title></title>
		
		<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
		<!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
		<!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->
		
		<script type="text/javascript" src="script.js"></script>
	</head>
	<body>
		<div id="art-page-background-gradient"></div>
		<div id="art-main">
			<div class="art-sheet">
				<div class="art-sheet-tl"></div>
				<div class="art-sheet-tr"></div>
				<div class="art-sheet-bl"></div>
				<div class="art-sheet-br"></div>
				<div class="art-sheet-tc"></div>
				<div class="art-sheet-bc"></div>
				<div class="art-sheet-cl"></div>
				<div class="art-sheet-cr"></div>
				<div class="art-sheet-cc"></div>
				<div class="art-sheet-body">
					
					
					
                    <?php
						include("includes/header.php");
					?>
					<div class="art-content-layout">
						<div class="art-content-layout-row">
							<div class="art-layout-cell art-content">
								<div class="art-post">
									<div class="art-post-body">
										<div class="art-post-inner art-article">
                                            <div class="art-postmetadataheader">
                                                <h2 class="art-postheader">
                                                    Breuken
												</h2>
											</div>
                                            <div class="art-postcontent">
												
                                                <p> Een breuk is opgedeeld in twee delen.</p>
												<p> Deze worden boven elkaar vermeld.</p>
												<p> Het getal wat boven aan de breuk vermeld wordt, wordt de teller genoemd.</p>
												<p> Het getal wat onder aan de breuk vermeld wordt, wordt de noemer genoemd.</p>
												<p> De getallen die voorafstaand aan de breuk worden vermeld zijn de gehele getallen.</p>
												
											</div>
										</div>
										<div class="art-post no-margin">
											<div class="art-post-body no-padding">
												<div class="art-post-inner art-article">
													<div class="art-postmetadataheader">
														<h2 class="art-postheader">
															Samengestelde breuken
														</h2>
													</div>
													<div class="art-postcontent">
														<p>Een samengestelde breuk bestaat uit gehele getallen en nog een breuk.</p>
														<p> Dit houd in dat je gehele eenheden hebt, en daarnaast nog een deel van een hele eenheid.</p>
														<p><u>Voorbeeld:</u></p>
														<p> 1 <sup>3</sup>&frasl;<sub>4</sub></p>
														<p> Hierbij is 1 het aantal gehele getallen,</p>
														<p> is 3 de teller</p>
														<p> en 4 de noemer.</p>
														<?php
															include("includes/button_oefening.php");
														?>
													</div>
												</div>
												<div class="art-post no-margin">
													<div class="art-post-body no-padding">
														<div class="art-post-inner art-article">
															<div class="art-postmetadataheader">
																<h2 class="art-postheader">
																	Gelijkwaardige breuken
																</h2>
															</div>
															<div class="art-postcontent">
																<p>Je kunt breuken met verschillende grondgetallen schrijven.</p>
																<p> Maar toch kunnen deze breuken wel evenveel betekenen.</p>
																<p><u>Voorbeeld:</u></p>
																<p><sup>1</sup>&frasl;<sub>3</sub> en <sup>2</sup>&frasl;<sub>6</sub></p>
																<p> Deze breuken zijn gelijk aan elkaar omdat je de breuk <sup>2</sup>&frasl;<sub>6</sub> kunt delen door 2 zodat ook deze geschreven kan worden als <sup>1</sup>&frasl;<sub>3</sub>.</p>
																
																<?php
																	include("includes/button_oefening.php");
																?>
																
															</div>
														</div>
														<div class="art-post no-margin">
															<div class="art-post-body no-padding">
																<div class="art-post-inner art-article">
																	<div class="art-postmetadataheader">
																		<h2 class="art-postheader">
																			Vereenvoudigen
																		</h2>
																	</div>
																	<div class="art-postcontent">
																		<p> Er bestaat een mogelijkheid dat je breuken kleiner kunt maken en hiermee voor het rekenen vereenvoudiger maakt.</p>
																		<p> Het vinden van een te vereenvoudigbare breuk kun je vinden door zowel de teller als de noemer door hetzelfde getal te delen en hiermee bij de kleinst mogelijke breuk uit te komen.</p>
																		<p><u> Voorbeeld:</u></p>
																		<p>De breuk <sup>6</sup>&frasl;<sub>8</sub> kun je vereenvoudigen door de teller en noemer te delen door 2.</p>
																		<p> Als je dit doet, dan wordt de breuk <sup>3</sup>&frasl;<sub>4</sub>.</p>
																		<p> Dit is makkelijker om mee te rekenen.</p>
																		<br>
																		<p> Een andere manier van vereenvoudigen is door eerst het aantal gehele getallen eruit te halen.</p>
																		<p> In sommige gevallen is het daarna ook nog mogelijk om de breuk te verkleinen.</p>
																		<p><u>Voorbeeld:</u></p>
																		<p>  <sup>12</sup>&frasl;<sub>10</sub> kun je opschrijven als twee breuken,</p>
																		<p> Namelijk <sup>10</sup>&frasl;<sub>10</sub> en <sup>2</sup>&frasl;<sub>10</sub>.</p>
																		<p> Hierbij is de breuk <sup>10</sup>&frasl;<sub>10</sub> gelijk aan 1 hele.</p>
																		<p> Nu kun je de breuk opschrijven als: 1 <sup>2</sup>&frasl;<sub>10</sub>.</p>
																		<p> Het laatste deel van deze breuk kan ook nog worden vereenvoudigd door te delen door 2.</p>
																		<p> Hierdoor wordt het: 1 <sup>1</sup>&frasl;<sub>5</sub></p>
																		
																		<?php
																			include("includes/button_oefening.php");
																		?>               
																	</div>
																	<div class="cleared"></div>
																</div>
															</div>
															<div class="art-post no-margin">
																<div class="art-post-body no-padding">
																	<div class="art-post-inner art-article">
																		<div class="art-postmetadataheader">
																			<h2 class="art-postheader">
																				Gelijknamige breuken
																			</h2>
																		</div>
																		<div class="art-postcontent">
																			
																			<p> Er bestaan situaties waarbij je met twee breuken met verschillende noemers moet rekenen.</p>
																			<p> In sommige gevallen is het dan zo dat de ene een meervoud van de ander is waardoor je een breuk moet vermenigvuldigen om ze gelijk te maken.</p>
																			<p><u>Voorbeeld:</u></p>
																			<p> Met de breuken <sup>1</sup>&frasl;<sub>3</sub> en <sup>5</sup>&frasl;<sub>6</sub>.</p>
																			<p> Als we deze gelijknamig willen maken zullen we de breuk <sup>1</sup>&frasl;<sub>3</sub> vermenigvuldigen met 2.</p>
																			<p> Hierdoor wordt het <sup>2</sup>&frasl;<sub>6</sub> en heb je twee gelijknamige breuken.</p>
																			<br>
																			<p> Maar het kan ook voorkomen dat je beide breuken moet vermenigvuldigen om een gelijknamige breuken te krijgen.</p>
																			<p> Hierbij vermenigvuldig je de ene breuk met de noemer van de andere, en andersom.</p>
																			<p><u>Voorbeeld:</u></p>
																			<p> Bij <sup>1</sup>&frasl;<sub>4</sub> en <sup>2</sup>&frasl;<sub>5</sub></p>
																			<p> Nu gaan we de breuk <sup>1</sup>&frasl;<sub>4</sub> vermenigvuldigen met 5,</p>
																			<p> Dan krijg je: <sup>5</sup>&frasl;<sub>20</sub></p>
																			<p> En de breuk <sup>2</sup>&frasl;<sub>5</sub> vermenigvuldigen met 4.</p>
																			<p> Dan krijg je: <sup>8</sup>&frasl;<sub>20</sub></p>
																			<p> Nu ze weer gelijknamig zijn kun je ermee rekenen.</p>
																			
																			<?php
																				include("includes/button_oefening.php");
																			?>
																		</div>
																		<div class="cleared"></div>
																	</div>
																</div>
																<div class="art-post no-margin">
																	<div class="art-post-body no-padding">
																		<div class="art-post-inner art-article">
																			<div class="art-postmetadataheader">
																				<h2 class="art-postheader">
																					Rekenen met breuken
																				</h2>
																			</div>
																			<div class="art-postcontent">
																				
																				<p> Als je het hebt over het rekenen met breuken zul je als eerste starten met het optellen en aftrekken, later wordt dit uitgebreid met vermenigvuldigen en delen.</p>
																				<p> Op het moment dat de breuken gelijknamig zijn kun je gelijk rekenen.</p>
																				<p> Je rekent dan alleen met de teller, omdat de noemer gelijk zal blijven.</p>
																				<p> Het antwoord van je breuk schrijf je altijd zo klein mogelijk op.</p>
																				<p><b>Optellen:</b></p>
																				<p><u>Voorbeeld:</u></p>
																				<p> 1 <sup>1</sup>&frasl;<sub>4</sub> + 2 <sup>1</sup>&frasl;<sub>4</sub> =</p>
																				<p> Wanneer we dit bij elkaar optellen wordt dit:</p>
																				<p> 1 + 2 = 3 en <sup>1</sup>&frasl;<sub>4</sub> + <sup>1</sup>&frasl;<sub>4</sub> = <sup>2</sup>&frasl;<sub>4</sub></p>
																				<p> Dus: 3 <sup>2</sup>&frasl;<sub>4</sub></p>
																				<p> Dit kunnen we nog vereenvourdigen, dat wordt dit:</p>
																				<p> <sup>2</sup>&frasl;<sub>4</sub> : 2 = <sup>1</sup>&frasl;<sub>2</sub></p>
																				<p> Dus: 3 <sup>1</sup>&frasl;<sub>2</sub></p>
																				<br>
																				<p><b> Aftellen:</b></p>
																				<p><u>Voorbeeld:</u></p>
																				<p><sup>5</sup>&frasl;<sub>6</sub> - <sup>2</sup>&frasl;<sub>6</sub> =</p>
																				<p>Wanneer we dit van elkaar aftrekken wordt dit:</p>
																				<p> <sup>5</sup>&frasl;<sub>6</sub> - <sup>2</sup>&frasl;<sub>6</sub> = <sup>3</sup>&frasl;<sub>6</sub></p>
																				<p> Als we dit verkleinen wordt het:</p>
																				<p> <sup>3</sup>&frasl;<sub>6</sub> : 3 = <sup>1</sup>&frasl;<sub>2</sub></p>
																				<p> Dus: <sup>1</sup>&frasl;<sub>2</sub></p>
																				<p><u>Voorbeeld:</u></p>
																				<p> <sup>1</sup>&frasl;<sub>2</sub> - <sup>1</sup>&frasl;<sub>5</sub> =</p>
																				<p> Deze breuken gaan we eerst gelijk maken. </p>
																				<p> Dan wordt het:</p>
																				<p> <sup>1</sup>&frasl;<sub>2</sub> vermenigvuldigen met 5 = <sup>5</sup>&frasl;<sub>10</sub></p>
																				<p> <sup>1</sup>&frasl;<sub>5</sub> vermenigvuldigen met 2 = <sup>2</sup>&frasl;<sub>10</sub></p>
																				<p> Nu kunnen we ze van elkaar aftrekken:</p>
																				<p> <sup>5</sup>&frasl;<sub>10</sub> - <sup>2</sup>&frasl;<sub>10</sub> = <sup>3</sup>&frasl;<sub>10</sub></p>
																				<p> Deze breuk kunnen we niet vereenvoudigen dus hebben we ons eindantwoord.</p>
																				<p><u> Voorbeeld:</u></p>
																				<p> 1 <sup>1</sup>&frasl;<sub>2</sub> - <sup>2</sup>&frasl;<sub>3</sub> =</p>
																				<p> Eerst zullen we de breuk gelijk maken.</p>
																				<p> Dan wordt het:</p>
																				<p><sup>1</sup>&frasl;<sub>2</sub> vermenigvuldigen met  3 = <sup>3</sup>&frasl;<sub>6</sub></p>
																				<p><sup>2</sup>&frasl;<sub>3</sub> vermenigvuldigen met 2 = <sup>4</sup>&frasl;<sub>6</sub></p>
																				<p> Nu kunnen we ermee rekenen:</p>
																				<p> 1 <sup>3</sup>&frasl;<sub>6</sub> - <sup>4</sup>&frasl;<sub>6</sub> = <sup>5</sup>&frasl;<sub>6</sub></p>
																				<p>Deze breuk kunnen we niet vereenvoudigen dus hebben we ons eindantwoord.</p>
																				<br>
																				<p><b>Vermenigvuldigen:</b></p>
																				<p>Bij vermenigvuldigen met een geheel getal worden de gehele getallen vermenigvuldigd met de teller van de breuk.</p>
																				<p><u>Voorbeeld:</u></p>
																				<p><sup>3</sup>&frasl;<sub>4</sub> x 8 = <sup>24</sup>&frasl;<sub>4</sub></p>
																				<p> Nu kunnen we dit ook nog vereenvoudigen door zo vaak mogelijk de 4 in de 24 te passen.</p>
																				<p> Dit wordt:</p>
																				<p> 24 : 4 = 6</p>
																				<p>Dus: <sup>24</sup>&frasl;<sub>4</sub> = 6</p>
																				<p> <u>Voorbeeld:</u></p>
																				<p> 6 x <sup>1</sup>&frasl;<sub>4</sub> = <sup>6</sup>&frasl;<sub>4</sub></p>
																				<p> Om te vereenvoudigen zullen we zo vaak als mogelijk is de 4 in de 6 passen.</p>
																				<p> Dit word dan:</p>
																				<p> 6 : 4 = 1 <sup>1</sup>&frasl;<sub>2</sub></p>
																				<br>
																				<p> Bij vermenigvuldigen met breuken vermenigvuldig je de telles met elkaar en de noemers met elkaar.</p>
																				<p> <u>Voorbeeld:</u></p>
																				<p><sup>1</sup>&frasl;<sub>2</sub> x <sup>3</sup>&frasl;<sub>5</sub> = </p>
																				<p> Wanneer we de tellers en de noemers apart van elkaar vermenigvulden wordt dit:</p>
																				<p> 1 x 3 = 3 en 2 x 5 = 10</p>
																				<p> Als we dit terug in de breuk schrijven wordt het:</p>
																				<p><sup>3</sup>&frasl;<sub>10</sub></p>
																				<p> Dus: <sup>1</sup>&frasl;<sub>2</sub> x <sup>3</sup>&frasl;<sub>5</sub> = <sup>3</sup>&frasl;<sub>10</sub></p>
																				<p><u>Voorbeeld:</u></p>
																				<p><sup>1</sup>&frasl;<sub>2</sub> x <sup>3</sup>&frasl;<sub>4</sub> = </p>
																				<p> Eerst de teller en noemmers apart vermenigvuldigen:</p>
																				<p> 1 x 3 = 3 en 2 x 4 = 8</p>
																				<p> Terug naar de breuk:</p>
																				<p> <sup>3</sup>&frasl;<sub>8</sub></p>
																				<p> Dus: <sup>1</sup>&frasl;<sub>2</sub> x <sup>3</sup>&frasl;<sub>4</sub> = <sup>3</sup>&frasl;<sub>8</sub></p>
																				<br>
																				<p><b>Delen:</b></p>
																				<p>Het is mogelijk om en breuk te delen door een geheel getal.</p>
																				<p> Dan zul je de tellen in een veelvoud van de deler hebben voordat je deze kunt uitrekenen.</p>
																				<p> <sup>1</sup>&frasl;<sub>2</sub> : 6 =</p>
																				<p>Omdat je nu de teller niet door het getal 6 kunt delen, zul je eerst de breuk gelijkwaardig maken.</p>
																				<p>Dit kun je doen door de hele breuk met 6 te vermenigvuldigen, dan wordt het:</p>
																				<p> <sup>1</sup>&frasl;<sub>2</sub> vermmenigvuldigen met 6 = <sup>6</sup>&frasl;<sub>12</sub></p>
																				<p>Nu kunnen we de teller delen door 6. Dit maakt:</p>
																				<p> 6 : 6 = 1</p>
																				<p> Dus: <sup>6</sup>&frasl;<sub>12</sub> : 6 = <sup>1</sup>&frasl;<sub>12</sub></p>
																				<p> Dus: <sup>1</sup>&frasl;<sub>2</sub> : 6 = <sup>1</sup>&frasl;<sub>12</sub></p>
																				<p><u>Voorbeeld:</u></p>
																				<p> 2 <sup>1</sup>&frasl;<sub>2</sub> : 10 = </p>
																				<p> Hier zullen we eerst de gehele getallen wegwerken in de breuk. Dit wordt:</p>
																				<p> 2 is gelijk aan <sup>4</sup>&frasl;<sub>2</sub> en samen met <sup>1</sup>&frasl;<sub>2</sub> is het <sup>5</sup>&frasl;<sub>2</sub></p>
																				<p> <sup>5</sup>&frasl;<sub>2</sub> : 10 =</p>
																				<p> Hier zullen we eerst vermenigvuldigen voor we kunnen delen.</p>
																				<p> We vermenigvuldigen met 2, dan wordt het:</p>
																				<p> <sup>5</sup>&frasl;<sub>2</sub>vermenigvuldigen met 2 = <sup>10</sup>&frasl;<sub>4</sub></p>
																				<p> Nu kunnen we de teller delen. Het wordt:</p>
																				<p> 10 : 10 = 1</p>
																				<p> Dus: <sup>10</sup>&frasl;<sub>4</sub> : 10 = <sup>1</sup>&frasl;<sub>4</sub></p>
																				<p> Dus: 2 <sup>1</sup>&frasl;<sub>2</sub> : 10 = <sup>1</sup>&frasl;<sub>4</sub></p>
																				<br>
																				<p>Ook is he mogelijk om een geheel getal te delen door een breuk.</p>
																				<p>Hierbij zul je eerst vermenigvulden met de noemer, en deze uitkomst delen door de teller.</p>
																				<p><u>Voorbeeld:</u></p>
																				<p> 6 : <sup>2</sup>&frasl;<sub>3</sub> = </p>
																				<p> We moeten eerst het gehele getal vermenigvuldigen met de noemer.</p>
																				<p> 6 x 3 = 18</p>
																				<p> Daarna delen we door de teller.</p>
																				<p> 18 : 2 = 9</p>
																				<p> Dus: 6 : <sup>2</sup>&frasl;<sub>3</sub> = 9</p>
																				<p> <u>Voorbeeld:</u></p>
																				<p>3 : <sup>1</sup>&frasl;<sub>4</sub> =</p>
																				<p> Vermenigvuldigen met de noemer:</p>
																				<p> 3 x 4 = 12</p>
																				<p> Delen door de teller:</p>
																				<p> 12 : 1 = 12</p>
																				<?php
																					include("includes/button_oefening.php");
																				?>
																			</div>
																			
																			<div class="cleared"></div>
																		</div>
																	</div>
																	<div class="art-post no-margin">
																		<div class="art-post-body no-padding">
																			<div class="art-post-inner art-article">
																				<div class="art-postmetadataheader">
																					<h2 class="art-postheader">
																						Omrekenen van/naar decimalen
																					</h2>
																				</div>
																				<div class="art-postcontent">
																					
																					<p>Breuken kun je omrekenen naar een decimaal getal.</p>
																					<p>Dit kun je doen door de breuk eerst om te rekenen naar een breuk met een noemer 10, 100 of 1000.</p>
																					<p><u>Voorbeeld:</u></p>
																					<p> De breuk <sup>4</sup>&frasl;<sub>5</sub> naar een decimaal getal.</p>
																					<p> Reken de breuk eerst om naar een breuk met de gewenste noemer.</p>
																					<p> <sup>4</sup>&frasl;<sub>5</sub> vermenigvulden met 2 wordt: </p>
																					<p> <sup>8</sup>&frasl;<sub>10</sub></p>
																					<p> Schrijf het nu al een decimaal getal:</p>
																					<p> <sup>8</sup>&frasl;<sub>10</sub> = 0,8</p>
																					<p> Dus: <sup>4</sup>&frasl;<sub>5</sub> = 0,8</p>
																					<br>
																					<p> <u> Voorbeeld:</u></p>
																					<p>1 <sup>3</sup>&frasl;<sub>4</sub> = 1 <sup>75</sup>&frasl;<sub>100</sub> = 1,75</p>
																					<br>
																					<p>Wanneer je van een decimaal getal naar een breuk gaat, ga je eerst omrekenen naar de meest eenvoudige breuk en daarna verkleinen.</p>
																					<p><u> Voorbeeld:</u></p>
																					<p> Schrijf 0,25 als breuk.</p>
																					<p> Schrijf het eerst als een breuk met noemer 10, 100 of 1000:</p>
																					<p> 0,25 = <sup>25</sup>&frasl;<sub>100</sub></p>
																					<p> Daarna ga je de breuk zo veel mogelijk vereenvoudigen:</p>
																					<p> <sup>25</sup>&frasl;<sub>100</sub> = <sup>1</sup>&frasl;<sub>4</sub></p>
																					<br>
																					<p><u> Voorbeeld:</u></p>
																					<p> Nora koopt 2 flesjes water, &eacute;&eacute;n van <sup>1</sup>&frasl;<sub>3</sub> liter en &eacute;&eacute;n van 0,25 liter.</p>
																					<p> Hoeveel water heeft Nora in totaal?</p>
																					<p>Schrijf het antwoord als een breuk. </p>       
																					<p><b>Stap 1</b> Reken &eacute;&eacute;n van de getallen om.</p>
																					<p> 0,25 = <sup>25</sup>&frasl;<sub>100</sub> = <sup>1</sup>&frasl;<sub>4</sub></p>
																					<p><b>Stap 2</b> Reken uit.</p>
																					<p> <sup>1</sup>&frasl;<sub>3</sub> + <sup>1</sup>&frasl;<sub>4</sub> = <sup>4</sup>&frasl;<sub>12</sub> + <sup>3</sup>&frasl;<sub>12</sub> = <sup>7</sup>&frasl;<sub>12</sub></p>
																					<p><b>Stap 3</b> Vereenvoudig de uitkomst.</p>
																					<p>De breuk <sup>7</sup>&frasl;<sub>12</sub> kun je niet vereenvoudigen.</p>
																					<p>Nora heeft in totaal <sup>7</sup>&frasl;<sub>12</sub> liter water.</p>
																					<br>
																					<p><u>Voorbeeld:</u></p>
																					<p> Timon drinkt een achtste liter koffie. Jellie drinkt 0,2 liter koffie.</p>
																					<p> Hoeveel liter koffie hebben ze samen gedronken?</p>
																					<p>Schrijf het antwoord als decimaal getal.</p>
																					<p> Je rekent uit <sup>1</sup>&frasl;<sub>8</sub> + 0,2 =</p>
																					<p><b>Stap 1</b> Reken &eacute;&eacute;n van de getallen om.</p>
																					<p> Je moet het antwoord als decimaal getal geven dus je rekent de breuk om.</p>
																					<p> <sup>1</sup>&frasl;<sub>8</sub> = <sup>125</sup>&frasl;<sub>1000</sub> = 0,125</p>
																					<p><b>Stap 2</b> Reken uit.</p>
																					<p> 0,125 + 0,2 = 0,325</p>
																					<p> Timon en Jelle hebben samen 0,325 liter koffie gedronken.</p>
																					<?php
																						include("includes/button_oefening.php");
																					?>
																					<div class="art-post no-margin">
																						<div class="art-post-body no-padding">
																							<div class="art-post-inner art-article">
																								<div class="art-postmetadataheader">
																									<h2 class="art-postheader">
																										Verband tussen breuken en procenten
																									</h2>
																								</div>
																								<div class="art-postcontent">
																									<p>Het is mogelijk om breuken te schrijven als een percentage.</p>
																									<br>
																									<p>100&#37; = 1</p>
																									<p>50&#37; = 0,5 = <sup>1</sup>&frasl;<sub>2</sub> = 1 : 2</p>
																									<p>25&#37; = 0,25 = <sup>1</sup>&frasl;<sub>4</sub> = 1 : 4</p>
																									<p>20&#37; = 0,2 = <sup>1</sup>&frasl;<sub>5</sub> = 1 : 5</p>
																									<p>12,5&#37; = 0,125 = <sup>1</sup>&frasl;<sub>8</sub> = 1 : 8</p>
																									<p>10&#37; = 0,1 = <sup>1</sup>&frasl;<sub>10</sub> = 1 : 10</p>
																									<p>5&#37; = 0,05 = <sup>1</sup>&frasl;<sub>20</sub> = 1 : 20</p>
																									<p>1&#37; = 0.01 = <sup>1</sup>&frasl;<sub>100</sub> = 1 : 100</p>
																									
																									<p>
																										<span class="art-button-wrapper">
																											<span class="l"> </span>
																											<span class="r"> </span>
																											<a class="art-button" href="javascript:void(0)">Join&nbsp;Now!</a>
																										</span>
																									</p>
																								</div>
																								<div class="cleared"></div>
																							</div>
																							<div class="cleared"></div>
																						</div>
																					</div>
																				</div>
																				<div class="cleared"></div>
																			</div>
																		</div>
																		<div class="cleared"></div>
																	</div>
																</div>
																<div class="cleared"></div>
															</div>
										</div>
									</div>
								</div>
							</div>
							<?php
								include("includes/footer.php");
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																					