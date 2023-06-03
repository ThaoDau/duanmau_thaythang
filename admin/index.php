<?php
    include '../models/category.php';
    include '../models/comment.php';
    include '../models/connect.php';
    include "./component/header.php";
if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act){
        case 'addloaihang':
            if(isset($_POST['themmoi']) &&($_POST['themmoi'])){
                $tenloai = $_POST['tenloai'];
                // Kiểm tra .
            //    echo $tenloai;
                insert_danhmuc($tenloai);
               
                $thongbao = '<small id="emailHelp" class="form-text " style="color: red">Thành công</small>' ;
            }
            include "../admin/view/categories/addCategory.php";
            break;

        case 'listloaihang':
            $listall_danhmuc = list_danhmuc();
            
            include "../admin/view/categories/categories.php";
            break;
        case 'xoaloaihang':
            if(isset($_GET['id']) && ($_GET['id']>0)){
                delete_danhmuc($_GET['id']);
            }
            $listall_danhmuc = list_danhmuc();
            include "../admin/view/categories/categories.php";
            break;
        case 'sualoaihang':
            if(isset($_GET['id']) && ($_GET['id']>0)){
                $id = $_GET['id'];
                
                $list_danhmuc = list_one($id);
            }
            include "../admin/view/categories/updateCategory.php";
            break;
        case 'updateloaihang':
            if (isset($_POST['update_loai'])&&($_POST['update_loai'])){
                $tenloai = $_POST['ten_loai'];
                $maloai = $_POST['ma_loai'];
               
                update_danhmuc($tenloai,$maloai);

                $thongbao =  'Đã cập nhật danh mục';
            }
            
            $listall_danhmuc=list_danhmuc();
            include "../admin/view/categories/categories.php";
            break;
    //sanpham
        case 'addhanghoa':

            include "../admin/view/products/addProducts.php";
            break;

        case 'listhanghoa':
            include "../admin/view/products/products.php";
            break;
        case 'xoahanghoa':
            include "../admin/view/products/products.php";
            break;
        case 'suahanghoa':
            
            include "../admin/view/products/updateProducts.php";
            break;
        case 'updatehanghoa':
            include "../admin/view/products/products.php";
            break;
        // user:
        case 'user':
            include "../admin/view/users/user.php";
            break;
        case 'updateuser':
                include "../admin/view/users/updateUser.php";
                break;
    // binh_luan: 
        case 'listbinhluan':
            $listall_binhluan = list_binhluan();
            
            include '../admin/view/comments/comments.php';
            break;
        case 'xoabinhluan': 
            if(isset($_GET['id']) && ($_GET['id']>0)){
                delete_binhluan($_GET['id']);
            }
            $listall_binhluan = list_binhluan();
            include '../admin/view/comments/comments.php';
            break;
        default:
            include "home.php";
    }

}else{
    include "./view/home.php";
}
    include "./component/footer.php";



?>