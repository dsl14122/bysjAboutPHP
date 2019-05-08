$(function () {
    
    checkLogin();
    function checkLogin(){
        //判断是否用户登录
        if(!window.sessionStorage.getItem('users')){
            location='login.html'
        }
        $('.usersInfo').html(window.sessionStorage.getItem('users'));
        $('.logout').on('click',function(){
            window.sessionStorage.removeItem('users');
            location='login.html'
         })
    }
    
    loadData(1);
    addProduct();
    function loadData(page) {
        $.get({
            url: "api/getBook.php",
            data: {
                pageIndex: page,
                pageSize: 7
            },
            dataType: "JSON",
            success: function (obj) {
                console.log(obj);
                var html = template("tpl", {
                    list: obj.data
                });
                $('tbody').html(html);
                //生成页码
                $('.pagination').twbsPagination({
                    //总页数
                    totalPages: obj.count,
                    //清除初始化调用事件
                    initiateStartPageClick: false,
                    //可见页码
                    visiblePages: 4,
                    startPage: page,
                    first: "首页",
                    prev: "上一页",
                    next: "下一页",
                    last: "尾页",
                    onPageClick: function (event, page) {
                        loadData(page);
                    }
                });
            }
        });
    }

    function addProduct() {
        //给保存加点击事件
        $(".saveAdd").click(function (e) {
            e.preventDefault();
            //使用FormData对象
            var fm = new FormData($('form')[0]);
            // console.log(fm);
            $.ajax({
                type:'post',
                url:"./api/pc_api/addproduct.php",
                data:fm,
                contentType: false,
                processData: false,
                dataType: "json",
                success: function (obj){
                    console.log(obj);
                    
                    // if (obj.msg == "ok") {
                    //     //跳转到文章列表
                    //     location = "../product.html";
                    //   } else {
                    //     alert('新增失败！');
                    //   }
                }
            })
        })
    }


})