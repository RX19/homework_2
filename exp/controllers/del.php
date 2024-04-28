<?php
require_once "../models/exp.model.php";
echo json_encode(Exp::delData($_POST['idexp']));
?>
