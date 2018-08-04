<?php
require_once 'scripts.php';
// List email
// one email per line
$emails = array(
    'admin@phimhp.com',
    'dev@nguyenanhung.com'
);
// Begin Script
if (is_array($emails)) {
    foreach ($emails as $key => $item) {
        $check = pwnedCheck($item);
        if (is_array($check)) {
            echo ($key + 1) . " - Email: " . $item . " - list site: " . implode(', ', $check) . "\n";
        } else {
            echo ($key + 1) . " - Email: " . $item . " - " . $check . "\n";
        }
    }
} else {
    $check = pwnedCheck($emails);
    if (is_array($check)) {
        echo "Email: " . $emails . " - list site: " . implode(', ', $check) . "\n";
    } else {
        echo "Email: " . $emails . " - " . $check . "\n";
    }
}
