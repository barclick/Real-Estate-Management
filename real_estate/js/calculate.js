$(document).ready(function () {
	function calculator() {
		var amt = $('.amount:gt(0)'),
		tot = $('#total');
		amt.text(function () {
			var tr = $(this).closest('tr');
			var qty = tr.find('.qty').val();
			var price = tr.find('.price').val();
			return parseFloat(qty) * parseFloat(price);
		});
		tot.text(function () {
			var sum = 0;
			amt.each(function () {
				sum += parseFloat($(this).text())
			});
			return sum;
		});
	}
	calculator();
	$('.qty,.price').change(calculator);
});