<?php 
       function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan,$ten_user) {
        $sql="insert into binhluan(noidung_bl,id_user,id_sp,date_bl,ten_user) values('$noidung','$iduser','$idpro','$ngaybinhluan','$ten_user')";
        pdo_execute($sql);
    }

    function loadall_binhluan($idpro) {
        $sql="select * from binhluan where 1";
        if($idpro>0) $sql.=" AND id_sp='".$idpro."'";        
        $sql.=" order by id_bl desc";
        $listbl=pdo_query($sql);
        return $listbl;
    }
   
    function delete_binhluan($id) {
        $sql = "DELETE FROM binhluan WHERE id_bl = " . $id;
        pdo_execute($sql);
    }
?>