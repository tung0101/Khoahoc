<?php  
    
    
    function into_dm_phong($name){
        $sql="insert into khoahoc(name_khoahoc) values('$name')";
        pdo_execute($sql);
    }
    function update_dm_phong($id_menu,$name){
        $sql="update khoahoc set name_khoahoc='".$name."' where id_menu=.$id_menu";
        pdo_execute($sql);
    }
    function delete_dm_phong(){
        $sql = "delete from khoahoc where id_khoahoc=".$_GET['id_menu'];
        pdo_execute($sql);
    }
    function load_all_dm_phong(){
        $sql= "select * from khoahoc order by id_khoahoc";
        $result = pdo_query($sql);
        return $result;
    }
    function load_dm_phong_ud(){
      
        $sql= "select * from khoahoc where id_menu IN (15,16)";
        $result = pdo_query($sql);

        return $result;
    }

    function load_dm_ctphong($id_rom){
            $sql="select id_menu, name_khoahoc from menu 
            JOIN roms ON id_menu = id_menu_r
            where id_rom=$id_rom";
            $retult=pdo_query_one($sql);
            return $retult;
            
            
    }
        
    function load_dm_phong_dd(){
      
        $sql= "select * from menu where id_menu=14";
        $result = pdo_query($sql);

        return $result;
    }
    function load_dm_phong_tt(){
      
        $sql= "select * from menu where id_menu=17";
        $result = pdo_query($sql);

        return $result;
    }


    function suaid_menu(){
        $sql="select * from khoahoc where id_khoahoc=".$_GET['id_menu'];
        $result=pdo_query_one($sql);
        return $result;
    }

    function up_menu($name_khoahoc,$id_menu){
        $sql="update khoahoc set name_khoahoc='".$name_khoahoc."' where id_khoahoc=".$id_menu ;
        pdo_execute($sql);
    }
        


  
   
?>