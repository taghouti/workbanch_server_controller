<?php

echo "\n\n[+] Checking the service status";

$start = shell_exec('sc start MySQL57');

if (strlen($start) === 61) {
    echo "\n\n[!] Access denied, run this script as administrator\n\n";
} else if (strlen($start) === 80) {
    shell_exec('sc stop MySQL57');
    echo "\n\n[+] Server stopped\n\n";
} else {
    echo "\n\n[+] Server started\n\n";
}

system('pause');