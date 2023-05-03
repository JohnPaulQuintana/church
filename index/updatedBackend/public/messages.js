console.log('dwadwad')
selectMessagesTable()
function selectMessagesTable(){
    $.ajax({
        url: "../index/UpdatedBackend/Controller/User_Controller.php?type=selectMessages",
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
            $('#messages').DataTable( {
                "data":res.records,
                "responsive":true,
                "columns": [
                    { data:"ID",render:function(data, type, row, meta){
                        return meta.row + 1
                    } },
                    { data:"name" ,render: renderCell},
                    { data:"email" ,render: renderCell},
                    { data:"message",render: function(data, type, row, meta){
                        return `<span class='details-cell text-break' title='${data}' style="white-space: normal !important;word-wrap: break-word;max-width: 300px;"> ${data} </span>`; // Wrap the text in a <span> with a class and title attribute for tooltip
                    } },
                    
                    { data:"action",render:function ( data, type, row, meta ) {
                        var a =`
                                <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a id="viewMessages" class="dropdown-item"href="#" value="${row.ID}" title='Message Request'><span class="bx bx-message-dots me-1">View Message</span></a>
                                    <a id="removeMessages" class="dropdown-item"href="#" value="${row.ID}" title='Remove Request'><span class="bx bx-x-circle me-1">Remove</span></a>
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

$(document).on('click', '#viewMessages', function(e) {
    var id = $(this).attr("value");
    console.log('dwadwad')
    // var verifyRequest = {'id':id}
    $.ajax({
        url: "../index/UpdatedBackend/Controller/User_Controller.php?type=viewMessage",
        type: "post",
        dataType: "json",
        data: {
            'id':id
        },
        success:function(data){
            console.log(data)
            $('#messageModal').modal('show');
            $('#name').html(data.name).addClass("btn btn-success")
            $('#msg').html(data.message)
            // if(data.response == "success"){
            //     $('#services').DataTable().destroy()
            //     selectServeTable()
            // }
        }
    })
})

$(document).on('click', '#removeMessages', function(e) {
    var id = $(this).attr("value");
    console.log('dwadwad')
    // var verifyRequest = {'id':id}
    $.ajax({
        url: "../index/UpdatedBackend/Controller/User_Controller.php?type=removeMessage",
        type: "post",
        dataType: "json",
        data: {
            'id':id
        },
        success:function(data){
            console.log(data)
            if(data.response == "success"){
                $('#messages').DataTable().destroy()
                selectMessagesTable()
            }
        }
    })
})

function countDonation(){
    $.ajax({
        url: "../index/UpdatedBackend/Controller/User_Controller.php?type=countMessages",
        type: "post",
        dataType: "json",
        success: function(data) {
            var cnt = 1;
            var total = 0
           console.log(data)
            data.records.forEach((element,index) => {
                cnt = index
                total += element.amount
            });
            console.log(total)
            $('#message-count').html(cnt+1)
            
        }
    });
}
countDonation()