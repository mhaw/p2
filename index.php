<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>xkcd Password Generator</title><!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"><!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet" type="text/css"><!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>

            <div class="col-lg-6 text-center">
                <form role="form" method="post" action="">
                    <h1>xkcd password generator</h1>

                    <div class="intro">
                        <p>A simple password generator based on <a href="http://xkcd.com/936/">xKcd's classic password comic</a>. This generator will construct a password of random English words. Options include adding a special symbol or numerical digit, making the password all uppercase, and selecting the word separator punctuation. <a href="https://howsecureismypassword.net/">Test your password strength here.</a></p>
                    </div><br>

                    <p class="bg-primary"><?php require('logic.php');?></p><br>
                    <input type="number" class="form-control" placeholder="number of words to include in your password" name="number_words"><br>

                    <div class="checkbox">
                        <label><input type="checkbox" name="include_number"> include a number?</label>
                    </div>

                    <div class="checkbox">
                        <label><input type="checkbox" name="include_symbol"> include a symbol?</label>
                    </div>

                    <div class="checkbox">
                        <label><input type="checkbox" name="all_upper"> all uppercase?</label>

                        <div class="select">
                            <label>separator type?</label><br>
                            <select class="form-control" name="septype">
                                <option value="space">
                                    space
                                </option>

                                <option value="underscore">
                                    _ underscore
                                </option>

                                <option value="hypen">
                                    - hypen
                                </option>
                            </select>
                        </div>
                    </div><button type="submit" class="btn btn-primary">Submit</button>
                </form><br>
                <br>
                <a href="http://xkcd.com/936/"><img src="http://imgs.xkcd.com/comics/password_strength.png" alt="xkcd comic"></a>
            </div>

            <div class="col-sm-3"></div>
        </div>
    </div><!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript">
</script><!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js" type="text/javascript">
</script>
</body>
</html>
