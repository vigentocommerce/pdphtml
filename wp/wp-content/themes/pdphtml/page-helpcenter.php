<?php
/**
 * Template Name: Help Detail Page
 *
 * @package WordPress
 * @subpackage MageBay
 * @since MageBay
 */
 
get_header('help');
?>
</div>
		<div id="wrapper-doc" class="pdp-main">				
			<div class="wrap-content">
				<div class="sidebar-main sidebar ng-scope" ng-include="'templates/sidebar-main.html'">
                <!-- Sidebar Left -->
                <div class="sidebar-content">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#content" aria-controls="content" role="tab" data-toggle="tab">Content</a></li>
                        <li role="presentation"><a href="#bookmark" aria-controls="bookmark" role="tab" data-toggle="tab">Bookmark (0)</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="content" class="tab-pane" role="tabpanel">
                            <form class="pdc-search ng-pristine ng-valid">
                                <div class="form-group">
                                <div class="input-group">			
                                    <input type="text" ng-model="searchOrder" placeholder="Search" class="form-control ng-pristine ng-valid">
                                    <div class="input-group-addon"><i class="fa fa-search"></i></div>
                                </div>      
                                </div>
                            </form>
                            <?php
                                // Start the loop.
                                while ( have_posts() ) : the_post();
                                        // the_content();
                                // End the loop.
                                endwhile;
                                $args = array(
                                    //'p'    => 15,
                                    //'meta_key'     => 'price',
                                    //'meta_value'   => '22',
                                    //'meta_compare' => '<=',
                                    'posts_per_page' => -1,
                                    'post_type'    => 'help_center',
                                    //'post_type' => 'page',
                                    //'orderby'   => 'title menu_order',
                                    'order'     => 'ASC',
                                );
                                $query = new WP_Query( $args );

                                if ( $query->have_posts() ) {
                                    ?>
                                        <ul class="panel-group" id="accordion_book" role="tablist" aria-multiselectable="true">
                                    <?php
                                    while ( $query->have_posts() ) {
                                        $query->the_post();
                                        $contents = get_the_content();
                                        $title = get_the_title();
                                        $cate = get_post_meta(get_the_ID(), 'category id', true);
                                        if($cate==''){
                                            // $cate_link = 
                                            }
                                        ?>
                                            <li class="panel panel-default"  ng-class="{active : activeMenu === '1: Content 1'}">
                                                <div class="panel-heading" role="tab" id="heading1">
                                                    <h4 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion_book" href="#collapse1" aria-expanded="false" aria-controls="collapse1" ng-click="activeMenu = '1: Content 1'">
                                                        <?php echo $title ?>
                                                        <div class="nodisplay" id="link_1">
                                                                <h1><?php echo $title ?></h1>
                                                                <div class="content">
                                                                    <?php echo $contents ?>
                                                                </div>
                                                        </div>
                                                        </a>
                                                    </h4>
                                                </div>
                                            </li>
                                        <?php

                                    }
                                    ?>
                                        </ul>
                                    <?php 
                                } else {
                                    //echo 'no posts';
                                    // no posts found
                                }
                                wp_reset_postdata();
                                ?>   
                            </div>
                        
                        <div role="tabpanel" class="tab-pane" id="bookmark">
                            Bookmark Content
                        </div>
                    </div>
                    <!-- end div .tab-content -->


                    
                </div>
            </div>
            <div class="page-content" ng-generaltab="" ng-class="[header.animation]">						
                <div class="box-content">						
                    <div ng-view>
                        <div class="book-page ng-scope" id="page-content-wrapper">
                            <div class="container-fluid ng-scope" id="book-wrapper">
                                
                                    <div class="reader-container col-sm-12 col-lg-offset-1 col-lg-10 col-xl-offset-2 col-xl-8 ng-scope">
                                        <div class="row">
                                            <div  class="book-content">
                                                <div class="titlepage"><div><div><h2 class="title"><a id="pref05"></a>Lorem Ipsum</h2></div></div></div>
                                                <p>Lorem Ipsum is simply dummy text of words etc.</p>
                                                <div class="fade-out"></div>                        
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>		 				
                </div>
            </div>
				
			</div>

		</div>
	</div>
<!-- Main  -->
    
    
</div>		

<!-- End Main  -->
<?php //get_footer(); ?>