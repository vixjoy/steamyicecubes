<?php

$db = "(DESRIPTION=(ADDRESS_LIST = ADDRESS = (PROTOCOL = TCP)(HOST = 192.168.1.253)(PORT = 1521))(CONNECT_DATA =(SID=orcl)))";

if($c = OCILogon("sylvia", "Coltoncito1", $db))
{
	echo "Successfully connected to Oracle.\n";
	OCILogoff($c);
}
else
{
	$err = OCIError();
	echo = "Connection failed." . $err[text];
}

if (!empty($_GET['action'])){
	$action = $_GET['action'];
	$action = basename($action);
	
	if(file_exists("Templates/$action.htm") $action = "index";
	include ("templates/$action.htm");
} else {
	include("templates/index.htm");
}

include("templates/footer.htm");
