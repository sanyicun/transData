<?php
require 'vendor/autoload.php';

use Stichoza\GoogleTranslate\TranslateClient;

$tr = new TranslateClient();
$src = file_get_contents('src.txt');
$dest = $tr->setSource('en')->setTarget('zh-CN')->translate($src);
file_put_contents('result.txt', $dest);
