$(function () {
	var data, chartOptions;
	data = [
		{ label: "Apples", data: Math.floor (Math.random() * 100 + 150) }, 
		{ label: "Oranges", data: Math.floor (Math.random() * 100 + 390) }, 
		{ label: "Pinaples", data: Math.floor (Math.random() * 100 + 530) }, 
		{ label: "Grapes", data: Math.floor (Math.random() * 100 + 90) },
		{ label: "Bananas", data: Math.floor (Math.random() * 100 + 320) }
	];
	chartOptions = {        
		series: {
			pie: {
				show: true,  
				radius: 500,
				stroke: {
					width: 0
				}
			}
		}, 
		shadowSize: 0,
		legend: {
			position: 'se'
		},
		tooltip: true,
		tooltipOpts: {
			content: '%s: %y'
		},
		grid:{
      hoverable: true,
      clickable: false,
      borderWidth: 1,
      tickColor: '#E5E5E5',
      borderColor: '#E5E5E5',
    },
    shadowSize: 0,
		colors: ['#e77338', '#5e83bf', '#ffd65f', '#91c46b', '#46b4bf'],
	};
	var holder = $('#rectangular-pie');

	if (holder.length) {
		$.plot(holder, data, chartOptions );
	}
});