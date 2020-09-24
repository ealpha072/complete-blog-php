<?php require_once('config.php');  ?>
<?php require_once(ROOT_PATH . '/includes/functions.php'); ?>
<!--retrieve all posts from db-->
<?php $allposts = getPublishedPosts();  ?>
<?php require_once(ROOT_PATH . '/includes/head.php');  ?>
    <title>AlphaBlog | Home</title>
</head>
<body>
    <div class="container">
       <?php include(ROOT_PATH . '/includes/navbar.php'); ?>

       <!--banner-->
       <?php include(ROOT_PATH . '/includes/banner.php'); ?>
        <!--main page content-->
        <div class="content">
            <h2>Recent articles</h2>
            <hr>
            <!--more to be added here--> 
            <?php foreach ($allposts as $post):?>
                <div class="post">
                    <img src="<?php echo BASE_URL . 'static/images/'.$post['image'];?>" class = 'post-image img-fluid' alt="">
                    <?php if(isset($post['topic']['name'])):  ?>
                        <a href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topic']['id']?>" class ='btn category'>
                           <?php echo $post['topic']['name']; ?> 
                        </a>
                    <?php endif; ?>    
                    <a href="single-post.php?post-slug=<?php echo $post['slug']; ?>">
                        <div class="post-info">
                            <h3><?php echo $post['title'] ?></h3>
                            <div class="info">
                                <span><?php echo date("F j, Y ",strtotime($post['created_at']));  ?></span>
                                <span class="read-more">Read more</span>
                            </div>
                        </div>
                    </a>
                </div> 
            <?php endforeach; ?>
        </div><!--end of main page-->

        <!--footer items-->
<?php include(ROOT_PATH . '/includes/footer.php'); ?>
