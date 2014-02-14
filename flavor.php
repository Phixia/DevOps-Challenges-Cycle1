<?php
// First we need to include our auth script and some needed tools
require_once('/usr/share/php/opencloud/lib/rackspace.php');
require_once('./auth.php');

$compute = $RAX->Compute();


$fastlist = $compute->FlavorList(FALSE);
$flavors = $compute->FlavorList();
while($flavor = $fastlist->Next())
    printf("Flavor %s has %dMB of RAM and %dGB of disk\n",
        $flavor->name, $flavor->ram, $flavor->disk);
?>
