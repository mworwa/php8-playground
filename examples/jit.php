<?php

declare(strict_types=1);

$time_start = microtime(true);
$test = 0;
for ($i = 1; $i <= 1000000000; $i++) {
    $test += $i;
}
$time_end = microtime(true);
$execution_time = ($time_end - $time_start);

echo 'Total Execution Time: ' . $execution_time . ' Seconds';

#php -dopcache.enable_cli=1 -dopcache.jit_buffer_size=100M jit.php
