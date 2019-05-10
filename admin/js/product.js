$(function () {

    checkLogin();

    function checkLogin() {
        //判断是否用户登录
        if (!window.sessionStorage.getItem('users')) {
            location = 'login.html'
        }
        $('.usersInfo').html(window.sessionStorage.getItem('users'));
        $('.logout').on('click', function () {
            window.sessionStorage.removeItem('users');
            location = 'login.html'
        })
    }

    loadData(1);

    function loadData(page) {
        $.get({
            url: "api/getBook.php",
            data: {
                pageIndex: page,
                pageSize: 7
            },
            dataType: "JSON",
            success: function (obj) {
                // console.log(obj);
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

    //增
    addProduct();

    function addProduct() {
        //给保存加点击事件
        $(".saveAdd").click(function (e) {
            e.preventDefault();
            //使用FormData对象
            var fm = new FormData($('form')[0]);
            $.ajax({
                type: 'post',
                url: "./api/pc_api/addproduct.php",
                data: fm,
                contentType: false,
                processData: false,
                dataType: "json",
                success: function (obj) {
                    console.log(obj);

                    if (obj.msg == "ok") {
                        //跳转到文章列表
                        alert('新增成功！');
                        location = "./product.html";

                    } else {
                        alert('新增失败！');
                    }
                }
            })
        })
    }

    //删除
    deleteProduct();

    function deleteProduct() {
        $('tbody').on('click', '.delete', function () {
            var id = $(this).data('id');
            // 遍历 托管
            $.post({
                url: "./api/pc_api/deleteProduct.php",
                data: {
                    id: id
                },
                dataType: "json",
                success: function (obj) {

                    if (obj.msg == "ok") {
                        //登录成功
                        alert('删除成功！');
                       
                        setTimeout(() => {
                            loadData(1);
                        }, 500);
                    }else{
                        alert("删除失败!");
                    }
                }
            });


        })



    }

    // 编辑商品
    //  点击修改按钮，弹框，将数据传到弹框内，
    //  修改数据 调用接口，按下确认，弹框成功，重新渲染页面
    updateProduct()
    function updateProduct(){
        $('tbody').on('click','.edit',function(){
            var id = $(this).data('id');
            $.ajax({
                url: "./api/pc_api/getBookById.php",
                data:{id:id},
                dataType: "json",
                success:function(obj){
                    console.log(obj);
                    $('.editname').val(obj[0].b_name);
                    $('.editprice').val(obj[0].b_price);
                    $('.editdate').val(obj[0].b_date);
                    $('.editserial').val(obj[0].b_serial);

                    $('.saveUpdata').on('click',function(e){
                        e.preventDefault();
                        console.log(obj[0].Id);
                        id=obj[0].Id;
                     //使用FormData对象
                         var fm = new FormData($('.updata')[0]);
                        //  console.log(fm);
                         fm.append('id', id);
                         $.ajax({
                            type:'post',
                            url:"./api/pc_api/bookUpdate.php",
                            data: fm,
                            contentType: false,
                            processData: false,
                            dataType: "json",
                            success:function(obj){
                                console.log(obj);
                                
                               if(obj.msg=="ok"){
                                alert('修改成功！');
                                location = "./product.html";
                               }else{
                                 alert('修改失败！');
                               }
                            }
                         });
                   })

                }
            })
        })

      



    }

    //全选
    $("thead :checkbox").click(function(){
        $("tbody :checkbox").prop("checked",this.checked);
    });
    //反选
    $("tbody ").on("click",":checkbox",function(){
        if($("tbody :checkbox").length==$("tbody :checked").length){
         $("thead :checkbox").prop("checked",true);
        }else{
         $("thead :checkbox").prop("checked",false);
        }
     });
    
})