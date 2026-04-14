<?php 
//checkcheck-for-http-post_TODO.php
include 'includes/header.php'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $term = $_POST['term'] ?? '';
    echo 'You search for ' . htmlspecialchars($term);
} 
else { ?>
    <form action="checkcheck-for-http-post.php" method="POST">
        Search for : <input type="search" name="term" />
        <input type="submit" value="Search" placeholder="검색..."/>
    </form>
<?php } ?>


<?php include 'includes/footer.php'; ?> 