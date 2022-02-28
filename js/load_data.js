$(document).ready(function(){
	
	$(".loadData").click(function(){
		alert("kldj");
		$.ajax({
			 type: "GET",
			 url: "AccountController.php",
			 data: {action: 'getList'},
			 success: function(data) {
			 	let json = JSON.parse(data);
			 	alert(json.length);
			 	let html = "";
			 	for(let i = 0; i < json.length; i++) {  
				    
				    html += `<tr><td>${json[i].name}</td><td>`+
				    `<img src="../../uploads/images/${json[i].image}" width="75px" height="75px" />`+
				    `</td></tr>`;

				}
				// console.log(html);
				$("#tableContent tbody").html(html);		 	
			 },
			 error: function(xhr, status, error) {
			 	console.error(xhr);
			 	}
			 });
		});	 		

});

