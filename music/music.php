<html>
	<head>
	<?php $song = $_GET[ 'song' ]; ?>
	</head>
	<body>
<object type="application/x-shockwave-flash" data="http://flash-mp3-player.net/medias/player_mp3_maxi.swf" width="400" height="20">
    <param name="movie" value="http://flash-mp3-player.net/medias/player_mp3_maxi.swf" />
    <param name="bgcolor" value="#f5ffff" />
    <param name="FlashVars" value="mp3=http%3A//themis.kamibu.com/music/<?php echo $song; ?>&amp;width=400&amp;autoplay=1&amp;showstop=1&amp;showinfo=1&amp;showvolume=1&amp;showloading=always&amp;loadingcolor=f50000&amp;bgcolor=f5ffff&amp;bgcolor1=87CEEB" />
</object>
	</body>
</html>