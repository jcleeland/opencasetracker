<?php
    //print_r($_POST);
    $first=isset($_POST['first']) ? $_POST['first'] : 0;
    $last=isset($_POST['last']) ? $_POST['last'] : 1000000000;
    $parameters=isset($_POST['parameters']) ? $_POST['parameters'] : null;
    $conditions=isset($_POST['conditions']) ? $_POST['conditions'] : null;
    $order=isset($_POST['order']) ? $_POST['order'] : null;
    $output=$oct->historyList($parameters, $conditions, $order, $first, $last);
    //$oct->showArray($output);
?>
