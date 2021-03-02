<?php 
try {
    $conn = new mysqli('localhost', 'root', 'root', 'satoshi_spa');
} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}

// if ($conn->ping()) {
//     echo 'work';
// } else {
//     echo $conn->connect_error;
// }