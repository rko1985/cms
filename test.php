<?php include("includes/db.php"); ?>
<?php include("includes/header.php"); ?>


<?php 

echo loggedInUserId();

if(userLikedThisPost(89)){
    echo "user liked";
} else {
    echo "did not like it";
}

?>