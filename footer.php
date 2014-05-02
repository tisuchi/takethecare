	<footer>
		<div class="container-fluid">
			<div class="row-fluid footer-border">
				<div class="span6">
				   <p>Copyright © <?php the_time('Y') ?> by <?php bloginfo('name'); ?>. </p>
				</div>
				<div class="span6">
					<div id="footer-menu" class="pull-right">

						<?php //wp_nav_menu(array('menu' => 'Footer Menu')); ?>

					</div>
				</div>
			</div> <!-- End Row -->
			

<!-- 			<div class="row-fluid footer-bottom">
	<div class="span8 footer-subscribe">
		<h4>Subscrbe by Email for latest update:</h4>
		Begin MailChimp Signup Form
		<form action="http://velorastudios.us5.list-manage.com/subscribe/post?u=3eb59c0744a850c1b1cab4c95&amp;id=a65e7f5a53" method="POST" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate subscribe-form" target="_blank">
			<input type="text" name="MERGE1" id="MERGE1" size="25" maxlength="255" placeholder="Full Name" value="">

			<input type="email" name="MERGE0" id="MERGE0" size="25" maxlength="255" placeholder="Email" value="">     

			<input type="submit" class="default-btn small-btn" name="submit" value="Subscribe">

			<div class="response" id="mce-error-response" style="display:none"></div>
			<div class="response" id="mce-success-response" style="display:none"></div>
		</form>
		<script type="text/javascript">
			var fnames = new Array();var ftypes = new Array();fnames[1]='FNAME';ftypes[1]='text';fnames[0]='EMAIL';ftypes[0]='email';
			try {
			  var jqueryLoaded=jQuery;
			  jqueryLoaded=true;
			} catch(err) {
			  var jqueryLoaded=false;
			}
			var head= document.getElementsByTagName('head')[0];
			if (!jqueryLoaded) {
			  var script = document.createElement('script');
			  script.type = 'text/javascript';
			  script.src = 'http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js';
			  head.appendChild(script);
			  if (script.readyState && script.onload!==null){
				  script.onreadystatechange= function () {
						if (this.readyState == 'complete') mce_preload_check();
				  }    
			  }
			}
			var script = document.createElement('script');
			script.type = 'text/javascript';
			script.src = 'http://downloads.mailchimp.com/js/jquery.form-n-validate.js';
			head.appendChild(script);
			var err_style = '';
			try{
			  err_style = mc_custom_error_style;
			} catch(e){
			  err_style = '#mc_embed_signup input.mce_inline_error{border-color:#6B0505;} #mc_embed_signup div.mce_inline_error{margin: 0 0 1em 0; padding: 5px 10px; background-color:#6B0505; font-weight: bold; z-index: 1; color:#fff;}';
			}
			var head= document.getElementsByTagName('head')[0];
			var style= document.createElement('style');
			style.type= 'text/css';
			if (style.styleSheet) {
			style.styleSheet.cssText = err_style;
			} else {
			style.appendChild(document.createTextNode(err_style));
			}
			head.appendChild(style);
			setTimeout('mce_preload_check();', 250);

			var mce_preload_checks = 0;
			function mce_preload_check(){
			  if (mce_preload_checks>40) return;
			  mce_preload_checks++;
			  try {
				  var jqueryLoaded=jQuery;
			  } catch(err) {
				  setTimeout('mce_preload_check();', 250);
				  return;
			  }
			  try {
				  var validatorLoaded=jQuery("#fake-form").validate({});
			  } catch(err) {
				  setTimeout('mce_preload_check();', 250);
				  return;
			  }
			  mce_init_form();
			}
			function mce_init_form(){
			  jQuery(document).ready( function($) {
				var options = { errorClass: 'mce_inline_error', errorElement: 'div', onkeyup: function(){}, onfocusout:function(){}, onblur:function(){}  };
				var mce_validator = $("#mc-embedded-subscribe-form").validate(options);
				$("#mc-embedded-subscribe-form").unbind('submit');//remove the validator so we can get into beforeSubmit on the ajaxform, which then calls the validator
				options = { url: 'http://velorastudios.us5.list-manage2.com/subscribe/post-json?u=3eb59c0744a850c1b1cab4c95&id=a65e7f5a53&c=?', type: 'GET', dataType: 'json', contentType: "application/json; charset=utf-8",
							  beforeSubmit: function(){
								  $('#mce_tmp_error_msg').remove();
								  $('.datefield','#mc_embed_signup').each(
									  function(){
										  var txt = 'filled';
										  var fields = new Array();
										  var i = 0;
										  $(':text', this).each(
											  function(){
												  fields[i] = this;
												  i++;
											  });
										  $(':hidden', this).each(
											  function(){
												  var bday = false;
												  if (fields.length == 2){
													  bday = true;
													  fields[2] = {'value':1970};//trick birthdays into having years
												  }
												if ( fields[0].value=='MM' && fields[1].value=='DD' && (fields[2].value=='YYYY' || (bday && fields[2].value==1970) ) ){
												  this.value = '';
								} else if ( fields[0].value=='' && fields[1].value=='' && (fields[2].value=='' || (bday && fields[2].value==1970) ) ){
												  this.value = '';
								} else {
									if (/\[day\]/.test(fields[0].name)){
														this.value = fields[1].value+'/'+fields[0].value+'/'+fields[2].value;                         
									} else {
														this.value = fields[0].value+'/'+fields[1].value+'/'+fields[2].value;
													}
												}
											  });
									  });
								  return mce_validator.form();
							  }, 
							  success: mce_success_cb
						  };
				$('#mc-embedded-subscribe-form').ajaxForm(options);
				
			  });
			}
			function mce_success_cb(resp){
			  $('#mce-success-response').hide();
			  $('#mce-error-response').hide();
			  if (resp.result=="success"){
				  $('#mce-'+resp.result+'-response').show();
				  $('#mce-'+resp.result+'-response').html(resp.msg);
				  $('#mc-embedded-subscribe-form').each(function(){
					  this.reset();
				});
			  } else {
				  var index = -1;
				  var msg;
				  try {
					  var parts = resp.msg.split(' - ',2);
					  if (parts[1]==undefined){
						  msg = resp.msg;
					  } else {
						  i = parseInt(parts[0]);
						  if (i.toString() == parts[0]){
							  index = parts[0];
							  msg = parts[1];
						  } else {
							  index = -1;
							  msg = resp.msg;
						  }
					  }
				  } catch(e){
					  index = -1;
					  msg = resp.msg;
				  }
				  try{
					  if (index== -1){
						  $('#mce-'+resp.result+'-response').show();
						  $('#mce-'+resp.result+'-response').html(msg);            
					  } else {
						  err_id = 'mce_tmp_error_msg';
						  html = '<div id="'+err_id+'" style="'+err_style+'"> '+msg+'</div>';
						  
						  var input_id = '#mc_embed_signup';
						  var f = $(input_id);
						  if (ftypes[index]=='address'){
							  input_id = '#mce-'+fnames[index]+'-addr1';
							  f = $(input_id).parent().parent().get(0);
						  } else if (ftypes[index]=='date'){
							  input_id = '#mce-'+fnames[index]+'-month';
							  f = $(input_id).parent().parent().get(0);
						  } else {
							  input_id = '#mce-'+fnames[index];
							  f = $().parent(input_id).get(0);
						  }
						  if (f){
							  $(f).append(html);
							  $(input_id).focus();
						  } else {
							  $('#mce-'+resp.result+'-response').show();
							  $('#mce-'+resp.result+'-response').html(msg);
						  }
					  }
				  } catch(e){
					  $('#mce-'+resp.result+'-response').show();
					  $('#mce-'+resp.result+'-response').html(msg);
				  }
			  }
			}
		</script>
		End mc_embed_signup
		<p class="subscribe-p">Get the best tips in your inbox! (Mailchimp email subscribe form with validation)</p>

		<h4>Follow Us:</h4>
		<span class="social"><a id="twitterb" href="3">u</a> <a id="facebookb" href="3">f</a> <a id="googleb" href="3">g</a> <a id="pinterestb" href="3">l</a> <a id="stumbleb" href="3">N</a> <a id="flickrb" href="3">h</a> <a id="wordb" href="3">w</a> <a id="rssb" href="3">r</a></span>
	    <div class="footer-brand"><a class="brand" href="index.html">trikun </a> web apps | desktop apps | iphone apss</div> 
	</div> End span8
	<div class="span4 contact-border">
		<form action="/" class="validate" target="_blank">
			<h4>Contact Us:</h4>
			<input type="text" size="25" maxlength="255" placeholder="Full Name" value="">
			<br>
			<input type="email" size="25" maxlength="255" placeholder="Email" value="">
			<br>     
			<textarea rows="5" placeholder="Message"></textarea>
			<br>
			<input type="submit" class="default-btn" name="submit" value="Send Message">     
		</form>
	</div> End span4
</div> End Row -->

<br/>
	<!-- this code for alexa.com widget -->
<a href="http://www.alexa.com/siteinfo/www.takethecare.com"><script type='text/javascript' src='http://xslt.alexa.com/site_stats/js/t/c?url=www.takethecare.com'></script></a>

		</div> <!-- End container -->
	</footer> <!-- End footer -->
</body>
</html>