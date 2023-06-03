<div class="app-content pt-3 p-md-3 p-lg-4 ">
		    <div class="container-xl">
			    
			    <div class="row g-3 mb-4 align-items-center justify-content-between">
				    <div class="col-auto">
			            <h1 class="app-page-title mb-0">Thêm danh mục</h1>
                        
				    </div>
				    
			    </div><!--//row-->
			   
                <form action="index.php?act=addloaihang" method="post">
                <!-- <div class="form-group">
                    <label for="exampleInputEmail1">Mã loại</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter email" name="maloai" value="maloai">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div> -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên loại</label>
                    <input type="text" class="form-control"  name="tenloai">
                    <?php
            if(isset($thongbao)&&($thongbao!= ''))  echo $thongbao;
            ?>  
                    
                </div>
                
                <input type="submit" class="btn btn-primary text-light" name="themmoi" value="submit"/>
               <a href="index.php?act=listloaihang"><input type="" class="btn btn-primary text-light "value="Danh sách"/></a> 
               
            </form>
                
				
				
			    
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
        
