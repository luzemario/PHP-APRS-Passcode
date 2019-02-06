<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<title>Gerador de senha APRS</title>
		<style type="text/css" media="screen">
			body {
				font-family: Arial, "MS Trebuchet", sans-serif;
				font-size: 14px;
				background-color: whiteSmoke;
			}
			
			#container {
				margin: 0 auto;
				width: 400px;
				padding: 10px;
				border: 1px solid #E5E5E5;
				background-color: #ffffff;
			}
			label {
				width: 100%;
				font-weight: bold;
			}
		</style>
	</head>

	<body>
		<div id="container">
		
			<h1>Gerador de senha APRS</h1>
			
			<!-- HTML Form to collect callsign. -->
			<form method="post" action="index.php/passcode">
				<label for="callsign">Indicativo</label>
				<input type="text" name="callsign" value="" />
				<input type="submit" name="Submit" value="Pegar Senha" />
			</form>
			
			<!-- Info about the project -->
			<p>Exemplo técnico típico de geração de senha usando PHP</p>
			<p>Código fonte disponível em <a href="https://github.com/magicbug/PHP-APRS-Passcode" title="Github" target="_blank">Github</a></p>
		</div>
	</body>

</html>
