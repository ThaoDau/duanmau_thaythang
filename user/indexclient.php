<?php
    
    
    include "./view/component/header.php";
if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act){
        case 'main':
            include "../user/view/main.php";
            break;
        case 'products':
            include "../user/view/products.php";
            break;
        case 'detail_products':
                include "../user/view/productsdetail.php";
                break;
        case 'about':
            include "../user/view/about.php";
            break;
        case 'contact':
            include "../user/view/contact.php";
            break;
        case 'blog':
            include "../user/view/blog.php";
            break;
        case 'login':
            include "../user/view/login.php";
            break;
            case 'logup':
                include "../user/view/logup.php";
                break;
        case 'listcomments':
                include "../admin/view/comments/comments.php";
                break;
        default:
            include "./view/main.php";
    }

}else{
    
    include "./view/home.php";
    
}
    include "./view/component/footer.php";
