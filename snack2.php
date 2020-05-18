<?php 
$data = $_GET;

if ( empty($data['name']) || empty($data['mail']) || empty($data['age']) ) {
    echo 'Please insert all parameters';
} elseif ( strlen($data['name']) <=3 ) {
    echo 'Access denied';
} elseif ( strpos($data['mail'], '@') === false || strpos($data['mail'], '.') === false ) {
    echo 'Access denied';
} elseif ( !is_numeric($data['age']) ) {
    echo 'Access denied';
} else {
    echo 'Access granted';
}
?>