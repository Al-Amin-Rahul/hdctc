$(function(){
    $(document).on("change", "#selectDiv", function(event){
        let id = $('#selectDiv').val();

        $.ajax({
            url: "/get-district/" + id,
            method: "GET",
            dataType:'JSON',
            success: data =>{
                $('#district').empty();
                $('#district').append('<option>' + "Select District" + '</option>');
                for(let i = 0; i<data.length; i++)
                {
                    $('#district').append('<option value=' + data[i].id + '>' + data[i].dis_name + '</option>');
                }
            }
        });
    });
    $(document).on("change", "#district", function(event){
        let id = $('#district').val();

        $.ajax({
            url: "/get-thana/" + id,
            method: "GET",
            dataType:'JSON',
            success: data =>{
                $('#thana').empty();
                $('#thana').append('<option>' + "Select Thana" + '</option>');
                for(let i = 0; i<data.length; i++)
                {
                    $('#thana').append('<option value=' + data[i].id + '>' + data[i].thana_name + '</option>');
                }
            }
        });
    });
    $(document).on("change", "#thana", function(event){
        let id = $('#thana').val();
        $.ajax({
            url: "/get-union/" + id,
            method: "GET",
            dataType:'JSON',
            success: data =>{
                $('#union').empty();
                $('#union').append('<option>' + "Select Union" + '</option>');
                for(let i = 0; i<data.length; i++)
                {
                    $('#union').append('<option value=' + data[i].id + '>' + data[i].union_name + '</option>');
                }
            }
        });
    });
});