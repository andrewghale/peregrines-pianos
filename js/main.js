(function($) {
	$(function() {

		$('.shop_attributes')
			.hide()
			.parent('div').prepend(
				$('<a href="#">Show</a>').on('click', function() {

					var $this = $(this);

					var $table = $this.parent().find('.shop_attributes');

					$table.toggle();

					$this.text($table.is(":visible") ? 'Hide' : 'Show');

					return false;
				})
			);
	    });

}(jQuery));