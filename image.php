#!/usr/bin/php
<?php
// First we need to include our auth script and some needed tools
require_once('/usr/share/php/opencloud/lib/rackspace.php');
require_once('./auth.php');

$compute = $RAX->Compute();
$images = $compute->ImageList();

while ($image = $images->Next()) {
  echo $image->id ."\t". $image->name ."\n";
}
?>
