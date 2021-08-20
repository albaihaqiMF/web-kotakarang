var ctx = document.getElementById("penduduk");
var labels = ["Belum Terdaftar", "Terdaftar"];
var title = "Jumlah Penduduk";

var pendudukChart

$(function () {
    $.getJSON("v1/api/keluarga", function (result) {
        pendudukChart = new Chart(ctx, {
            type: "pie",
            data: {
                labels: labels,
                datasets: [
                    {
                        label: title,
                        data: [500-result.count, result.count],
                        backgroundColor: [
                            "rgb(255,197,63)",
                            "#23CF51",
                        ],
                        borderWidth: 1,
                    },
                ],
            },
        });
    });
});
