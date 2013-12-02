<!DOCTYPE>
<html>
	<head>
		<meta name="viewport" content="width=device-width, user-scalable=no"/><!-- "position: fixed" fix for Android 2.2+ -->
<style>
<?php readfile("style.css"); ?>
</style>

<script>
<?php readfile("redips-drag-min.js"); ?>
</script>
<!--libreria para drag -->
<script>
<?php readfile("script.js"); ?>
</script>

		<title>JUEGO PAGINACI&Oacute;N</title>
	</head>
	<script>
							

	</script>
	<body>
		<div id=head>
			<h1>Paginaci&oacute;n de Memoria</h1>
		</div>
		<center>
			<span style='margin-bottom:10px;' class=clock id=clock ></span>
			<button onclick="nueva_partida()">comenzar</button><button onclick="location.reload()">volver a jugar</button></center>


		<!-- div que permite que una tabla tenga drag -->
		<div id="drag">
			<!-- opcio shift para animation con el drag -->
			<!-- virtual memory -->
			<table class=space >			
			<tr><th colspan=2> Virtual Memory </th></tr>

			<tr><td>
			<table id="table1">
				<colgroup>
					<col width="200"/>
				</colgroup>
				<tbody>
					<tr><td><div id='1_' class="drag orange">1</div></td></tr>
					<tr><td><div id='2_' class="drag green">2</div></td></tr>
					<tr><td><div id='3_' class="drag orange">3</div></td></tr>
					<tr><td><div id='4_'  class="drag green">4</div></td></tr>
					<tr><td><div id='5_'  class="drag orange">5</div></td></tr>
				</tbody>
			</table>
			</td>
			<td><div id=random></div></td><!--nueva partida-->
			</table>
			<!-- global dir -->
			<table class='space' >			
			<tr><th colspan=2> Global Direction<span id="timer"></span></th></tr>
			<tr><td>
			<table id="table1">
				<colgroup>
					<col width="200"/>
				</colgroup>
				<tbody>
					<tr><td ><div class="drag orange">G1</div></td></tr>
					<tr><td><div  class="drag green">G2</div></td></tr>
					<tr><td ><div class="drag orange">G3</div></td></tr>
					<tr><td><div class="drag green">G4</div></td></tr>
					<tr><td ><div class="drag orange">G5</div></td></tr>
				</tbody>
			</table>
			</td><td>
			<table id="table1">
				<colgroup>
					<col width="200"/>
				</colgroup>
				<tbody>
					<tr><td id='td1'></td></tr>
					<tr><td id='td2'></td></tr>
					<tr><td id='td3'></td></tr>
					<tr><td id='td4'></td></tr>
					<tr><td id='td5'></td></tr>
				</tbody>
			</table>
			</td></tr></table>
			
			<!-- middle dir -->

			<table class='space' >			
			<tr><th colspan=2> Middle Direction </th></tr>
			<tr><td>
			<table id="table1">
				<colgroup>
					<col width="200"/>
				</colgroup>
				<tbody>
					<tr><td><div class="drag orange">M1</div></td></tr><tr><td><div class="drag green">M2</div></td></tr>
					<tr><td><div class="drag orange">M3</div></td></tr><tr><td><div class="drag green">M4</div></td></tr>
					<tr><td><div class="drag orange">M5</div></td></tr>
				</tbody>
			</table>
			</td><td>
			<table id="table1">
				<colgroup>
					<col width="200"/>
				</colgroup>
				<tbody>
					<tr><td><div class="drag orange">1</div></td></tr><tr><td><div class="drag green">2</div></td></tr>
					<tr><td><div class="drag orange">3</div></td></tr><tr><td><div class="drag green">4</div></td></tr>
					<tr><td><div class="drag orange">5</div></td></tr>
				</tbody>
			</table>
			</td></tr></table>

			<!-- page table -->

			<table class='space' >	
			<tr><th colspan=2> Page Table </th></tr>		
			<tr><td>
			<table id="table1">
				<colgroup>
					<col width="200"/>
				</colgroup>
				<tbody>
					<tr><td><div class="drag orange">P1</div></td></tr><tr><td><div class="drag green">P2</div></td></tr>
					<tr><td><div class="drag orange">P3</div></td></tr><tr><td><div class="drag green">P4</div></td></tr>
					<tr><td><div class="drag orange">P5</div></td></tr>
				</tbody>
			</table>
			</td><td>
			<table id="table1">
				<colgroup>
					<col width="200"/>
				</colgroup>
				<tbody>
					<tr><td><div class="drag orange">1</div></td></tr><tr><td><div class="drag green">2</div></td></tr>
					<tr><td><div class="drag orange">3</div></td></tr><tr><td><div class="drag green">4</div></td></tr>
					<tr><td><div class="drag orange">5</div></td></tr>
				</tbody>
			</table>
			</td></tr></table>

			<!-- physical memory -->

			<table class='space' >			
			<tr><th colspan=2> Physical Memory </th></tr>

			<tr><td>
			<table id="table1">
				<colgroup>
					<col width="200"/>
				</colgroup>
				<tbody>
					<tr><td><div class="drag orange">PH1</div></td></tr><tr><td><div class="drag green">PH2</div></td></tr>
					<tr><td><div class="drag orange">PH3</div></td></tr><tr><td><div class="drag green">PH4</div></td></tr>
					<tr><td><div class="drag orange">PH5</div></td></tr>
				</tbody>
			</table>
			</td><td>
			<table id="table1">
				<colgroup>
					<col width="200"/>
				</colgroup>
				<tbody>
					<tr><td><div class="drag orange">1</div></td></tr><tr><td><div class="drag green">2</div></td></tr>
					<tr><td><div class="drag orange">3</div></td></tr><tr><td><div class="drag green">4</div></td></tr>
					<tr><td><div class="drag orange">5</div></td></tr>
				</tbody>
			</table>
			</td>
			</tr>
			</table>
			<div id="message"/>
			<div id="score"/>

		</div>
	</body>
</html>
