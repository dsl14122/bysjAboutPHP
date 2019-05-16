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
    <link rel="stylesheet" href="css/collect.css">
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
         <div class=" w">
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
                    <dd id="inform" ><a href="Inform.php">个人信息</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>></i></dd>
                    <dd id="cart"><a href="cart.php">我的购物车</a>&nbsp;&nbsp;&nbsp;&nbsp;<i>></i></dd>
                    <dd id="address"><a href="address.php">收货地址</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>></i></dd>
                    <dd id="collect"><a href="collect.php">我的收藏</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>></i></dd>
                    <dd id="comment"><a href="javascript:;">我的评论</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>></i></dd>
                </dl>  
               </div>
                 </div>
             <div class="main_right clearfix">
                   <div class="collect_tit">
                     <span>我的收藏</span>
                   </div>
                   <div class="collect_content">
                   <div class="collect_top">
                       <div class="rights">
                       <input type="checkbox"  name="allchoose" />全选
                       </div>
                           
                           <div class="lefts">
                           <a href="javascript:;" class="pur" >批量购买</a>
                           <a href="javascript:;" class="del">批量删除</a>
                           </div>
                   </div>
                   
                   <div class="collect_bottom">

                   <table border="0" cellpadding="0" cellspacing="0" myid="6771295" class="address_list">
                	<tr>
                    	<td class="checkbox"><input type="checkbox" /></td>
                        <td class="book_s">
                          <a href="javascript:;" target="_blank">
                              <img  src="./images/books_sort/实时嵌入式系统软件设计.jpg " />
                          </a>
                         </td>
                        <td class='books_title'>
                        	<a  href="javascript:;" target="_blank">实时嵌入式系统软件设计</a><br />
                            <span class="mr15">收藏人气：6</span> 
                        </td>
                        <td class="fav_price" >
                        <span class="book_dis_five">￥89.90</span><br />
                        </td>
                        <td class="t_center">
                          <a class="book_buy"  href="javascript:void(0);" ></a>
                          <a class="book_delete" href="javascript:;" >删除</a>
                         </td>
                    </tr>
                    <tr>
                    	<td class="checkbox"><input type="checkbox" /></td>
                        <td class="book_s">
                          <a href="javascript:;" target="_blank">
                              <img  src="./images/books_sort/Node.js进阶之路.jpg " />
                          </a>
                         </td>
                        <td class='books_title'>
                        	<a  href="javascript:;" target="_blank">Node.js进阶之路</a><br />
                            <span class="mr15">收藏人气：48</span> 
                        </td>
                        <td class="fav_price" >
                        <span class="book_dis_five">￥29.70</span><br />
                        </td>
                        <td class="t_center">
                          <a class="book_buy"  href="javascript:void(0);" ></a>
                          <a class="book_delete" href="javascript:;" >删除</a>
                         </td>
                    </tr>
                    <tr>
                    	<td class="checkbox"><input type="checkbox" /></td>
                        <td class="book_s">
                          <a href="javascript:;" target="_blank">
                              <img  src="./images/books_sort/React进阶之路.jpg " />
                          </a>
                         </td>
                        <td class='books_title'>
                        	<a  href="javascript:;" target="_blank">React进阶之路</a><br />
                            <span class="mr15">收藏人气：102</span> 
                        </td>
                        <td class="fav_price" >
                        <span class="book_dis_five">￥55.20</span><br />
                        </td>
                        <td class="t_center">
                          <a class="book_buy"  href="javascript:void(0);" ></a>
                          <a class="book_delete" href="javascript:;" >删除</a>
                         </td>
                    </tr>
                    <tr>
                    	<td class="checkbox"><input type="checkbox" /></td>
                        <td class="book_s">
                          <a href="javascript:;" target="_blank">
                              <img  src="./images/books_sort/高性能JavaScript.jpg " />
                          </a>
                         </td>
                        <td class='books_title'>
                        	<a  href="javascript:;" target="_blank">高性能JavaScript</a><br />
                            <span class="mr15">收藏人气：50</span> 
                        </td>
                        <td class="fav_price" >
                        <span class="book_dis_five">￥52.00</span><br />
                        </td>
                        <td class="t_center">
                          <a class="book_buy"  href="javascript:void(0);" ></a>
                          <a class="book_delete" href="javascript:;" >删除</a>
                         </td>
                    </tr>
                   </table>

                   </div>
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
<script>
    $(function(){
         //全选
         $('.rights :checkbox').click(function () { 
             
             $('.checkbox :checkbox').prop("checked",this.checked);
          });
    //单选
     $('.checkbox :checkbox').click(function () {
        if($('.checkbox :checked').length== $('.checkbox :checkbox').length){
            $('.rights :checkbox').prop('checked',true);
        }else{
            $('.rights :checkbox').prop('checked',false); 
        }
      })

    })
</script>
