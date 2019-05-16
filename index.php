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
    <!-- <base target="_blank"> -->
</head>

<body>
    <!-- 头部top模块开始 -->
    <div class="topnav ">
        <div class="w">
            <div class="wlecome">
                <span>欢迎光临</span>
                <a href="#">致青春书屋</a>
                <?php
                //开启session
                session_start();
                //判断是否传入数据
                if(isset($_SESSION['Info'])):
                ?>
                &nbsp;&nbsp;<span><?php echo $_SESSION['Info']['userName']?></span>
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
                <div class="nav_dt  ">
                    <ul class="xianshi">
                        <li>
                            <div class="sort_top">
                                <h4>
                                    <em>计算机图书</em>
                                </h4>
                            </div>
                            <div class="sort_bottom">
                                <ul class="cap">
                                    <li><a href="javascript:;">程序设计</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">软件工程</a></li>
                                    <li class="line"></li>
                                    <li><a href="javascript:;">网络安全</a></li>
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
                    <li><a href="#">首页</a></li>
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
    <!-- main模块部分开始 -->
    <div class="w">
        <div class="main clearfix">
            <div class="banner clearfix ">
                <div class="focus">
                   <div class='lbt' id="lbt" >
                   <ul>
                        <div class="focus_top">
                                <a href="#"><img src="images/首页图片/轮播图/lb01.jpg" alt=""></a>
                            </div>
                            <div class="focus_center">
                                <a href="#"><img src="images/首页图片/轮播图/lb01_1.jpg" alt=""></a>
                                <a href="#"><img src="images/首页图片/轮播图/lb01_2.jpg" alt=""></a>
                                <a href="#"><img src="images/首页图片/轮播图/lb01_3.jpg" alt=""></a>
                            </div>
                   </ul>
                   <ul>
                        <div class="focus_top">
                                <a href="#"><img src="images/首页图片/轮播图/lb02.jpg" alt=""></a>
                            </div>
                            <div class="focus_center">
                                <a href="#"><img src="images/首页图片/轮播图/lb02_1.jpg" alt=""></a>
                                <a href="#"><img src="images/首页图片/轮播图/lb02_2.jpg" alt=""></a>
                                <a href="#"><img src="images/首页图片/轮播图/lb02_3.jpg" alt=""></a>
                            </div>
                   </ul>
                   <ul>
                        <div class="focus_top">
                                <a href="#"><img src="images/首页图片/轮播图/lb03.png" alt=""></a>
                            </div>
                            <div class="focus_center">
                                <a href="#"><img src="images/首页图片/轮播图/lb03_1.jpg" alt=""></a>
                                <a href="#"><img src="images/首页图片/轮播图/lb03_2.jpg" alt=""></a>
                                <a href="#"><img src="images/首页图片/轮播图/lb03_3.jpg" alt=""></a>
                            </div>
                   </ul>
                   <ul>
                        <div class="focus_top">
                                <a href="#"><img src="images/首页图片/轮播图/lb04.jpg" alt=""></a>
                            </div>
                            <div class="focus_center">
                                <a href="#"><img src="images/首页图片/轮播图/lb04_1.jpg" alt=""></a>
                                <a href="#"><img src="images/首页图片/轮播图/lb04_2.jpg" alt=""></a>
                                <a href="#"><img src="images/首页图片/轮播图/lb04_3.jpg" alt=""></a>
                            </div>
                   </ul>
                   <ul>
                        <div class="focus_top">
                                <a href="#"><img src="images/首页图片/轮播图/lb05.png" alt=""></a>
                            </div>
                            <div class="focus_center">
                                <a href="#"><img src="images/首页图片/轮播图/lb05_1.jpg" alt=""></a>
                                <a href="#"><img src="images/首页图片/轮播图/lb05_2.jpg" alt=""></a>
                                <a href="#"><img src="images/首页图片/轮播图/lb05_3.jpg" alt=""></a>
                            </div>
                   </ul>
                   <ul>
                        <div class="focus_top">
                                <a href="#"><img src="images/首页图片/轮播图/lb06.jpg" alt=""></a>
                            </div>
                            <div class="focus_center">
                                <a href="#"><img src="images/首页图片/轮播图/lb06_1.jpg" alt=""></a>
                                <a href="#"><img src="images/首页图片/轮播图/lb06_2.jpg" alt=""></a>
                                <a href="#"><img src="images/首页图片/轮播图/lb06_3.jpg" alt=""></a>
                            </div>
                   </ul>
                   <ul>
                        <div class="focus_top">
                                <a href="#"><img src="images/首页图片/轮播图/lb07.png" alt=""></a>
                            </div>
                            <div class="focus_center">
                                <a href="#"><img src="images/首页图片/轮播图/lb07_1.jpg" alt=""></a>
                                <a href="#"><img src="images/首页图片/轮播图/lb07_2.jpg" alt=""></a>
                                <a href="#"><img src="images/首页图片/轮播图/lb07_3.jpg" alt=""></a>
                            </div>
                   </ul>
                   </div>
                    <div class="focus_bottom" >
                        <ul id="lb_ul">
                            <li class="cur">1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                            <li>5</li>
                            <li>6</li>
                            <li>7</li>
                        </ul>
                    </div>
                </div>
                <div class="newflash">
                    <div class="newflash_tit">
                        <a href="#">更多</a>
                    </div>
                    <div class="newflash_list">
                        <ul>
                            <li><a href="javascript:;">满100-10 满200-30</a></li>
                            <li><a href="javascript:;">按需印刷 移动端全场9折</a></li>
                            <li><a href="javascript:;">满88元送赠书</a></li>
                            <li><a href="javascript:;">智慧的疆界：从图灵机到人工智能</a></li>
                            <li><a href="javascript:;">全球互联网技术大全_推荐书单</a></li>
                            <li><a href="javascript:;">分布式机器学习：算法、理论与实践</a></li>
                            <li><a href="javascript:;">世界金融史：泡沫与股市</a></li>
                            <li><a href="javascript:;">计算机科技套装书</a></li>
                            <li><a href="javascript:;">学Linux：MySQL入门与提高实践</a></li>
                            <li><a href="javascript:;">人工智能+：AI如何重塑未来</a></li>
                            <li><a href="javascript:;">数据即未来：大数据王者之道</a></li>
                            <li><a href="javascript:;">谁的青春不迷茫</a></li>
                            <li><a href="javascript:;">从你的全世界路过 </a></li>
                            <li><a href="javascript:;">深入分布式缓存</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="main_nav">
                <h4>预售排行</h4>
                <h4>精选套装</h4>
                <h4>新书排行</h4>
                <h4>关注排行</h4>
                <h4>热门收藏</h4>
                <h4></h4>
                <h4></h4>
                <h4></h4>
                <div class="tab_1">
                    <div class="book">
                        <ul>
                            <li><a href="#">
                                    <img src="images/首页图片/books/qrsxtrjsj.jpg" alt="">
                                    <p>实时嵌入式系统软件设计</p>
                                    <p>
                                        <span class="book_price">￥99</span>
                                        <span class="book_dis">￥89.9</span>
                                    </p>
                                </a></li>
                            <li><a href="#">
                                    <img src="images/首页图片/books/Effective.jpg" alt="">
                                    <p>Effective Java中文版（原书第3版）</p>
                                    <p>
                                        <span class="book_price">￥109</span>
                                        <span class="book_dis">￥85.9</span>
                                    </p>
                                </a></li>
                            <li><a href="#">
                                    <img src="images/首页图片/books/lnh_MySQL.jpg" alt="">
                                    <p>跟老男孩学Linux运维</p>
                                    <p>
                                        <span class="book_price">￥99</span>
                                        <span class="book_dis">￥69.9</span>
                                    </p>
                                </a></li>
                            <li><a href="#">
                                    <img src="images/首页图片/books/srljytf.jpg" alt="">
                                    <p>深入理解以太坊</p>
                                    <p>
                                        <span class="book_price">￥79</span>
                                        <span class="book_dis">￥55.9</span>
                                    </p>
                                </a></li>
                            <li><a href="#">
                                    <img src="images/首页图片/books/Ryy.jpg" alt="">
                                    <p>R语言：数据可视化与统计分析基础</p>
                                    <p>
                                        <span class="book_price">￥69</span>
                                        <span class="book_dis">￥48.9</span>
                                    </p>
                                </a></li>
                        </ul>
                    </div>
                </div>
                <div class="tab_2" style="display:none">
                        <div class="book">
                            <ul>
                                <li><a href="#">
                                        <img src="images/首页图片/books/qrsxtrjsj.jpg" alt="">
                                        <p>实时嵌入式系统软件设计</p>
                                        <p>
                                            <span class="book_price">￥99</span>
                                            <span class="book_dis">￥89.9</span>
                                        </p>
                                    </a></li>
                                <li><a href="#">
                                        <img src="images/首页图片/books/Effective.jpg" alt="">
                                        <p>Effective Java中文版（原书第3版）</p>
                                        <p>
                                            <span class="book_price">￥109</span>
                                            <span class="book_dis">￥85.9</span>
                                        </p>
                                    </a></li>
                                <li><a href="#">
                                        <img src="images/首页图片/books/lnh_MySQL.jpg" alt="">
                                        <p>跟老男孩学Linux运维</p>
                                        <p>
                                            <span class="book_price">￥99</span>
                                            <span class="book_dis">￥69.9</span>
                                        </p>
                                    </a></li>
                                <li><a href="#">
                                        <img src="images/首页图片/books/srljytf.jpg" alt="">
                                        <p>深入理解以太坊</p>
                                        <p>
                                            <span class="book_price">￥79</span>
                                            <span class="book_dis">￥55.9</span>
                                        </p>
                                    </a></li>
                                <li><a href="#">
                                        <img src="images/首页图片/books/Ryy.jpg" alt="">
                                        <p>R语言：数据可视化与统计分析基础</p>
                                        <p>
                                            <span class="book_price">￥69</span>
                                            <span class="book_dis">￥48.9</span>
                                        </p>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                <div class="tab_3" style="display:none">
                            <div class="book">
                                <ul>
                                    <li><a href="#">
                                            <img src="images/首页图片/books/qrsxtrjsj.jpg" alt="">
                                            <p>实时嵌入式系统软件设计</p>
                                            <p>
                                                <span class="book_price">￥99</span>
                                                <span class="book_dis">￥89.9</span>
                                            </p>
                                        </a></li>
                                    <li><a href="#">
                                            <img src="images/首页图片/books/Effective.jpg" alt="">
                                            <p>Effective Java中文版（原书第3版）</p>
                                            <p>
                                                <span class="book_price">￥109</span>
                                                <span class="book_dis">￥85.9</span>
                                            </p>
                                        </a></li>
                                    <li><a href="#">
                                            <img src="images/首页图片/books/lnh_MySQL.jpg" alt="">
                                            <p>跟老男孩学Linux运维</p>
                                            <p>
                                                <span class="book_price">￥99</span>
                                                <span class="book_dis">￥69.9</span>
                                            </p>
                                        </a></li>
                                    <li><a href="#">
                                            <img src="images/首页图片/books/srljytf.jpg" alt="">
                                            <p>深入理解以太坊</p>
                                            <p>
                                                <span class="book_price">￥79</span>
                                                <span class="book_dis">￥55.9</span>
                                            </p>
                                        </a></li>
                                    <li><a href="#">
                                            <img src="images/首页图片/books/Ryy.jpg" alt="">
                                            <p>R语言：数据可视化与统计分析基础</p>
                                            <p>
                                                <span class="book_price">￥69</span>
                                                <span class="book_dis">￥48.9</span>
                                            </p>
                                        </a></li>
                                </ul>
                            </div>
                    </div>
                <div class="tab_4" style="display:none">
                            <div class="book">
                                <ul>
                                    <li><a href="#">
                                            <img src="images/首页图片/books/qrsxtrjsj.jpg" alt="">
                                            <p>实时嵌入式系统软件设计</p>
                                            <p>
                                                <span class="book_price">￥99</span>
                                                <span class="book_dis">￥89.9</span>
                                            </p>
                                        </a></li>
                                    <li><a href="#">
                                            <img src="images/首页图片/books/Effective.jpg" alt="">
                                            <p>Effective Java中文版（原书第3版）</p>
                                            <p>
                                                <span class="book_price">￥109</span>
                                                <span class="book_dis">￥85.9</span>
                                            </p>
                                        </a></li>
                                    <li><a href="#">
                                            <img src="images/首页图片/books/lnh_MySQL.jpg" alt="">
                                            <p>跟老男孩学Linux运维</p>
                                            <p>
                                                <span class="book_price">￥99</span>
                                                <span class="book_dis">￥69.9</span>
                                            </p>
                                        </a></li>
                                    <li><a href="#">
                                            <img src="images/首页图片/books/srljytf.jpg" alt="">
                                            <p>深入理解以太坊</p>
                                            <p>
                                                <span class="book_price">￥79</span>
                                                <span class="book_dis">￥55.9</span>
                                            </p>
                                        </a></li>
                                    <li><a href="#">
                                            <img src="images/首页图片/books/Ryy.jpg" alt="">
                                            <p>R语言：数据可视化与统计分析基础</p>
                                            <p>
                                                <span class="book_price">￥69</span>
                                                <span class="book_dis">￥48.9</span>
                                            </p>
                                        </a></li>
                                </ul>
                            </div>
                    </div>
                <div class="tab_5" style="display:none">
                                <div class="book">
                                    <ul>
                                        <li><a href="#">
                                                <img src="images/首页图片/books/qrsxtrjsj.jpg" alt="">
                                                <p>实时嵌入式系统软件设计</p>
                                                <p>
                                                    <span class="book_price">￥99</span>
                                                    <span class="book_dis">￥89.9</span>
                                                </p>
                                            </a></li>
                                        <li><a href="#">
                                                <img src="images/首页图片/books/Effective.jpg" alt="">
                                                <p>Effective Java中文版（原书第3版）</p>
                                                <p>
                                                    <span class="book_price">￥109</span>
                                                    <span class="book_dis">￥85.9</span>
                                                </p>
                                            </a></li>
                                        <li><a href="#">
                                                <img src="images/首页图片/books/lnh_MySQL.jpg" alt="">
                                                <p>跟老男孩学Linux运维</p>
                                                <p>
                                                    <span class="book_price">￥99</span>
                                                    <span class="book_dis">￥69.9</span>
                                                </p>
                                            </a></li>
                                        <li><a href="#">
                                                <img src="images/首页图片/books/srljytf.jpg" alt="">
                                                <p>深入理解以太坊</p>
                                                <p>
                                                    <span class="book_price">￥79</span>
                                                    <span class="book_dis">￥55.9</span>
                                                </p>
                                            </a></li>
                                        <li><a href="#">
                                                <img src="images/首页图片/books/Ryy.jpg" alt="">
                                                <p>R语言：数据可视化与统计分析基础</p>
                                                <p>
                                                    <span class="book_price">￥69</span>
                                                    <span class="book_dis">￥48.9</span>
                                                </p>
                                            </a></li>
                                    </ul>
                                </div>
                    </div>
            </div>
            <div class="main_nav">
                    <h4>编辑推荐</h4>
                    <h4>出版社推荐</h4>
                    <h4>重磅推荐</h4>
                    <h4>印刷推荐</h4>
                    <h4></h4>
                    <h4></h4>
                    <h4></h4>
                    <h4></h4>
                    <div class="tab_1">
                        <div class="book">
                            <ul>
                                <li><a href="#">
                                        <img src="images/首页图片/books/zjdsLua.jpg" alt="">
                                        <p>自己动手实现Lua</p>
                                        <p>
                                            <span class="book_price">￥80</span>
                                            <span class="book_dis">￥62.3</span>
                                        </p>
                                    </a></li>
                                <li><a href="#">
                                        <img src="images/首页图片/books/Spring Cloud实战.jpg" alt="">
                                        <p>重新定义Spring Cloud实战</p>
                                        <p>
                                            <span class="book_price">￥129</span>
                                            <span class="book_dis">￥90.9</span>
                                        </p>
                                    </a></li>
                                <li><a href="#">
                                        <img src="images/首页图片/books/微服务架构进阶.jpg" alt="">
                                        <p>Spring Cloud微服务架构进阶 </p>
                                        <p>
                                            <span class="book_price">￥89</span>
                                            <span class="book_dis">￥63.9</span>
                                        </p>
                                    </a></li>
                                <li><a href="#">
                                        <img src="images/首页图片/books/Python深度学习.jpg" alt="">
                                        <p>Python深度学习：基于TensorFlow</p>
                                        <p>
                                            <span class="book_price">￥79</span>
                                            <span class="book_dis">￥55.9</span>
                                        </p>
                                    </a></li>
                                <li><a href="#">
                                        <img src="images/首页图片/books/Go语言实现.jpg" alt="">
                                        <p>机器学习：Go语言实现</p>
                                        <p>
                                            <span class="book_price">￥59</span>
                                            <span class="book_dis">￥41.9</span>
                                        </p>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab_2" style="display:none">
                            <div class="book">
                                <ul>
                                    <li><a href="#">
                                            <img src="images/首页图片/books/qrsxtrjsj.jpg" alt="">
                                            <p>实时嵌入式系统软件设计</p>
                                            <p>
                                                <span class="book_price">￥99</span>
                                                <span class="book_dis">￥89.9</span>
                                            </p>
                                        </a></li>
                                    <li><a href="#">
                                            <img src="images/首页图片/books/Effective.jpg" alt="">
                                            <p>Effective Java中文版（原书第3版）</p>
                                            <p>
                                                <span class="book_price">￥109</span>
                                                <span class="book_dis">￥85.9</span>
                                            </p>
                                        </a></li>
                                    <li><a href="#">
                                            <img src="images/首页图片/books/lnh_MySQL.jpg" alt="">
                                            <p>跟老男孩学Linux运维</p>
                                            <p>
                                                <span class="book_price">￥99</span>
                                                <span class="book_dis">￥69.9</span>
                                            </p>
                                        </a></li>
                                    <li><a href="#">
                                            <img src="images/首页图片/books/srljytf.jpg" alt="">
                                            <p>深入理解以太坊</p>
                                            <p>
                                                <span class="book_price">￥79</span>
                                                <span class="book_dis">￥55.9</span>
                                            </p>
                                        </a></li>
                                    <li><a href="#">
                                            <img src="images/首页图片/books/Ryy.jpg" alt="">
                                            <p>R语言：数据可视化与统计分析基础</p>
                                            <p>
                                                <span class="book_price">￥69</span>
                                                <span class="book_dis">￥48.9</span>
                                            </p>
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    <div class="tab_3" style="display:none">
                                <div class="book">
                                    <ul>
                                        <li><a href="#">
                                                <img src="images/首页图片/books/qrsxtrjsj.jpg" alt="">
                                                <p>实时嵌入式系统软件设计</p>
                                                <p>
                                                    <span class="book_price">￥99</span>
                                                    <span class="book_dis">￥89.9</span>
                                                </p>
                                            </a></li>
                                        <li><a href="#">
                                                <img src="images/首页图片/books/Effective.jpg" alt="">
                                                <p>Effective Java中文版（原书第3版）</p>
                                                <p>
                                                    <span class="book_price">￥109</span>
                                                    <span class="book_dis">￥85.9</span>
                                                </p>
                                            </a></li>
                                        <li><a href="#">
                                                <img src="images/首页图片/books/lnh_MySQL.jpg" alt="">
                                                <p>跟老男孩学Linux运维</p>
                                                <p>
                                                    <span class="book_price">￥99</span>
                                                    <span class="book_dis">￥69.9</span>
                                                </p>
                                            </a></li>
                                        <li><a href="#">
                                                <img src="images/首页图片/books/srljytf.jpg" alt="">
                                                <p>深入理解以太坊</p>
                                                <p>
                                                    <span class="book_price">￥79</span>
                                                    <span class="book_dis">￥55.9</span>
                                                </p>
                                            </a></li>
                                        <li><a href="#">
                                                <img src="images/首页图片/books/Ryy.jpg" alt="">
                                                <p>R语言：数据可视化与统计分析基础</p>
                                                <p>
                                                    <span class="book_price">￥69</span>
                                                    <span class="book_dis">￥48.9</span>
                                                </p>
                                            </a></li>
                                    </ul>
                                </div>
                        </div>
                    <div class="tab_4" style="display:none">
                                <div class="book">
                                    <ul>
                                        <li><a href="#">
                                                <img src="images/首页图片/books/qrsxtrjsj.jpg" alt="">
                                                <p>实时嵌入式系统软件设计</p>
                                                <p>
                                                    <span class="book_price">￥99</span>
                                                    <span class="book_dis">￥89.9</span>
                                                </p>
                                            </a></li>
                                        <li><a href="#">
                                                <img src="images/首页图片/books/Effective.jpg" alt="">
                                                <p>Effective Java中文版（原书第3版）</p>
                                                <p>
                                                    <span class="book_price">￥109</span>
                                                    <span class="book_dis">￥85.9</span>
                                                </p>
                                            </a></li>
                                        <li><a href="#">
                                                <img src="images/首页图片/books/lnh_MySQL.jpg" alt="">
                                                <p>跟老男孩学Linux运维</p>
                                                <p>
                                                    <span class="book_price">￥99</span>
                                                    <span class="book_dis">￥69.9</span>
                                                </p>
                                            </a></li>
                                        <li><a href="#">
                                                <img src="images/首页图片/books/srljytf.jpg" alt="">
                                                <p>深入理解以太坊</p>
                                                <p>
                                                    <span class="book_price">￥79</span>
                                                    <span class="book_dis">￥55.9</span>
                                                </p>
                                            </a></li>
                                        <li><a href="#">
                                                <img src="images/首页图片/books/Ryy.jpg" alt="">
                                                <p>R语言：数据可视化与统计分析基础</p>
                                                <p>
                                                    <span class="book_price">￥69</span>
                                                    <span class="book_dis">￥48.9</span>
                                                </p>
                                            </a></li>
                                    </ul>
                                </div>
                        </div>
                </div>
            <div class="main_top title_bg">
                <h2>科技图书</h2>
               <div class="main_top_banner">
                   <div class="fleft">
                       <a href="#"><img src="images/首页图片/banner/数学极客.jpg" alt=""></a>
                   </div>
                   <div class="fright">
                        <a href="#"><img src="images/首页图片/banner/线性代数.png" alt=""></a>
                   </div>
               </div>
               <div class="banner_book">
                    <ul>
                        <li><a href="#">
                            <img src="images/首页图片/books/代数组合论.jpg" alt="">
                            <p>代数组合论</p>
                            <p>
                                    <span class="book_price">￥49</span>
                                    <span class="book_dis">￥34.9</span>
                            </p>
                        </a></li>
                        <li><a href="#">
                                <img src="images/首页图片/books/生活中的概率趣事.jpg" alt="">
                                <p>生活中的概率趣事（升级版）</p>
                                <p>
                                        <span class="book_price">￥49.9</span>
                                        <span class="book_dis">￥39.9</span>
                                </p>
                            </a></li>
                            <li><a href="#">
                                    <img src="images/首页图片/books/线性代数.jpg" alt="">
                                    <p>线性代数（英文版·第9版）</p>
                                    <p>
                                            <span class="book_price">￥79</span>
                                            <span class="book_dis">￥55.9</span>
                                    </p>
                                </a></li>
                                <li><a href="#">
                                        <img src="images/首页图片/books/线性代数原书.jpg" alt="">
                                        <p>线性代数（原书第9版）</p>
                                        <p>
                                                <span class="book_price">￥79</span>
                                                <span class="book_dis">￥55.9</span>
                                        </p>
                                    </a></li>
                                    <li><a href="#">
                                            <img src="images/首页图片/books/概率论基础教程（英文版·第9版）.jpg" alt="">
                                            <p>概率论基础教程(英文版·第9版)</p>
                                            <p>
                                                    <span class="book_price">￥79</span>
                                                    <span class="book_dis">￥55.9</span>
                                            </p>
                                        </a></li>
                                        <li><a href="#">
                                                <img src="images/首页图片/books/30秒探索：数学.jpg" alt="">
                                                <p>30秒探索：数学</p>
                                                <p>
                                                        <span class="book_price">￥59</span>
                                                        <span class="book_dis">￥49</span>
                                                </p>
                                            </a></li>
                    </ul>
               </div>
            </div>
            <div class="main_top title_bg">
                    <h2>人文心理</h2>
                   <div class="main_top_banner">
                       <div class="fleft">
                           <a href="#"><img src="images/首页图片/banner/被忽略的孩子.jpg" alt=""></a>
                       </div>
                       <div class="fright">
                            <a href="#"><img src="images/首页图片/banner/走出原生家庭创伤.jpg" alt=""></a>
                       </div>
                   </div>
                   <div class="banner_book">
                        <ul>
                            <li><a href="#">
                                <img src="images/首页图片/books/书写的疗愈力量.jpg" alt="">
                                <p>书写的疗愈力量(原书第3版)</p>
                                <p>
                                        <span class="book_price">￥69</span>
                                        <span class="book_dis">￥56.9</span>
                                </p>
                            </a></li>
                            <li><a href="#">
                                    <img src="images/首页图片/books/创伤与记忆.jpg" alt="">
                                    <p>创伤与记忆</p>
                                    <p>
                                            <span class="book_price">￥49</span>
                                            <span class="book_dis">￥33.9</span>
                                    </p>
                                </a></li>
                                <li><a href="#">
                                        <img src="images/首页图片/books/这不是你的错.jpg" alt="">
                                        <p>这不是你的错</p>
                                        <p>
                                                <span class="book_price">￥45</span>
                                                <span class="book_dis">￥30.9</span>
                                        </p>
                                    </a></li>
                                    <li><a href="#">
                                            <img src="images/首页图片/books/心理创伤疗愈之道.jpg" alt="">
                                            <p>心理创伤疗愈之道</p>
                                            <p>
                                                    <span class="book_price">￥59</span>
                                                    <span class="book_dis">￥40</span>
                                            </p>
                                        </a></li>
                                        <li><a href="#">
                                                <img src="images/首页图片/books/西方艺术通史（原书第4版）.jpg" alt="">
                                                <p>西方艺术通史（原书第4版）</p>
                                                <p>
                                                        <span class="book_price">￥799</span>
                                                        <span class="book_dis">￥555</span>
                                                </p>
                                            </a></li>
                                            <li><a href="#">
                                                    <img src="images/首页图片/books/团体认知治疗.jpg" alt="">
                                                    <p>团体认知治疗</p>
                                                    <p>
                                                            <span class="book_price">￥70</span>
                                                            <span class="book_dis">￥49</span>
                                                    </p>
                                                </a></li>
                        </ul>
                   </div>
                </div>
        </div>

    </div>
    <!-- main模块部分结束 -->
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
    <script src="../js/jquery-1.12.4.js"></script>
    <script>
         //1.实现轮播效果
         $(function(){
              $("#lb_ul li").on("mouseenter",function(){
                  //添加索引
                  var idx = $ ( this ).index();
                 $(this).addClass("cur").siblings("li").removeClass("cur");
                 $(".lbt ul").eq(idx).addClass("cur").siblings("ul").removeClass("cur")
                 $(".lbt").stop(true,false).animate({
                    left: -539*idx
                 },400);
              });
            var timeId=null;
            var index=0;
            timeId=setInterval(function(){
               index++;
               $("#lb_ul li").eq(index).addClass("cur").siblings("li").removeClass("cur");
               $(".lbt ul").eq(index).addClass("cur").siblings("ul").removeClass("cur");
               $(".lbt").stop(true,false).animate({
                    left: -539*index
                 },400);
               if(index==6){
                   index=-1;
               }
            },2000)
            $("#lbt").on({
                mouseenter:function(){
                    clearInterval ( timeId );
                },
                mouseleave:function(){
                    timeId=setInterval(function(){
               index++;
               $("#lb_ul li").eq(index).addClass("cur").siblings("li").removeClass("cur");
               $(".lbt ul").eq(index).addClass("cur").siblings("ul").removeClass("cur");
               $(".lbt").stop(true,false).animate({
                    left: -539*index
                 },400);
               if(index==6){
                   index=-1;
                }
               },2000);
                }
            })

         });
    </script>
</body>

</html>