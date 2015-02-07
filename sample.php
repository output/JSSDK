<?php
require_once "jssdk.php";
$jssdk = new JSSDK("wx1c383f2dfc1a9d3b", "b151508969b376e3ae5f874d58c85e36");
$signPackage = $jssdk->GetSignPackage();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  
</body>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
  /*
   * 注意：
   * 1. 所有的JS接口只能在公众号绑定的域名下调用，公众号开发者需要先登录微信公众平台进入“公众号设置”的“功能设置”里填写“JS接口安全域名”。
   * 2. 如果发现在 Android 不能分享自定义内容，请到官网下载最新的包覆盖安装，Android 自定义分享接口需升级至 6.0.2.58 版本及以上。
   * 3. 完整 JS-SDK 文档地址：http://mp.weixin.qq.com/wiki/7/aaa137b55fb2e0456bf8dd9148dd613f.html
   *
   * 如有问题请通过以下渠道反馈：
   * 邮箱地址：weixin-open@qq.com
   * 邮件主题：【微信JS-SDK反馈】具体问题
   * 邮件内容说明：用简明的语言描述问题所在，并交代清楚遇到该问题的场景，可附上截屏图片，微信团队会尽快处理你的反馈。
   */
  wx.config({
    debug: true,
    appId: '<?php echo $signPackage["appId"];?>',
    timestamp: <?php echo $signPackage["timestamp"];?>,
    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
    signature: '<?php echo $signPackage["signature"];?>',
    jsApiList: [
    'onMenuShareAppMessage'
    ]
  });
  wx.ready(function () {
    // 在这里调用 API
  });

  wx.onMenuShareAppMessage({
    title: '2015京正·中国孕婴童年度行业评选活动', // 分享标题
    desc: '母婴品牌日益丰富，产品品质和安全性受到社会各界关注，谁是您心目中的优秀企业，谁是这个行业的推动者和贡献者？&nbsp;由21届京正·孕婴童展组委会、北京孕婴童用品行业协会、中国贸易报、父母必读杂志社等12家单位共同发起，中国孕婴童行业2015年度颁奖盛典票选活动华丽启动！', // 分享描述
    link: 'http://w.jeemoo.com/jz2015/index.php', // 分享链接
    imgUrl: '', // 分享图标
    type: '', // 分享类型,music、video或link，不填默认为link
    dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
    success: function () { 
        // 用户确认分享后执行的回调函数
    },
    cancel: function () { 
        // 用户取消分享后执行的回调函数
    }
});
</script>
</html>
