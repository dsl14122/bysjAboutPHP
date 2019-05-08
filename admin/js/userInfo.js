
$(function(){
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

    getInfo();
    function getInfo(){
        $.get({
            url: "./api/pc_api/userInfo.php",
            dataType: "JSON",
            success: function (obj) {
                console.log(obj);
                var html = template("tpl", {
                    list: obj
                });
                $('tbody').html(html);
            }
        });
    }

})