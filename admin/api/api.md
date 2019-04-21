## 判断登录账号和密码是否正确的接口
type:post
url:api/DoLogin.php
data:
      name: 管理名
     password：密码
响应体：
       JSON

       {"code":10000,"msg":"ok"}
       或者
       {"code":10001,"msg":"fail"}

## 判断有没有登录的接口
type:get
url:api/checkLogin.php
data: 无
响应体：
       JSON
       {"code":10000,"msg":"ok"}
       或者
       {"code":10001,"msg":"fail"}
## 查询书籍条数的接口
type:get
url:api/getBook.php
data:
        {
            pageIndex:1,
            pageSize:7
        }
响应体：
     JSON
     {"Id":"1"../}

##根据ID查询书籍信息的接口
type:get
url: api/getMessageById.php
data: id
响应体：
      JSON
      {"Id":"1"../}

##新增用户地址的接口
type:post
url:api/addAddress.php
data:
    id
    nickname 收货人姓名
    address  所在地区
    street 详细地址
    post  邮编
    mobile  手机号
响应体：
      JSON
    { "code":10000, "msg":"ok" }
    或者
    { "code":10001,"msg":"fail" 
    }
## 查询用户地址的接口
type:get
url:api/getAddress.php
响应体：
      JSON
      []
## 删除用户地址的接口
type:get
url:api/deleteAddress.php
data: id
响应体： 
   JOSN
    { "code":10000, "msg":"ok" }
    或者
    { "code":10001,"msg":"fail" 
    }
## 判断有没有登录的接口
type:get
url:api/checkLogin.php
data: 无
响应体：
       JSON
       {"code":10000,"msg":"ok"}
       或者
       {"code":10001,"msg":"fail"}
##查询书籍是否存在购物车的接口
type:get
url:api/getCart.php
data:无
响应体：
     JSON
     {"Id":"1"../}
