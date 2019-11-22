$('#defaultBar').barIndicator();



// Bar Color
var opt = {foreColor:'#e77338'};$('#barColor').barIndicator(opt);

// Bar Height
var opt = { horBarHeight:27}; $('#barHeight').barIndicator(opt);

// Vertical Height
var opt = { style:'vertical'}; $('#barVertical').barIndicator(opt);
var opt = { style:'vertical', foreColor:'#e77338'}; $('#barVertical2').barIndicator(opt);
var opt = { style:'vertical', foreColor:'#91c46b'}; $('#barVertical3').barIndicator(opt);

// Bar Holder Color
var opt = {foreColor:'#ffc31b', backColor:'#5e83bf'}; $('#barHolderColor').barIndicator(opt);

// label Positions
var opt = {horLabelPos:'topRight', foreColor:'#e77338'};$('#barLabelTopRight').barIndicator(opt);
var opt = {horLabelPos:'right', foreColor:'#5e83bf'};$('#barLabelRight').barIndicator(opt);
var opt = {horLabelPos:'left', foreColor:'#91c46b'};$('#barLabelLeft').barIndicator(opt);