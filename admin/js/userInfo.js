
$(function(){
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