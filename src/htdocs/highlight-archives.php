<?php
// Author: Lisa Wald
// Contact: Lisa Wald
  if (!isset($TEMPLATE)) {
    $TITLE = 'Landslide Hazards Program Highlights - Archives';
    $HEAD = '<link rel="stylesheet" href="highlight-archives.css"/>';
    $NAVIGATION = true;
    include 'template.inc.php';
  }
?>

<?php
include_once '_features.inc.php';
echo $LS_FEATURES->toHtml(-1);
?>
