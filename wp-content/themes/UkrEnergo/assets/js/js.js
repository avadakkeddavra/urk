    $('.active-tab').animate({
    	opacity:1,
    },100);
    $('.info-tabs br').remove();
    $('.tab-content > br, .tab-content > p, .single_post_info .col-sm-9 > br, .single_post_info .col-sm-9 > p').remove();
$('.info-tabs a').click(function (e) {
  e.preventDefault();
    $('.info-tabs a').removeClass('active');
    $(this).addClass('active');
    var elem = $(this).attr('href');
    $('.tab-info').removeClass('active-tab');
    $(elem).addClass('active-tab');
    $('.active-tab').animate({
    	opacity:1,
    },100);
})