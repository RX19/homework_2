<?php
require_once("../models/exp.model.php");
echo json_encode(Exp::getId($_POST["idexp"]));
?>