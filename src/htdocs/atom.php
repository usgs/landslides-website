<?php

include_once '_features.inc.php';

header('Content-Type: application/atom+xml');
echo $LS_FEATURES->toAtom();
?>
