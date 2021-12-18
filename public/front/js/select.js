$(function() {
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
        if (id == "Allowance") {
            $("#serviceOption").empty();
            $("#serviceOption").append(
                "<option selected=" +
                    "true" +
                    " disabled>" +
                    "Select Option" +
                    "</option>",
                "<option value=" + "1" + ">" + "বয়স্ক ভাতা" + "</option>",
                "<option value=" +
                    "Widow Allowance" +
                    ">" +
                    "বিধবা ভাতা" +
                    "</option>",
                "<option value=" +
                    "Pregnant Allowance" +
                    ">" +
                    "মাতৃ কালীন ভাতা" +
                    "</option>",
                "<option value=" +
                    "Disabled Allowance" +
                    ">" +
                    "প্রতিবন্ধী ভাতা" +
                    "</option>",
                "<option value=" +
                    "Adolescents Allowance" +
                    ">" +
                    "কিশোর কিশোরী ভাতা" +
                    "</option>"
            );
        } else if (id == "Medical Benefit") {
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
                    "3" +
                    ">" +
                    "হস্ত ও কুটির শিল্প" +
                    "</option>"
            );
        }
    });
});
