<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vromon
 */
$categories_list = get_the_category_list( esc_html__( ', ', 'vromon' ) );
$tags_list = get_the_tag_list( '', esc_html__( ', ', 'vromon' ) );
$vromon_embede_code = get_post_meta(get_the_ID(), '_vromon_embed_code', true);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php if($vromon_embede_code){ ?>
	<div class="post_audio_video"> 
		<?php echo vromon_wp_kses($vromon_embede_code); ?>
	</div>
<?php } ?>
		<div class="post_text">	
		<?php 
			if(!is_single()){
				the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			}
		?>	

			<div class="meta_area">
				<span class="single_meta"><i class="fa fa-user"></i> <?php echo vromon_author();?></span>
				<span class="single_meta"><i class="fa fa-clock-o"></i> <?php echo esc_html(get_the_time('d M , Y'));?></span>
				<span class="single_meta"><i class="fa fa-comments"></i> <?php comments_popup_link( '0 comments', '1 Comment ', '% Comments ', 'comments-link', ' 0 Comments '); ?></span>
				<?php if($categories_list){ ?><span class="single_meta"><i class="fa fa-folder"></i> <?php echo vromon_wp_kses($categories_list); ?></span><?php } ?>
				<?php if($tags_list){ ?><span class="single_meta"><i class="fa fa-tags"></i> <?php echo vromon_wp_kses($tags_list); ?></span><?php } ?>
			</div>

			<div class="entry-content">
				<?php
				if(is_single()){
					the_content();
				}else{
					the_excerpt();
				}
				if(!is_single()){ ?>
					<a href="<?php the_permalink();?>" class="btn btn-default btn-post-bg"><?php esc_html_e('Read More' , 'vromon');?></a>
				<?php	}	

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'vromon' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->
	</div>	
</article><!-- #post-<?php the_ID(); ?> -->
