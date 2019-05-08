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

})