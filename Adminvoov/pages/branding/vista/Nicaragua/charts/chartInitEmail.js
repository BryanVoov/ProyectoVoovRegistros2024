document.addEventListener("DOMContentLoaded", function () {
  const ctx = document.getElementById("analyticsChart").getContext("2d");
  const chartData = JSON.parse(
    document.getElementById("chartData").textContent
  );
  const chartLabels = JSON.parse(
    document.getElementById("chartLabels").textContent
  );

  console.log(chartData);
  console.log(chartLabels);

  const colors = [
    "rgba(54, 162, 235, 1)",
    "rgba(255, 99, 132, 1)",
    "rgba(75, 192, 192, 1)",
    "rgba(255, 159, 64, 1)",
    "rgba(153, 102, 255, 1)",
    "rgba(255, 206, 86, 1)",
    "rgba(54, 162, 235, 1)",
    "rgba(255, 99, 132, 1)",
    "rgba(75, 192, 192, 1)",
    "rgba(255, 159, 64, 1)",
    "rgba(153, 102, 255, 1)",
  ];

  const datasets = [];
  let colorIndex = 0;
  for (const label in chartData) {
    const data = [];
    for (const month of chartLabels) {
      data.push(chartData[label][month] || 0);
    }
    datasets.push({
      label: label,
      data: data,
      borderColor: colors[colorIndex],
      backgroundColor: colors[colorIndex].replace("1)", "0.2)"),
      fill: false,
    });
    colorIndex++;
  }

  new Chart(ctx, {
    type: "line",
    data: {
      labels: chartLabels,
      datasets: datasets,
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          position: "top",
        },
        title: {
          display: true,
          text: "Monthly Email Metrics",
        },
      },
      scales: {
        x: {
          title: {
            display: true,
            text: "Date",
          },
        },
        y: {
          title: {
            display: true,
            text: "Count",
          },
          ticks: {
            beginAtZero: true,
          },
        },
      },
    },
  });
});
