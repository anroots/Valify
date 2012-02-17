// Load google visualization
google.load("visualization", "1", {packages:["corechart"]});


/**
 * Draw W3C chart
 *
 * @since 1.0
 */
function drawChart() {

    var checkRows;

    $.ajax({
        url:base_url + 'check/graph/' + site_id,
        type:'get',
        async:false,
        success:function (json) { // Fetched all moods
            if (json.status == 200) {
                checkRows = json.response;

                // Convert string date to JS Date objects
                var i;
                for (i = 0; i < checkRows.length; i++) {
                    checkRows[i][0] = new Date(checkRows[i][0]);
                }
            } else {
                alert('Could not retreive check data.');
            }
        }
    });
    console.debug(checkRows);
    var data = new google.visualization.DataTable();

    data.addColumn('date', 'Date');
    data.addColumn('number', 'Warnings');
    data.addColumn('number', 'Errors');

    data.addRows(checkRows);

    var options = {

        height:240,
        pointSize:4,
        title:'Error and warning count over time',
        tooltip:{
            trigger:'hover'
        },
        curveType:'function',
        vAxis:{
            minValue:1,
            format:'##',
            title:'Count'
        },
        hAxis:{
            'title':'Time'
        },
        legend:{
            position:'bottom'
        }
    };

    var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
    chart.draw(data, options);
}

$(document).ready(function () {
    drawChart();
});