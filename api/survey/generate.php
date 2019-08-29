<?php

header("Content-Type: image/png");
require "../../vendor1/autoload.php";

use Endroid\QrCode\QrCode;

$qrcode = new QrCode($_GET['text']);

echo $qrcode->writeString();
die();