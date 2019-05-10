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
    <link rel="stylesheet" href="css/cart.css">
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
                    <li><a href="#">我的致青春</a></li>
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
            <h2 class='mycart'>我的购物车</h2>
        </div>
        <div class="cart_content" id="app">
            <table border="0" cellpadding="0" cellspacing="0" id="tb">
                <thead>
                    <tr>
                        <th width="47px">
                            <label style="padding-left:5px;">
                                <input type="checkbox" id="all"  v-model='isCheckAll' >
                            </label>
                        </th>
                        <th width="434px">商品</th>
                        <th width="120px">您的价格</th>
                        <th width="130px">数量</th>
                        <th width="119px">单品总价</th>
                        <th class='caozuo' width="73px">操作</th>
                    </tr>
                </thead>

                <tbody>
                    <tr v-for="(item,index) in arr">
                        <td><input type="checkbox" v-model="item.isChecked"></td>
                        <td>
                            <div class="cart_book">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img :src="item.b_pic">
                                        </a>
                                    </li>
                                    <li class="cart_book_name">
                                        <a href="#">{{item.b_name}}</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                        <td>￥{{item.b_price}}</td>
                        <td>
                            <div>
                                <button @click="sub(index)" :disabled="item.cartNum==1">-</button>
                                <input type="number" :value="item.cartNum" class="Number">
                                <button @click="add(index)">+</button>

                            </div>
                        </td>
                        <td>￥{{ item.b_price *item.cartNum | numMath }}</td>
                        <td class='td_delete'><a href="javascript:void(0);" @click='del(index)'>删除</a></td>
                    </tr>


                </tbody>
            </table>
            <div class='count'>
                <div class="pro_money">商品金额共计 ￥<span id="total_yuanjia">{{getTotalPrice |numMath}}</span>
                </div>
                <div class='pro_total'>
                    总计（不含运费）<span id="total_account">￥<i>{{getTotalPrice | numMath}}</i> </span>
                </div>
                <a href="index.php" class="go">&lt;&lt;继续购物</a>
                <a href="#" class="settle">去结算</a>
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
<!-- <script src="./js/mui.min.js"></script> -->

<script src="./js/template-web.js"></script>
<script src="./js/vue.min.js"></script>
<script>
    $(function () {
        // 初始化
        //vue 渲染页面
        let app = new Vue({
            el: '#app',
            data: {
                arr: []
            },
            created: function () {
                this.getCart()
            },
            methods: {
                getCart() {
                    const that = this
                    $.ajax({
                        url: 'admin/api/getCart.php',
                        dataType: 'json',
                        success: function (data) {
                            console.log(data);
                            that.arr = data
                        }
                    })

                },
                add(index) {
                    this.arr[index].cartNum++
                },
                sub(index) {
                    this.arr[index].cartNum--
                },
            },
            computed: {
                
                isCheckAll:{
                    get(){
                        return this.arr.every(item=>item.isChecked)
                    },
                    set(val){
                        return this.arr.forEach(item=>(item.isChecked=val))
                    }
                },
                getTotalPrice(){
                    return this.arr.filter(item=>item.isChecked)
                       .reduce((total,item)=>{
                        return total+item.b_price *item.cartNum
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