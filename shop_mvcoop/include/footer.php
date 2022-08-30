</div>
<br>
<br>
   <div class="footer">
   	  <div class="wrapper">	
		 <br>
					<br>
	     <div class="section group">
				<div class="col_1_of_4 span_1_of_4">
					
						<h4>Thông tin</h4>
						<ul>
						<li><a href="#">Về chúng tôi</a></li>
						<li><a href="#">Dịch vụ khách hàng</a></li>
						<li><a href="#">Tìm kiếm nâng cao</a></li>
						<li><a href="#">đặt hàng và thanh toán</a></li>
						<li><a href="#">chích sách </a></li>
						</ul>
					</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Vì sao bạn nên mua sách?</h4>
						<ul>
						<li><a href="about.php">Về sách</a></li>
						<li><a href="faq.php">Dịch vụ khách hàng</a></li>
						<li><a href="#">chính sách bảo mật</a></li>
						<li><a href="contact.php">Vị trí</a></li>
						<li><a href="preview.php">Tìm kiếm sách</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Tài khoản</h4>
						<ul>
							<li><a href="contact.php">Đăng nhập</a></li>
							<li><a href="index.php">Xem vỏ hàng</a></li>
							<li><a href="index.php">Khách hàng</a></li>
							<li><a href="#">Chính sách thanh toán</a></li>
							<li><a href="faq.php">Giúp đỡ</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Liên hệ</h4>
						<ul>
							<li><span>+8491-6814-948</span></li>
							<li><span>+8433-5000-275</span></li>
						</ul>
						<div class="social-icons">
							<h4>Theo dõi chúng tôi</h4>
					   		  <ul>
							      <li class="facebook"><a href="https://www.facebook.com/ton.khanh.1232" target="_blank"> </a></li>
							      <li class="twitter"><a href="https://www.facebook.com/ton.khanh.1232" target="_blank"> </a></li>
							      <li class="googleplus"><a href="https://github.com/toanvippro" target="_blank"> </a></li>
							      <li class="contact"><a href="https://github.com/toanvippro" target="_blank"> </a></li>
							      <div class="clear"></div>
						     </ul>
   	 					</div>
				</div>
			</div>
			<div class="copy_right">
				<p>Training with live project &amp; All rights Reseverd </p>
		   </div>
     </div>
    </div>
    <script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
    <link href="css/flexslider.css" rel='stylesheet' type='text/css' />
	  <script defer src="js/jquery.flexslider.js"></script>
	  <script type="text/javascript">
		$(function(){
		  SyntaxHighlighter.all();
		});
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	</script>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
