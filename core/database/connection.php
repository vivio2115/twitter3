<?php 
$dsn = 'mysql:host=172.93.105.132;dbname=db_los_angos_dc';
$user = 'root';
$password = 'dIpG01c_*ssaB0ai0A+EckjzzMGf@b9A75C1E@#Az';

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $password, $options);
} catch (PDOException $e) {
    echo 'Connection error! ' . $e->getMessage();
    exit();
}
?>
