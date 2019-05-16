<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>致青春书屋-欢迎登录</title>
    <link rel="stylesheet" href="./css/mui.min.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/order.css">

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
    </div>
    <!-- head模块结束 -->
    <!-- 导航栏模块开始  -->
    <div id="navBar" class='w'>
        <div class="flow_step">
            <ul class="cols_1">
                <li class="step_1">1.我的购物车</li>
                <li class="step_2">2.确认订单信息</li>
                <li class="step_3">3.成功提交订单</li>
            </ul>
        </div>
    </div>
    <!-- 导航栏模块结束  -->

    <!-- main模块开始 -->
    <div id="main" class='w'>
        <div class="cart_title">
            <h2 class='mycart'>确认订单信息</h2>
        </div>
        <div class="cart_content" id="app">
            <ul>
                <li>
                    <span>收货信息</span>
                    <a href="#">【修改】</a>
                </li>
                <li>
                    <span>戴龙&nbsp;&nbsp;&nbsp;江西省抚州市临川区&nbsp;&nbsp;&nbsp;学府路56号
                        &nbsp;&nbsp;&nbsp;000000&nbsp;&nbsp;&nbsp;15798007572 </span>
                </li>
                <li> <span>支付方式</span>
                    <a href="#">【修改】</a></li>
                <li>
                    <span>在线支付</span>
                </li>
                <li>
                    <span>商品清单</span>
                </li>
                <li class="tableList">
                    <table border="1" cellpadding="0" cellspacing="0" id="tb">
                        <thead>
                            <tr>
                                <th>纸质书</th>
                                <th>价格</th>
                                <th>数量</th>
                                <th>小计</th>
                            </tr>
                        </thead>
                        <tbody >
                            <tr v-for="(item, index) in arr" :key="index">
                                <td class="blue">{{item.b_name}}</td>
                                <td>￥{{item.b_price}}</td>
                                <td>{{item.cartNum}}</td>
                                <td>￥{{item.b_price *item.cartNum | numMath}}</td>
                            </tr>
                        </tbody>
                    </table>
                </li>
            </ul>
            <div class='count'>
                 <div class="money1">
                     <span>应付总计：</span>
                      <i>￥{{getTotalPrice | numMath}}</i>
                 </div>
                 <div class="money2">
                     <span>请确认以上信息无误&nbsp;&nbsp;</span>
                     <a href="submit.php">提交订单</a>
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

<script src="./js/template-web.js"></script>
<script src="./js/vue.min.js"></script>
<script>
   $(function(){
       let app=new Vue({
          el: '#app',
          data: {
              arr: [],
          },
          created() {
                this.getOrder();
            },
          methods: {
             getOrder(){
                 this.arr=JSON.parse(window.sessionStorage.getItem('product'));
                 console.log(this.arr);   
             },
            
          },
          computed: {
               getTotalPrice(){
                    return this.arr.reduce((total,item)=>{
                        return total+item.b_price * item.cartNum
                    },0)
                }
          },
          filters: {
                  numMath(value) {
                     return value.toFixed(2);
                  }
                },  

       })
   })
</script>