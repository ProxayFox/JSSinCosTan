<!DOCTYPE html>
<html>
	<head>
		<title>SinCosTan</title>
		<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
	</head>
	<body>
		<section class="container">
			<!-- finding Tan -->
			<section class="row col-sm border">
				<div style="padding: 50px;">
					<h1>Calculate Tan (Alpha, Beta)</h1>
					<!-- get values from the user -->
					<input id="getTanA" type="number" placeholder="Input the Alpha A (Adjacent) value" class="form-control" style="width: 310px;">
				  <br>
				  <input id="getTanO" type="number" placeholder="Input the Alpha O (Opposite) value" class="form-control" style="width: 310px;">
					<br>
					<button onclick="findTan()" class="btn btn-lg btn-primary">Find The Alpha, Beta (Angle)</button>
					<p id="TanBDeg"></p>
				</div>

				<!-- formula 1 Alpha-->
				<div style="padding-top: 60px; padding-left: 25px;">
					<p>Finding Alpha (α)</p>
					<p>Tan α = O / A</p>
					<p>Tan α = <span id="alphaTanO1">0</span> / <span id="alphaTanA1">0</span></p>
					<p>α = Tan ^ -1 ( <span id="alphaTanO2">0</span> / <span id="alphaTanA2">0</span> )</p>
					<p>α = <span id="alphaTanBDegForm">0</span>°</p>
				</div>

				<!-- formula 2 Beat -->
				<div style="padding-top: 60px; padding-left: 25px;">
					<p>Finding Beta (β)</p>
					<p>Tan β = O / A</p>
					<p>Tan β = <span id="betaTanO1">0</span> / <span id="betaTanA1">0</span></p>
					<p>β = Tan ^ -1 ( <span id="betaTanO2">0</span> / <span id="betaTanA2">0</span> )</p>
					<p>β = <span id="betaTanBDegForm">0</span>°</p>
				</div>


				<!-- SVG -->
				<div style="padding-top: 60px; padding-left: 100px;">

					<!-- SVG for Alpha -->
					<svg height="200" width="250">
						<!-- SVG triangle -->
		 				<polygon points="100,5 100,150 249,150" style="fill:lightblue;stroke:black;stroke-width:2" />
		 				<!-- text inside the SVG -->
		 				<text x="50" y="100" text-anchor="middle" fill="black" font-size="20" id="alphaTanTriO">A</text>
		 				<text x="125" y="175" text-anchor="middle" fill="black" font-size="20" id="alphaTanTriA">O</text>
		 				<text x="115" y="50" text-anchor="middle" fill="black" font-size="20">α</text>
		 			</svg>

		 			<!-- SVG for Beta -->
		 			<svg height="200" width="250">
						<!-- SVG triangle -->
		 				<polygon points="100,5 100,150 249,150" style="fill:lightblue;stroke:black;stroke-width:2" />
		 				<!-- text inside the SVG -->
		 				<text x="50" y="100" text-anchor="middle" fill="black" font-size="20" id="betaTanTriA">O</text>
		 				<text x="125" y="175" text-anchor="middle" fill="black" font-size="20" id="betaTanTriO">A</text>
		 				<text x="200" y="135" text-anchor="middle" fill="black" font-size="20">β</text>
		 			</svg>
				</div>
			</section>


			<!-- finding Sin -->
			<section class="row col-sm border">
				<div style="padding: 50px;">
					<h1>Calculate Sin (Alpha, Beta)</h1>
					<!-- get values from the user -->
					<input id="getSinO" type="number" placeholder="Input the Alpha O (Opposite) value" class="form-control" style="width: 310px;">
				  <br>
				  <input id="getSinH" type="number" placeholder="Input the Alpha H (Hypotenuse) value" class="form-control" style="width: 310px;">
					<br>
					<button onclick="findSin()" class="btn btn-lg btn-primary">Find The Alpha, Beta (Angle)</button>
					<p id="SinSDeg"></p>
				</div>
				<!-- formula -->
				<div style="padding-top: 60px; padding-left: 25px;">
					<p>Sin α = O / A</p>
					<p>Sin α = <span id="alphaSinO1">0</span> / <span id="alphaSinH1">0</span></p>
					<p>α = Sin ^ -1 ( <span id="alphaSinO2">0</span> / <span id="alphaSinH2">0</span> )</p>
					<p>α = <span id="alphaSinBDegForm">0</span>°</p>
				</div>

				<div style="padding-top: 60px; padding-left: 25px;">
					<p>Sin β = O / A</p>
					<p>Sin β = <span id="betaSinO1">0</span> / <span id="betaSinH1">0</span></p>
					<p>β = Sin ^ -1 ( <span id="betaSinO2">0</span> / <span id="betaSinH2">0</span> )</p>
					<p>β = <span id="betaSinBDegForm">0</span>°</p>
				</div>

				<!-- SVG -->
				<div style="padding-top: 60px; padding-left: 100px;">

					<!-- SVG for Alpha -->
					<svg height="200" width="250">
						<!-- SVG triangle -->
		 				<polygon points="100,5 100,150 249,150" style="fill:lightblue;stroke:black;stroke-width:2" />
		 				<!-- text inside the SVG -->
		 				<text x="200" y="50" text-anchor="middle" fill="black" font-size="20" id="alphaSinTriH">H</text>
		 				<text x="125" y="175" text-anchor="middle" fill="black" font-size="20" id="alphaSinTriO">O</text>
		 				<text x="115" y="50" text-anchor="middle" fill="black" font-size="20">α</text>
		 			</svg>

		 			<!-- SVG for Beta -->
		 			<svg height="200" width="250">
						<!-- SVG triangle -->
		 				<polygon points="100,5 100,150 249,150" style="fill:lightblue;stroke:black;stroke-width:2" />
		 				<!-- text inside the SVG -->
		 				<text x="50" y="100" text-anchor="middle" fill="black" font-size="20" id="betaSinTriO">O</text>
		 				<text x="200" y="50" text-anchor="middle" fill="black" font-size="20" id="betaSinTriH">H</text>
		 				<text x="200" y="135" text-anchor="middle" fill="black" font-size="20">β</text>
		 			</svg>
				</div>
			</section>

			<!-- finding Cos -->
			<section class="row col-sm border">
				<div style="padding: 50px;">
					<h1>Calculate Cos (Alpha, Beta)</h1>
					<!-- get values from the user -->
					<input id="getCosA" type="number" placeholder="Input the Alpha A (Adjacent) value" class="form-control" style="width: 310px;">
				  <br>
				  <input id="getCosH" type="number" placeholder="Input the Alpha H (Hypotenuse) value" class="form-control" style="width: 310px;">
					<br>
					<button onclick="findCos()" class="btn btn-lg btn-primary">Find The Alpha, Beta (Angle)</button>
					<p id="CosCDeg"></p>
				</div>
				<!-- formula -->
				<div style="padding-top: 60px; padding-left: 25px;">
					<p>Tan α = O / A</p>
					<p>Tan α = <span id="alphaCosA1">0</span> / <span id="alphaCosH1">0</span></p>
					<p>α = Tan ^ -1 ( <span id="alphaCosA2">0</span> / <span id="alphaCosH2">0</span> )</p>
					<p>α = <span id="alphaCosBDegForm">0</span>°</p>
				</div>

				<div style="padding-top: 60px; padding-left: 25px;">
					<p>Tan β = O / A</p>
					<p>Tan β = <span id="betaCosA1">0</span> / <span id="betaCosH1">0</span></p>
					<p>β = Tan ^ -1 ( <span id="betaCosA2">0</span> / <span id="betaCosH2">0</span> )</p>
					<p>β = <span id="betaCosBDegForm">0</span>°</p>
				</div>

				<!-- SVG -->
				<div style="padding-top: 60px; padding-left: 100px;">

					<!-- SVG for Alpha -->
					<svg height="200" width="250">
						<!-- SVG triangle -->
		 				<polygon points="100,5 100,150 249,150" style="fill:lightblue;stroke:black;stroke-width:2" />
		 				<!-- text inside the SVG -->
		 				<text x="50" y="100" text-anchor="middle" fill="black" font-size="20" id="alphaCosTriA">A</text>
		 				<text x="200" y="50" text-anchor="middle" fill="black" font-size="20" id="alphaCosTriH">H</text>
		 				<text x="115" y="50" text-anchor="middle" fill="black" font-size="20">α</text>
		 			</svg>

		 			<!-- SVG for Beta -->
		 			<svg height="200" width="250">
						<!-- SVG triangle -->
		 				<polygon points="100,5 100,150 249,150" style="fill:lightblue;stroke:black;stroke-width:2" />
		 				<!-- text inside the SVG -->
		 				<text x="200" y="50" text-anchor="middle" fill="black" font-size="20" id="betaCosTriA">H</text>
		 				<text x="125" y="175" text-anchor="middle" fill="black" font-size="20" id="betaCosTriH">A</text>
		 				<text x="200" y="135" text-anchor="middle" fill="black" font-size="20">β</text>
		 			</svg>
				</div>
			</section>
		</section>

		<script type="text/javascript">

			//Tan
			function findTan() {
				// get the values from the user
				var a = document.getElementById("getTanA").value;
				var o = document.getElementById("getTanO").value;
				// Beta calculations
				var bRad = Math.atan(o / a);
				var bDeg = bRad * 180 / Math.PI;
				// Alpha Calculations
				var aRad = Math.atan(a / o);
				var aDeg = aRad * 180 / Math.PI;
				// showing the values
				document.getElementById("TanBDeg").innerHTML = "Adjacent= " + a + "<br> Opposite= " + o + "<br> Alpha= " + aDeg + "°" + "<br> Beta= " + bDeg + "°";
				// formula 1 Alpha
				document.getElementById('alphaTanA1').innerHTML = a;
				document.getElementById('alphaTanA2').innerHTML = a;
				document.getElementById('alphaTanO1').innerHTML = o;
				document.getElementById('alphaTanO2').innerHTML = o;
				document.getElementById('alphaTanBDegForm').innerHTML = bDeg;
				// formula 2 Beta
				document.getElementById('betaTanA1').innerHTML = o;
				document.getElementById('betaTanA2').innerHTML = o;
				document.getElementById('betaTanO1').innerHTML = a;
				document.getElementById('betaTanO2').innerHTML = a;
				document.getElementById('betaTanBDegForm').innerHTML = aDeg;
				// show values on the SVG for alpha
				document.getElementById('alphaTanTriA').innerHTML = a;
				document.getElementById('alphaTanTriO').innerHTML = o;
				// show values on the SVG for alpha
				document.getElementById('betaTanTriA').innerHTML = a;
				document.getElementById('betaTanTriO').innerHTML = o;
			}

			//Sin
			function findSin() {
				// get the values from the user
				var o = document.getElementById("getSinO").value;
				var h = document.getElementById("getSinH").value;
				// Beta calculations
				var bRad = Math.atan(o / h);
				var bDeg = bRad * 180 / Math.PI;
				// Alpha Calculations
				var aRad = Math.atan(h / o);
				var aDeg = aRad * 180 / Math.PI;
				// showing the values
				document.getElementById("SinSDeg").innerHTML = "Opposite= " + o + "<br> Hypotenuse= " + h + "<br> Alpha= " + aDeg + "°" + "<br> Beta= " + bDeg + "°";
				// formula 1 Alpha
				document.getElementById('alphaSinO1').innerHTML = o;
				document.getElementById('alphaSinO2').innerHTML = o;
				document.getElementById('alphaSinH1').innerHTML = h;
				document.getElementById('alphaSinH2').innerHTML = h;
				document.getElementById('alphaSinBDegForm').innerHTML = bDeg;
				// formula 2 Beta
				document.getElementById('betaSinO1').innerHTML = h;
				document.getElementById('betaSinO2').innerHTML = h;
				document.getElementById('betaSinH1').innerHTML = o;
				document.getElementById('betaSinH2').innerHTML = o;
				document.getElementById('betaSinBDegForm').innerHTML = aDeg;
				// show values on the SVG for alpha
				document.getElementById('alphaSinTriO').innerHTML = o;
				document.getElementById('alphaSinTriH').innerHTML = h;
				// show values on the SVG for alpha
				document.getElementById('betaSinTriO').innerHTML = o;
				document.getElementById('betaSinTriH').innerHTML = h;
			}

			//Cos
			function findCos() {
				// get the values from the user
				var a = document.getElementById("getCosA").value;
				var h = document.getElementById("getCosH").value;
				// Beta calculations
				var bRad = Math.atan(a / h);
				var bDeg = bRad * 180 / Math.PI;
				// Alpha Calculations
				var aRad = Math.atan(h / a);
				var aDeg = aRad * 180 / Math.PI;
				// showing the values
				document.getElementById("CosCDeg").innerHTML = "Adjacent= " + a + "<br> Hypotenuse= " + h + "<br> Alpha= " + aDeg + "°" + "<br> Beta= " + bDeg + "°";
				// formula 1 Alpha
				document.getElementById('alphaCosA1').innerHTML = a;
				document.getElementById('alphaCosA2').innerHTML = a;
				document.getElementById('alphaCosH1').innerHTML = h;
				document.getElementById('alphaCosH2').innerHTML = h;
				document.getElementById('alphaCosBDegForm').innerHTML = bDeg;
				// formula 2 Beta
				document.getElementById('betaCosA1').innerHTML = h;
				document.getElementById('betaCosA2').innerHTML = h;
				document.getElementById('betaCosH1').innerHTML = a;
				document.getElementById('betaCosH2').innerHTML = a;
				document.getElementById('betaCosBDegForm').innerHTML = aDeg;
				// show values on the SVG for alpha
				document.getElementById('alphaCosTriA').innerHTML = a;
				document.getElementById('alphaCosTriH').innerHTML = h;
				// show values on the SVG for alpha
				document.getElementById('betaCosTriA').innerHTML = a;
				document.getElementById('betaCosTriH').innerHTML = h;
			}
		</script>
	</body>
</html>