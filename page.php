<?php get_header(); ?>
    <article>
        <div class="cover">
           <h1>PROFILE</h1>
         </div>
         
         <section class="contentBox">
               <div class="container">
                   <h2>CAREER</h2>
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
                </div>
                <div class="container">
                   <h2>CHARACTER</h2>
                   <p>友人からは、根は真面目・流行を作る・努力家・緊張しい・話しやすいなどと言われます！</p>
                </div>
                <div class="container hobby">
                   <h2>HOBBY</h2>
                   <div class="hobbyList">
                       <div class="hobbyBox">
                            <div class="hobbyIcon">
                                <img  src="<?php echo get_template_directory_uri();?>/images/touring.png" alt="ツーリング" >
                            </div>
                            <div class="hobbyName">
                                <h3 class="hobbyTitle">touring</h3>
                            </div>
                        </div>
                        <div class="hobbyBox">
                            <div class="hobbyIcon">
                                <img class="photoshop" src="<?php echo get_template_directory_uri();?>/images/darts.png" alt="ダーツ" >
                            </div>
                            <div class="hobbyName">
                                <h3 class="hobbyTitle">darts</h3>
                            </div>
                        </div>
                        <div class="hobbyBox">
                            <div class="hobbyIcon">
                                <img class="photoshop" src="<?php echo get_template_directory_uri();?>/images/tennis.png" alt="テニス" >
                            </div>
                            <div class="hobbyName">
                                <h3 class="hobbyTitle">tennis</h3>
                            </div>
                        </div>
                        <div class="hobbyBox">
                            <div class="hobbyIcon">
                                <img class="photoshop" src="<?php echo get_template_directory_uri();?>/images/karaoke.png" alt="カラオケ" >
                            </div>
                            <div class="hobbyName">
                                <h3 class="hobbyTitle">karaoke</h3>
                            </div>
                        </div>
                   </div>
                </div>
                <div class="container speciality">
                   <h2>SPECIALITY</h2>
                   <div class="specialityList">
                       <div class="specialityBox">
                            <div class="specialityIcon">
                                <img class="photoshop" src="<?php echo get_template_directory_uri();?>/images/tabletennis.png" alt="卓球" >
                            </div>
                            <div class="specialityName">
                                <h3 class="specialityTitle">tabletennis</h3>
                            </div>
                        </div>
                        <div class="specialityBox">
                            <div class="specialityIcon">
                                <img class="photoshop" src="<?php echo get_template_directory_uri();?>/images/cooking.png" alt="料理" >
                            </div>
                            <div class="specialityName">
                                <h3 class="specialityTitle">cooking</h3>
                            </div>
                        </div>
                   </div>
                </div>
           </section>
         
    </article>

    <?php require('btn_backtotop.php'); ?>

<?php get_footer(); ?>