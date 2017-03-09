$(document).ready(function(){

    $('.to_moment').each(function(){
        var date = $(this).attr('data-date');
        var moment = getMoment(date);
        $(this).html(moment);
    });

});

function getMoment( date )
{
    var time = moment(date);
    return  time.fromNow();
}
