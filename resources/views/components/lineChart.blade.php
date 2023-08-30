<div class="max-w-sm w-full bg-white border border-gray-200 rounded-lg shadow p-4 md:p-6">
  <div class="flex justify-between mb-5">
    <div class="flex justify-between items-center">
      <h5 class="inline-flex items-center text-gray-500 leading-none font-normal mb-2">
        Penjualan : Periode Agustus 2023
      </h5>
      <button id="dropdownDefaultButton" data-dropdown-toggle="lastDaysdropdown" data-dropdown-placement="bottom"
        type="button"
        class="px-3 py-2 my-auto inline-flex items-center text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200">
        Agustus
        <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
          viewBox="0 0 10 6">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="m1 1 4 4 4-4" />
        </svg></button>
      <div id="lastDaysdropdown"
        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
          <li>
            <a href="#"
              class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
          </li>
          <li>
            <a href="#"
              class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
          </li>
          <li>
            <a href="#"
              class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 7
              days</a>
          </li>
          <li>
            <a href="#"
              class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 30
              days</a>
          </li>
          <li>
            <a href="#"
              class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 90
              days</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div id="line-chart"></div>

</div>

<script>
  // ApexCharts options and config
  window.addEventListener("load", function() {
    let options = {
      chart: {
        height: "100%",
        maxWidth: "100%",
        type: "line",
        fontFamily: "Inter, sans-serif",
        dropShadow: {
          enabled: false,
        },
        toolbar: {
          show: false,
        },
      },
      tooltip: {
        enabled: true,
        x: {
          show: false,
        },
      },
      dataLabels: {
        enabled: false,
      },
      stroke: {
        width: 6,
      },
      grid: {
        show: true,
        strokeDashArray: 4,
        padding: {
          left: 2,
          right: 2,
          top: -26
        },
      },
      series: [{
          name: "Clicks",
          data: [6500, 6418, 6456, 6526, 6356, 6456],
          color: "#1A56DB",
        },
        {
          name: "CPC",
          data: [6456, 6356, 6526, 6332, 6418, 6500],
          color: "#7E3AF2",
        },
      ],
      legend: {
        show: false
      },
      stroke: {
        curve: 'smooth'
      },
      xaxis: {
        categories: ['01 Feb', '02 Feb', '03 Feb', '04 Feb', '05 Feb', '06 Feb', '07 Feb'],
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
    }

    if (document.getElementById("line-chart") && typeof ApexCharts !== 'undefined') {
      const chart = new ApexCharts(document.getElementById("line-chart"), options);
      chart.render();
    }
  });
</script>
