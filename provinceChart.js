
function getProvinceData(){
  //history of data
  fetch("https://data.askbhunte.com/api/v1/covid/summary").then((apiData) => {
    return apiData.json()
  }).then((data) => {
    console.log(data)
    displayChart(data)
  }).catch((error) => {
    console.log(error)
  })

}
getProvinceData()

function displayChart(data){
  google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Year', 'Sales', 'Expenses'],
        ['2004',  1000,      400],
        ['2005',  1170,      460],
        ['2006',  660,       1120],
        ['2007',  1030,      540]
      ]);

      var options = {
        title: 'Company Performance',
        curveType: 'function',
        legend: { position: 'bottom' }
      };

      var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

      chart.draw(data, options);
    }
}