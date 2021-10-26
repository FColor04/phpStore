<?php
include "./dbConnect.php";
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="indexStyle.css" />
</head>
<body>
    <header>
        <h1>Marcin Smoła</h1>
        <nav>
            <ul>
                <li><a href="form.php">Dodaj wpis <div class="addPost"></div></a></li>
            </ul>
        </nav>
    </header>
    <section>
        <?php
        if (isset($db)) {
            CheckConnection($db);
            $query = $db->query("SELECT * FROM posts ORDER BY posts.created_at DESC LIMIT 8");
            while($row = $query->fetch_row()){
               ?>
                    <hr />
                    <article>
                        <div>
                            <h2><?php echo $row[1];?></h2>
                            <span><?php echo $row[3]; ?></span>
                            <form action="./removePost.php" method="post">
                                <input type="number" name="postId" value="<?php echo $row[0]; ?>" class="hidden"/>
                                <input type="submit" value="X" name="removePost" />
                            </form>
                        </div>
                        <span><?php echo $row[2];?></span>
                    </article>
                <?php
            }
        }
        ?>
        <hr />
        ---
    </section>
    <footer>
        Marcin Smoła &copy; 2021
    </footer>
</body>
</html>