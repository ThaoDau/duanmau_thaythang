<?php
function list_binhluan(){
    $sql = "select * from binh_luan order by ma_bl desc";
    $listbinhluan= pdo_query($sql);
    return $listbinhluan;
}
function delete_binhluan($mabl){
    $sql = "delete from binh_luan where ma_bl=".$_GET['id'];
    pdo_execute($sql);
}
?>