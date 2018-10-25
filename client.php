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
			    "api_key": "78HHJYO091", 
			    "template_id": 106, 
			    "phone_number": 6299475799378, // nomor telpon customer
			    "data": {
					"apa": "Mr. Smith"
			    }
			};
			
			$(".response").append("Send Message to indoshopster...\n\n");
			$(".response").append("Parameter : \n");
			$(".response").append(JSON.stringify(params)+" \n\n");
  	  		
  	  		$.ajax({
			    data: JSON.stringify(params),
			    contentType: 'application/json',
			    method: "POST",
			    url: 'http://localhost:1212/sendWhatsappMessage',
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