<?php
$id = $_SESSION['id'];
if (isset($id)) {
    $member = new Member();
    $memberDao = new MemberDao();
    $member->setMemberId($id);
    $member = $memberDao->getMemberById($member);

}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="limiter">
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Blog Home - Start Bootstrap Template</title>

        <!-- Bootstrap core CSS -->
        <link href="../src/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../src/vendor/bootstrap/css/blog-home.css" rel="stylesheet">

    </head>

    <body>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <!-- Blog Entries Column -->
            <div class="col-md-8">
                <h1 class="my-5">Member Profile
                    <small></small>
                </h1>
                <!-- Blog Post -->
                <div class="card mb-8">

                    <?php echo $member->getMemberPhoto(); ?>
                    <div class="card-body">
                        <h2 class="card-title"></h2><a href="#" class="btn btn-primary">Edit Profile &rarr;</a>
                        <img class="card-img-top" src="<?php echo $member->getMemberPhoto(); ?>" alt="Card image cap">
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>

                    </div>
                </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <!-- Bootstrap core JavaScript -->
    <script src="../src/vendor/jquery/jquery.js"></script>
    <script src="../src/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
</div>
</div>
</body>
</html>
