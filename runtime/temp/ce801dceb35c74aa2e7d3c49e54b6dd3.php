<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\phpStudy\WWW\yiqiu\public/../application/index\view\index\mobile.html";i:1513763802;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.5" />
    <title>Title</title>
    <link rel="stylesheet" href="/static/css/mobile.css">
    <link rel="stylesheet" href="/static/layui/css/layui.css">
</head>
<body>
<div class="main">
    <div class="head">
        <a class="logo" href="/">
            <img src="https://i.h2.pdim.gs/f89ab1ce63538491ebec491a509f71ef.png" alt="">
        </a>
        <a class="login" href="/">登录/注册</a>
    </div>
    <div class="live">
        <gs:video-live id="videoComponent" site="shrz888.gensee.com" ctx="webcast" ownerid="0c870b0f9ebb46318bdac9de97e4eae3" uname="" authcode="" class="gs-sdk-widget"><iframe id="97ba1043712e4c7e803992db0ce6eca7" frameborder="0" width="100%" height="100%" name="video_videoComponent_0c870b0f9ebb46318bdac9de97e4eae3_" src="http://shrz888.gensee.com//sdk/site/sdk/media?ownerid=0c870b0f9ebb46318bdac9de97e4eae3&amp;groupId=&amp;android=false&amp;widgetid=videoComponent&amp;uname=visitor_zCzOqS&amp;appName=&amp;uid=9901606030&amp;sc=0&amp;video=&amp;lang=&amp;bar=&amp;bgimg=&amp;compress=false&amp;showChatInAnyCase=false&amp;stream=&amp;userdata=&amp;btnimg="></iframe></gs:video-live>
    </div>
    <div class="chat">
        <div class="chat-head">
            <div class="chats">
                <div class="item bt cur">聊天</div>
            </div>
            <div class="">
                <div class="item">实时数据</div>
            </div>
            <div class="">
                <div class="item">在线客服</div>
            </div>
        </div>
    </div>
</div>

</body>
<script type="text/javascript" src="/static/js/jquery.js"></script>
<script>
    function scheme(){
        var width = $(window).width();
        var height = $(window).height();
        height-=$('.head').height();
        $('.live').height(height*0.4);
        $('.chat').height(height*0.6);
    }
    $(window).load(function(){
        scheme();
    });
    $(window).resize(function(){
        scheme();
    });

    $('.item').click(function(){
        $('.item').removeClass('cur');
        $('.item').removeClass('bt');
        $(this).addClass('cur');
        $(this).addClass('bt');
    });
</script>
</html>