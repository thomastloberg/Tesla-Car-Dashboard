<?php 

$url = ($_SERVER['SERVER_NAME'] === 'localhost') ? 'localhost/tesla/' : $_SERV‌​ER['SERVER_NAME'];
$file_dir = ($_SERVER['SERVER_NAME'] === 'localhost') ? '/tesla' : '';


?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
	<head> 
		<title>Tesla Car Dashboard</title>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="<?php echo $file_dir; ?>/src/img/tesla.png?refresh=<?php echo time(); ?>" /></head>
		<link rel="stylesheet" href="<?php echo $file_dir; ?>/src/css/style.css?refresh=<?php echo time(); ?>" type="text/css" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script src="<?php echo $file_dir; ?>/src/js/index.js?refresh=<?php echo time(); ?>" type="text/javascript" defer></script>
	</head>
    
	<body>
        <div class="header">Underholdning</div>
        <div class="link" onClick="window.location = 'https://youtube.com/';" style="background-image: url('<?php echo $file_dir; ?>/src/img/youtube.png');"></div>
        <div class="link" onClick="window.location = 'https://viaplay.no/';" style="background-image: url('<?php echo $file_dir; ?>/src/img/viaplay2.webp');"></div>
        <div class="link" onClick="window.location = 'https://www.twitch.tv/';" style="background-image: url('<?php echo $file_dir; ?>/src/img/twitch.jpg'); background-color: #9147FF;"></div>
        <div class="link" onClick="window.location = 'https://twe.no/';" style="background-image: url('<?php echo $file_dir; ?>/src/img/t-we.jpg');"></div>
        <div class="link" onClick="window.location = 'https://play.tv2.no/';" style="background-image: url('<?php echo $file_dir; ?>/src/img/tv2play.png'); background-color: #6F03FF;"></div>
        <div class="link" onClick="window.location = 'https://teliaplay.no/';" style="background-image: url('<?php echo $file_dir; ?>/src/img/teliaplay.png');"></div>
        <div class="link" onClick="window.location = 'https://www.strim.no/';" style="background-image: url('<?php echo $file_dir; ?>/src/img/strim.png');"></div>
        <div class="link" onClick="window.location = 'https://www.rikstv.no/';" style="background-image: url('<?php echo $file_dir; ?>/src/img/rikstv.jpg');"></div>
        <div class="link" onClick="window.location = 'https://www.primevideo.com/';" style="background-image: url('<?php echo $file_dir; ?>/src/img/primevideo.png');"></div>
        <div class="link" onClick="window.location = 'https://www.plex.tv/';" style="background-image: url('<?php echo $file_dir; ?>/src/img/plex.png');"></div>
        <div class="link" onClick="window.location = 'https://tv.nrk.no/';" style="background-image: url('<?php echo $file_dir; ?>/src/img/nrk.jpg');"></div>
        <div class="link" onClick="window.location = 'https://www.hulu.com/';" style="background-image: url('<?php echo $file_dir; ?>/src/img/hulu.jpg');"></div>
        <div class="link" onClick="window.location = 'https://www.hbomax.com/';" style="background-image: url('<?php echo $file_dir; ?>/src/img/hbomax.webp');"></div>
        <div class="link" onClick="window.location = 'https://www.disneyplus.com/';" style="background-image: url('<?php echo $file_dir; ?>/src/img/disney+.png');"></div>
        <div class="link" onClick="window.location = 'https://www.discoveryplus.com/';" style="background-image: url('<?php echo $file_dir; ?>/src/img/discovery+.png');"></div>
        <div class="link" onClick="window.location = 'https://tv.altibox.no/';" style="background-image: url('<?php echo $file_dir; ?>/src/img/altibox.png');"></div>
        <div class="link" onClick="window.location = 'https://www.paramountplus.com/';" style="background-image: url('<?php echo $file_dir; ?>/src/img/paramount.webp'); background-color: #1164FB;"></div>
        <div class="link" onClick="window.location = 'https://www.netflix.com/';" style="background-image: url('<?php echo $file_dir; ?>/src/img/netflix.webp');"></div>

        <div class="header">Navigering</div>
        <div class="link" onClick="window.location = 'https://www.google.no/maps';" style="background-image: url('<?php echo $file_dir; ?>/src/img/maps.webp?v=1.0.1');"></div>
        <div class="link" onClick="window.location = 'https://www.tesla.com/trips';" style="background-image: url('<?php echo $file_dir; ?>/src/img/tesla.png'); background-color: #E31937;"></div>
        <div class="link" onClick="window.location = 'https://www.tesla.com/no_no/findus?v=2';" style="background-image: url('<?php echo $file_dir; ?>/src/img/supercharger.jpg');"></div>
        <div class="link" onClick="window.location = 'https://abetterrouteplanner.com/';" style="background-image: url('<?php echo $file_dir; ?>/src/img/abetterrouteplanner.png?v=1.0.1');"></div>

        <div class="header">Verktøy</div>
        <div class="link" onClick="window.location = 'https://google.com/';" style="background-image: url('<?php echo $file_dir; ?>/src/img/google.jpg?v=1.0.2');"></div>
        <div class="link" onClick="window.location = 'https://gmail.google.com/';" style="background-image: url('<?php echo $file_dir; ?>/src/img/Gmail.png?v=1.0.0');"></div>
        <div class="link" onClick="window.location = 'https://calendar.google.com/';" style="background-image: url('<?php echo $file_dir; ?>/src/img/kalender.png');"></div>
        <div class="link" onClick="window.location = 'https://translate.google.no/';" style="background-image: url('<?php echo $file_dir; ?>/src/img/translate.png?v=1.0.0');"></div>

        <div class="controls">
            <div class="fullscreen" onClick="window.location = 'https://www.youtube.com/redirect?q=https://tesla.tloberg.net/?fs';">
                Fullskjerm
            </div>
            <div class="switch">
                <label class="theme-switch" for="checkbox">
                    <input type="checkbox" id="checkbox" />
                    <div class="slider round"></div>
                </label>
            </div>
        </div>
        <div class="sign" onClick="window.location = 'https://tloberg.net/';">
            <?php echo date("Y"); ?> &copy; TLoberg
        </div>
	</body>
</html>