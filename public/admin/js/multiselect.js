$(function(){
    $(document).on("change", "#selectMulDiv", function(event){
        let id = $('#selectMulDiv').val();
        $.ajax({
            url: "/get-mul-district/" + id,
            method: "GET",
            dataType:'JSON',
            success: data =>{
                $('#mulDistrict').empty();
                $('#mulDistrict').append('<option>' + "Select District" + '</option>');
                for(let i = 0; i<data.length; i++)
                {
                    $('#mulDistrict').append('<option value=' + data[i].id + '>' + data[i].dis_name + '</option>');
                }
            }
        });
    });
    $(document).on("change", "#mulDistrict", function(event){
        let id = $('#mulDistrict').val();
        $.ajax({
            url: "/get-mul-thana/" + id,
            method: "GET",
            dataType:'JSON',
            success: data =>{
                $('#mulThana').empty();
                $('#mulThana').append('<option>' + "Select Thana" + '</option>');
                for(let i = 0; i<data.length; i++)
                {
                    $('#mulThana').append('<option value=' + data[i].id + '>' + data[i].thana_name + '</option>');
                }
            }
        });
    });
    $(document).on("change", "#mulThana", function(event){
        let id = $('#mulThana').val();
        $.ajax({
            url: "/get-mul-union/" + id,
            method: "GET",
            dataType:'JSON',
            success: data =>{
                $('#mulUnion').empty();
                $('#mulUnion').append('<option>' + "Select Union" + '</option>');
                for(let i = 0; i<data.length; i++)
                {
                    $('#mulUnion').append('<option value=' + data[i].id + '>' + data[i].union_name + '</option>');
                }
            }
        });
    });
})