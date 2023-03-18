function getResult() {
    $.get(base_url+"/lottery/results", function (res) {
        var datas = res;
        if (datas.data.length) {
            $(datas.data).each(function () {
                var type = 0;
                if(this.published == true){
                    $('#published_'+this.type).val(1);
                }
                switch (Number(this.type)) {
                    case 8:
                        type = 8;
                        $("#a1_" + type).text(this.a1);
                        $("#a2_" + type).text(this.a2);
                       
                        break;
                    case 10:
                        type = 10;
                        $("#a1_" + type).text(this.a1);
                        $("#a2_" + type).text(this.a2);
                      
                        break;
                    case 12:
                        type = 12;
                        $("#a1_2").text(this.a1);
                        $("#a2_2").text(this.a2);
                      
                        break;
                    case 3:
                        type = 3;
                        $("#a1_" + type).text(this.a1);
                        $("#a2_" + type).text(this.a2);
                      
                        break;
                    case 5:
                        type = 5;
                        $("#a1_" + type).text(this.a1);
                        $("#a2_" + type).text(this.a2);
                      
                        break;
                    case 7:
                        type = 7;
                        $("#a1_" + type).text(this.a1);
                        $("#a2_" + type).text(this.a2);
                      
                        break;
                    default:
                        break;
                }
            });
        }
    });
}
getResult();
setInterval(() => {
   getResult();
}, 5000);

$(document).ready(function () {

    $(".custom_btn").click(function () {

        var times = $("#time").val();
        if (times == "") {
            alert("Select time");
            $('#time').focus();
            return false;
        }
        $.ajax({
            method: "POST",
            url: base_url + "/lottery/store",
            data: $("#form").serialize(),
            success: function (res) {
                $(".alert").html(res.message);
                $('#time').focus();
                $("#form")[0].reset();
                setTimeout(function () {
                    $(".alert").html("");
                }, 3000);
                return false;
            },
        });
        return false;
    });
});


function getRandom(count){
    var max = 0;
    var min = 0;
    if(count == 2){
        min = 10;
        max = 99;

    }else{
        min = 100;
        max = 999;
    }
  return  Math.floor((Math.random() * (max - min + 1) + min));
    
}
function myFunction() {   
      
                if($('#published_8').val() == ''){
                $("#a1_8").text(getRandom(2)); 
                $("#a2_8").text(getRandom(3));                    
                }

                if($('#published_10').val() == ''){
                $("#a1_10").text(getRandom(2)); 
                $("#a2_10").text(getRandom(3));                    
                }

                if($('#published_12').val() == ''){
                $("#a1_12").text(getRandom(2));
                $("#a2_12").text(getRandom(3));                    
                }

                if($('#published_3').val() == ''){
                $("#a1_3").text(getRandom(2)); 
                $("#a2_3").text(getRandom(3));                               
                }

                if($('#published_5').val() == ''){
                $("#a1_5").text(getRandom(2));
                $("#a2_5").text(getRandom(3));                                                    
                }

                if($('#published_7').val() == ''){
                $("#a1_7").text(getRandom(2));   
                $("#a2_7").text(getRandom(3));                    
                }

                
                        
}

setInterval(function() {
    myFunction();
}, 200);

 //myFunction();