
<?php
if (!file_exists(__DIR__ . "/config.php")) {
    header("Location: install/");
}
session_start();
require_once __DIR__ . "/classes/loader.php";
require_once __DIR__ . "/login.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>tt</title>
        <?php echo Constants::getCSS($HOST_URL . "/static"); 
        echo Constants::getPreferencedCSS($HOST_URL . "/static", $_SESSION['style']);
        ?>
        
    </head>
    <body>
        <div class="wrapper">
            <?php require_once __DIR__ . "/static/html/header_aside.php"; ?>
            <section>
                <div class="content-wrapper">
                    <div class="content-heading">
                        Homepage
                        <small>Welcome to Q3Panel</small>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="panel janno-panel">
                                <div class="panel-heading">
                                    Session variables
                                </div>
                                <div class="panel-body"><?php echo nl2br(print_r($_SESSION, true)); ?></div>
                            </div>
                            
                            <div class="panel janno-panel">
                                <div class="panel-heading">
                                    Required files
                                </div>
                                <div class="panel-body"><?php echo nl2br(print_r(get_required_files(), true)); ?></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel janno-panel">
                                <div class="panel-heading">
                                    <div class="panel-title">Latest news</div>
                                </div>
                                <div class="panel-body list-group">
                                    <div class="list-group-item">
                                        <div class="media-box">
                                            <div class="pull-left">
                                                <span class="fa-stack">

                                                    <em class="fa text-success fa-check fa-stack-2x"></em>
                                                </span>
                                            </div>
                                            <div class="media-box-body clearfix">
                                                <div class="media-box-heading text-success m0">some logs</div>
                                                <p class="m0">
                                                    <small>xxx<br>xxxxx</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="panel-body list-group">
                                    <div class="list-group-item">
                                        <div class="media-box">
                                            <div class="pull-left">
                                                <span class="fa-stack">

                                                    <em class="fa text-success fa-check fa-stack-2x"></em>
                                                </span>
                                            </div>
                                            <div class="media-box-body clearfix">
                                                <div class="media-box-heading text-success m0">some other stuff</div>
                                                <p class="m0">
                                                    <small>text<br>text</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <?php echo Constants::getJS($HOST_URL . "/static"); ?>
    </body>
</html>
