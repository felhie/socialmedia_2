<?php
foreach($updatesarray as $data)
 {
    $msg_id=$data['msg_id'];
    $orimessage=$data['message'];
    $message=tolink(htmlentities($data['message']));
    $time=$data['created'];
    $username=$data['username'];
    $uid=$data['uid_fk'];
    $face= $data['foto_profil'];
    $commentsarray=$Wall->Comments($msg_id);
?>
    <script type="text/javascript">
    $(document).ready(function() {
        $("#stexpand<?php echo $msg_id;?>").oembed("<?php echo  $orimessage; ?>", {
            maxWidth: 400,
            maxHeight: 300
        });
    });
    </script>
    <div class="panel panel-default panel-google-plus" id="stbody<?php echo $msg_id;?>">
        <?
        if ($userprofile['uid'] == $uid) 
        {
        ?>
        <div class="dropdown">
            <span class="pull-right">
                        <a class="stdelete" href="#" id="<?php echo $msg_id;?>" title="Hapus Update">X</a>
            </span>
        </div>
        <?}?>
        <div class="panel-google-plus-tags">
            <ul>
                <li>#Millennials</li>
                <li>#Generation</li>
            </ul>
        </div>
        <div class="panel-heading">
            <img class="img-circle  img-responsive pull-left " src="<?php echo $face;?>" height="46" width="46" />
            <h3><?php echo $username;?></h3>
            <h5><span>Shared publicly</span> - <span><?php time_stamp($time);?></span> </h5>
        </div>
        <div class="panel-body">
            <p>
                <?php echo $message;?>
            </p>
        </div>
        <div class="panel-footer">
            <a href='#' class='commentopen' id='<?php echo $msg_id;?>' title='Comment'>Tambah Komentar </a>
            <hr>
        </div>
        <div class="commentcontainer" id="commentload<?php echo $msg_id;?>">
            <?php include('load_comments.php') ?>
        </div>
        <div class="commentupdate" style='display:none' id='commentbox<?php echo $msg_id;?>'>
            <div class="stcommentbody">
                <div class="stcommentimg">
                    <img src="<?php echo $userprofile['foto_profil'];?>" class='small_face' />
                </div>
                <div class="stcommenttext">
                    <form method="post" action="">
                        <textarea name="comment" class="comment form-control" maxlength="200" id="ctextarea<?php echo $msg_id;?>"></textarea>
                        <br />
                        <input type="submit" value=" Comment " id="<?php echo $msg_id;?>" class="comment_button pull-right btn btn-success" />
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="stbody" id="stbody<?php echo $msg_id;?>">
    <div class="stimg">
        <img src="<?php echo $face;?>" class='big_face' />
    </div>
    <div class="sttext">
        <a class="stdelete" href="#" id="<?php echo $msg_id;?>" title="Hapus Update">X</a>
        <b><?php echo $username;?></b>
        <?php echo $message;?>
        <div class="sttime">
            <?php time_stamp($time);?> | <a href='#' class='commentopen' id='<?php echo $msg_id;?>' title='Comment'>Tambah Komentar </a></div>
        <div id="stexpandbox">
            <div id="stexpand<?php echo $msg_id;?>"></div>
        </div>
        <div class="commentcontainer" id="commentload<?php echo $msg_id;?>">
            <?php include('load_comments.php') ?>
        </div>
        <div class="commentupdate" style='display:none' id='commentbox<?php echo $msg_id;?>'>
            <div class="stcommentimg">
                <img src="<?php echo $face;?>" class='small_face' />
            </div>
            <div class="stcommenttext">
                <form method="post" action="">
                    <textarea name="comment" class="comment" maxlength="200" id="ctextarea<?php echo $msg_id;?>"></textarea>
                    <br />
                    <input type="submit" value=" Comment " id="<?php echo $msg_id;?>" class="comment_button" />
                </form>
            </div>
        </div>
    </div>

    </div> -->
    <?php

  }
?>
