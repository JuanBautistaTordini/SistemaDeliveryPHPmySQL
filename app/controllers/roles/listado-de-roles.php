<?php

$sql = "SELECT * FROM roles";

$query = $pdo->prepare($sql);
$query->execute();

$roles = $query->fetchAll(PDO::FETCH_ASSOC);

?>