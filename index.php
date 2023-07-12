<?php
include 'api.php';
include 'processing.php';


if (isset($_REQUEST['datepicker'])) {
    $string =  '&date=' . $_REQUEST['datepicker'];
    $object = new API($string);
    $result = $object->fetchImage();
    Processing($result);
}

if (isset($_REQUEST['from']) && $_REQUEST['to']) {
    $string = '&start_date=' . $_REQUEST['from'] . '&end_date=' . $_REQUEST['to'];
    $object = new API($string);
    $result = $object->multiImages();
    Processing($result);
}
