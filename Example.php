<?php

declare(strict_types=1);

$value = isset($_GET['value']) ? $_GET['value'] : throw new \InvalidArgumentException('Value not set');
