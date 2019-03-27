<?php
$people = array(
	array('id'=>1,	'first_name'=>'John',	'last_name'=>'Smith',		'email'=>'john.smith@hotmail.com'),
	array('id'=>2,	'first_name'=>'Paul',	'last_name'=>'Allen',		'email'=>'paul.allen@microsoft.com'),
	array('id'=>3,	'first_name'=>'James',	'last_name'=>'Johnston',	'email'=>'james.johnston@gmail.com'),
	array('id'=>4,	'first_name'=>'Steve',	'last_name'=>'Buscemi',		'email'=>'steve.buscemi@yahoo.com'),
	array('id'=>5,	'first_name'=>'Doug',	'last_name'=>'Simons',		'email'=>'doug.simons@hotmail.com')
);
?>
<!doctype html>
<head>
	<title>First Application Test</title>
	<style>
		body{font-family:Helvetica,Arial,Sans-Serif;}
		td,th{padding:10px;}
		th{text-align:center;background-color:#000;color:#FFF;}
	</style>
	<script>var lnb="\n";</script>
</head>
<body>
	<table>
		<tr>
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Action</th>
		</tr>
		<?php
		foreach ($people as $person){ ?>
		<tr>
			<td><?php print $person['id'] ?></td>
			<td id="<?php echo 'FName'.$person['id'] ?>" class="first"><?php print $person['first_name'] ?></td>
			<td id="<?php echo 'LName'.$person['id'] ?>" class="last"><?php print $person['last_name'] ?></td>
			<td id="<?php echo 'EMID'.$person['id'] ?>" class="email"><?php print $person['email'] ?></td>
			<td><button class="show" onclick="alert('Name: '+document.getElementById('<?php echo 'FName'.$person['id'] ?>').innerHTML+' '+document.getElementById('<?php echo 'LName'.$person['id'] ?>').innerHTML+lnb+'Email: '+document.getElementById('<?php echo 'EMID'.$person['id'] ?>').innerHTML);">Show</button></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>