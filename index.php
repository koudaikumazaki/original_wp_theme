<?php get_header(); ?>
        <article>
           <div class="cover">
               <h1>KOUDAI KUMAZAKI<br><span>PORTFORIO</span></h1>
           </div>
           <section class="contentBox">
               <div class="container">
                   <?php
                    $options = get_option('my_theme_options'); // キーの前半部分（[]の前）を変数に格納
                    if ( $options['originCheckbox'] ) : ?>
                        <h2 id="profile_name"><?php echo esc_html($options['originText']); ?></h2>
                    <?php endif; ?>
                   <img class="profile" src="<?php echo get_template_directory_uri();?>/images/profile.jpeg" alt="プロフィール写真">
                   <p>熊﨑　広大</p>
                   <p>1993年11月22日生　26歳</p>
                   <table>
                       <tr>
                           <td class="year">2018年</td>
                           <td class="month">3月</td>
                           <td>東京海洋大学院 海洋科学技術研究科 食機能保全化学専攻 修了</td>
                       </tr>
                       <tr>
                           <td class="year">2018年</td>
                           <td class="month">4月</td>
                           <td>食品素材メーカーに入社 １年間工場で品質管理を担当</td>
                       </tr>
                       <tr>
                           <td class="year">2019年</td>
                           <td class="month">5月</td>
                           <td>製品開発（既存製品の改良）を担当、現在に至る</td>
                       </tr>
                   </table>
                   <a class="btn" href="<?php echo esc_url(home_url('/profile/'));?>">READ MORE</a>
                </div>
           </section>
           
           <?php
           $args = array(
                 'post_type'      => array( 'work' ),
                'posts_per_page'  => 3
            );
           $the_query = new WP_Query( $args );
           if ( $the_query->have_posts() ) :
           ?>
           
           <section class="contentBox work">
               <div class="container">
                   <h2>WORK</h2>
                   <div class="row">
                       <?php while ( $the_query->have_posts() ) :$the_query->the_post();?>
                       <div class="four columns">
                        <a href="<?php the_permalink(); ?>">
                            <div class="boxShadow">
                                <?php the_post_thumbnail('thumbnail');?>
                            </div>
                           <p><?php the_title();?></p>
                        </a>
                    </div>
                       <?php endwhile; ?>
                   </div>
                   <a class="btn" href="<?php echo esc_url(home_url('/work/'));?>">READ MORE</a>
                </div>
           </section>
           <?php wp_reset_postdata();
            endif;
           ?>
           <section class="contentBox">
               <div class="container">
                   <h2>SKILL</h2>
                   <div class="row">
                       <div class="six columns">
                           <img class="picture" src="<?php echo get_template_directory_uri();?>/images/tech_icon.png" alt="架空の美容室紹介サイト">
                           <h3>TECH</h3>
                           <p>HTML/CSS, Javascirpt, WordPress, Photoshop, VBA</p>
                       </div>
                       <div class="six columns">
                           <img class="picture" src="<?php echo get_template_directory_uri();?>/images/mind_icon.png" alt="架空の美容室紹介サイト">
                           <h3>OTHER</h3>
                           <p>Planning, Web Writing</p>
                       </div>
                   </div>
                   <a class="btn" href="<?php echo esc_url(home_url('/skill/'));?>">READ MORE</a>
                </div>
           </section>
           
           <?php if ( have_posts() ) :?>
           
           <section class="contentBox blog">
               <div class="container">
                   <h2>BLOG</h2>
                   <div class="row">
                       <ul>
                        <?php while ( have_posts() ) : the_post();?>
                           <li class="blogTitle">
                               <span><?php the_time('Y.m.d');?></span>
                               <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                           </li>
                       <?php endwhile; ?>
                       </ul>
                   </div>
                   <a class="btn" href="<?php echo esc_url(home_url('/blog/'));?>">READ MORE</a>
                </div>
           </section>
          <?php endif; ?>
        </article>
        
    <?php require('btn_backtotop.php'); ?>
        
<?php get_footer();