
<div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    
			    <div class="row g-3 mb-4 align-items-center justify-content-between">
				    <div class="col-auto">
			            <h1 class="app-page-title mb-0">Danh sách bình luận</h1>
				    </div>
				    <div class="col-auto">
					     <div class="page-utilities">
						    <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
							    <div class="col-auto">
								    <form class="table-search-form row gx-1 align-items-center">
					                    <div class="col-auto">
					                        <input type="text" id="search-orders" name="searchorders" class="form-control search-orders" placeholder="Search">
					                    </div>
					                    <div class="col-auto">
					                        <button type="submit" class="btn app-btn-secondary">Search</button>
					                    </div>
					                </form>
					                
							    </div><!--//col-->
							    <div class="col-auto">
								    
								    <select class="form-select w-auto" >
										  <option selected value="option-1">All</option>
										  <option value="option-2">This week</option>
										  <option value="option-3">This month</option>
										  <option value="option-4">Last 3 months</option>
										  
									</select>
							    </div>
							    
						    </div><!--//row-->
					    </div><!--//table-utilities-->
				    </div><!--//col-auto-->
			    </div><!--//row-->
			   	
			    
			    <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
				    <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">All</a>
				</nav>
				
				
				<div class="tab-content" id="orders-table-tab-content">
			        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
					    <div class="app-card app-card-orders-table shadow-sm mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive">
							        <table class="table app-table-hover mb-0 text-left">
										<thead>
											<tr>
												<th class="cell">Mã bình luận</th>
												<th class="cell">Mã sản phẩm</th>
												<th class="cell">Mã khách hàng</th>
												<th class="cell">Nội dung</th>
												<th class="cell">Ngày bình luận</th>
												
												<th class="cell"></th>
											</tr>
										</thead>
										<?php foreach($listall_binhluan as $key => $value){
											
											?>
										<tbody>
											<tr>
												<td class="cell">#<?php echo $value['ma_bl']?></td>
												<td class="cell"><?php echo $value['ma_hh']?></td>
												<td class="cell"><?php echo $value['ma_kh']?></td>
												<td class="cell"><span class="truncate"><?php echo $value['noi_dung']?></span></td>
												<td class="cell"><?php echo $value['ngay_bl']?></td>

												
												
												<td class="cell">
													<input type="button" class="btn btn-danger text-light" value="Xóa" name="delete" onclick="confirm('Bạn có muốn xóa comment này hay không!') == true ? location.href='index.php?act=xoabinhluan&id=<?php echo $value['ma_bl']?>' : ''" >

												</td>
											</tr>
			
		
										</tbody>
										<?php }?>
									</table>
						        </div><!--//table-responsive-->
						       
						    </div><!--//app-card-body-->		
						</div><!--//app-card-->
						
						
			        </div><!--//tab-pane-->
			        
			       
				</div><!--//tab-content-->
				
				
			    
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->