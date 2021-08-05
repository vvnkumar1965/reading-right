<div class="container">
	<h2>Example: Send Email with Attachment in PHP</h2>
	<div id='success_message' class='hidden'>		 
		 <h2>Your Mail Sent Successfully!</h2>
		 <p><strong>You will be in touch soon.</strong></p>		 
	</div>	
	<form action='email_send.php' class="form-email" method="post" id="email-form" enctype='multipart/form-data'>		
		<div id="error">
		</div>
		<div class="form-group">
			<input type="input" class="form-control" placeholder="Name" name="u_name" id="u_name" />
			<span id="check-e"></span>
		</div>
		<div class="form-group">
			<input type="email" class="form-control" placeholder="Email address" name="u_email" id="u_email" />
			<span id="check-e"></span>
		</div>		
		<div class="form-group">
			<input type="file" class="form-control" placeholder="File" name="attach" id="attach" />
		</div>
		<div class="form-group">
			<textarea cols="60" rows="5"  id="message" name="message" placeholder='Message'>http://xkcd.com/info.0.json ; http://xkcd.com/614/info.0.json</textarea>
		</div>
		<hr />
		<div class="form-group">
			<button type="submit" class="btn btn-default" name="email_send" id="email_send">
			Send Email
			</button> 
		</div> 
	</form>	
</div>