<?php die("Access Denied"); ?>#x#a:2:{s:6:"result";a:2:{s:6:"report";a:0:{}s:2:"js";s:1434:"
  google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Dia', 'Pedidos', 'Total de Itens vendidos', 'Receita líquida'], ['2022-11-05', 0,0,0], ['2022-11-06', 0,0,0], ['2022-11-07', 0,0,0], ['2022-11-08', 0,0,0], ['2022-11-09', 0,0,0], ['2022-11-10', 0,0,0], ['2022-11-11', 0,0,0], ['2022-11-12', 0,0,0], ['2022-11-13', 0,0,0], ['2022-11-14', 0,0,0], ['2022-11-15', 0,0,0], ['2022-11-16', 0,0,0], ['2022-11-17', 0,0,0], ['2022-11-18', 0,0,0], ['2022-11-19', 0,0,0], ['2022-11-20', 0,0,0], ['2022-11-21', 0,0,0], ['2022-11-22', 0,0,0], ['2022-11-23', 0,0,0], ['2022-11-24', 0,0,0], ['2022-11-25', 0,0,0], ['2022-11-26', 0,0,0], ['2022-11-27', 0,0,0], ['2022-11-28', 0,0,0], ['2022-11-29', 0,0,0], ['2022-11-30', 0,0,0], ['2022-12-01', 0,0,0], ['2022-12-02', 0,0,0], ['2022-12-03', 0,0,0]  ]);
        var options = {
          title: 'Report for the period from Sábado, 05 Novembro 2022 to Domingo, 04 Dezembro 2022',
            series: {0: {targetAxisIndex:0},
                   1:{targetAxisIndex:0},
                   2:{targetAxisIndex:1},
                  },
                  colors: ["#00A1DF", "#A4CA37","#E66A0A"],
        };

        var chart = new google.visualization.LineChart(document.getElementById('vm_stats_chart'));

        chart.draw(data, options);
      }
";}s:6:"output";s:0:"";}