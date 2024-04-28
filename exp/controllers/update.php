<?php
    require_once("../models/exp.model.php");
    $array = array('dnte' => $_POST['dnte'],
                   'dndo' => $_POST['dndo'],
                   'ofen' => $_POST['ofen'],
                   'desch' => $_POST['desch'],
                   'fden' => $_POST['fden'],
                   'fsuc' => $_POST['fsuc']);

    echo json_encode(Exp::editData($array));
?>