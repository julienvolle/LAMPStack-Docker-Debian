<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hello World!</title>
</head>
<body>
	<code>
		<h1>Hello World!</h1>
		<hr/>
		<h2>PHP Version: <?php echo phpversion(); ?></h2>
		<hr/>
		<p>Attempting MySQL connection from php...</p>
		<p><?php
			$host = 'mysql';
			$user = 'root';
			$pass = 'root';
			$conn = new mysqli($host, $user, $pass);
			if ($conn->connect_error) {
			    die("Connection MySQLi failed: " . $conn->connect_error);
			} 
			echo "Connected MySQLi successfully!";
		?></p>
		<p><?php 
		try
		{
			$conn = new PDO("mysql:host=" . $host . ";charset=utf8", $user, $pass);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			echo "Connected PDO successfully!";
		}
		catch(PDOException $e)
		{
			die("Connection PDO failed: [" . $e->getCode() . "] " . $e->getMessage());
		}
		?></p>
		<p>
			Let's go to <a href="http://localhost:8181/" target="_blank">ADMINER</a>
		</p>
		<hr/>
		<p>Test PHP_XDEBUG :<br/><?php
			$date = new DateTime('NOW');
			var_dump($date);
		?></p>
		<hr/>
		<p>Test PHP_CURL :<br/><?php
			var_dump(function_exists('curl_version'));
		?></p>
		<hr/>
		<p>Test PHP_MBSTRING :<br/><?php
			var_dump(extension_loaded('mbstring'));
		?></p>
		<hr/>
		<p>Test PHP_ZIP :<br/><?php
			var_dump(extension_loaded('zip'));
		?></p>
		<hr/>
		<p>Test COMPOSER / SwiftMailer :<br/><?php
			require( __DIR__ . '/../vendor/autoload.php' );
			$transport = new Swift_SmtpTransport();
			$transport->setHost('localhost')
					  ->setPort(1025)
					  ->setUsername('')
					  ->setPassword('');		
			$mailer = new Swift_Mailer($transport);
			var_dump($mailer);
		?></p>
	</code>
</body>
</html>
