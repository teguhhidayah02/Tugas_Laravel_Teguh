<<<<<<< HEAD
$(function()){
	var currrent = window.location.href;
	$('ul.navbar-nav li a').each(function(){
		var $this = $(this);
		if($this.attr('href') == currrent){
			$this.parents(li).addClass('active');
		}
	});
};
=======
$(function(){
	var current = window.location.href;
	$('ul.navbar-nav li a').each(funtion(){
		var $this = $(this);
		if($this.attr('href') == current){
		$this.parents('li').addClass('active');
	}
	});
});
>>>>>>> eps.7
