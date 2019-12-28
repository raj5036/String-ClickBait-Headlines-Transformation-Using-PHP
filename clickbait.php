<?php
if(isset($_POST["fix_submit"])){
    $clickbait=strtolower( $_POST["clickbait"] );
    $a=array(
        "scientists",
        "doctors",
        "you will never believe",
        "shocked",
        "surprised",
        "simplified"
    );
    $b=array(
        "so-called scientist",
        "so-called doctors",
        "you will get bored by seeing",
        "bored",
        "not so surprised",
        "complicated"
    );
    $honest=str_replace($a,$b,$clickbait);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Honest Clickbait Headlines</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="display-3">Honest Clickbait Headlines</h1>
        <p class="lead">Annoyed of those <em>Clickbait Headlines</em>?..Copy and Paste it here and get the <em>Honest</em> version of it</p>
        <div >
            <form method="post" action="">
                <div class="form-group">
                    <input type="text" class="form-control"  placeholder="paste those headlines here" name="clickbait">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <button type="submit" class="btn btn-outline-success" name="fix_submit">Submit</button>
            </form>
        </div>
        <?php
            if(isset($_POST["fix_submit"])){
                if (empty($clickbait)) {
                    echo("<h4 class='lead text-center text-primary'>Please give some input!!!</h4>");
                }
                else {
                    echo("<h4 class='text-danger'>Clickbait Headline</h4>");
                    echo("<p>".ucwords($clickbait)."</p><br>");
                    echo("<h4 class='text-success'>Honest Headline</h4>");
                    echo("<p>".ucwords($honest)."</p>");
                }
            }
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>