$(document).ready(function() {
    listEmployee();
    $("listEmployeeTable").dataTable({
        bPaginate: false,
        bInfo: false,
        bFilter: false,
        bLengthChange: false,
        pageLength: 5,
    });
    // list all uyser in datatable
    function listEmployee() {
        $.ajax({
            type: "ajax",
            url: "user/tampilData",
            async: false,
            dataType: "json",
            success: function(data) {
                var html = "";
                var i;
                var no = 1;
                for (i = 0; i < data.length; i++) {
                    html +=
                        '<tr id="' +
                        data[i].id +
                        '">' +
                        "<td>" +
                        no++ +
                        "</td>" +
                        "<td>" +
                        data[i].nama_karyawan +
                        "</td>" +
                        "<td>" +
                        data[i].nik +
                        "</td>" +
                        "<td>" +
                        data[i].email +
                        "</td>" +
                        "<td>" +
                        data[i].divisi +
                        "</td>" +
                        "<td>" +
                        data[i].tlp +
                        "</td>" +
                        "<td>" +
                        data[i].status +
                        "</td>" +
                        '<td style="text-aling:right;">' +
                        '<a href="javascript:void(0);" class="btn btn-info btn-sm editRecord" data-id="' +
                        data[i].id +
                        '" data-nama_karyawan="' +
                        data[i].nama_karyawan +
                        '"data-nik="' +
                        data[i].nik +
                        '"data-email="' +
                        data[i].email +
                        '"data-divisi="' +
                        data[i].divisi +
                        '"data-tlp="' +
                        data[i].tlp +
                        '"data-status="' +
                        data[i].status +
                        '">Edit</a>' +
                        " " +
                        '<a href="javascript:void(0);" class="btn btn-danger btn-sm deleteRecord" data-id="' +
                        data[i].id +
                        '">Delete</a>' +
                        "</td>" +
                        "</tr>";
                }
                $("#listEmployee").html(html);
            },
        });
    }
});