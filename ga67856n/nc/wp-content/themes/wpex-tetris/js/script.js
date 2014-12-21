$(document).ready(function() {
    $(".logo").hover(
        function () {
            $(this).attr("src", "images/logo2.gif");
        },
		function () {
			$(this).attr("src", "images/logo.jpg");
		}
	);
});