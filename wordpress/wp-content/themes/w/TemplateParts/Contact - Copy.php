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

add_filter( 'wp_mail_content_type', 'wpdocs_set_html_mail_content_type' );
// Reset content-type to avoid conflicts -- https://core.trac.wordpress.org/ticket/23578

function wpdocs_set_html_mail_content_type() {
    return 'text/html';
}


?>
<div class="container">
      <?php  if (is_active_sidebar('contact_header' )) : ?>
                   <?php dynamic_sidebar( 'contact_header' ); ?>
      <?php endif; ?>       
</div>        
<style>
    html {
        
    padding: 0px !important;
        margin: 0px !important;
    }
    .fa,.fa-phone{
        font-family: "Font Awesome 5 Free" !important;
    }
    .part{
        width:100%;
        padding:30px 0px;
        float:left;
        background: url(<?php bloginfo('template_url');?>/images/connectback.jpeg);
        background-attachment: fixed;
        
    }
    .part div{
        float: left;
        padding: 0px 27px;
    }

       .part2{
           width:100%;
         padding:30px;
           float:left;
           margin:auto;
           background: url(<?php bloginfo('template_url');?>/images/connectback.jpeg);
           background-attachment: fixed;
    }
    .overlaycont{
        width: 33.3333%;height:auto;
    }
    h4{
        margin:auto;
        color:#333;
        font-weight: 200;
        font-size: 1.5rem;
        color: #d7f7ff;   
    }
    .googlemap_div{
        background: rgba(0,0,0,.2);
    }
    /* form style */
    .form2 .wpcf7 .wpcf7-form >p{
    width: 100% !important;
    overflow: auto !important;
    margin: 0px !important !important;
    width: 100% !important;
    overflow: auto !important;
    margin: 0px !important;
  /*  background: rgba(0,0,0,.4) ;*/
    } 
    .form2 .wpcf7 .wpcf7-form >p textarea{
        height:120px;
        }
    .form2 .wpcf7 .wpcf7-form >p input, .form2 .wpcf7 .wpcf7-form >p textarea{
            width: 81% !important;
           float: right!important;
        margin-right: 36px !important;
        background: rgba(0,0,0,.4) ;
        border-radius: 6PX !IMPORTANT;
        color: #fff !important;
    }
    .form2 .wpcf7 .wpcf7-form >p input[type="submit"]{
        width: 10% !important;
    color: #fff;
    padding: 5px;
    float: right!important;
    background: #0382c5;
    border-radius: 6PX !IMPORTANT;
    }
    .form2 .wpcf7 .wpcf7-form >p label{
        width:100% !important;
        color: #fff;
        text-align: left;
    }
   .form2 form p label font
    {
    float: left !important;
    width: 7% !imortant;
    color: #fff !important;
    PADDING-TOP: 12PX;
    }
     .form2 .wpcf7 .wpcf7-form >p input:focus, .form2 .wpcf7 .wpcf7-form >p textarea:focus,
    .form2 .wpcf7 .wpcf7-form >p input:hover, .form2 .wpcf7 .wpcf7-form >p textarea:hover{
    color: #fff!important;
    }
         .form2 .wpcf7 .wpcf7-form >p input:visited, .form2 .wpcf7 .wpcf7-form >p textarea:visited
 {
    
        color: #fff !important;
    }
.screen-reader-response font,.wpcf7-response-output ,.wpcf7-validation-errors{
        color: #fff;
    }
    #webform .form-group{
        padding: 10px;
        margin: 10px 0px;
        overflow: auto;
    }
    #webform .form-group label{
       float: left;
    width: 15%;
        color: #d7f7ff; 
    }
    #webform .form-group .form-control{
            float: left;
    width: 85% !important;
    }
     #subbtn
    {
    float: right !important;
    background: #309cda;
    color: #fff !important;
        margin-right:10px;
    }
   /* end form style */
 @media (min-width:300px) and (max-width:768px){
.captcha{
padding-left:0 !important;
width:85% !important;
}
  .form2 .wpcf7 .wpcf7-form >p input[type="submit"]{
        width: 21% !important;
     }
     
h1,.h1 { 
    padding-top: -17px !important;
    font-size: 1.5rem !important;
}
p{
    font-size: 12px !important;   
    padding: 0px !important;
}
.overlaycont{
   width: 100%;       
}
.content{
    font-size: 15px;
    padding: 0px;
}  
.part div {
    padding: 1px 13px;
}
.contact_us .headicon {
    font-size: 24px;
}
#part2 h4{
    font-size: 1.3rem;
}
.form-group label {
    width: 25%;
    font-size: .8rem;
}
     #webform .form-group label{
         width:25%;
     }
}

 @media (min-width:768px) and (max-width:1200px){
     .part div{
    padding: 1px 12px !important;
    
     }  
     .contact_us .headicon{
    position: relative;
    top: -14px;
     }
     
    }
    
    @media (min-width:650px) and (max-width:768px){

    }
    @media (min-width:769px) and (max-width:992px){
    .form2 .wpcf7 .wpcf7-form >p input[type="submit"]{
        width: 30% !important;
    }
        }
</style>  

<style>
    #menu-item-25 a{
             border-bottom: 2px solid #80252c;
    }
    #res_msg
    {
        color: #dcd3d3;
    }
</style>
<div class="container-fluid con">
    <div class="part" >
 <!--   <div style="width:100%;margin:auto;">-->
        
<!--        maps called from db-->
           <div class="googlemap_div container-fluid overlaycont"  >
                    
                <?php  if (is_active_sidebar('contact_map1' )) : ?>
                   <div class="overlay"></div>
                               <?php dynamic_sidebar( 'contact_map1' ); ?>
                <?php endif; ?>
 
                   <div class="con" style="padding:0px !important;">
                      <?php  if (is_active_sidebar('contactthreediv1' )) : ?>
                                            <?php dynamic_sidebar( 'contactthreediv1' ); ?>
                                  <?php endif; ?>

                   </div>
                   <div class="con" style="padding:0px !important;">
                      <?php  if (is_active_sidebar('contactthreediv2' )) : ?>
                                            <?php dynamic_sidebar( 'contactthreediv2' ); ?>
                                  <?php endif; ?>

                    </div>
              
                      
            </div>
           <div class="googlemap_div container-fluid overlaycont"  >
                    
                <?php  if (is_active_sidebar('contact_map2' )) : ?>
                   <div class="overlay"></div>
                               <?php dynamic_sidebar( 'contact_map2' ); ?>
                <?php endif; ?>

                  <!-- contact email and phone -->
                   <div class="con" style="padding:0px !important;">
                      <?php  if (is_active_sidebar('contactthreediv1' )) : ?>
                                            <?php dynamic_sidebar( 'contactthreediv12' ); ?>
                                  <?php endif; ?>

                   </div>
                   <div class="con" style="padding:0px !important;">
                      <?php  if (is_active_sidebar('contactthreediv2' )) : ?>
                                            <?php dynamic_sidebar( 'contactthreediv22' ); ?>
                                  <?php endif; ?>

                    </div>
                      
            </div>
           <div class="googlemap_div container-fluid overlaycont"  >
                    
                        <?php  if (is_active_sidebar('contact_footer' )) : ?>
                           <div class="overlay"></div>
                                       <?php dynamic_sidebar( 'contact_footer' ); ?>
                        <?php endif; ?>

                   <div class="con" style="padding:0px !important;">
                      <?php  if (is_active_sidebar('contactthreediv1' )) : ?>
                                            <?php dynamic_sidebar( 'contactthreediv13' ); ?>
                                  <?php endif; ?>

                   </div>
                   <div class="con" style="padding:0px !important;">
                      <?php  if (is_active_sidebar('contactthreediv2' )) : ?>
                                            <?php dynamic_sidebar( 'contactthreediv23' ); ?>
                                  <?php endif; ?>

                    </div>
            </div>
 <!--   </div>-->
    </div>   
</div>


<div class="container-fluid form2 part2" style="padding:70px 10px !important;" >
            <h4>Send Us Message</h4>

     <!-- coded to send mail to admin mail  -->
    
   <!-- ///// contact code api -->
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

    

<form  id="webform" action="" method="post">
  <div class="form-group">
    <label for="text">Name:</label>
    <input required  type="text" class="form-control" name="wpname" id="wpname">
  </div>
      <div class="form-group">
    <div class="center" id="msgvalide" style="color:#fff"></div>
        </div>   
  <div class="form-group">
    <label for="text">Email:</label>
    <input required type="text" class="form-control" name="wpemail" id="wpemail">
  </div>
  <div class="form-group">
    <label for="text">Subject:</label>
    <input  required  type="text" class="form-control" name="wptitle" id="wptitle">
  </div>
  <div class="form-group">
    <label for="pwd">Message:</label>
 <!--   <input >-->
      <textarea  required type="text" class="form-control" name="wpcontent" id="wpcontent" style="height:150px">
      
      </textarea>
  </div>
<div class="form-group captcha" style=" width:100%;padding-left:15%;">
    <div class="g-recaptcha" data-sitekey="6Lfbz6AUAAAAACFLfznXv2aF5SB53vZR8wXuG2cb">  </div>
</div>
  <button type="submit" class="btn btn-default"  name="submit_btn" id="subbtn" style="background:#630b19">Submit</button>
</form>
 
</div>
<script>
document.getElementById("wpemail").addEventListener("keyup", mouseLeave);

function mouseLeave() {
/*  document.getElementById("wpemail").style.background = "#eee";
    document.getElementById("wpemail").style.color = "white";  */

       ValidateEmail();
}
function ValidateEmail(){
 var testing_issue="false";
var email = document.getElementById("wpemail"); 
var re ="/^(([^<>()[]\+/-0)((^%$!':;))#";
    for(var i=0;i<re.length;i++){
        if(email.value.includes(re[i])){
            testing_issue="true"; 
            break;
        }
    }
if (testing_issue=="true")
{
/*   alert('Please enter a valid email address.');*/
    document.getElementById('msgvalide').innerHTML ="Please enter a valid email address";

}
    else{
       document.getElementById('msgvalide').innerHTML ="";  
    }
    
}


</script>

