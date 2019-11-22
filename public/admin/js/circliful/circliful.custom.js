$( document ).ready(function() {
	$("#mac").circliful({
			animation: 1,
			animationStep: 5,
			foregroundBorderWidth: 21,
			backgroundBorderWidth: 21,
			percent: 78,
			fontColor: '#000000',
			foregroundColor: '#e77338',
			backgroundColor: '#E2E2E2',
			multiPercentage: 1,
			percentages: [10, 20, 30]
	});
	$("#windows").circliful({
			animation: 1,
			animationStep: 5,
			foregroundBorderWidth: 21,
			backgroundBorderWidth: 21,
			percent: 48,
			fontColor: '#000000',
			foregroundColor: '#5e83bf',
			backgroundColor: '#E2E2E2',
			multiPercentage: 1,
			percentages: [10, 20, 30]
	});
	$("#linux").circliful({
			animation: 1,
			animationStep: 5,
			foregroundBorderWidth: 21,
			backgroundBorderWidth: 21,
			percent: 88,
			fontColor: '#000000',
			foregroundColor: '#91c46b',
			backgroundColor: '#E2E2E2',
			multiPercentage: 1,
			percentages: [10, 20, 30]
	});
});