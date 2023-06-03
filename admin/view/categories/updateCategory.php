
<div class="app-content pt-3 p-md-3 p-lg-4 ">
		    <div class="container-xl">
			    
			    <div class="row g-3 mb-4 align-items-center justify-content-between">
				    <div class="col-auto">
			            <h1 class="app-page-title mb-0">Update danh mục</h1>
				    </div>
				    
			    </div><!--//row-->
                <?php
if(is_array($list_danhmuc)){
    extract($list_danhmuc);
}
?>
                <form action="index.php?act=updateloaihang" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Mã loại</label>
                    <input type="text" class="form-control"   value="<?php if(isset($ma_loai)&&($ma_loai!="")) echo $ma_loai?>" disabled>
                    <small id="emailHelp" class="form-text text-muted">....</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên loại</label>
                    <input type="text" class="form-control" name="ten_loai" value="<?php if(isset($ten_loai)&&($ten_loai!="")) echo $ten_loai?>">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <input type="hidden"  name="ma_loai" value="<?php if(isset($ma_loai)&&($ma_loai!="")) echo $ma_loai?>" >
                <input type="submit" class="btn btn-primary text-light" name="update_loai" value="Submit"/>
                <input type="submit" class="btn btn-primary text-light" value="Danh sách">
                </form>
                
				
				
			    
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
