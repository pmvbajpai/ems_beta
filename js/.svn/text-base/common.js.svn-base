$(".grid-view a.update").live('click', function(e){

	var update_url = $(this).attr('href');
	$.ajax({
		url : update_url,
		type: 'post',
		'success' : function(data) {
			//console.log(data);
			$("#form_container").html(data);
			var body = $("html, body");
			body.animate({scrollTop:200}, '500', 'swing', function() { });
		},
	});

	return false;
});