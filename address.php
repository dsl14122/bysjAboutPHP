<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>致青春书屋-欢迎登录</title>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/address.css">
</head>

<body>
    <!-- 头部top模块开始 -->
    <div class="topnav ">
        <div class="w">
            <div class="wlecome">
                <span>欢迎光临</span>
                <a href="index.php">致青春书屋</a>
                <?php
                //开启session
                session_start();
                //判断是否传入数据
                if (isset($_SESSION['Info'])) :
                ?>
                &nbsp;&nbsp; <span><?php echo $_SESSION['Info']['userName'] ?></span>
                &nbsp;&nbsp;&nbsp;<a href="UserLogin.html">退出</a>
                <?php else : ?>

                <a href="UserLogin.html" class="login">登录</a>
                <a href="register.html">注册</a>
                <?php endif; ?>
            </div>
            <div class="list">
                <ul>
                    <li><a href="Inform.php">我的致青春</a></li>
                    <li class="line"></li>
                    <li><a href="#">用户信息</a></li>
                    <li class="line"></li>
                    <li><a href="#">收藏夹</a></li>
                    <li class="line"></li>
                    <li><a href="#">我的评论</a></li>
                    <li class="line"></li>
                    <li><a href="#">常见问题</a></li>
                    <li class="line"></li>
                    <li><a href="#">联系我们</a></li>
                </ul>

            </div>
        </div>
    </div>
    <!--头部top模块结束 -->
    <!-- head模块开始 -->
    <div class="header w">
        <div class="logo">
            <h1><a href="#">致青春书屋</a></h1>
        </div>
        <div class="search">
            <input type="text" placeholder="谁的青春不迷茫">
            <a href="#">搜 书</a>
        </div>
        <div class="car">
        <a href="cart.php">购物车</a>
        </div>
        <div class="item">
            <span>热门搜索：</span>
            <ul>
                <li><a href="#">测试</a></li>
                <li><a href="#">前端</a></li>
                <li><a href="#">PHP</a></li>
                <li><a href="#">c++</a></li>
                <li><a href="#">java</a></li>
                <li><a href="#">谁的青春不迷茫</a></li>
            </ul>
        </div>
    </div>
    <!-- head模块结束 -->
    <!-- 导航栏模块开始  -->
    <div class="navBar">
        <div class=" nav  w">
            <div class="dropdown">
                <div class="nav_dd">
                    <span>全部书籍分类</span>
                </div>
                <div class="nav_dt hide ">
                    <ul class="xianshi">
                        <li>
                            <div class="sort_top">
                                <h4>
                                    <em>计算机图书</em>
                                </h4>
                            </div>
                            <div class="sort_bottom">
                                <ul class="cap">
                                    <li><a href="#">程序设计</a></li>
                                    <li class="line"></li>
                                    <li><a href="#">软件工程</a></li>
                                    <li class="line"></li>
                                    <li><a href="#">网络安全</a></li>
                                </ul>
                            </div>
                            <div class="sort_center hide">
                                <span>分类</span>
                                <ul>
                                    <li><a href="cp_Books.php">计算机理论</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">程序设计</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">软件工程</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">操作系统</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">数据库</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">计算机网络</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">计算机安全</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">硬件维护</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">办公软件</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">辅助设计</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">人工智能</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="sort_top">
                                <h4>
                                    <em>经济管理图书</em>
                                </h4>
                            </div>
                            <div class="sort_bottom">
                                <ul class="cap">
                                    <li><a href="javascript:;">管理学</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">经济与金融</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">投资理财</a></li>
                                </ul>
                            </div>
                            <div class="sort_center hide">
                                <span>分类</span>
                                <ul>
                                    <li><a href="javascript:;">管理学</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">经济与金融</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">投资理财</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="sort_top">
                                <h4>
                                    <em>童书</em>
                                </h4>
                            </div>
                            <div class="sort_bottom">
                                <ul class="cap">
                                    <li><a href="javascript:;">儿童文学</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">童话故事</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">必读名著</a></li>
                                </ul>
                            </div>
                            <div class="sort_center hide">
                                <span>分类</span>
                                <ul>
                                    <li><a href="javascript:;">儿童文学</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">童话故事</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">必读名著</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">少儿英语</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">少儿绘本</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">启蒙与认知</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="sort_top">
                                <h4>
                                    <em>文学小说</em>
                                </h4>
                            </div>
                            <div class="sort_bottom">
                                <ul class="cap">
                                    <li><a href="javascript:;">现当代小说</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">世界名著</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">传记</a></li>
                                </ul>
                            </div>
                            <div class="sort_center hide">
                                <span>分类</span>
                                <ul>
                                    <li><a href="javascript:;">现当代小说</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">世界名著</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">传记</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">青春绘本</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">动漫绘本</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="sort_top">
                                <h4>
                                    <em>艺术与摄影</em>
                                </h4>
                            </div>
                            <div class="sort_bottom">
                                <ul class="cap">
                                    <li><a href="javascript:;">摄影</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">绘画</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">书法与字帖</a></li>
                                </ul>
                            </div>
                            <div class="sort_center hide">
                                <span>分类</span>
                                <ul>
                                    <li><a href="javascript:;">摄影</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">绘画</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">书法与字帖</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">鉴定收藏</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">建筑艺术</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">中等职业</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="sort_top">
                                <h4>
                                    <em>心理哲学图书</em>
                                </h4>
                            </div>
                            <div class="sort_bottom">
                                <ul class="cap">
                                    <li><a href="javascript:;">外语</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">哲学</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">自然科普</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">心理学</a></li>
                                </ul>
                            </div>
                            <div class="sort_center hide">
                                <span>分类</span>
                                <ul>
                                    <li><a href="javascript:;">小说</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">摄影器材</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">哲学</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">心理学</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">历史</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">军事</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">素描绘画</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">文学</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">旅游</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">美食</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">运动</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">家庭教育</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">青春文学</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">文化教育</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">时尚健身</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">自然科普</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="sort_top">
                                <h4>
                                    <em>励志与成功</em>
                                </h4>
                            </div>
                            <div class="sort_bottom">
                                <ul class="cap">
                                    <li><a href="javascript:;">成功学</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">心理学</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">心灵励志</a></li>
                                </ul>
                            </div>
                            <div class="sort_center hide">
                                <span>分类</span>
                                <ul>
                                    <li><a href="javascript:;">成功学</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">心理学</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">心灵励志</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">情商情绪</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">女性励志</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">心灵读物</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="sort_top">
                                <h4>
                                    <em>生活</em>
                                </h4>
                            </div>
                            <div class="sort_bottom">
                                <ul class="cap">
                                    <li><a href="javascript:;">家庭育儿</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">运动健身</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">烹饪美食</a></li>
                                </ul>
                            </div>
                            <div class="sort_center hide">
                                <span>分类</span>
                                <ul>
                                    <li><a href="javascript:;">家庭育儿</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">运动健身</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">烹饪美食</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">时尚美容</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="sort_top">
                                <h4>
                                    <em>人文社科</em>
                                </h4>
                            </div>
                            <div class="sort_bottom">
                                <ul class="cap">
                                    <li><a href="javascript:;">哲学宗教</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">历史</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">政治</a></li>
                                </ul>
                            </div>
                            <div class="sort_center hide">
                                <span>分类</span>
                                <ul>
                                    <li><a href="javascript:;">哲学宗教</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">历史</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">政治</a></li>

                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="nav_items">
                <ul>
                    <li><a href="index.php">首页</a></li>
                    <li class="line"></li>
                    <li><a href="javascript:;">新书</a></li>
                    <li class="line"></li>
                    <li><a href="javascript:;">特价书</a></li>
                    <li class="line"></li>
                    <li><a href="javascript:;">借阅</a></li>
                    <li class="line"></li>
                    <li><a href="javascript:;">教材</a></li>
                    <li class="line"></li>
                    <li><a href="javascript:;">电子书</a></li>
                    <li class="line"></li>
                    <li><a href="javascript:;">在线阅读</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- 导航栏模块结束  -->

    <!-- main模块开始 -->
    <div class=" w clearfix">
        <div class="main clearfix">
            <div class="view_path">&nbsp;
                <a href="index.php">我的致青春</a>
                &nbsp;>&nbsp;
                <a href="javascript:;">个人资料</a>
            </div>
            <div class="main_left">
                <div class="main_title">
                    <span>我的致青春</span>
                </div>
                <div class="main_sort">
                    <dl>
                        <dt>&nbsp;账号管理</dt>
                        <dd id="inform"><a href="Inform.php">个人信息</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>></i></dd>
                        <dd id="cart"><a href="cart.php">我的购物车</a>&nbsp;&nbsp;&nbsp;&nbsp;<i>></i></dd>
                        <dd id="address"><a href="address.php">收货地址</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>></i>
                        </dd>
                        <dd id="collect"><a href="collect.php">我的收藏</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>></i>
                        </dd>
                        <dd id="comment"><a href="javascript:;">我的评论</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>></i>
                        </dd>
                    </dl>
                </div>
            </div>
            <div class="main_right">
                <div class="inform_tit">
                    <span>收货地址</span>
                </div>
                <div class="add_address">
                    <h3>新增收货地址</h3>
                    <form action="">
                        <div class="form-group">

                            <div id="one">
                                <label for="street">所在地区：</label>
                                <select id="province" name=""></select>
                                <select id="city" name=""></select>
                                <select id="district" name=""></select>
                            </div>


                        </div>
                        <div class="form-group">
                            <label for="street">详细地址：</label>
                            <input name="street" id="street" class="form-control" placeholder="请输入地址信息" type="text">
                        </div>
                        <div class="form-group">
                            <label for="post">邮编地址：</label>
                            <input name="post" id="post" class="form-control" placeholder="请填写邮编" type="text">
                        </div>
                        <div class="form-group">
                            <label for="nickname">收货人姓名：</label>
                            <input name="nickname" id="nickname" class="form-control" placeholder="长度不超过25个字符"
                                type="text">
                        </div>
                        <div class="form-group">
                            <label for="mobile">手机号码：</label>
                            <input name="mobile" id="mobile" class="form-control" placeholder="请输入手机号码" type="text">
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn-save">保存</button>
                        </div>
                    </form>
                </div>
                <div class="addressList">
                    <table>
                        <colgroup>
                            <col style="width:70px">
                            <col>
                            <col style="width:200px">
                            <col style="width:100px">
                            <col style="width:140px">
                            <col style="width:110px">
                        </colgroup>
                        <thead>
                            <tr>
                                <th rowspan="1">收货人</th>
                                <th rowspan="1">所在地区</th>
                                <th rowspan="1">详细地址</th>
                                <th rowspan="1">邮编</th>
                                <th rowspan="1">手机</th>
                                <th rowspan="1">操作</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>戴龙</td>
                                <td>广东省 深圳市 宝安区 </td>
                                <td>新安街道自由路北巷5号东方建富大厦东方公寓6楼8821</td>
                                <td>000000</td>
                                <td>123456789</td>
                                <td>
                                    <a href="javascript:;">修改</a>
                                    <span>|</span>
                                    <a href="javascript:;">删除</a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <!-- main模块结束 -->
    <!-- footer模块开始 -->
    <div class="footer">
        <div class="w">
            <div class="footer_top">
                <dl>
                    <dt>新手指南</dt>
                    <dd><a href="#">购物流程</a></dd>
                    <dd><a href="#">会员介绍</a></dd>
                    <dd><a href="#">联系我们</a></dd>
                    <dd><a href="#">常见问题</a></dd>
                </dl>
                <dl>
                    <dt>配送方式</dt>
                    <dd><a href="#">配送费收取标准</a></dd>
                    <dd><a href="#">缺货说明</a></dd>
                    <dd><a href="#">订单处理方式</a></dd>
                    <dd><a href="#">配送服务查询</a></dd>
                </dl>
                <dl>
                    <dt>支付方式</dt>
                    <dd><a href="#">在线支付</a></dd>
                    <dd><a href="#">货到付款</a></dd>
                    <dd><a href="#">分期付款</a></dd>
                    <dd><a href="#">邮政汇款</a></dd>
                </dl>
                <dl>
                    <dt>售后服务</dt>
                    <dd><a href="#">售后政策</a></dd>
                    <dd><a href="#">退款说明</a></dd>
                    <dd><a href="#">退换货方式</a></dd>
                    <dd><a href="#">取消订单</a></dd>
                </dl>
                <dl>
                    <dt>关于我们</dt>
                    <dd><a href="#">联系我们</a></dd>
                    <dd><a href="#">诚聘英才</a></dd>
                </dl>
            </div>
            <div class="footer_bottom">
                <div class="footer_nav">
                    <a href="#">本站首页</a>
                    <span>|</span>
                    <a href="#">帮助中心</a>
                    <span>|</span>
                    <a href="#">联系我们</a>
                    <span>|</span>
                    <a href="#">招聘人才</a>
                </div>
                <div class="footer_copyright">
                    <span>Copyright © 致青春 2018-2019, All Rights Reservrd </span>
                </div>
                <div class="footer_end">
                    <span>
                        致青春 DSL.COM 版权所有
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- footer模块结束 -->
</body>

</html>
<script src="js/jquery-1.12.4.js"></script>
<script src="./js/distpicker.data.js"></script>
<script src="./js/distpicker.js"></script>
<script src="./js/template-web.js"></script>
<!-- 创建模板 -->
<script type="text/html" id="tplTr">
    {{each list value}}
    <tr id='{{value.Id}}'>
        <td>{{value.ad_nickname}}</td>
        <td>{{value.ad_address}} </td>
        <td>{{value.ad_street}}</td>
        <td>{{value.ad_post}}</td>
        <td>{{value.ad_mobile}}</td>
        <td>
            <a href="javascript:;">修改</a>
            <span>|</span>
            <a class='delete' data-id="{{value.Id}}">删除</a>
        </td>
    </tr>
    {{/each}}
</script>
<script>
    $(function () {
        init();
        Address();
        getAddress();
        deleteAddress();

        function init() {
            $('#one').distpicker({
                province: "江西省",
                city: "抚州市",
                district: "临川区"
            });

        }
        //实现添加收货地址的功能函数
        function Address() {
            //  需求分析
            /*  1.给按钮注册一个点击事件 
             2.获取各文本的输入信息
             3.调用API，判读信息是否正确
             4.通过判断，渲染到页面文件中
             5. 弹出提示框，并重新加载页面 
              */
            // 1.给按钮注册一个点击事件 
            $('.btn-save').on('click', function () {
                //2.获取输入文本信息
                //2.1省份地址
                var city1 = document.querySelector('#province').selectedOptions[0].innerHTML;
                var city2 = document.querySelector('#city').selectedOptions[0].innerHTML;
                var city3 = document.querySelector('#district').selectedOptions[0].innerHTML;
                // console.log(city1);
                // console.log(city2);
                // console.log(city3);
                var address = city1 + city2 + city3;

                //2.2详细街道
                var street = $('#street').val().trim();
                if (!street) {
                    alert('详细地址不允许为空！');
                    return;
                }

                //2.3邮箱
                var post = $('#post').val().trim();
                if (!post) {
                    alert('邮箱不允许为空！');
                    return;
                }
                //2.4收件人
                var nickname = $('#nickname').val().trim();
                if (!nickname) {
                    alert('请输入收货人！');
                    return;
                }
                //2.5手机号码
                var mobile = $('#mobile').val().trim();
                if (!mobile) {
                    alert('手机号不允许为空！');
                    return;
                }
                //  3.调用API，判读信息是否正确
                $.ajax({
                    type: 'post',
                    url: './admin/api/addAddress.php',
                    data: {
                        nickname: nickname,
                        address: address,
                        street: street,
                        post: post,
                        mobile: mobile,
                    },
                    dataType: 'json',
                    success: function (obj) {
                        console.log(obj);

                        if (obj.code == '10000') {
                            // 5. 弹出提示框，并重新加载页面 
                            alert('添加收货地址成功');
                            setTimeout(() => {
                                location = 'address.php';
                            }, 500);

                        } else {
                            alert('地址保存出错le！');
                        }

                    }
                });
            })
        }
        //实现查询数据的功能函数
        function getAddress() {
            //  需求分析
            // 1.调用API接口，查询数据库信息
            // 2.将数据渲染到页面上
            $.ajax({
                url: './admin/api/getAddress.php',
                dataType: 'json',
                success: function (data) {
                    // console.log(data);
                    var html = template('tplTr', {
                        list: data
                    });
                    $('.addressList tbody').html(html);

                }

            })
        }

        //实现删除收货地址的功能函数
        function deleteAddress() {
            //    需求分析
            //   1.给按钮注册点击事件
            $('tbody').on('click', 'a.delete', function () {
                // 2.获取自定义标签的id
                var id = $(this).data('id');
                //  console.log(id);
                $.ajax({
                    url: './admin/api/deleteAddress.php',
                    data: {
                        id: id
                    },
                    dataType: 'json',
                    success: function (data) {
                        if (data.msg == 'ok') {
                            alert('删除成功！');
                            setTimeout(() => {
                                location = 'address.php';
                            }, 500);
                        } else {
                            alert('删除失败！');
                        }

                    }
                })
            })

        }

        // 实现收货地址修改的功能函数
        function editorAddress() {
            
          }
    })
</script>