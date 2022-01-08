<?php get_header(); ?>
    <article>
        <div class="cover">
           <h1>SKILL</h1>
         </div>
         
         <section class="techSkill">
             <h2>TECH</h2>
                 <div class="skillList container">
                    <div class="skillBox">
                        <div class="skillIcon">
                            <img src="<?php echo get_template_directory_uri();?>/images/icon_html5.png" alt="HTML5" >
                        </div>
                        <div class="skillDescription">
                            <h3 class="skillTitle">HTML5</h3>
                            <p><span class="star5_rating" data-rate="4"></span></p>
                            <p>デザインカンプの指示通りコーディングすることができます。今後はSEOを意識したマークアップを行えるように現在勉強中です。</p>
                        </div>
                    </div>
                    <div class="skillBox">
                        <div class="skillIcon">
                            <img src="<?php echo get_template_directory_uri();?>/images/css.png" alt="HTML5" >
                        </div>
                        <div class="skillDescription">
                            <h3 class="skillTitle">CSS3</h3>
                            <p><span class="star5_rating" data-rate="4"></span></p>
                            <p>レスポンシブデザインに対応できます。また、SASSやフレームワークを使用した効率的な開発も行えます。</p>
                        </div>
                    </div>
                    <div class="skillBox">
                        <div class="skillIcon">
                            <img src="<?php echo get_template_directory_uri();?>/images/javascript.png" alt="HTML5" >
                        </div>
                        <div class="skillDescription">
                            <h3 class="skillTitle">JavaScript</h3>
                            <p><span class="star5_rating" data-rate="3"></span></p>
                            <p>JQueryを用いてWebサイトに動きをつけることが出来ます。</p>
                        </div>
                    </div>
                    <div class="skillBox">
                        <div class="skillIcon">
                            <img class="wordpress" src="<?php echo get_template_directory_uri();?>/images/wordpress.png" alt="HTML5" >
                        </div>
                        <div class="skillDescription">
                            <h3 class="skillTitle">WordPress</h3>
                            <p><span class="star5_rating" data-rate="4"></span></p>
                            <p>オリジナルサイトを、プラグインを使用せずに作れます。</p>
                        </div>
                    </div>
                    <div class="skillBox">
                        <div class="skillIcon">
                            <img class="photoshop" src="<?php echo get_template_directory_uri();?>/images/photoshop.png" alt="HTML5" >
                        </div>
                        <div class="skillDescription">
                            <h3 class="skillTitle">PhotoShop</h3>
                            <p><span class="star5_rating" data-rate="4"></span></p>
                            <p>デザインカンプの作成ができます。</p>
                        </div>
                    </div>
                     <div class="skillBox">
                        <div class="skillIcon">
                            <img class="photoshop" src="<?php echo get_template_directory_uri();?>/images/vba.png" alt="HTML5" >
                        </div>
                        <div class="skillDescription">
                            <h3 class="skillTitle">VBA</h3>
                            <p><span class="star5_rating" data-rate="4"></span></p>
                            <p>グラフの自動作成ツールや、自動在庫管理ツールなどの自動化ツールを作れます。</p>
                        </div>
                    </div>
                </div>
        </section>
        <section class="otherSkill">
            <h2>OTHERS</h2>
                <div class="skillList container">
                    <div class="skillBox">
                         <div class="skillIcon">
                            <img class="photoshop" src="<?php echo get_template_directory_uri();?>/images/planning.png" alt="HTML5" >
                        </div>
                        <div class="skillDescription">
                            <h3 class="skillTitle">Planning</h3>
                            <p><span class="star5_rating" data-rate="2"></span></p>
                            <p>一から企画を考えてWebサイトを制作した経験があります。</p>
                        </div>
                    </div>
                    <div class="skillBox">
                         <div class="skillIcon">
                            <img class="photoshop" src="<?php echo get_template_directory_uri();?>/images/webwriting.png" alt="HTML5" >
                        </div>
                        <div class="skillDescription">
                            <h3 class="skillTitle">Web Writing</h3>
                            <p><span class="star5_rating" data-rate="3"></span></p>
                            <p>Webライター3級を取得しており、実務で記事を執筆した経験があります。</p>
                        </div>
                    </div>
                </div>
        </section>
         
    </article>

    <?php require('btn_backtotop.php'); ?>

<?php get_footer(); ?>