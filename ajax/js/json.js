$(document).ready(function(){
    var model = function (obj) { //模型
        html=""; 
        html +='<li>';
        html +='<a class="box1" href="' + obj.url + '" title="' + obj.title + '" target="_blank" >';
        html +='<img src="' +obj.img  + '"  alt="' +obj.title + '" height="220" width="220">';
        html +='</a>';
        html += '<a href="' + obj.url  + '" title="' +obj.title+ '" target="_blank" >';
        html +='<p class="box2">'+obj.title+'</p>';
        html +='</a>';
        html +='<div class="box">';
        html +='<p  class="price">抢购价<span>'+obj.price+'</span></p>';
        html +='<a href="'+obj.url+'" target="_blank"><img src="img/buy.png" alt="buy"></a>';
        html +='</div>';
        html +='</li>';
        return html;
    };
    var creater =  function (objList) { //生成器
        var goods = "";
        for(var i=0,len = objList.length; i<len; i++ ){
            goods += model(objList[i]);
        }
        return goods;
    };
      $.ajax({ 
          type: "Get",   
          url: "ajax.php",
          dataType: "json",
          success: function(data){                 
              $('#main1').html(creater(data.rows));
              $('#main2').html(creater(data.row2));   
              var images=$("#main1 img,#main2 img")
              images.each(function(){
                  $(this).hover( function(){
                      $(this).animate({top:'-10px'});
                   },function(){
                      $(this).animate({top:'0'});
                   });
              });    
          },
          error: function(jqXHR){     
             alert("数据加载失败,请刷新页面重试" );  
          }, 
      });

   
});