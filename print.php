<?php
print_r(shell_exec('dir'));

shell_exec('brother_ql -b network -m QL-820NWB -p tcp://192.168.1.80 print -l 62 /var/www/churchcrmprint/label.png');

echo "done";
?>
