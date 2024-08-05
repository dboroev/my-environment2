<?php

$dsn = "pgsql:host=db;port=5432;dbname=db;";

$pdo = new PDO($dsn, "dbuser", "dbpwd");

$pdo->exec("SELECT * FROM users");