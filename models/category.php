<?php

    function insert_danhmuc($tenloai){
        $sql = "insert into loai(ten_loai) values('$tenloai')";
        pdo_execute($sql);
    }
    function delete_danhmuc($maloai){
        $sql = "delete from loai where ma_loai=".$_GET['id'];
        pdo_execute($sql);
    }
    function list_danhmuc(){
        $sql = "select * from loai order by ma_loai desc";
        $listloaihang= pdo_query($sql);
        return $listloaihang;
    }
    function list_one($maloai){
        $sql = "select * from loai where ma_loai=".$maloai;
        $loaihang = pdo_query_one($sql);
        return $loaihang;
    }
    function update_danhmuc($tenloai,$maloai){
        $sql = "update loai set ten_loai='".$tenloai."' where ma_loai=".$maloai;
        pdo_execute($sql);
    }
 ?>