<style>

    .comment-metadata a{
        color: #000;
    }
    #comments{
   /*     background:  rgb(0,0,0,.3);*/
    }
    .comment-edit-link{
        display: none;
    }
    .comment-content p{
        height: auto;
        padding: 0px;
        margin: 24px;
        color: #000!important;
    }
    .reply a,.trp-wrap,.fn a,#email-notes,.comment-form-comment label,.comment-form-url label,
    .comment-form-cookies-consent label,.logged-in-as a{
        color: #000 !important;
    }
    .form-submit input{
        background: #fff;
        border-radius: 5px;
        padding: 6px;
        color: #3e667c;
        font-weight: 600;
    }
</style>



<?php /*
	
@package sunsettheme

*/

if( post_password_required() ){
	return;
}

?>

<div id="comments" class="comments-area">
	
	<?php 
		if( have_comments() ):
		//We have comments
	?>
	
	<ol class="comment-list">
		
		<?php 
			
			$args = array(
				'walker'			=> null,
				'max_depth' 		=> '',
				'style'				=> 'ul',
				'callback'			=> null,
				'end-callback'		=> null,
				'type'				=> 'all',
				'reply_text'		=> 'Reply',
				'page'				=> '',
				'per_page'			=> '',
				'avatar_size'		=> 32,
				'reverse_top_level' => null,
				'reverse_children'	=> '',
				'format'			=> 'html5',
				'short_ping'		=> false,
				'echo'				=> true
			);
			
			wp_list_comments( $args );
		?>
		
	</ol>
	
	<?php 
		if( !comments_open() && get_comments_number() ):
	?>
		 
		 <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'sunsettheme' ); ?></p>
		 
	<?php
		endif;
	?>
		
	<?php	
		endif;
	?>
	
	<?php comment_form(); ?>
	
</div><!-- .comments-area -->



<script>

$(document).ready(function(){
   $('#submit').val('commit'); 
/*
    $('.comment-list').replaceWith('<ul class="comment-list"></ul>');
*/
});

</script>