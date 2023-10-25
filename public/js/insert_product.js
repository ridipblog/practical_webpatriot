$(document).ready(function () {

    // Display All Product And Category

    $.ajax({
        type: 'get',
        url: '/product_list/list',
        success: function (result) {
            console.log(result);
            var dataTable = $('#users-table').DataTable();
            dataTable.clear().draw();
            for (var i = 0; i < result.message.length; i++) {
                dataTable.row.add([(i+1), result.message[i].category_name,
                result.message[i].product_name
                ]).draw(false);
            }
        },
        error: function (data) {
            console.log(data);
        }
    })
    // Insert Product In Database
    $('#form_id').on('submit', function (e) {
        e.preventDefault();
        var form = $('#form_id').serialize();
        $.ajax({
            type: "post",
            url: "/insert_product",
            data: form,
            success: function (result) {
                console.log(result);
                if (result.status == 200) {
                    console.log(result.message);
                } else {
                    console.log(result.message);
                }
            },
            error: function (data) {
                console.log(data);
            }
        });
    });
})
