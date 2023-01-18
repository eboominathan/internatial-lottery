function getResult() {
    $.get("lottery/results", function (res) {
        var datas = res;
        if (datas.data.length) {
            $(datas.data).each(function () {
                var type = 0;
                switch (this.type) {
                    case "8":
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
                    case "10":
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
                    case "12":
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
                    case "3":
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
                    case "5":
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
                    case "7":
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
