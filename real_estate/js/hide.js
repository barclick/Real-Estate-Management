 $(function () {
 	$("#input").change(function () {
 		if ($(this).val() == "today") {
 			$("#show").show();
 		} else {
 			$("#show").hide();
 		}
 	});
 });