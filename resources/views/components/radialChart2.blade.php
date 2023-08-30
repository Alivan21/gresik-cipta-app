<div class="max-w-sm w-full bg-white border border-gray-200 rounded-lg shadow p-4 md:p-6">
  <div class="flex justify-between items-center mb-3">
    <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white pr-1">Pestisida</h5>
    <h6>Agustus 2023</h6>
  </div>

  <div class="bg-gray-50 dark:bg-gray-700 p-3 rounded-lg">
    <div class="grid grid-cols-2 gap-3 mb-2">
      <dl class="bg-teal-50 dark:bg-gray-600 rounded-lg flex flex-col items-center justify-center h-[78px]">
        <dt class="text-teal-600 dartext-sm font-medium flex items-center justify-center mb-1">
          Rp 5.000.000
        </dt>
        <dd class="text-teal-600 dark:text-teal-300 text-sm font-medium">Target</dd>
      </dl>
      <dl class="bg-blue-50 dark:bg-gray-600 rounded-lg flex flex-col items-center justify-center h-[78px]">
        <dt class="text-blue-600 text-sm font-medium flex items-center justify-center mb-1">
          Rp 2.000.000
        </dt>
        <dd class="text-blue-600 dark:text-blue-300 text-sm font-medium">Progress</dd>
      </dl>
    </div>
  </div>

  <!-- Radial Chart -->
  <div class="py-6" id="radial-chart2"></div>

</div>

<script>
  // ApexCharts options and config
  window.addEventListener("load", function() {
    const getChartOptions = () => {
      return {
        series: [100, 60],
        colors: ["#1C64F2", "#16BDCA"],
        chart: {
          height: "380px",
          width: "100%",
          type: "radialBar",
          sparkline: {
            enabled: true,
          },
        },
        plotOptions: {
          radialBar: {
            track: {
              background: '#E5E7EB',
            },
            dataLabels: {
              show: false,
            },
            hollow: {
              margin: 0,
              size: "32%",
            }
          },
        },
        grid: {
          show: false,
          strokeDashArray: 4,
          padding: {
            left: 2,
            right: 2,
            top: -23,
            bottom: -20,
          },
        },
        labels: ["Target", "Progress"],
        legend: {
          show: true,
          position: "bottom",
          fontFamily: "Inter, sans-serif",
        },
        tooltip: {
          enabled: true,
          x: {
            show: false,
          },
        },
        yaxis: {
          show: false,
          labels: {
            formatter: function(value) {
              return value + '%';
            }
          }
        }
      }
    }

    if (document.getElementById("radial-chart2") && typeof ApexCharts !== 'undefined') {
      var chart = new ApexCharts(document.querySelector("#radial-chart2"), getChartOptions());
      chart.render();
    }
  });
</script>
