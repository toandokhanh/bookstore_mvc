<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>  
<?php include '../classes/category.php';?> 
<?php
    $cat = new category();
    if(!isset($_GET['catid']) || $_GET['catid'] == NULL){
       echo "<script>window.location = 'catlist.php' </script>";
    }else {
        $id = $_GET['catid'];
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$catName = $_POST['catName'];
		$updateCate = $cat->update_category($catName, $id);
	}
   
?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Chỉnh sửa danh mục</h2>
               <div class="block copyblock"> 
                <?php
                if(isset($updateCate)){
                    echo $updateCate;
                }
                ?>
                <?php 
                    $get_cate_name = $cat->get_category($id);
                    if($get_cate_name){
                        while($result = $get_cate_name->fetch_assoc()){
                ?>
                 <form action="" method="post"> 
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" name="catName" placeholder="Sửa danh mục sản phẩm..." class="medium" value="<?php echo $result['catName'] ?>"/>
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Sửa" />
                            </td>
                        </tr>
                    </table>
                    </form>
                    <?php 
                    }
                }
                    ?>
                </div>
            </div>
        </div>
<?php include 'inc/footer.php';?>