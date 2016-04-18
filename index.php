<?php

/**
 * @param SplFileObject $configFile
 * @return mysqli
 */
function getConnection($configFile) {
    $host = $configFile->fgets();
    $database = $configFile->fgets();
    $username = $configFile->fgets();
    $password = $configFile->fgets();
    
    $connection = new mysqli($host, $username, $password, $database);
    
    if ($connection->connect_error) {
        die('<h1>MYSQL CONNECT FAILED.</h1>');
    }
    
    return $connection;
}

$connection = getConnection(new SplFileObject('config/mysql.dat'));

?>

<html>
<head>
    <title>BrassSnakeShop</title>
</head>
<body>
<h1>BrassSnakeShop</h1>
<p>Welcome to the BrassSnakeShop, this will soon be a fully fledged store.</p>
<br />
<div id="footer" align="center">
    <hr>
    Git Revision <code><?= shell_exec('git rev-parse HEAD') ?></code><br />
    Last Commit by <?= shell_exec('git log -1 --pretty=%an') ?>
</div>
</body>
</html>