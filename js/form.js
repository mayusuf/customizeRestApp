$(document).ready(function(){

	$("#createForm").click(function(){

		let name = $(".name").val();

		if(name == ""){
			alert("Name Field is Empty!!");
			return false;
		}

		$.ajax({
			 type: "POST",
			 url: "AccountCreateController.php",
			 data: {
			 	name: name,
			 },
			 cache: false,
			 success: function(data) {
			 	$(".name").val("");
			 	alert(data);			 	
			 },
			 error: function(xhr, status, error) {
			 	console.error(xhr);
			 	}
			 });

		

	});

});

