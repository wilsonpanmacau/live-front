<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"D:\phpStudy\WWW\yiqiu\public/../application/index\view\jiqiren\add.html";i:1513587843;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>机器人添加</title>
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="format-detection" content="telephone=no">
	<link rel="stylesheet" href="/static/layui/css/layui.css" media="all" />
	<style type="text/css">
		.layui-form-item .layui-inline{ width:33.333%; float:left; margin-right:0; }
		@media(max-width:1240px){
			.layui-form-item .layui-inline{ width:100%; float:none; }
		}
	</style>
</head>
<body class="childrenBody" style="margin-top:50px;">
<form class="layui-form" style="width:80%;" onsubmit="return false;">
	<div class="layui-form-item">
		<label class="layui-form-label">昵称</label>
		<div class="layui-input-block">
			<input type="text" class="layui-input userName" lay-verify="required" placeholder="请输入昵称">
		</div>
	</div>

	<div class="layui-form-item" id="test1">
		<label class="layui-form-label">图片</label>
		<img id="r_img" src="" style="max-height: 200px;max-width: 200px;" alt="">
		<input type="hidden" name="avatar" id="img" value="">
		<button type="button" class="layui-btn" >
			<i class="layui-icon">&#xe67c;</i>上传图片
		</button>
	</div>

	<div class="layui-form-item">

		<div class="layui-inline">
			<label class="layui-form-label">会员等级</label>
			<div class="layui-input-block">
				<select name="userGrade" class="userGrade" lay-filter="userGrade">
					<?php if(is_array($level) || $level instanceof \think\Collection || $level instanceof \think\Paginator): $i = 0; $__LIST__ = $level;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<option value="<?php echo $vo['level']; ?>"><?php echo $vo['name']; ?></option>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</div>
		</div>

	</div>

	<div class="layui-form-item">
		<div class="layui-input-block">
			<button class="layui-btn" onclick="jiqiren()" lay-submit="" lay-filter="addUser">立即提交</button>
			<button type="reset" class="layui-btn layui-btn-primary">重置</button>
		</div>
	</div>
</form>
<script src="/static/js/jquery.js"></script>
<script type="text/javascript" src="/static/layui/layui.js"></script>
<script type="text/javascript" src="/static/yiqiu/js/addUser.js"></script>
<script type="text/javascript">

    function jiqiren(){
        var name = $('.userName').val();
        var levelname = $('select[name="userGrade"]').find('option:selected').html();
        var level = $('select[name="userGrade"]').find('option:selected').val();
		var avatar = $('input[name="avatar"]').val();
        $.post('<?php echo url("Jiqiren/add"); ?>',{name:name,level:level,levelname:levelname,avatar:avatar},function(result){
            result = JSON.parse(result);
            if(result.status=='success'){
                location.href="<?php echo url('Jiqiren/index'); ?>";
            }else{
                layui.use('layer',function(){
                    var layer = layui.layer;
                    layer.msg(result.msg);
                });
            }
        });
    }


    //Demo
    layui.use(['upload','jquery'], function(){
        //执行实例
		var $ = layui.$;
        layui.upload.render({
            elem: '#test1' //绑定元素
            ,url: '<?php echo url("Upload/image"); ?>' //上传接口
            ,done: function(res){
                //上传完毕回调
                $('#img').val(res.src);
                $('#r_img').attr('src',res.src);
            }
            ,error: function(){
                //请求异常回调
            }
        });

    });
</script>
</body>
</html>