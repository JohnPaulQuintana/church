
try {
    selectBookingTable()
} catch (error) {
    
}
function selectBookingTable(){
    $.ajax({
        url: "../index/UpdatedBackend/Controller/User_Controller.php?type=selectBooked",
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
            $('#records').DataTable( {
                "data":res.records,
                "responsive":true,
                "columns": [
                    { data:"id",render:function(data, type, row, meta){
                        return meta.row + 1
                    } },
                    { data:"name" ,render: renderCell},
                    { data:"email",render: renderCell },
                    { data:"phonenumber",render: renderCell },
                    { data:"services",render: renderCell },
                    { data:"date",render: renderCell },
                    { data:"time",render: renderCell },
                    { data:"status",render: renderCell },
                    { data:"action",render:function ( data, type, row, meta ) {
                        var a =`
                                <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a id="approved" class="dropdown-item" href="#" value="${row.id}" title='Approved Request'><span class="bx bx-edit-alt me-1">Set Status</span></a>
                                    <a id="remove" class="dropdown-item"href="#" value="${row.id}" title='Remove Request'><span class="bx bx-x-circle me-1">Remove</span></a>
                                </div>
                            </div>
                        `
                        return a
                    } },
                ]
            } );
            // Enable tooltips
            $(function () {
                $('[data-bs-toggle="tooltip"]').tooltip()
            })
        }
    })
}

$(document).on('click', '#approved', function(e) {
    var id = $(this).attr("value");
    var updateRequest = {'id':id}
    // alert(id)
    $.ajax({
        url: "../index/UpdatedBackend/Controller/User_Controller.php?type=getRequest",
        type: "post",
        dataType: "json",
        data: {
            updateRequest:updateRequest
        },
        success:function(data){
            console.log(data)
            if (data.response === 'success') {
               
                $('#basicModal').modal('show');
                $("#E_email").val(data.post.email);
                $("#edit_modal_id").val(data.post.id);
                $('#setDate').val(data.post.date);
                $('#setTime').val(data.post.time);
                $("#title").val(data.post.services);
                $("#setStatus").val(data.post.status);
                
                
            }
        }
    })
})

// update data base on id
$(document).on("click", "#update", function(e) {
    console.log("dwadwada")
    e.preventDefault();
    $.ajax({
        url: "../index/UpdatedBackend/Controller/User_Controller.php?type=updateRequest",
        type: "post",
        dataType: "json",
        data: $('#update_form').serialize(),
        success: function(data) {
            if(data.response == "success"){
                $('#records').DataTable().destroy()
                selectBookingTable()
                $('#basicModal').modal('hide')
                $("#form")[0].reset();
            }
        }
    })
})

// DELETE DATA
$(document).on("click", "#remove", function(e) {
    e.preventDefault();
    var del_id = $(this).attr("value");
    var postData = {'del_id':del_id}
    $.ajax({
        url: "../index/UpdatedBackend/Controller/User_Controller.php?type=deleteRequest",
        type: "post",
        dataType: "json",
        data: {
            deleteData:postData
        },
        success: function(data) {
            $('#records').DataTable().destroy()
            selectBookingTable();
            
        }
    });
})

function countBooked(){
    $.ajax({
        url: "../index/UpdatedBackend/Controller/User_Controller.php?type=countRequest",
        type: "post",
        dataType: "json",
        success: function(data) {
            var cnt = 1;
           console.log(data)
            data.forEach((element,index) => {
                cnt = index
            });
            $('#booking-count').html(cnt+1)
            
        }
    });
}

countBooked()
countDonation()