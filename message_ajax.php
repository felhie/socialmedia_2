<?php
error_reporting(0);
include_once 'includes/db.php';
include_once 'includes/functions.php';
include_once 'includes/tolink.php';
include_once 'includes/time_stamp.php';
include_once 'session.php';
$Wall = new Wall_Updates();
if(isSet($_POST['update']))
{
	$update=$_POST['update'];
	$data=$Wall->Insert_Update($uid,$update);

if($data)
{
	$msg_id=$data['msg_id'];
	$message=tolink(htmlentities($data['message']));
	$time=$data['created'];
	$uid=$data['uid_fk'];
	$username=$data['username'];
	$face= $data['foto_profil'];

?>
    <div class="panel panel-default panel-google-plus">
        <div class="dropdown">
            <span class="pull-right">
                        <a class="stdelete" href="#" id="<?php echo $msg_id;?>" title="Hapus Update">X</a>
            </span>
        </div>
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
                    <img src="<?php echo $face;?>" class='small_face' />
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
    <?php
}
}
?>
