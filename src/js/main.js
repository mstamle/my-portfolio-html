

$('.myProgress').appear();

function progress(barID,value){
    $(barID).delay(200).animate({'width':value}, 500);
};

$('.myProgress').on('appear', function() {
    progress('#b1','80%');
    progress('#b2','60%');
    progress('#b3','70%');
    progress('#b4','60%');
    progress('#b5','70%');
    progress('#b6','80%');
    progress('#b7','60%');
    progress('#b8','50%');

});