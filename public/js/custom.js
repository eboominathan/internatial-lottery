function getResult() {
    $.get("lottery/results", function (res) {
        var datas = res;
        if (datas.data.length) {
            $(datas.data).each(function () {
                var type = 0;
                switch (Number(this.type)) {
                    case 8:
                        type = 8;
                        $("#a1_" + type).text(this.a1);
                        $("#a2_" + type).text(this.a2);
                        $("#a3_" + type).text(this.a3);
                        $("#a4_" + type).text(this.a4);
                        $("#b1_" + type).text(this.b1);
                        $("#b2_" + type).text(this.b2);
                        $("#b3_" + type).text(this.b3);
                        $("#b4_" + type).text(this.b4);
                        $("#c1_" + type).text(this.c1);
                        $("#c2_" + type).text(this.c2);
                        $("#c3_" + type).text(this.c3);
                        $("#c4_" + type).text(this.c4);
                        $("#d1_" + type).text(this.d1);
                        $("#d2_" + type).text(this.d2);
                        $("#d3_" + type).text(this.d3);
                        $("#d4_" + type).text(this.d4);
                        break;
                    case 10:
                        type = 10;
                        $("#a1_" + type).text(this.a1);
                        $("#a2_" + type).text(this.a2);
                        $("#a3_" + type).text(this.a3);
                        $("#a4_" + type).text(this.a4);
                        $("#b1_" + type).text(this.b1);
                        $("#b2_" + type).text(this.b2);
                        $("#b3_" + type).text(this.b3);
                        $("#b4_" + type).text(this.b4);
                        $("#c1_" + type).text(this.c1);
                        $("#c2_" + type).text(this.c2);
                        $("#c3_" + type).text(this.c3);
                        $("#c4_" + type).text(this.c4);
                        $("#d1_" + type).text(this.d1);
                        $("#d2_" + type).text(this.d2);
                        $("#d3_" + type).text(this.d3);
                        $("#d4_" + type).text(this.d4);
                        break;
                    case 12:
                        type = 12;
                        $("#a1_" + type).text(this.a1);
                        $("#a2_" + type).text(this.a2);
                        $("#a3_" + type).text(this.a3);
                        $("#a4_" + type).text(this.a4);
                        $("#b1_" + type).text(this.b1);
                        $("#b2_" + type).text(this.b2);
                        $("#b3_" + type).text(this.b3);
                        $("#b4_" + type).text(this.b4);
                        $("#c1_" + type).text(this.c1);
                        $("#c2_" + type).text(this.c2);
                        $("#c3_" + type).text(this.c3);
                        $("#c4_" + type).text(this.c4);
                        $("#d1_" + type).text(this.d1);
                        $("#d2_" + type).text(this.d2);
                        $("#d3_" + type).text(this.d3);
                        $("#d4_" + type).text(this.d4);
                        break;
                    case 3:
                        type = 3;
                        $("#a1_" + type).text(this.a1);
                        $("#a2_" + type).text(this.a2);
                        $("#a3_" + type).text(this.a3);
                        $("#a4_" + type).text(this.a4);
                        $("#b1_" + type).text(this.b1);
                        $("#b2_" + type).text(this.b2);
                        $("#b3_" + type).text(this.b3);
                        $("#b4_" + type).text(this.b4);
                        $("#c1_" + type).text(this.c1);
                        $("#c2_" + type).text(this.c2);
                        $("#c3_" + type).text(this.c3);
                        $("#c4_" + type).text(this.c4);
                        $("#d1_" + type).text(this.d1);
                        $("#d2_" + type).text(this.d2);
                        $("#d3_" + type).text(this.d3);
                        $("#d4_" + type).text(this.d4);
                        break;
                    case 5:
                        type = 5;
                        $("#a1_" + type).text(this.a1);
                        $("#a2_" + type).text(this.a2);
                        $("#a3_" + type).text(this.a3);
                        $("#a4_" + type).text(this.a4);
                        $("#b1_" + type).text(this.b1);
                        $("#b2_" + type).text(this.b2);
                        $("#b3_" + type).text(this.b3);
                        $("#b4_" + type).text(this.b4);
                        $("#c1_" + type).text(this.c1);
                        $("#c2_" + type).text(this.c2);
                        $("#c3_" + type).text(this.c3);
                        $("#c4_" + type).text(this.c4);
                        $("#d1_" + type).text(this.d1);
                        $("#d2_" + type).text(this.d2);
                        $("#d3_" + type).text(this.d3);
                        $("#d4_" + type).text(this.d4);
                        break;
                    case 7:
                        type = 7;
                        $("#a1_" + type).text(this.a1);
                        $("#a2_" + type).text(this.a2);
                        $("#a3_" + type).text(this.a3);
                        $("#a4_" + type).text(this.a4);
                        $("#b1_" + type).text(this.b1);
                        $("#b2_" + type).text(this.b2);
                        $("#b3_" + type).text(this.b3);
                        $("#b4_" + type).text(this.b4);
                        $("#c1_" + type).text(this.c1);
                        $("#c2_" + type).text(this.c2);
                        $("#c3_" + type).text(this.c3);
                        $("#c4_" + type).text(this.c4);
                        $("#d1_" + type).text(this.d1);
                        $("#d2_" + type).text(this.d2);
                        $("#d3_" + type).text(this.d3);
                        $("#d4_" + type).text(this.d4);
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
      
                $("#a1_8").text(getRandom(2));
                $("#a2_8").text(getRandom(2));
                $("#a3_8").text(getRandom(3));
                $("#a4_8").text(getRandom(3));
                $("#b1_8").text(getRandom(2));
                $("#b2_8").text(getRandom(2));
                $("#b3_8").text(getRandom(3));
                $("#b4_8").text(getRandom(3));
                $("#c1_8").text(getRandom(2));
                $("#c2_8").text(getRandom(2));
                $("#c3_8").text(getRandom(3));
                $("#c4_8").text(getRandom(3));
                $("#d1_8").text(getRandom(2));
                $("#d2_8").text(getRandom(2));
                $("#d3_8").text(getRandom(3));
                $("#d4_8").text(getRandom(3)); 
                $("#a1_10").text(getRandom(2));
                $("#a2_10").text(getRandom(2));
                $("#a3_10").text(getRandom(3));
                $("#a4_10").text(getRandom(3));
                $("#b1_10").text(getRandom(2));
                $("#b2_10").text(getRandom(2));
                $("#b3_10").text(getRandom(3));
                $("#b4_10").text(getRandom(3));
                $("#c1_10").text(getRandom(2));
                $("#c2_10").text(getRandom(2));
                $("#c3_10").text(getRandom(3));
                $("#c4_10").text(getRandom(3));
                $("#d1_10").text(getRandom(2));
                $("#d2_10").text(getRandom(2));
                $("#d3_10").text(getRandom(3));
                $("#d4_10").text(getRandom(3));              
                $("#a1_12").text(getRandom(2));
                $("#a2_12").text(getRandom(2));
                $("#a3_12").text(getRandom(3));
                $("#a4_12").text(getRandom(3));
                $("#b1_12").text(getRandom(2));
                $("#b2_12").text(getRandom(2));
                $("#b3_12").text(getRandom(3));
                $("#b4_12").text(getRandom(3));
                $("#c1_12").text(getRandom(2));
                $("#c2_12").text(getRandom(2));
                $("#c3_12").text(getRandom(3));
                $("#c4_12").text(getRandom(3));
                $("#d1_12").text(getRandom(2));
                $("#d2_12").text(getRandom(2));
                $("#d3_12").text(getRandom(3));
                $("#d4_12").text(getRandom(3));
                $("#a1_3").text(getRandom(2));
                $("#a2_3").text(getRandom(2));
                $("#a3_3").text(getRandom(3));
                $("#a4_3").text(getRandom(3));
                $("#b1_3").text(getRandom(2));
                $("#b2_3").text(getRandom(2));
                $("#b3_3").text(getRandom(3));
                $("#b4_3").text(getRandom(3));
                $("#c1_3").text(getRandom(2));
                $("#c2_3").text(getRandom(2));
                $("#c3_3").text(getRandom(3));
                $("#c4_3").text(getRandom(3));
                $("#d1_3").text(getRandom(2));
                $("#d2_3").text(getRandom(2));
                $("#d3_3").text(getRandom(3));
                $("#d4_3").text(getRandom(3));
                $("#a1_5").text(getRandom(2));
                $("#a2_5").text(getRandom(2));
                $("#a3_5").text(getRandom(3));
                $("#a4_5").text(getRandom(3));
                $("#b1_5").text(getRandom(2));
                $("#b2_5").text(getRandom(2));
                $("#b3_5").text(getRandom(3));
                $("#b4_5").text(getRandom(3));
                $("#c1_5").text(getRandom(2));
                $("#c2_5").text(getRandom(2));
                $("#c3_5").text(getRandom(3));
                $("#c4_5").text(getRandom(3));
                $("#d1_5").text(getRandom(2));
                $("#d2_5").text(getRandom(2));
                $("#d3_5").text(getRandom(3));
                $("#d4_5").text(getRandom(3));                   
                $("#a1_7").text(getRandom(2));
                $("#a2_7").text(getRandom(2));
                $("#a3_7").text(getRandom(3));
                $("#a4_7").text(getRandom(3));
                $("#b1_7").text(getRandom(2));
                $("#b2_7").text(getRandom(2));
                $("#b3_7").text(getRandom(3));
                $("#b4_7").text(getRandom(3));
                $("#c1_7").text(getRandom(2));
                $("#c2_7").text(getRandom(2));
                $("#c3_7").text(getRandom(3));
                $("#c4_7").text(getRandom(3));
                $("#d1_7").text(getRandom(2));
                $("#d2_7").text(getRandom(2));
                $("#d3_7").text(getRandom(3));
                $("#d4_7").text(getRandom(3)); 
                        
}

setInterval(function() {
    myFunction();
}, 200);