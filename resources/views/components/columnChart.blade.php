<div class="max-w-sm w-full bg-white border border-gray-200 rounded-lg shadow p-4 md:p-6">
  <div class="grid grid-cols-2">
    <div class="flex items-center">
      <span class="text-gray-900 text-sm font-bold">Penjualan</span>
    </div>
    <dl class="flex items-center justify-end">
      <a href="" class="text-green-600 text-sm font-semibold hover:underline">Lihat Semua ></a>
    </dl>
  </div>
  <div id="column-chart"></div>
</div>

<script>
  window.addEventListener("load", function() {
    const options = {
      colors: ["#1A56DB", "#FDBA8C"],
      series: [{
          name: "Organic",
          color: "#1A56DB",
          data: [{
              x: "Mon",
              y: 231
            },
            {
              x: "Tue",
              y: 122
            },
            {
              x: "Wed",
              y: 63
            },
            {
              x: "Thu",
              y: 421
            },
            {
              x: "Fri",
              y: 122
            },
            {
              x: "Sat",
              y: 323
            },
            {
              x: "Sun",
              y: 111
            },
          ],
        },
        {
          name: "Social media",
          color: "#FDBA8C",
          data: [{
              x: "Mon",
              y: 232
            },
            {
              x: "Tue",
              y: 113
            },
            {
              x: "Wed",
              y: 341
            },
            {
              x: "Thu",
              y: 224
            },
            {
              x: "Fri",
              y: 522
            },
            {
              x: "Sat",
              y: 411
            },
            {
              x: "Sun",
              y: 243
            },
          ],
        },
      ],
      chart: {
        type: "bar",
        height: "90px",
        fontFamily: "Inter, sans-serif",
        toolbar: {
          show: false,
        },
      },
      plotOptions: {
        bar: {
          horizontal: false,
          columnWidth: "30%",
          borderRadiusApplication: "end",
          borderRadius: 2,
        },
      },
      tooltip: {
        shared: true,
        intersect: false,
        style: {
          fontFamily: "Inter, sans-serif",
        },
      },
      states: {
        hover: {
          filter: {
            type: "darken",
            value: 1,
          },
        },
      },
      stroke: {
        show: true,
        width: 0,
        colors: ["transparent"],
      },
      grid: {
        show: false,
        strokeDashArray: 4,
        padding: {
          left: 2,
          right: 2,
          top: -14
        },
      },
      dataLabels: {
        enabled: false,
      },
      legend: {
        show: false,
      },
      xaxis: {
        floating: false,
        labels: {
          show: true,
          style: {
            fontFamily: "Inter, sans-serif",
            cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
          }
        },
        axisBorder: {
          show: false,
        },
        axisTicks: {
          show: false,
        },
      },
      yaxis: {
        show: false,
      },
      fill: {
        opacity: 1,
      },
    }

    if (document.getElementById("column-chart") && typeof ApexCharts !== 'undefined') {
      const chart = new ApexCharts(document.getElementById("column-chart"), options);
      chart.render();
    }
  });
</script>
