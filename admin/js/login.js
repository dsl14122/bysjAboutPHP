
$(function(){
    //实现后台登录页面
    login();
    function login(){
    //    需求分析
    /*  1.给按钮注册点击事件
     2.判断用户名和密码是否为空
     3.调用文档接口
     4.判断信息是否正确
     5.错误就根据提示弹框，成功就进入主页面 */

    //  1.给按钮注册点击事件
      $('.btn-login').on('click',function(){
        // 2.判断用户名和密码是否为空
        let username=$('#username').val().trim();
        let password=$('#password').val().trim();

           //2.1判断用户名
           if(!username){
               alert('用户名为空！');
               return;
           }
           //2.1判断密码
           if(!password){
               alert('密码为空！');
               return;
           }
        //    3.调用文档接口
         $.ajax({
           url:'./api/pc_api/login.php',
           type:'post',
           dataType:'json',
           data:{
            username:username,
            password:password
           },
           success:function(data){
            // 4.判断信息是否正确
            //   console.log(data); 
              if(data.length){
                 window.sessionStorage.setItem('users',data[0].username);
                 location="index.html"
              }else{
                 alert ('用户名或密码错误！')
              }
               
           }

         });
        
        
      })
    }

});