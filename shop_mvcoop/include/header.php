<!DOCTYPE HTML>
<head>
<title>Store Website</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all"/>
<link href="./scss/main.scss"rel="stylesheet" type="text/css" media="all"/>
<script src="js/jquerymain.js"></script>
<script src="js/script.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js/nav.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script> 
<script type="text/javascript" src="js/nav-hover.js"></script>
<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
<script type="text/javascript">
  $(document).ready(function($){
    $('#dc_mega-menu-orange').dcMegaMenu({rowItems:'4',speed:'fast',effect:'fade'});
  });
</script>
<style>
.header__top{
    background-color: #f0f0f0;
	width: 100%;
	

}
.header__top{
	height: 42px;
	display: flex;
	align-items: center;
	color: #000;
	justify-content: space-between;
	max-width: 1200px;
	margin: 0 auto;
	font-size: 13px;
	font-weight: 600;
	cursor: pointer;
}
.header__top__address{
    display: flex;
}

.locate,
.phone{
        display: flex;
        margin: 0 10px;

}
.header__top__stacked{
    display: flex;

}
.myAccount,
.checkout{
    border-left: 1px solid rgba(255, 255, 255, 0.281) ;
    padding-left: 30px ;
}


.wishlist,
.myAccount,
.checkout{
    display: flex;
	justify-content: center;
	align-items: center;

}
/* .header__top__stacked__icon{
	
} */
.header__top__stacked__icon{
	width: 30px;
	height: 20px;
}
@media only screen and (max-width:620px){
	.header__top__address{
		display: none;
	}
	.header__top__stacked{
		margin: 0 auto;
	}
	.cart a{
		margin-left:-120px;
		padding: 0;
	}
}
</style>
</head>
<body>
<div class="header__top">
                <div class="header__top__address">
                    <div class="locate">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"></path>
                        </svg> 
                        <span style="margin-left:5px ;">  An Khánh, Ninh Kiều, Cần Thơ</span>
                    </div>
                    <div class="phone">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                            <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"></path>
                            <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"></path>
                          </svg>
                          <span>0916-814-948</span>
                    </div>
    
                </div>
                <div class="header__top__stacked">
                    <div class="wishlist"><ion-icon class="header__top__stacked__icon" name="heart-outline"></ion-icon><a style="color: black;" href="../topbrands.php">Yêu thích</a></div>
                    <div class="myAccount"><ion-icon class="header__top__stacked__icon" name="person-circle-outline"></ion-icon><a style="color: black;" href="../login.php">Tài khoản</a></div>
                    <div class="checkout"><ion-icon class="header__top__stacked__icon" name="log-out-outline"></ion-icon><a style="color: black;" href="../login.php">Thủ tục thanh toán</a></div>
                </div>
            </div>
  <div class="wrap">
		<div class="header_top">
			<div class="logo">
				<a href="index.php"><img src="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/01/logo_green.png" alt="" /></a>
			</div>
			  <div class="header_top_right">
			    <div class="search_box">
				    <form>
				    	<input type="text" value="Nhập tên sách hoặc tác giả bạn muốn tìm " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search for Products';}"><input type="submit" value="TÌM KIẾM">
				    </form>
			    </div>
			    <div class="shopping_cart">
					<div class="cart">
						<a style="color: black; display: flex; justify-content: center; align-items: center;" href="../cart.php"><span style="color: red; font-size: 12px; font-weight: 600;">99+</span> <ion-icon class="cart__icon" name="cart-outline"></ion-icon> </a> 
					   <!-- <a href="../cart.php" title="View my shopping cart" rel="nofollow">
								<span class="cart_title"></span>
								<span style="color: red; font-size: 13px;" class="no_product">99+</span> -->
							<!-- </a> -->
						</div>
			      </div>
		   <!-- <div class="login"><a href="login.php">Login</a></div> -->
		 <div class="clear"></div>
	 </div>
	 <div class="clear"></div>
 </div>
<div class="menu">
	<ul id="dc_mega-menu-orange" class="dc_mm-orange">
	  <li><a href="index.php">Trang chủ</a></li>
	  <li><a href="products.php">Sản phẩm</a> </li>
	  <li><a href="topbrands.php">Bán chạy</a></li>
	  <li><a href="cart.php">Đơn hàng</a></li>
	  <li><a href="contact.php">Liên hệ</a> </li>
	  <div class="clear"></div>
	</ul>
</div>