
<div class="app-content pt-3 p-md-3 p-lg-4 ">
		    <div class="container-xl">
			    
			    <div class="row g-3 mb-4 align-items-center justify-content-between">
				    <div class="col-auto">
			            <h1 class="app-page-title mb-0">Update danh mục</h1>
				    </div>
				    
			    </div><!--//row-->
			   
                <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Mã loại</label>
                    <input type="text" class="form-control"   value="<?php if (isset($value['ma_loai']) && ($value['ma_loai'] != '')) echo $value['ma_loai']?>">
                    <small id="emailHelp" class="form-text text-muted">....</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên loại</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="<?php if (isset($value['ten_loai']) && ($value['ten_loai'] != '')) echo $value['ten_loai']?>">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <input type="hidden" name="id_danh_muc" value="<?php if (isset($value['ma_loai']) && ($value['ma_loai'] != '')) echo $value['id_danh_muc']?>" >
                <button type="submit" class="btn btn-primary text-light">Submit</button>
                <button type="submit" class="btn btn-primary text-light">Danh sách</button>
                </form>
			 
				
				
			    
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
      