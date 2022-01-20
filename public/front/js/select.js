$(function() {
    $(document).on("submit", "#UpdateStatus", function(arg) {
        let url = $(this).attr("action");
        let method = $(this).attr("method");
        let data = $(this).serialize();

        $.ajax({
            url: url,
            method: method,
            data: data,
            success: data => {
                return getApp();
            }
        });
        arg.preventDefault();
    });

    $(document).on("change", "#selectDiv", function(event) {
        let id = $("#selectDiv").val();

        $.ajax({
            url: "/get-district/" + id,
            method: "GET",
            dataType: "JSON",
            success: data => {
                $("#district").empty();
                $("#district").append(
                    "<option>" + "Select District" + "</option>"
                );
                for (let i = 0; i < data.length; i++) {
                    $("#district").append(
                        "<option value=" +
                            data[i].id +
                            ">" +
                            data[i].dis_name +
                            "</option>"
                    );
                }
            }
        });
    });
    $(document).on("change", "#district", function(event) {
        let id = $("#district").val();

        $.ajax({
            url: "/get-thana/" + id,
            method: "GET",
            dataType: "JSON",
            success: data => {
                $("#thana").empty();
                $("#thana").append("<option>" + "Select Thana" + "</option>");
                for (let i = 0; i < data.length; i++) {
                    $("#thana").append(
                        "<option value=" +
                            data[i].id +
                            ">" +
                            data[i].thana_name +
                            "</option>"
                    );
                }
            }
        });
    });
    $(document).on("change", "#thana", function(event) {
        let id = $("#thana").val();
        $.ajax({
            url: "/get-union/" + id,
            method: "GET",
            dataType: "JSON",
            success: data => {
                $("#union").empty();
                $("#union").append("<option>" + "Select Union" + "</option>");
                for (let i = 0; i < data.length; i++) {
                    $("#union").append(
                        "<option value=" +
                            data[i].id +
                            ">" +
                            data[i].union_name +
                            "</option>"
                    );
                }
            }
        });
    });

    $(document).on("change", "#selectDivP", function(event) {
        let id = $("#selectDivP").val();

        $.ajax({
            url: "/get-district/" + id,
            method: "GET",
            dataType: "JSON",
            success: data => {
                $("#districtP").empty();
                $("#districtP").append(
                    "<option>" + "Select District" + "</option>"
                );
                for (let i = 0; i < data.length; i++) {
                    $("#districtP").append(
                        "<option value=" +
                            data[i].id +
                            ">" +
                            data[i].dis_name +
                            "</option>"
                    );
                }
            }
        });
    });
    $(document).on("change", "#districtP", function(event) {
        let id = $("#districtP").val();

        $.ajax({
            url: "/get-thana/" + id,
            method: "GET",
            dataType: "JSON",
            success: data => {
                $("#thanaP").empty();
                $("#thanaP").append("<option>" + "Select Thana" + "</option>");
                for (let i = 0; i < data.length; i++) {
                    $("#thanaP").append(
                        "<option value=" +
                            data[i].id +
                            ">" +
                            data[i].thana_name +
                            "</option>"
                    );
                }
            }
        });
    });
    $(document).on("change", "#thanaP", function(event) {
        let id = $("#thanaP").val();
        $.ajax({
            url: "/get-union/" + id,
            method: "GET",
            dataType: "JSON",
            success: data => {
                $("#unionP").empty();
                $("#unionP").append("<option>" + "Select Union" + "</option>");
                for (let i = 0; i < data.length; i++) {
                    $("#unionP").append(
                        "<option value=" +
                            data[i].id +
                            ">" +
                            data[i].union_name +
                            "</option>"
                    );
                }
            }
        });
    });

    $(document).on("change", "#selectService", function(event) {
        let id = $("#selectService").val();
        if (id == 1) {
            $("#serviceOption").empty();
            $("#serviceOption").append(
                "<option selected=" +
                    "true" +
                    " disabled>" +
                    "Select Option" +
                    "</option>",
                "<option value=" + "1" + ">" + "বয়স্ক ভাতা" + "</option>",
                "<option value=" + "2" + ">" + "বিধবা ভাতা" + "</option>",
                "<option value=" + "3" + ">" + "মাতৃ কালীন ভাতা" + "</option>",
                "<option value=" + "4" + ">" + "প্রতিবন্ধী ভাতা" + "</option>",
                "<option value=" + "5" + ">" + "কিশোর কিশোরী ভাতা" + "</option>"
            );
        } else if (id == 2) {
            $("#serviceOption").empty();
            $("#serviceOption").append(
                "<option selected=" +
                    "true" +
                    " disabled>" +
                    "Select Option" +
                    "</option>",
                "<option value=" + "1" + ">" + "চক্ষু ক্যাম্প" + "</option>",
                "<option value=" +
                    "2" +
                    ">" +
                    "স্বাস্থ্য ক্যাম্প" +
                    "</option>",
                "<option value=" +
                    "3" +
                    ">" +
                    "রক্তের গ্রুপ পরীক্ষা" +
                    "</option>",
                "<option value=" + "4" + ">" + "মাদক নিরাময়" + "</option>"
            );
        } else {
            $("#serviceOption").empty();
            $("#serviceOption").append(
                "<option selected=" +
                    "true" +
                    " disabled>" +
                    "Select Option" +
                    "</option>",
                "<option value=" +
                    "1" +
                    ">" +
                    "কম্পিউটার প্রশিক্ষণ" +
                    "</option>",
                "<option value=" + "2" + ">" + "সেলাই প্রশিক্ষণ" + "</option>",
                "<option value=" + "3" + ">" + "বিউটি পার্লার" + "</option>",
                "<option value=" +
                    "4" +
                    ">" +
                    "হস্ত ও কুটির শিল্প" +
                    "</option>"
            );
        }
    });
});
function getApp() {
    let url = $("#appShow").data("url");
    $.ajax({
        url: url,
        type: "GET",
        dataType: "HTML",
        success: function(response) {
            $("#showApp").html(response);
        }
    });
}
