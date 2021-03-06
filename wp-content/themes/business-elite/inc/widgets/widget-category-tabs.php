<?php
class Business_elite_categ_tabs extends WP_Widget {
	function __construct(){
		$widget_ops = array('description' => __('Displays Categories tabs', "business-elite"));
		$control_ops = array('width' => '', 'height' => '');
		parent::__construct(false,$name='Categories tabs',$widget_ops,$control_ops);
	}
	/* Displays the Widget in the front-end */
	function widget($args, $instance){
		extract($args);
		$title =  esc_html( $instance['title']);
		$categ_id = empty( $instance['categ_id'] ) ? '' : $instance['categ_id'];
		$post_count = empty( $instance['post_count'] ) ? '' : $instance['post_count'];
		echo $before_widget;
		if ( $title )
			echo $before_title . $title . $after_title; ?>

		<style>
			#wdposts-tabs .tabs-block { position:relative;}

			.cat_tabs li {list-style: none;}

			.posts-tabs-left, .posts-tabs-right {
				vertical-align: middle;
				display: table-cell;
				position:absolute;
				cursor: pointer;
				display:none;
				z-index:1;
				top: 50px;
				width:30px;
			}
			.posts-tabs-left {left:-1px;}

			.posts-tabs-right {right:0px;}

			.posts-tabs-left,
			.posts-tabs-right {display:block;}

			.posts-tabs-left span,
			.posts-tabs-right span {
				position:relative;
				text-indent:-9999px;
				cursor: pointer;
				display:block;
				height: 40px;
				width:100%;
				float:left;
			}

			.posts-tabs-left  span {background: url(<?php echo get_template_directory_uri('template_url'); ?>/images/arrow-left-right-black.png) center bottom no-repeat;}

			.posts-tabs-right span {
				background: url(<?php echo get_template_directory_uri('template_url'); ?>/images/arrow-left-right-black.png) center top no-repeat;
				margin-left:0px;
			}

			#wdposts-tabs .tabs li {
				width:100% !important;
				display:none;
			}

			#wdposts-tabs .tabs  li.active {
				transition: all 0.5s;
				-webkit-font-smoothing: subpixel-antialiased;
				-webkit-transform: translateZ(0px);
				display: block;
			}

			#wdposts-tabs .tabs  li a {
				text-align:center !important;
				width:40% !important;
				margin:0px auto;
			}

			#wdposts-tabs ul.wdcontent >  li {display:none;}

			#wdposts-tabs ul.wdcontent > li.active {
				border: 1px solid #EAEAEA;
				height:auto !important;
			}

			#wdposts-tabs .wdcontent ul {
				padding:10px 10px 0px 10px;
				width:100%;
			}

			#wdposts-tabs .wdcontent ul li {
				clear:both;
				width:100%;
			}

			#wdposts-tabs .wdcontent ul li  .text {width:70%;}

			#wdposts-tabs{
				position:relative;
				height:auto;
				width: 100%;
			}

			#wdposts-tabs ul.tabs {
				height:140px !important;
				position:relative;
				display:table;
				width:calc(100% - 20px);
				margin: 0;
			}

			.widget_post_image{
				height:150px !important;
				width:250px !important;
			}

			.widget_post_image  img{
				height:auto !important;
				width:100% !important;
			}

			#wdposts-tabs  ul.tabs li { float:left;}

			#wdposts-tabs  ul.tabs li:last-child  { margin-right:0%;}

			#wdposts-tabs ul.wdcontent { width: 100%; background-color:#fff;}

			#wdposts-tabs  ul.tabs li:has(> a.active) #wdposts-tabs  ul.wdcontent {
				position:relative;
				display:table;
				width:100%;
				clear:both;
				list-style:none;
				padding: 7px;
				border: 1px solid #EAEAEA;
			}
			#wdposts-tabs  ul.wdcontent > li {
				position:relative;
				height:auto;
				display:none;
			}
			#wdposts-tabs  ul.wdcontent > li:first-child {display:block;}

			#wdposts-tabs  ul.wdcontent > li ul {
				display:table;
				position:relative;
				width:auto;
				margin:0px auto;
				height:98%;
				padding:15px 1% 15px 1%;
				list-style:none;
			}

			#wdposts-tabs  ul.wdcontent > li ul li {
				position:relative;
				margin:0px;
				width:50%;
				float:left;
			}
			#wdposts-tabs  ul.wdcontent > li ul li div.thumbnail-block {
				position:relative;
				float:left;
				width:80px;
				height:80px;
				overflow:hidden;
				margin:1px 15px 10px 0px;
			}
			#wdposts-tabs  ul.wdcontent > li ul li div.thumbnail-block  a.image-block {
				display:block;
				overflow:hidden;
			}
			#wdposts-tabs  ul.wdcontent > li ul li div.text {
				position:relative;
				float:left;
				width:270px;
				height:80px;
				overflow:hidden;
			}
			#wdposts-tabs  ul.wdcontent > li ul li div.text a{text-decoration:underline;}

			#wdposts-tabs  ul.wdcontent > li ul li div.text  h3 {
				position:relative;
				display:inline-block;
				width:270px;
				height:25px;
				white-space:nowrap;
				text-overflow:ellipsis;
				font-weight:normal;
			}
			#wdposts-tabs  ul.wdcontent > li ul li div.text .date {clear:both;}

			#wdposts-tabs ul{margin-left:0px;}

			#wdposts-tabs ul li{margin-bottom:0px;}

			#wdposts-tabs .active .comma{
				background: url(<?php echo get_template_directory_uri('template_url'); ?>/images/widget_text_pn.png) left top no-repeat;
				margin: 5px 0px 0px 5px;
				height: 29px;
				width: 35px;
				float:left;
			}
			#wdposts-tabs .active p{
				text-indent: 1em;
				line-height: 19px;
				text-align: justify;
				margin: 6% auto 0;
				width: 92%;
			}
			#wdposts-tabs *{
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
			}
		</style>
		<script>
			jQuery(document).ready(function(){
				var count=jQuery("#wdposts-tabs ul.tabs li").length;
				count=count-1;
				jQuery(".wdcontent > li:first-child, .cat_tabs .tabs > li:first-child").addClass('active');
				function nextTab(count){
					var isactive=jQuery("#wdposts-tabs ul.tabs li.active").next().index();
					if(isactive==-1){isactive=0;}
					jQuery("#wdposts-tabs ul.tabs li").removeClass("active");
					jQuery("#wdposts-tabs ul.tabs li").eq(isactive).addClass("active");
					jQuery("#wdposts-tabs ul.wdcontent > li").removeClass("active").css({display:"none"});
					jQuery("#wdposts-tabs ul.wdcontent > li").eq(isactive).addClass("active").css({display:"block"});
				}

				function prevTab(count){
					var isactive=jQuery("#wdposts-tabs ul.tabs li.active").prev().index();
					if(isactive==-1){isactive=count;}
					jQuery("#wdposts-tabs ul.tabs li").removeClass("active");
					jQuery("#wdposts-tabs ul.tabs li").eq(isactive).addClass("active");
					jQuery("#wdposts-tabs ul.wdcontent > li").removeClass("active").css({display:"none"});
					jQuery("#wdposts-tabs ul.wdcontent > li").eq(isactive).addClass("active").css({display:"block"});
				}
				jQuery(".posts-tabs-right").click(function(){nextTab(count);});
				jQuery(".posts-tabs-left").click(function(){prevTab(count);});
			});
		</script>
		<div id="wdposts-tabs" class="content-inner-block">
			<div class="tabs-block">
				<span class="posts-tabs-left"><span>&#171; Left</span></span>
				<span class="posts-tabs-right"><span>Right &#187;</span></span>
			</div>
			<ul class="cat_tabs">
				<li>
					<ul class="tabs">
						<?php
						$wp_query= null;
						$wp_query = new WP_Query();
						if(!isset($post_count))
							$post_count =0;
						$wp_query->query('posts_per_page='.$post_count.'&cat='.$categ_id);
						while ($wp_query->have_posts()) : $wp_query->the_post();  ?>
							<li class="post_image widget_post_image">
								<a href="<?php echo get_permalink() ?>"><?php echo Business_elite_frontend_functions::display_thumbnail(300,300);  ?></a>
							</li>
						<?php endwhile; ?>
					</ul>
				</li>
				<li>
					<ul class="wdcontent">
						<?php while ($wp_query->have_posts()) : $wp_query->the_post();  ?>
							<li id="posts-tabs-content-1" >
								<p class="comma"></p><p><?php  echo Business_elite_frontend_functions::the_excerpt_max_charlength(100); ?> </p>
								<a href="<?php echo get_permalink() ?>"><h5 class="widget-title"> <?php the_title(); ?> </h5></a>
							</li>
						<?php endwhile; ?>
					</ul>
				</li>
			</ul>
		</div>
		<?php
		wp_reset_postdata();
		echo $after_widget;
	}
	/*Saves the settings. */
	function update($new_instance, $old_instance){
		$instance = $old_instance;
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
		$instance['categ_id'] = wp_filter_post_kses( addslashes($new_instance['categ_id']));
		$instance['post_count'] = wp_filter_post_kses( addslashes($new_instance['post_count']));
		return $instance;
	}
	/*Creates the form for the widget in the back-end. */
	function form($instance){
		/* Defaults */
		$instance = wp_parse_args( (array) $instance, array( 'title'=>'Categories tabs', 'categ_id'=>'0', 'post_count'=>'3' ) );
		$title = esc_attr( $instance['title'] );
		$categ_id = esc_attr( $instance['categ_id'] );
		$post_count = esc_attr( $instance['post_count'] ) ?>
		<p><label for="<?php echo $this->get_field_id('title'); ?>">Title:</label><input class="widefat" id="<?php echo  $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></p>
		<p><label for="<?php echo $this->get_field_id('categ_id'); ?>">Select Category:</label>
			<select name="<?php echo $this->get_field_name('categ_id'); ?>" id="<?php echo $this->get_field_id('categ_id') ?>" style="font-size:12px" class="inputbox">
				<option value="0">Select Category</option>
				<?php
				$categories=get_categories();
				$category_count=count($categories);
				for($i=0;$i<$category_count;$i++)  {
					if(isset($categories[$i])) { ?>
						<option value="<?php echo $categories[$i]->term_id?>" <?php if($instance['categ_id']==$categories[$i]->term_id) echo  'selected="selected"'; ?>><?php echo $categories[$i]->name ?></option>
						<?php
					}
				}
				?>
			</select>
		</p>
		<p><label for="<?php echo $this->get_field_id('post_count'); ?>">Number of Posts:</label><input id="<?php echo  $this->get_field_id('post_count'); ?>" name="<?php echo $this->get_field_name('post_count'); ?>" type="text" value="<?php echo $post_count; ?>" size="6"/></p>
		<?php
	}
}
/* end business_elite_categ_tabs class */
add_action('widgets_init', 'business_elite_widget_category_tabs');
function business_elite_widget_category_tabs(){
  return register_widget("business_elite_categ_tabs");
}
?>