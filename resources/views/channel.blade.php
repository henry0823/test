
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
	<title>LIVE</title>
	<script type="text/javascript" src="sewise.player.min.js"></script>
</head>
<body>
	@foreach($title as $key => $t)
		<a href="/live/{{ $name }}/{{ $title[$key] }}">{{ $t }}</a>
	@endforeach
	<div id="player" style="width: 320px; height: 240px; ">
		<script type="text/javascript">
			SewisePlayer.setup({
				server: "live",
				type: "rtmp",
				autostart: "true",
				buffer: 1,
				streamurl: "rtmp://45.32.58.12/live_kao/{{ $url[$key] }}",
		        skin: "liveWhite",
		        claritybutton: "disable",
				title: "{{ $url[$key] }}",
		        fallbackurls:{
	        		m3u8: "http://45.32.58.12/live_gtk/{{ $url[$key] }}.m3u8"
				}
			}, "player");
		</script>
	</div>
	<div style="float: left; width: 100%; padding: 10px 30px; "></div>
</body>
</html>
