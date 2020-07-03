<script src="https://www.google.com/recaptcha/api.js"></script>

<?php 
  if(isset($_REQUEST['submit_btn'])){
$url='https://www.google.com/recaptcha/api/siteverify';
$privatekey="6Lfbz6AUAAAAAPax369uMeIm1SlkMgXCMHXv2yG7";
$verifyResponse = file_get_contents($url.'?secret='.$privatekey.'&response='.$_POST['g-recaptcha-response']);
$response =file_get_contents($url."?secret=".$privatekey."$response=".$_POST['g-recaptcha-response']."$remoteip=".$_SERVER[REMOTE_ADDR]);
$data=json_decode($verifyResponse);
if(isset($data->success)AND$data->success==true){
   $posted="true";
    $wpname=$_POST["wpname"];
  $wpemail=$_POST["wpemail"];

$stopemail="false";
if(!filter_var($wpemail, FILTER_VALIDATE_EMAIL)){
   $wpemail=" email not true";
$stopemail="true";
}

   $wptitle=$_POST["wptitle"];
   $wpcontent=$_POST["wpcontent"];
$to = 'raniaahmed7000@gmail.com';
$subject = $wptitle .'from '. $wpemail .'name is '.$wpname;
$body = $wpcontent;
if($stopemail=="false"){
$x=wp_mail($to, $subject, $body);
}else{
$recap="fail";
}
} 

}

?>
<style>
    .topmenu{position: fixed;}
/*    .messageContainer{margin-top: 80px;}*/
</style>



<div class="ContactContainer">

    <div class="messageContainer">
         <h2 class="contactText"> Contact</h2>
    

    <div class="messageBlock container-fluid"> 
       <div class="messageIcon">
           <h2>we ‘d love to hear from you </h2>
           <img src="<?php bloginfo('template_url');?>/images/ContactIcon.png">
        </div>
        <div class="messageContent">
          <div class="formBlock">
            
        
              <form action="" style="display: none !important;">
                <div class="form-group">
                  <label for="email">Name:</label>
                  <input type="email" class="form-control" name="wpname" id="wpname"  placeholder="Enter name" >
                </div>
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" name="wpemail" id="wpemail" placeholder="Enter email" >
                </div>
                <div class="form-group">
                  <label for="email">Phone:</label>
                  <input type="email" class="form-control" name="wptitle" id="wptitle" placeholder="Enter phone" >
                </div>
              <div class="form-group">
                  <label for="">Message:</label>
                  <input type="" class="form-control" name="wpcontent" id="wpcontent" placeholder="Enter Message" name="message">
                </div>
                <div class="checkbox">
                  <label><input type="checkbox" name="remember"> Remember me</label>
                </div>
                      
                      
                <div class="form-group captcha" style=" width:100%;padding-left:15%;">
                    <div class="g-recaptcha" data-sitekey="6Lfbz6AUAAAAACFLfznXv2aF5SB53vZR8wXuG2cb">  </div>
                </div>
                <button type="submit" class="btn btn-default"  name="submit_btn"  >Submit</button>
              </form>
              
            
              
              <!--contact form -->
              
              <style>
 

              </style>
              
              
    <div class="container contact">
	    <div class="row">

        <div style="color:#fff"> <?php  
            if($x==1){
                echo  "thanks your message is send  "; }
                elseif($x==0&& $posted=="true"&&$stopmail=="true"){
                echo "sorry your message is not send please recaptcha ";
                }
                elseif($posted=="true") {
                echo "sorry your message is not send please try again";
                }
            ?>
        </div>
            
		<div class="Mblock8 col-md-8 col-sm-12">
			<div class="contact-form">
				<div class="form-group">
				  <span class="control-label col-sm-2" for="fname"> Nameee:</span>
				  <div class="col-sm-12">          
					<input type="text" class="form-control" id="fname" placeholder="Enter Name" name="fname">
				  </div>
				</div>
				<div class="form-group">
				  <span class="control-label col-sm-2" for="lname">Email</span>
				  <div class="col-sm-12">          
					<input type="text" class="form-control" id="lname" placeholder="Enter Email" name="lname">
				  </div>
				</div>
				<div class="form-group">
				  <span class="control-label col-sm-2" for="email"> phone</span>
				  <div class="col-sm-12">
					<input type="email" class="form-control" id="email" placeholder="Enter Phone" name="email">
				  </div>
				</div>
				<div class="form-group">
				  <span class="control-label col-sm-2" for="comment">message </span>
				  <div class="col-sm-12">
					<textarea class="form-control" rows="5" id="comment"></textarea>
				  </div>
				</div>
                
                <div class="form-group captcha" style=" width:100%;padding-left:15%;">
                    <div class="g-recaptcha" data-sitekey="6Lfbz6AUAAAAACFLfznXv2aF5SB53vZR8wXuG2cb">  </div>
                </div>
                
                
				<div class="form-group">        
				  <div class=" col-sm-12" style="margin-top: 20px;">
					<button id="submitBtn" type="submit" name="submit_btn" id="subbtn"   class="btn btn-default" style="width:100%">
                        Send Message</button>
				  </div>
				</div>
			</div>
		</div>
	</div>
    </div>
              <!---->
            </div>
        
        </div>
    </div>
    
    


    </div>

</div>
    

    