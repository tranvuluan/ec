<?php
    $path = realpath(dirname(__FILE__));

    require_once($path . '/../class/customer.php');

    $customerModel = new Customer();
    $username = $_POST['username'];
?>