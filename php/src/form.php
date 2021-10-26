<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="indexStyle.css" />
    <script defer src="formValidate.js"></script>
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
        <form id="addPost" method="post" action="addPost.php">
            <input type="text" name="title" id="titleInput">
            <textarea form="addPost" name="content" id="contentInput"></textarea>
            <input type="submit" id="addPostButton" name="addPost" value="Add post">
        </form>
    </section>
    <footer>
        Marcin Smoła &copy; 2021
    </footer>
</body>
</html>