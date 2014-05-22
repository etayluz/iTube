<html><head>
    <style>
    body { margin: 0; }
    </style>
</head>
<body>
    <iframe id="player" frameborder="0" allowfullscreen="1" title="YouTube video player" width="100%" height="100%" src="https://www.youtube.com/embed/Bt9zSfinwFA?enablejsapi=1&amp;modestbranding=1&amp;autoplay=1&amp;iv_load_policy=3&amp;showinfo=0&amp;controls=0&amp;cc_load_policy=0&amp;vq=large&amp;playsinline=1"></iframe>
    <script id="www-widgetapi-script" src="https://s.ytimg.com/yts/jsbin/www-widgetapi-vflqvh1vf.js" async=""></script><script src="https://www.youtube.com/iframe_api"></script>
    <script>
    var player;
    YT.ready(function() {
      player = new YT.Player('player', {
  "playerVars" : {
    "enablejsapi" : 1,
    "modestbranding" : 1,
    "autoplay" : 1,
    "iv_load_policy" : 3,
    "showinfo" : 0,
    "controls" : 0,
    "cc_load_policy" : 0,
    "vq" : "large",
    "playsinline" : 1
  },
  "width" : "100%",
  "videoId" : "Bt9zSfinwFA",
  "events" : {
    "onPlaybackQualityChange" : "onPlaybackQualityChange",
    "onStateChange" : "onStateChange",
    "onError" : "onPlayerError",
    "onReady" : "onReady"
  },
  "height" : "100%"
});
      window.location.href = 'ytplayer://onYouTubeIframeAPIReady';
    });
    function onReady(event) {
        window.location.href = 'ytplayer://onReady?data=' + event.data;
    }
    function onStateChange(event) {
        window.location.href = 'ytplayer://onStateChange?data=' + event.data;
    }

    function onPlaybackQualityChange(event) {
        window.location.href = 'ytplayer://onPlaybackQualityChange?data=' + event.data;
    }
    function onPlayerError(event) {
        window.location.href = 'ytplayer://onError?data=' + event.data;
    }
    </script>

</body></html>