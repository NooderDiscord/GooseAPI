<?php
    $assets = './images/sfw/goose';
    $honkImages = array();
    if(file_exists($assets) && is_dir($assets)) {
        $honkScan = scandir($assets);
        $honkFiles = array_diff($honkScan, array('.', '..'));

        foreach($honkFiles as $file) {
            $filePath = $assets.'/'.$file;
            $ext = pathinfo($filePath, PATHINFO_EXTENSION);
            if($ext=='jpg' || $ext=='png' || $ext=='JPG' || $ext=='PNG' || $ext=='gif') {
                array_push($honkImages, $file);
            }
        }

        $honkCount = count($honkImages) - 1;
        $honkBack = $honkImages[rand(0, $honkCount)];
		echo 'https://api.nooder.gg/images/sfw/goose/'.$honkBack;
    }
?>