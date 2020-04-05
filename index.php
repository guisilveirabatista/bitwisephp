<?php

require_once('Kpi.php');

$kpi = new Kpi();

echo 'bit1' . ($kpi->isFlagSet(1) == 1 ? 'true' : 'false') . '<br/>';
echo 'bit2' . ($kpi->isFlagSet(2) == 1 ? 'true' : 'false') . '<br/>';
echo 'bit3' . ($kpi->isFlagSet(4) == 1 ? 'true' : 'false') . '<br/>';
echo 'bit4' . ($kpi->isFlagSet(8) == 1 ? 'true' : 'false') . '<br/>';
echo 'bit5' . ($kpi->isFlagSet(16) == 1 ? 'true' : 'false') . '<br/>';
echo 'bit6' . ($kpi->isFlagSet(32) == 1 ? 'true' : 'false') . '<br/>';
echo 'bit7' . ($kpi->isFlagSet(64) == 1 ? 'true' : 'false') . '<br/>';
echo 'bit8' . ($kpi->isFlagSet(128) == 1 ? 'true' : 'false') . '<br/>';
echo 'bit9' . ($kpi->isFlagSet(256) == 1 ? 'true' : 'false') . '<br/>';
echo 'bit10' . ($kpi->isFlagSet(512) == 1 ? 'true' : 'false') . '<br/>';
echo 'bit11' . ($kpi->isFlagSet(1024) == 1 ? 'true' : 'false') . '<br/>';
echo 'bit12' . ($kpi->isFlagSet(2048) == 1 ? 'true' : 'false') . '<br/>';
echo 'bit13' . ($kpi->isFlagSet(4096) == 1 ? 'true' : 'false') . '<br/>';
echo 'bit14' . ($kpi->isFlagSet(8192) == 1 ? 'true' : 'false') . '<br/>';

?>