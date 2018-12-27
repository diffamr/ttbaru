<?php
function kntl($ticket, $jumlah, $jeda){
    $x = 0; 
    while($x < $jumlah) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"http://nandrbiz1.com/ttnews.php?ticket=".$ticket);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        $server_output = curl_exec ($ch);
        curl_close ($ch);
        echo $server_output."\n";
        sleep($jeda);
        $x++;
        flush();
    }
}
echo 
"
===================================================
	         NUYUL COIN TTNEWS
            CREATED BY GUSRYAN PADRIANSYAH  
===================================================
\n";
echo "Ticket: ";
$ticket = trim(fgets(STDIN));
echo "Jumlah: ";
$jumlah = trim(fgets(STDIN));
echo "Jeda? 0-999 (ex:15): ";
$jeda = trim(fgets(STDIN));
$pukis = kntl($ticket, $jumlah, $jeda);
print $pukis;
print "DONE\n";
?>