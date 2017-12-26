<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"D:\phpStudy\WWW\yiqiu\public/../application/index\view\setup\index.html";i:1508824006;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>设置</title>
    <link href="/static/layui/css/layui.css" rel="stylesheet" />
    <script src="/static/layui/layui.js"></script>
</head>
<body>
<form class="layui-form" action="<?php echo url('Setup/index'); ?>" method="post" id="aa">
    <div class="layui-form-item">
        <label class="layui-form-label">房间名称</label>
        <div class="layui-input-block">
            <input type="text" name="room_name" required  lay-verify="required" value="<?php echo $room['room_name']; ?>" autocomplete="off" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">标题</label>
        <div class="layui-input-block">
            <input type="text" name="room_title" required  lay-verify="required" value="<?php echo $room['room_title']; ?>" autocomplete="off" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">关键词</label>
        <div class="layui-input-block">
            <input type="text" name="room_keyword" required  lay-verify="required" value="<?php echo $room['room_keyword']; ?>" autocomplete="off" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">描述</label>
        <div class="layui-input-block">
            <input type="text" name="room_description" required  lay-verify="required" value="<?php echo $room['room_description']; ?>" autocomplete="off" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">公告</label>
        <div class="layui-input-block">
            <input type="text" name="room_notice" required  lay-verify="required" value="<?php echo $room['room_notice']; ?>" autocomplete="off" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item" id="test1">
        <label class="layui-form-label">房间logo</label>
        <img id="logo_img" src="<?php echo $room['room_logo']; ?>" style="max-height: 200px;max-width: 200px;" alt="">
        <input type="hidden" name="room_logo" id="room_logo" value="<?php echo $room['room_logo']; ?>">
        <button type="button" class="layui-btn" >
            <i class="layui-icon">&#xe67c;</i>上传图片
        </button>
    </div>
    <div class="layui-form-item" id="test2">
        <label class="layui-form-label">房间背景</label>
        <img id="bg_img" src="<?php echo $room['room_bg']; ?>" style="max-height: 200px;max-width: 200px;" alt="">
        <input type="hidden" id="room_bg" name="room_bg" value="<?php echo $room['room_bg']; ?>" >
        <button type="button" class="layui-btn" >
            <i class="layui-icon">&#xe67c;</i>上传图片
        </button>
    </div>
    <div class="layui-form-item" id="test3">
        <label class="layui-form-label">课程表</label>
        <img id="kcb_img" src="<?php echo $room['room_kcb']; ?>" style="max-height: 200px;max-width: 200px;" alt="">
        <input type="hidden" id="room_kcb" name="room_kcb" value="<?php echo $room['room_kcb']; ?>" >
        <button type="button" class="layui-btn" >
            <i class="layui-icon">&#xe67c;</i>上传图片
        </button>
    </div>
    <!--
    <div class="layui-form-item">
        <label class="layui-form-label">选择框</label>
        <div class="layui-input-block">
            <select name="city" lay-verify="required">
                <option value=""></option>
                <option value="0">北京</option>
                <option value="1">上海</option>
                <option value="2">广州</option>
                <option value="3">深圳</option>
                <option value="4">杭州</option>
            </select>
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">复选框</label>
        <div class="layui-input-block">
            <input type="checkbox" name="like[write]" title="写作">
            <input type="checkbox" name="like[read]" title="阅读" checked>
            <input type="checkbox" name="like[dai]" title="发呆">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">开关</label>
        <div class="layui-input-block">
            <input type="checkbox" name="switch" lay-skin="switch">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">单选框</label>
        <div class="layui-input-block">
            <input type="radio" name="sex" value="男" title="男">
            <input type="radio" name="sex" value="女" title="女" checked>
        </div>
    </div>
    <div class="layui-form-item layui-form-text">
        <label class="layui-form-label">文本域</label>
        <div class="layui-input-block">
            <textarea name="desc" placeholder="请输入内容" class="layui-textarea"></textarea>
        </div>
    </div>
    -->
    <div class="layui-form-item">
        <div class="layui-input-block">
            <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
        </div>
    </div>
</form>

<script>

    //Demo
    layui.use(['form','upload','jquery'], function(){
        var form = layui.form;
        var upload = layui.upload;
        var $ = layui.$;
        //监听提交
        form.on('submit(formDemo)', function(data){
            console.log(data);
        });

        //执行实例
        upload.render({
            elem: '#test1' //绑定元素
            ,url: '<?php echo url("Upload/image"); ?>' //上传接口
            ,done: function(res){
                //上传完毕回调
                $('#room_logo').val(res.src);
                $('#logo_img').attr('src',res.src);
            }
            ,error: function(){
                //请求异常回调
            }
        });

        upload.render({
            elem: '#test2' //绑定元素
            ,url: '<?php echo url("Upload/image"); ?>' //上传接口
            ,done: function(res){
                //上传完毕回调
                $('#room_bg').val(res.src);
                $('#bg_img').attr('src',res.src);
            }
            ,error: function(){
                //请求异常回调
            }
        });

        upload.render({
            elem: '#test3' //绑定元素
            ,url: '<?php echo url("Upload/image"); ?>' //上传接口
            ,done: function(res){
                //上传完毕回调
                $('#room_kcb').val(res.src);
                $('#kcb_img').attr('src',res.src);
            }
            ,error: function(){
                //请求异常回调
            }
        });
    });
</script>
</body>
</html>