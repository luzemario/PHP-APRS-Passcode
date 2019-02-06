<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

	<head>
		<title>Gerador de senha APRS - Senha</title>
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
			.green {
				color: #4F8A10;
			}
		</style>
	</head>

	<body>
		<div id="container">
		
			<h1>Gerador de senha APRS</h1>
			
			<h2>Sua Senha: <span class="green"><?php echo $passcode; ?></span></h2>
			
			<p><a href="../index.php">Gerar uma nova Senha</a></p>
			
			<p>Exemplo técnico típico de geração de Senha usando PHP</p>
			<p>Código fonte disponível em <a href="https://github.com/magicbug/PHP-APRS-Passcode" title="Github" target="_blank">Github</a></p>
		</div>
	</body>

</html>
