// console.log('dwadwadad')


try {
    selectServeTable() 
} catch (error) {
    
}
function selectServeTable(){
    $.ajax({
        url: "../index/UpdatedBackend/Controller/User_Controller.php?type=selectServe",
        type: "GET",
        dataType: "json",
        success:function(res){
            console.log(res)
            function renderCell(data, type, row, meta) {
                if (!data) {
                    // $(row.node()).addClass('missing-data');
                    return '<span class="badge bg-danger"data-bs-toggle="tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Unknown User Request!">' + "Unverified" + '</span>';
                }
                if(data == "Requested"){
                    return `<span class="badge bg-warning text-dark"data-bs-toggle="tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="${row.name}">${data}</span>`;
                }

                if(data == "Approved"){
                    return `<span class="badge bg-success text-dark"data-bs-toggle="tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="${row.name}">${data}</span>`;
                }
                if(data == "Declined"){
                    return `<span class="badge bg-danger"data-bs-toggle="tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="${row.name}">${data}</span>`;
                }
                return data;
            }
            $('#services').DataTable( {
                "data":res.records,
                "responsive":true,
                "columns": [
                    { data:"id",render:function(data, type, row, meta){
                        return meta.row + 1
                    } },
                    { data:"services" ,render: renderCell},
                    { data:"detail",render: function(data, type, row, meta){
                        return `<span class='details-cell text-break' title='${data}' style="white-space: normal !important;word-wrap: break-word;max-width: 300px;"> ${data} </span>`; // Wrap the text in a <span> with a class and title attribute for tooltip
                    } },
                    
                    { data:"action",render:function ( data, type, row, meta ) {
                        var a =`
                                <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a id="removeService" class="dropdown-item"href="#" value="${row.id}" title='Remove Request'><span class="bx bx-x-circle me-1">Remove</span></a>
                                </div>
                            </div>
                        `
                        return a
                    } },
                ],
                
                
            } );
        
            // Enable tooltips
            $(function () {
                $('[data-bs-toggle="tooltip"]').tooltip()
            })
        }
    })

}
$(document).on('click', '#removeService', function(e) {
    var id = $(this).attr("value");
    // var verifyRequest = {'id':id}
    $.ajax({
        url: "../index/UpdatedBackend/Controller/User_Controller.php?type=deleteServe",
        type: "post",
        dataType: "json",
        data: {
            'id':id
        },
        success:function(data){
            console.log(data)
            if(data.response == "success"){
                $('#services').DataTable().destroy()
                selectServeTable()
            }
        }
    })
})