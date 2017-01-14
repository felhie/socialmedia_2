<?php

foreach($commentsarray as $cdata)
 {
    $com_id=$cdata['com_id'];
    $comment=tolink(htmlentities($cdata['comment'] ));
    $time=$cdata['created'];
    $username=$cdata['username'];
    $uid=$cdata['uid_fk'];
    $cface=$cdata['foto_profil'];
 ?>
    <div class="stcommentbody" id="stcommentbody<?php echo $com_id; ?>">
        <div class="stcommentimg">
            <img src="<?php echo $cface; ?>" class='small_face' />
        </div>
        <div class="stcommenttext">
            <?
            if ($userprofile['uid'] == $uid) 
            {
            ?>
            <a class="pull-right stcommentdelete" href="#" id="<?php echo $com_id;?>" title="Hapus Komentar">
                <span class="glyphicon glyphicon-remove"></span>
            </a>
            <?}?>
            <b><?php echo $username; ?></b>
            <?php echo $comment; ?>
            <div class="stcommenttime">
                <?php time_stamp($time); ?>
            </div>
        </div>
    </div>
    <?php 
}
?>
