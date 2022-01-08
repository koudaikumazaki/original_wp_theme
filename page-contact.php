<?php get_header(); ?>
    <article>
        <div class="cover">
           <h1>CONTACT</h1>
        </div>
        
        <?php
        //var_dump($clean);
        // 変数の初期化
            $page_flag = 0;
            $clean = array();
            $error = array();
            //サニタイズ
            if( !empty($_POST) ) {
            	foreach( $_POST as $key => $value ) {
            		$clean[$key] = htmlspecialchars( $value, ENT_QUOTES);
            	}
            }

            
            
            if( !empty($clean['btn_confirm']) ) {
                
                $error = validation($clean);
                
                if( empty($error) ){
        	    $page_flag = 1;
                }
                
            }elseif( !empty($clean['btn_submit']) ) {
        	    $page_flag = 2;
        	    
        	    // 変数とタイムゾーンを初期化
        	    $header = null;
            	$auto_reply_subject = null;
            	$auto_reply_text = null;
            	$admin_reply_subject = null;
	            $admin_reply_text = null;
            	date_default_timezone_set('Asia/Tokyo');
            	
            	// ヘッダー情報を設定
            	$header = "MIME-Version: 1.0\n";
            	$header .= "From: KOUDAIKUMAZAKI <kk1974340@gmail.com>\n";
            	$header .= "Reply-To: KOUDAIKUMAZAKI <kk1974340@gmail.com>\n";

            
            	// 件名を設定
            	$auto_reply_subject = 'お問い合わせありがとうございます。';
            
            	// 本文を設定
            	$auto_reply_text = "この度は、お問い合わせ頂き誠にありがとうございます。
                下記の内容でお問い合わせを受け付けました。\n\n";
            	$auto_reply_text .= "お問い合わせ日時：" . date("Y-m-d H:i") . "\n";
            	$auto_reply_text .= "氏名：" . $clean['your_name'] . "\n";
            	$auto_reply_text .= "メールアドレス：" . $clean['email'] . "\n\n";
            	$auto_reply_text .= "お問い合わせ内容：" . nl2br($clean['inqury']) . "\n\n";
            	$auto_reply_text .= "Koudai Kumazaki";
            	
            
            	// メール送信
            	mb_send_mail( $clean['email'], $auto_reply_subject, $auto_reply_text, $header);
            	
            	// 運営側へ送るメールの件名
            	$admin_reply_subject = "お問い合わせを受け付けました";
            	
            	// 本文を設定
            	$admin_reply_text = "下記の内容でお問い合わせがありました。\n\n";
            	$admin_reply_text .= "お問い合わせ日時：" . date("Y-m-d H:i") . "\n";
            	$admin_reply_text .= "氏名：" . $clean['your_name'] . "\n";
            	$admin_reply_text .= "メールアドレス：" . $clean['email'] . "\n\n";
            	$admin_reply_text .= "お問い合わせ内容：" . nl2br($clean['inqury']) . "\n\n";
            
            	// 運営側へメール送信
            	mb_send_mail( 'kk1974340@gmail.com', $admin_reply_subject, $admin_reply_text, $header);
            }
            
            function validation($data) {
                $error = array();
                
                //氏名のバリデーション
                if( empty($data['your_name']) ) {
                    $error[] = "「氏名」は必ず入力してください。";
                }
                
                // メールアドレスのバリデーション
            	if( empty($data['email']) ) {
            		$error[] = "「メールアドレス」は必ず入力してください。";
            	} elseif( !preg_match( '/^[0-9a-z_.\/?-]+@([0-9a-z-]+\.)+[0-9a-z-]+$/', $data['email']) ) {
            		$error[] = "「メールアドレス」は正しい形式で入力してください。";
            	}

            	// 件名のバリデーション
            	if( empty($data['title']) ) {
            		$error[] = "「件名」は必ず入力してください。";
            	} 
            
            	// お問い合わせ内容のバリデーション
            	if( empty($data['inqury']) ) {
            		$error[] = "「お問い合わせ内容」は必ず入力してください。";
            	}
            
            	// プライバシーポリシー同意のバリデーション
            	if( empty($data['agreement']) ) {
            		$error[] = "プライバシーポリシーをご確認ください。";
            	} elseif( (int)$data['agreement'] !== 1 ) {
                	$error[] = "プライバシーポリシーをご確認ください。";
                }
                
                return $error;
            }
                    ?>
                
        <?php if( $page_flag === 1 ): ?>
        
        <form method="post" action="">
        	<div class="element_wrap confirm">
        		<label>ご所属</label>
        		<p><?php echo $clean['your_company']; ?></p>
        	</div>
        	<div class="element_wrap confirm">
        		<label>氏名</label>
        		<p><?php echo $clean['your_name']; ?></p>
        	</div>
        	<div class="element_wrap confirm">
        		<label>メールアドレス</label>
        		<p><?php echo $clean['email']; ?></p>
        	</div>
        	<div class="element_wrap confirm">
        		<label>件名</label>
        		<p><?php echo $clean['title']; ?></p>
        	</div>
        	<div class="element_wrap confirm">
        		<label>お問い合わせ内容</label>
        		<p><?php echo $clean['inqury']; ?></p>
        	</div>
        	<div class="element_wrap confirm">
        		<label>プライバシーポリシーに同意する</label>
        		<p><?php if( $clean['agreement'] === "1" ){ echo '同意する'; }
        		else{ echo '同意しない'; } ?></p>
        	</div>
        	<input type="submit" name="btn_back" value="戻る">
        	<input type="submit" name="btn_submit" value="送信">
        	<input type="hidden" name="your_company" value="<?php echo $clean['your_company']; ?>">
        	<input type="hidden" name="your_name" value="<?php echo $clean['your_name']; ?>">
        	<input type="hidden" name="email" value="<?php echo $clean['email']; ?>">
        	<input type="hidden" name="title" value="<?php echo $clean['title']; ?>">
        	<input type="hidden" name="inqury" value="<?php echo $clean['inqury']; ?>">
        </form>
        
        <?php elseif( $page_flag === 2 ): ?>
        
        <div class="sendComplete">
            <p>送信が完了しました。</p>
        </div>
        
        
        <?php else: ?>
        
        <?php if( !empty($error) ): ?>
        	<ul class="error_list">
        	<?php foreach( $error as $value ): ?>
        		<li><?php echo $value; ?></li>
        	<?php endforeach; ?>
        	</ul>
        <?php endif; ?>
        
        <form  method="post" action="">
            <div class="element_wrap">
        		<label>ご所属</label>
        		<input type="text" name="your_company" value="<?php if( !empty($clean['your_company']) ){ echo $clean['your_company']; } ?>">
        	</div>
        	<div class="element_wrap">
        		<label>お名前（必須）</label>
        		<input type="text" name="your_name" value="<?php if( !empty($clean['your_name']) ){ echo $clean['your_name']; } ?>">
        	</div>
        	<div class="element_wrap">
        		<label>メールアドレス（必須）</label>
        		<input type="text" name="email" value="<?php if( !empty($clean['email']) ){ echo $clean['email']; } ?>">
        	</div>
        	<div class="element_wrap">
        		<label>件名（必須）</label>
        		<input type="text" name="title" value="<?php if( !empty($clean['title']) ){ echo $clean['title']; } ?>">
        	</div>
        	<div class="element_wrap">
        		<label>お問い合わせ内容（必須）</label>
        		<textarea name="inqury" value="<?php if( !empty($clean['inqury']) ){ echo $clean['inqury']; } ?>"></textarea>
        	</div>
        	<div class="element_wrap">
		        <label for="agreement"><input class="agreement" type="checkbox" name="agreement" value="1">プライバシーポリシーに同意（必須）</label>
		        
	        </div>
        	
        	<input type="submit" name="btn_confirm" value="入力内容を確認する">
        </form>
        
        <?php endif; ?>
        
    </article>
    <?php require('btn_backtotop.php'); ?>

<?php get_footer(); ?>