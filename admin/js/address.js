$(function () {
    getAddress();
    function getAddress() {
        //  需求分析
        // 1.调用API接口，查询数据库信息
        // 2.将数据渲染到页面上
        $.ajax({
            url: 'api/getAddress.php',
            dataType: 'json',
            success: function (data) {
                // console.log(data);
                var html = template('tplTr', {
                    list: data
                });
                $('tbody').html(html);

            }

        })
    }
   
    
})