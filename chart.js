//get the api data from main script page
//cases
var positive_case = parseInt(localStorage.getItem("postive_case"))
var negative_case = parseInt(localStorage.getItem("negative_case"))
var total =  positive_case+negative_case
var positive_case = positive_case/total
var negative_case = negative_case/total
//isolation
var isolation = parseInt(localStorage.getItem("isolation"))/total*100
var recovered = parseInt(localStorage.getItem("recovered"))/total
//deaths
var deaths = parseInt(localStorage.getItem("deaths"))/total*100

google.charts.load("current", {packages:["corechart"]});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
var data = google.visualization.arrayToDataTable([
  ['COVID-19', '2021'],
  ['+ve case', positive_case],
  ['-ve case', negative_case],
  ['Isolation', isolation],
  ['Recovered', recovered],
  ['Deaths', deaths],
]);

var options = {
  title: '',
  is3D: true,
};

var chart = new google.visualization.PieChart(document.querySelector('#piechart_3d'));
chart.draw(data, options);
}
