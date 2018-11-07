<!DOCTYPE html>
<html>
<head>
	<title>VideoPlayer</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/video.css">
    <link rel="stylesheet" type="text/css" href="https://at.alicdn.com/t/font_884665_myedel9jrs.css">
</head>
<body>
<div class="pure-g">
    <div class="pure-u-1">
        <div class="player">
            <video id="player" width="100%" height="100%">您的浏览器不支持HTML5
                <source src="video/video.mp4"></source>
            </video>
            <div class="pure-g" id="controller" style="margin-top: 0px;">
                <div class="pure-u-1-12" style="float: left; margin-top: 2px; width: 20px;">
                    <span id="play" class="iconfont icon-bofang" style="color: white; font-size: 20px; margin-left: 5px;margin-bottom: 0px;"></span>
                </div>
                <div class="pure-u-13-24 overflow-h" style="margin-left: 25px; width: 50%;">
                    <div id="progressBar" class="controlBar">
                        <div id="innerBar" class="controlInner"></div>
                    </div>
                </div>
                <div class="pure-u-1-4">
                    <span id="timer">0:00</span>
                    <span id="volume" class="iconfont icon-shengyin" style="color: black; margin-top: 2px; font-size: 20px;"></span>
                    <div id="volume-control" class="controlBar" style="width: 10%;">
                        <div id="volume-inner" class="controlInner"></div>
                    </div>
                </div>
                <div class="pure-u-1-8 overflow-h" style="margin-top: 2px; margin-left: 15px;">
                    <a href="downloadFile.php?f=f" title="下载课件">
                        <span id="download" class="iconfont icon-xiazai1" style="color: black; font-size: 20px; margin-left: 5px;">
                                
                        </span>
                    </a>
                    <span id="expand" class="iconfont icon-quanping" style="color: black; font-size: 20px; margin-left: 5px;"></span>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="./js/jquery-1.9.0.min.js"></script>
<script src="./js/video.js"></script>

</body>
</html>