<?php include 'header.php'; ?>
<style type="text/css">
    .wrapper{
        width:75%;
    }
</style>

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
        </div>
    </div>
</div>