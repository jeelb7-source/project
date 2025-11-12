(function ($) {
  'use strict';

  console.log("dashboard.js loaded for SOEZI Nail Hub");

  // ==============================
  // 📊 VISIT AND SALES STATISTICS (Bookings, Services, Payments)
  // ==============================
  if ($("#visit-sale-chart").length) {
    const ctx = document.getElementById('visit-sale-chart');
    const graph = ctx.getContext("2d");

    // 🎨 Gradient colors
    const gradientPink = graph.createLinearGradient(0, 0, 0, 181);
    gradientPink.addColorStop(0, 'rgba(255, 180, 210, 1)');
    gradientPink.addColorStop(1, 'rgba(255, 110, 170, 1)');

    const gradientBlue = graph.createLinearGradient(0, 0, 0, 181);
    gradientBlue.addColorStop(0, 'rgba(140, 200, 255, 1)');
    gradientBlue.addColorStop(1, 'rgba(90, 160, 230, 1)');

    const gradientMint = graph.createLinearGradient(0, 0, 0, 181);
    gradientMint.addColorStop(0, 'rgba(180, 255, 200, 1)');
    gradientMint.addColorStop(1, 'rgba(100, 210, 160, 1)');

    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG'],
        datasets: [
          {
            label: "Bookings",
            backgroundColor: gradientPink,
            borderColor: gradientPink,
            fillColor: '#ffb0d0',
            data: [25, 35, 45, 50, 60, 55, 70, 65],
            barPercentage: 0.5,
            categoryPercentage: 0.5,
          },
          {
            label: "Services",
            backgroundColor: gradientBlue,
            borderColor: gradientBlue,
            fillColor: '#8fd1ff',
            data: [40, 30, 35, 45, 55, 50, 60, 70],
            barPercentage: 0.5,
            categoryPercentage: 0.5,
          },
          {
            label: "Payments",
            backgroundColor: gradientMint,
            borderColor: gradientMint,
            fillColor: '#b3ffd1',
            data: [30, 25, 40, 35, 45, 55, 60, 75],
            barPercentage: 0.5,
            categoryPercentage: 0.5,
          }
        ]
      },
      options: {
        responsive: true,
        maintainAspectRatio: true,
        scales: {
          y: {
            display: true,
            grid: {
              display: true,
              color: '#f2f2f2'
            },
            ticks: {
              color: '#555',
              beginAtZero: true
            }
          },
          x: {
            display: true,
            grid: { display: false },
            ticks: { color: '#777' }
          }
        },
        plugins: {
          legend: { display: false },
          tooltip: {
            titleFont: { size: 14, weight: 'bold' },
            bodyFont: { size: 13 },
            backgroundColor: 'rgba(0,0,0,0.7)',
            borderColor: '#fff',
            borderWidth: 1
          }
        }
      },
      plugins: [{
        afterDatasetUpdate: function (chart) {
          const legendContainer = document.getElementById('visit-sale-chart-legend');
          if (!legendContainer) return;
          const ul = document.createElement('ul');
          chart.data.datasets.forEach((dataset) => {
            ul.innerHTML += `
              <li style="display:flex;align-items:center;margin-right:12px;">
                <span style="background-color:${dataset.fillColor};
                width:12px;height:12px;border-radius:50%;display:inline-block;margin-right:6px;"></span>
                ${dataset.label}
              </li>`;
          });
          legendContainer.innerHTML = '';
          legendContainer.appendChild(ul);
        }
      }]
    });
  }

  // ==============================
  // 🍩 TRAFFIC SOURCES CHART
  // ==============================
  if ($("#traffic-chart").length) {
    const ctx = document.getElementById('traffic-chart');
    const graphCtx = ctx.getContext('2d');

    // 🎨 Gradients
    const gradientPink = graphCtx.createLinearGradient(0, 0, 0, 181);
    gradientPink.addColorStop(0, 'rgba(255, 155, 210, 1)');
    gradientPink.addColorStop(1, 'rgba(255, 100, 180, 1)');

    const gradientBlue = graphCtx.createLinearGradient(0, 0, 0, 181);
    gradientBlue.addColorStop(0, 'rgba(120, 200, 255, 1)');
    gradientBlue.addColorStop(1, 'rgba(70, 160, 230, 1)');

    const gradientGreen = graphCtx.createLinearGradient(0, 0, 0, 181);
    gradientGreen.addColorStop(0, 'rgba(180, 255, 200, 1)');
    gradientGreen.addColorStop(1, 'rgba(100, 210, 160, 1)');

    new Chart(ctx, {
      type: 'doughnut',
      data: {
        labels: ['Website Visits 50%', 'Instagram Leads 30%', 'Direct Clients 20%'],
        datasets: [{
          data: [50, 30, 20],
          backgroundColor: [gradientPink, gradientBlue, gradientGreen],
          hoverBackgroundColor: [gradientPink, gradientBlue, gradientGreen],
          legendColor: ['#ff9bc5', '#7ec8ff', '#9df3b5']
        }]
      },
      options: {
        cutout: 65,
        responsive: true,
        maintainAspectRatio: true,
        plugins: {
          legend: { display: false },
          tooltip: {
            titleFont: { size: 14, weight: 'bold' },
            bodyFont: { size: 13 },
            backgroundColor: 'rgba(0,0,0,0.7)',
            borderColor: '#fff',
            borderWidth: 1
          }
        }
      },
      plugins: [{
        afterDatasetUpdate: function (chart) {
          const legendContainer = document.getElementById('traffic-chart-legend');
          if (!legendContainer) return;
          const ul = document.createElement('ul');
          chart.data.datasets[0].legendColor.forEach((color, i) => {
            ul.innerHTML += `
              <li style="display:flex;align-items:center;margin-bottom:8px;">
                <span style="background-color:${color};
                width:12px;height:12px;border-radius:50%;display:inline-block;margin-right:8px;"></span>
                ${chart.data.labels[i]}
              </li>`;
          });
          legendContainer.innerHTML = '';
          legendContainer.appendChild(ul);
        }
      }]
    });
  }

  // ==============================
  // 📅 DATE PICKER + BANNER SETTINGS
  // ==============================
  if ($("#inline-datepicker").length) {
    $('#inline-datepicker').datepicker({
      enableOnReadonly: true,
      todayHighlight: true,
    });
  }

  if ($.cookie('purple-pro-banner') !== "true") {
    document.querySelector('#proBanner').classList.add('d-flex');
    document.querySelector('.navbar').classList.remove('fixed-top');
  } else {
    document.querySelector('#proBanner').classList.add('d-none');
    document.querySelector('.navbar').classList.add('fixed-top');
  }

  document.querySelector('#bannerClose').addEventListener('click', function () {
    document.querySelector('#proBanner').classList.add('d-none');
    document.querySelector('#proBanner').classList.remove('d-flex');
    document.querySelector('.navbar').classList.add('fixed-top');
    const date = new Date();
    date.setTime(date.getTime() + 24 * 60 * 60 * 1000);
    $.cookie('purple-pro-banner', "true", { expires: date });
  });

})(jQuery);
