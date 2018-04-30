$(function () {
    $("#tabla").DataTable({
        buttons: ["csv"],
        order: [],
        pagingType: "full",
        lengthMenu: [[6, 12, 24, 50, -1], [6, 12, 24, 50, "Todo"]],
        columnDefs: [
            {
                targets: [0],
                orderable: false
            }
        ],
        ajax: {
            url: "https://randomuser.me/api/?nat=ca,ch,es,fr,gb,us&results=100",
            dataSrc: "results"
        },
        columns: [
            {
                data: "picture.thumbnail",
                render: function (data, type, row) {
                    return '<img src="' + data + '">';
                }
            },
            {
                data: "name",
                render: function (data, type, row) {
                    return data.first + " " + data.last;
                }
            },
            {
                data: "location",
                render: function (data, type, row) {
                    return data.city + ", " + data.state;
                }
            },
            { data: "nat" },
            { data: "dob" }
        ],
        language: {
            info: "Pag. _PAGE_ de _PAGES_",
            infoEmpty: "No hay datos",
            infoFiltered: "(filtrado de los _MAX_ renglones)",
            lengthMenu: "Mostrar _MENU_ renglones por pagina",
            loadingRecords: "Cargando datos...",
            processing: "Procesando...",
            search: "Buscar:",
            zeroRecords: "No se encontro nada",
            paginate: {
                first: "<<",
                last: ">>",
                next: ">",
                previous: "<"
            }
        }
    });

});