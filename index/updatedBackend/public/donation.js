

try {
    selectDonationTable()
} catch (error) {
    
}
function selectDonationTable(){
    $.ajax({
        url: "../index/UpdatedBackend/Controller/User_Controller.php?type=countDonation",
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
            $('#donation').DataTable( {
                "data":res.records,
                "responsive":true,
                "columns": [
                    { data:"id",render:function(data, type, row, meta){
                        return meta.row + 1
                    } },
                    { data:"name" ,render: renderCell},
                    { data:"email",render: renderCell },
                    { data:"picontainer",render: function(data, type, row, meta){
                        return `<img class="mx-auto rounded-profile text-secondary img-small" width="80" heigth="10" src="../index/pictures/danation/${row.picontainer}" alt="NO IMAGES AVAILABLE"/>`
                    } },
                    { data:"amount",render: renderCell },
                    { data:"action",render:function ( data, type, row, meta ) {
                        var a =`
                                <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a id="verifyD" class="dropdown-item" href="#" value="${row.id}" title='Verify Request'><span class="bx bx-edit-alt me-1">Verify</span></a>
                                    <a id="removeD" class="dropdown-item"href="#" value="${row.id}" title='Remove Request'><span class="bx bx-x-circle me-1">Remove</span></a>
                                </div>
                            </div>
                        `
                        return a
                    } },
                ],
                "footerCallback": function (row, data, start, end, display) {
                    var api = this.api();
                    var column = api.column(4, {page: 'current'});
                    var sum = column.data().reduce(function (a, b) {
                        return parseFloat(a) + parseFloat(b);
                    }, 0);
                    $(column.footer()).html('₱ '+sum).addClass('text-success fs-6');
                }
            } );
        
            // Enable tooltips
            $(function () {
                $('[data-bs-toggle="tooltip"]').tooltip()
            })
        }
    })
}



function countDonation(){
    $.ajax({
        url: "../index/UpdatedBackend/Controller/User_Controller.php?type=countDonation",
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
            $('#donation-count').html(cnt+1)
            
        }
    });
}
countDonation()

$(document).on('click', '#verifyD', function(e) {
    var id = $(this).attr("value");
    // var verifyRequest = {'id':id}
    $.ajax({
        url: "../index/UpdatedBackend/Controller/User_Controller.php?type=verifyRequest",
        type: "post",
        dataType: "json",
        data: {
            'id':id
        },
        success:function(data){
            console.log(data)
            if(data.response == "success"){
                $('#donation').DataTable().destroy()
                selectDonationTable()

            }
        }
    })
})
$(document).on('click', '#removeD', function(e) {
    var id = $(this).attr("value");
    // var verifyRequest = {'id':id}
    $.ajax({
        url: "../index/UpdatedBackend/Controller/User_Controller.php?type=deleteVerify",
        type: "post",
        dataType: "json",
        data: {
            'id':id
        },
        success:function(data){
            console.log(data)
            if(data.response == "success"){
                $('#donation').DataTable().destroy()
                selectDonationTable()
            }
        }
    })
})