<!DOCTYPE html>
<html>
<head>
	<title>Contoh Indoshopster Chat Client</title>
	<style type="text/css">
		.response {
			height: 300px;
			border: 1px solid #666;
			padding: 10px;
			margin-top: 15px;
			overflow: scroll;
			background: #000;
			color: limegreen;
		}
	</style>
</head>
<body>
<h2>API Send Message</h2>
<button id="sendMessage">Send Message</button>
<pre class="response"></pre>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
  	jQuery(function($){
  	  	$("#sendMessage").click(function(){
  	  		
  	  		// parameter
  	  		var params = {
			    "api_key": "YUUB787435673465GGsgr", 
			    "template_id": 200043543856, 
			    "phone_number": 6266324732846, // nomor telpon customer
			    "data": { // pastikan data yang dikirin sesuai dengan template, nama key juga harus sama
				"fullname": "Mr. Smith", 
				"order_id": 67,
				"order_date": "2018-10-09 17:30:00"
			    }
			};
			
			$(".response").append("Send Message to indoshopster...\n\n");
			$(".response").append("Parameter : \n");
			$(".response").append(JSON.stringify(params)+" \n\n");
  	  		
  	  		$.ajax({
			    data: JSON.stringify(params),
			    contentType: 'application/json',
			    method: "POST",
			    url: 'http://chat.indoshopster.com:1212/sendWhatsappMessage',
			    success: function(data) {
		      	  	// callback
		          	$(".response").append("response : \n"+JSON.stringify(data)+"\n\n");
		      	}
		  	});
  	  	});
  	});
</script>
</body>
</html>
