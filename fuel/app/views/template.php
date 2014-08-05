<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <?php echo Asset::css('bootstrap.css'); ?>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <?php echo Asset::js('bootstrap.js'); ?>
</head>
<body>
<div id="">

    <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style="font-size: 15px" href="#">CRAFTED WITH <span style="color: red" class="glyphicon glyphicon-heart"></span> IN CANADA</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">ACCOUNT</a></li>
                    <li><a href="#">ORDERS</a></li>
                    <li><a href="#">EDIT INFO</a></li>
                    <li><a href="#">BECOME A VIP</a></li>

                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="col-md-3 pull-right"  style="padding-top: 60px">
        <a style="color: inherit; text-decoration: underline">MY BAG</a>
        <span class="label label-info">0 ITEMS</span>
        <a class="btn btn-default btn-sm" style="color:white;background-color: #000000">Checkout<span class="glyphicon glyphicon-chevron-right"></span></a>

    </div>
    <div class="col-md-12">
    <div class="container">
        <?php echo $content; ?>
    </div>
    </div>
</div>
<div  style="background-color: #000000; width: 500px">
</div>
</body>
</html>