<!doctype html>
<html class="no-js" lang="en">
<script type="text/javascript">
    var global_icon = `<?=global_icon()?>`;
    var base_url = '<?=base_url()?>';
</script>
<head>
    <meta charset="utf-8">
    
    <!--====== Title ======-->
    <title><?=$title?></title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="<?=global_icon()?>" type="image/png">
        
    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="<?=base_url()?>assets/frontend/css/animate.css">
        
    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="<?=base_url()?>assets/frontend/css/magnific-popup.css">
        
    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="<?=base_url()?>assets/frontend/css/slick.css">
        
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="<?=base_url()?>assets/frontend/css/LineIcons.css">
        
    <!--====== Font Awesome CSS ======-->
    <link rel="stylesheet" href="<?=base_url()?>assets/frontend/css/font-awesome.min.css">
        
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="<?=base_url()?>assets/frontend/css/bootstrap.min.css">
    
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="<?=base_url()?>assets/frontend/css/default.css">
    
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="<?=base_url()?>assets/frontend/css/style.css">
    <script src="<?=base_url()?>assets/frontend/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?=base_url()?>assets/frontend/js/vendor/modernizr-3.7.1.min.js"></script>
    <script>
        var base_url = `<?=base_url()?>`;
    </script>
</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->    
   
   
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->
    
    <!--====== HEADER PART START ======-->
    
    <header class="header-area">
        <div class="navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="<?=base_url()?>">
                                <img style="height: 40px;width: 100%;" src="<?=global_icon()?>" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="<?=base_url()?>">Home</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                            <?php if(!return_user_profile()){ ?>
                                <div class="navbar-btn d-none d-sm-inline-block nav-item dropdown">
                                    <button class="main-btn" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      User
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#login">Login</a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#register">Register</a>
                                    </div>
                                </div>
                            <?php }else{ ?>
                                <div class="navbar-btn d-none d-sm-inline-block nav-item dropdown">
                                    <button class="main-btn" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Profile
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="<?=base_url()?>manage">Manage</a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item" href="<?=base_url()?>Newuser/logout">Logout</a>
                                      
                                    </div>
                                </div>
                            <?php } ?>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->
        
        