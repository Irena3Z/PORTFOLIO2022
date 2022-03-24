<?php
define('PRIVATE_DIR', __DIR__ . '/../private/');

include PRIVATE_DIR . 'bootstrap.php';

use Database\DB;

header('Content-type: application/json');

$output = ['status' => false];

if (isset($_GET['name']) && is_string($_GET['name'])) {
    switch ($_GET['name']) {
       
        case 'subscribe':
           $output['status'] = true;
            $data_manager = new DB();
            $output['all'] = $_POST;
            break;
       
    }
}

echo json_encode($output, JSON_PRETTY_PRINT);

?>