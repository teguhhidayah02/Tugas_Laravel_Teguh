$(function()){
	var currrent = window.location.href;
	$('ul.navbar-nav li a').each(function(){
		var $this = $(this);
		if($this.attr('href') == currrent){
			$this.parents(li).addClass('active');
		}
	});
};