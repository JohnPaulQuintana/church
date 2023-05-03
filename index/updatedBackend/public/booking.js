
selectAll()
function selectAll(){
    $.ajax({
        url: "UpdatedBackend/Controller/User_Controller.php?type=show",
        type: "GET",
        dataType: "json",
        success:function(res){
            var html = ''
            res.forEach(data => {
                html += `<option value="${data.id}">${data.services}</option>`
            });
            $('#bigSelect').append(html)
        }
    })
}