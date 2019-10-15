<?php
$fieldA = $_POST["textnames"];
$keys = array('names','attending','rehearsal_dinner','dietary_restrictions'); //THIS IS WHERE YOU PUT THE FORM ELEMENTS ex: array('$fieldA','$fieldB',etc)
$csv_line = array();
foreach($keys as $key){
    array_push($csv_line,'' . $_GET[$key]);
}
$fname = 'rsvp_list.csv';
$csv_line = implode(',',$csv_line);
if(!file_exists($fname)){$csv_line = "\r\n" . $csv_line;}
$fcon = fopen($fname,'a');
$fcontent = $csv_line;
fwrite($fcon,$csv_line);
fclose($fcon);
?>
