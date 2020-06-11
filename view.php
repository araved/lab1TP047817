<?php
try {
    $conn = new PDO("sqlsrv:server = tcp:dblab2tp047817.database.windows.net,1433; Database = lab2Database", "tp047817", "{your_password_here}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "tp047817", "pwd" => "Devara190593", "Database" => "lab2Database", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:dblab2tp047817.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

  if(!$conn)
  {
    die("Error connection: ".sqlsrv_errors());
  }
  echo "Connection Success: connected!";

?>
