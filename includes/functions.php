<?php


class Wall_Updates
{
    
    
    
    // Updates   	
    public function getWallPost()
    {
        $query = mysql_query("SELECT M.msg_id, M.uid_fk, M.message, M.created, U.username, U.foto_profil FROM messages M, users U  WHERE M.uid_fk=U.uid order by M.msg_id desc ") or die(mysql_error());
        while ($row = mysql_fetch_array($query))
            $data[] = $row;
        return $data;
        
    }
    
    // Updates   	
    //   public function getWallPost($uid) 
    // {
    //     $query = mysql_query("SELECT M.msg_id, M.uid_fk, M.message, M.created, U.username FROM messages M, users U  WHERE M.uid_fk=U.uid and M.uid_fk='$uid' order by M.msg_id desc ") or die(mysql_error());
    //         while($row=mysql_fetch_array($query))
    // 	$data[]=$row;
    //     return $data;
    
    //    }
    //Komentar
    public function Comments($msg_id)
    {
        $query = mysql_query("SELECT C.com_id, C.uid_fk, C.comment, C.created, U.username, U.foto_profil FROM comments C, users U WHERE C.uid_fk=U.uid and C.msg_id_fk='$msg_id' order by C.com_id asc ") or die(mysql_error());
        while ($row = mysql_fetch_array($query))
            $data[] = $row;
        if (!empty($data)) {
            return $data;
        }
    }
    
    //Insert Update
    public function Insert_Update($uid, $update)
    {
        $update = htmlentities($update);
        $time   = time();
        $ip     = $_SERVER['REMOTE_ADDR'];
        $query = mysql_query("SELECT msg_id,message FROM `messages` WHERE uid_fk='$uid' order by msg_id desc limit 1") or die(mysql_error());
        $result = mysql_fetch_array($query);
        
        if ($update != $result['message']) {
            $query = mysql_query("INSERT INTO `messages` (message, uid_fk, ip,created) VALUES ('$update', '$uid', '$ip','$time')") or die(mysql_error());
            $newquery = mysql_query("SELECT M.msg_id, M.uid_fk, M.message, M.created, U.username, U.foto_profil FROM messages M, users U where M.uid_fk=U.uid and M.uid_fk='$uid' order by M.msg_id desc limit 1 ");
            $result   = mysql_fetch_array($newquery);
            return $result;
        } else {
            return false;
        }
        
        
    }
    
    //Hapus update
    public function Delete_Update($uid, $msg_id)
    {
        $query = mysql_query("DELETE FROM `comments` WHERE msg_id_fk = '$msg_id' ") or die(mysql_error());
        $query = mysql_query("DELETE FROM `messages` WHERE msg_id = '$msg_id' and uid_fk='$uid'") or die(mysql_error());
        return true;
        
    }
    
    //Insert Komentar
    public function Insert_Comment($uid, $msg_id, $comment)
    {
        $comment = htmlentities($comment);
        $time    = time();
        $ip      = $_SERVER['REMOTE_ADDR'];
        $query = mysql_query("SELECT com_id,comment FROM `comments` WHERE uid_fk='$uid' and msg_id_fk='$msg_id' order by com_id desc limit 1 ") or die(mysql_error());
        $result = mysql_fetch_array($query);
        
        if ($comment != $result['comment']) {
            $query = mysql_query("INSERT INTO `comments` (comment, uid_fk,msg_id_fk,ip,created) VALUES ('$comment', '$uid','$msg_id', '$ip','$time')") or die(mysql_error());
            $newquery = mysql_query("SELECT C.com_id, C.uid_fk, C.comment, C.msg_id_fk, C.created, U.username, U.foto_profil FROM comments C, users U where C.uid_fk=U.uid and C.uid_fk='$uid' and C.msg_id_fk='$msg_id' order by C.com_id desc limit 1 ");
            $result   = mysql_fetch_array($newquery);
            
            return $result;
        } else {
            return false;
        }
        
    }
    
    //Hapus Komentar
    public function Delete_Comment($uid, $com_id)
    {
        $query = mysql_query("DELETE FROM `comments` WHERE uid_fk='$uid' and com_id='$com_id'") or die(mysql_error());
        return true;
        
    }
    
    // Udata user   	
    public function getUserProfile($uid)
    {
        $query = mysql_query("SELECT * FROM users U  WHERE uid='$uid' ") or die(mysql_error());
        $result = mysql_fetch_array($query);
        return $result;
        
    }
    
}

?>
