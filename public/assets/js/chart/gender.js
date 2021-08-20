var genderCtx = document.getElementById("gender");
var gLabels = ["Perempuan", "Laki-laki"];
var title = "Jumlah Penduduk";
var myChart;

$(function () {
    $.getJSON("v1/api/gender", function (result) {
        myChart = new Chart(genderCtx, {
            type: "bar",
            data: {
                labels: gLabels,
                datasets: [
                    {
                        label: title,
                        data: [result.perempuan, result.lelaki],
                        backgroundColor: [
                            "rgb(255, 99, 132)",
                            "rgb(54, 162, 235)",
                        ],
                        borderColor: [
                            "rgb(255, 99, 132, 1)",
                            "rgb(54, 162, 235, 1)",
                        ],
                        borderWidth: 1,
                    },
                ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });
    });
});
