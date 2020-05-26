<?php include 'header.php'; ?>
<style type="text/css">
    .wrapper{
        width:75%;
    }
</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<link rel="stylesheet" type="text/css" href="assets/css/style-header.css">
<div class="index-wrapper">
    <div class="info-box">
        <div class="info-inner">
            <div class="info-in-head">
                <a href="<?php echo $userLoggedIn; ?>"><img src="<?php echo $user['cover_pic']; ?>"></a>
            </div>
            <div class="info-in-body">
                <div class="in-b-box">
                    <div class="in-b-img">
                        <a href="<?php echo $userLoggedIn; ?>"><img src="<?php echo $user['profile_pic']; ?>"></a>
                    </div>
                </div>
                <div class="info-body-name">
                    <div class="in-b-name">
                        <div>
                            <a href="<?php echo $userLoggedIn; ?>"><?php echo $user['first_name'] . " " . $user['last_name']; ?></a>
                        </div>
                        <span><small>
                            <a href="<?php echo $userLoggedIn; ?>"><?php echo "@" . $user['username'] ?></a>
                        </small></span>
                    </div>
                </div>
            </div>
            <div class="info-in-footer">
                <div class="number-wrapper">
                    <div class="num-box">
                        <div class="num-head">
                            POSTS
                        </div>
                        <div class="num-body">
                            <?php echo $user['num_posts']; ?>
                        </div>
                    </div>
                    <div class="num-box">
                        <div class="num-head">
                            LIKES
                        </div>
                        <div class="num-body">
                            <span class="count-likes">
                                <?php echo $user['num_likes']; ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="post-wrap">
        <div class="post-inner">
            <div clas="post-h-left">
                <div class="post-h-img">
                    <a href="<?php echo $userLoggedIn; ?>"><img src="<?php echo $user['profile_pic'] ?>"></a>
                 </div>
            </div>
            <div class="post-body">
                <form class="post_form" action="index.php" method="POST" enctype="multipart/form-data">
                    <textarea class="status" name="post_text" id="post_text" placeholder="Type Something here!" rows="4" cols="50"></textarea>
                    <div class="hash-box">
                        <ul>
                        </ul>
                    </div>
                    </div>
                <div class="post-footer">
                    <div class="p-fo-left">
                        <ul>
                            <input type="file" name="fileToUpload" id="fileToUpload"/>
                            <label for="fileToUpload"><i style="color:#3875C5" class="fas fa-camera"></i></label>
                            <span class="tweet-error"></span>
                        </ul>
                    </div>
                    <div class="p-fo-right">
                        <input type="submit" name="post" value="SHARE">
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>