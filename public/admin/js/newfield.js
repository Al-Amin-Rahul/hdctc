$('#addNewBtn').on('click', function(){
    event.preventDefault();
    var input = document.createElement("input");
    var parent = document.getElementById("newTextField");
    input.type = "text";
    input.setAttribute('name', 'work_links[]');
    input.className = "form-control"; // set the CSS class
    parent.appendChild(input);
})