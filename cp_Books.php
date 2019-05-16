<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>致青春书屋-欢迎登录</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/cp_Books.css">
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
                if(isset($_SESSION['Info'])):
                ?>
                &nbsp;&nbsp; <span><?php echo $_SESSION['Info']['userName']?></span>
                &nbsp;&nbsp;&nbsp;<a href="DoLogout.php">退出</a>
                <?php else:?>

                <a href="UserLogin.html" class="login">登录</a>
                <a href="register.html">注册</a>
                <?php endif;?>
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
                                    <li><a href="javascript:;">计算机理论</a></li>
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
        <div class="main ">
            <div class="view_path">&nbsp;
                <a href="index.php">首页</a>
                &nbsp;>&nbsp 计算机理论&nbsp;
                <a href="javascript:;">计算机科学理论与基础知识</a>
            </div>
            <div class="main_left">
                <div class="main_title">
                    <span>计算机科学理论与基础知识</span>
                </div>
                <div class="main_sort">
                    <ul>
                        <li><a href="javascript:;">分类</a></li>
                        <li><a href="javascript:;">办公与计算机</a></li>
                        <li><a href="javascript:;">操作系统</a></li>
                        <li><a href="javascript:;">网络与通讯</a></li>
                        <li><a href="javascript:;"> 多媒体与网络开发</a></li>
                        <li><a href="javascript:;">信息系统</a></li>
                        <li><a href="javascript:;">计算机辅助</a></li>
                        <li><a href="javascript:;">安全与加密</a></li>
                        <li><a href="javascript:;">电子商务</a></li>
                        <li><a href="javascript:;">电子娱乐开发</a></li>
                    </ul>
                </div>
            </div>
            <div class="main_right">
                <div class="paixu">
                    <span>排序：</span>
                    <ul>
                        <li class="pai_cur"><a href="javascript:;">综合排序</a></li>
                        <li><a href="javascript:;">价格升序</a></li>
                        <li><a href="javascript:;">销量情况</a></li>
                        <li><a href="javascript:;">出版日期</a></li>
                        <li><a href="javascript:;">人气程度</a></li>
                    </ul>
                </div>
                <div class="books_sorts">
                    <table cellpadding="0" cellspacing="0" border="0">
                        <tbody>
                            <tr>
                                <td style="width:100px">
                                    <a href="javascript:;">
                                        <img src="./images/books_sort/面向资源计算实践.jpg" alt="">
                                    </a>
                                </td>
                                <td>
                                    <li class="result_name">
                                        <a href="javascript:;">(特价书)NetKernel：面向资源计算实践</a>
                                    </li>
                                    <li class="result_dec">
                                        (比)古登斯(Tom Geudens) （著） | <i>2013-10-1</i> 出版 | 2018-12-17 上架
                                    </li>
                                    <li>
                                        <ul>
                                            <li class="result_price">
                                                <b>￥<i>33.12</i>（4.8折）</b>
                                            </li>
                                            <li class="result_buy">
                                                <a class="book_buy" href="javascript:;"></a>
                                                <a class="book_fav" href="javascript:;"></a>

                                            </li>
                                        </ul>
                                    </li>
                                </td>
                            </tr>

                        </tbody>

                    </table>
                    <ul class="pagination pagination-sm pull-right">
                        <li><a href="#">上一页</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">下一页</a></li>
                     </ul>
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
<script src="./js/jquery-1.12.4.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/template-web.js"></script>
<script src="./js/jquery.twbsPagination.min.js"></script>
<!-- 模板创建 -->
<script type="text/html" id="tplTr">
    {{ each list value }}
    <tr indexId={{value.Id}} >
        <td style="width:100px">
            <a href="javascript:;">
                <img src="{{value.b_pic}}" alt="">
            </a>
        </td>
        <td>
            <li class="result_name">
                <a href="books_message.php?id={{value.Id}}">{{value.b_name}}</a>
            </li>
            <li class="result_dec">
                {{value.author}} （著） | <i>{{value.b_date}}</i> 出版 | {{value.b_on}} 上架
            </li>
            <li>
                <ul>
                    <li class="result_price">
                        <b>￥<i>{{value.b_price}}</i></b>
                    </li>
                    <li class="result_buy">
                        <a class="book_buy" href="javascript:;"></a>
                        <a class="book_fav" href="javascript:;"></a>
                    </li>
                </ul>
            </li>
        </td>
    </tr>
    {{/each}}
</script>

<script>
 $(function(){

function  loadData(page){
    $.get({
        url: "admin/api/getBook.php",
        data:{
            pageIndex:page,
            pageSize:7
        },
        dataType: "json",
        success: function (obj) {
            console.log(obj);
            var html = template("tplTr", {list:obj.data});
            $('tbody').html(html);
             //清除上一次页码生成
            $('.pagination').twbsPagination('destroy');
            //生成页码
           $('.pagination').twbsPagination({
             //总页数
             totalPages:obj.count,
             //清除初始化调用事件
             initiateStartPageClick:false,
             //可见页码
             visiblePages: 4,
             startPage: page,
             first:"首页",
             prev:"上一页",
             next:"下一页",
             last:"尾页",
             onPageClick:function(event,page){
               loadData(page);
             }
           });
        }
    });
}
loadData(1);

  $('tbody').on('click',".book_buy",function(){
      alert('已加入购物车！');
  })
  $('tbody').on('click',".book_fav",function(){
      alert('已收藏！');
  })
 })
   

</script>