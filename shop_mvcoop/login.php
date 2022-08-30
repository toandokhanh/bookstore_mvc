<?php   
	include './include/header.php';
?>


 <div class="main">
    <div class="content">
    	 <div class="login_panel">
        	<h3>Khách hàng hiện tại</h3>
        	<p>Đăng nhập bằng biểu mẫu bên dưới</p>
        	<form action="hello" method="get" id="member">
                	<input name="Domain" type="text" value="Username" class="field" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tài khoản';}">
                    <input name="Domain" type="password" value="Password" class="field" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mật khẩu';}">
                 </form>
                 <p class="note">Hãy nhập Email trước khi <a style="color: blue;" href="#">Quên mật khẩu</a></p>
                    <div class="buttons"><div><button class="grey">Đăng nhập</button></div></div>
                    </div>
    	<div class="register_account">
    		<h3>Đăng ký tài khoản mới</h3>
    		<form>
		   			 <table>
		   				<tbody>
						<tr>
						<td>
							<div>
							<input type="text" value="Tên" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" >
							</div>
							
							<div>
						<select id="country" name="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">Chọn Thành Phố</option>         
							<option value="AF">Thành phố Hải Phòng</option>
							<option value="AL">Thành phố Cần Thơ</option>
							<option value="DZ">Thành phố Hồ Chí Minh</option>
							<option value="AR">Thành phố Hà Nội</option>
							<option value="AM">Thành phố Đà Nẳng</option>
							<option value="AW">Thành phố Biên Hòa - Đồng Nai</option>
							<!-- <option value="AT">Austria</option>
							<option value="AZ">Azerbaijan</option>
							<option value="BD">Bangladesh</option> -->
		         	</select>
				 </div>		      
				 <div>
							<input type="text" value="Địa chỉ" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}">
						</div>
							
							<!-- <div>
								<input type="text" value="Mã zip" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Zip-Code';}">
							</div> -->
							<div>
								<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-Mail';}">
							</div>
		    			 </td>
		    			<td>
						
		    		  
	
		           <div>
		          <input type="text" value="Điện thoại" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}">
		          </div>
				  
				  <div>
					<input type="text" value="Mật khẩu" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
				</div>
		    	</td>
		    </tr> 
		    </tbody></table> <br>
		   <div class="search"><div><button class="grey">Đăng ký</button></div></div>
		    <p class="terms">Bạn có đồng ý với  <a href="#">Terms &amp; Điều khoản & Điều kiện</a>.</p>
		    <div class="clear"></div>
		    </form>
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>
<?php   
	include './include/footer.php';
?>