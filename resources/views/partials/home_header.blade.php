 

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to Supercoin-Trade</title>
    <link rel="icon" href="{{ asset('templates/old/styles/images/favicon.png') }}">
    <link rel="stylesheet" href="maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
    <link href="{{ asset('templates/old/styles/animate.css') }}" rel='stylesheet' type='text/css'>
    <link href="{{ asset('templates/old/styles/custom.css') }}" rel='stylesheet' type='text/css'>
    <link href="{{ asset('templates/old/styles/hover.css') }}" rel='stylesheet' type='text/css'>
    <!--<script src="ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
    <script src="{{ asset('templates/old/js/jquery-1.8.3.min.js') }}"></script>
    <script src="{{ asset('templates/old/styles/setting2.js') }}" type='text/javascript'></script>
    <script src="{{ asset('templates/old/maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('templates/old/styles/wow.js') }}"></script>
    <script src="{{ asset('templates/old/styles/wow.min.js') }}"></script>
</head>


<body>
    <div class="container">
    <div id="google_translate_element"></div>

    <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
    </script>
    
    <script type="text/javascript" src="../translate.google.com/translate_a/elementa0d8.html?cb=googleTranslateElementInit"></script>
    <div class="wrapper">
    <div class="bannaerwrap">

<div class="logowrap">

    <div class="content">
        <div class="logo" style="width: 233px"><a href="{{ route('home') }}"><img src="{{ asset('templates/old/images/glofxlogo.png') }}" style="width: 100%;" alt="" /></a></div>
        <div class="navigation flipInX wow" >
            @include('partials.nav')
        </div>
        <div class="loginwrap flipInX wow" >
            <ul>
                <li class="login hvr-float-shadow"><a href="user_login.php">login</a></li>
                <li class="signup hvr-float-shadow"><a href="user_registration.php">signup</a></li>
            </ul>
        </div>

    </div>

</div>
        <div id="particles-js"></div>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#clouds-1').pan({fps: 30, speed: 0.5, dir: 'left', depth: 30});
                $('#clouds-2').pan({fps: 30, speed: 2.0, dir: 'left', depth: 70});
            });
        </script>


        <div id="clouds-1" class="clouds cloud-1"></div>
        <div id="clouds-2" class="clouds cloud-2"></div>
        <div class="content">

            <div class="bannerwrap">
                <div class="bannerleft">
                    <div class="intro">
                      <h1 class="fadeInLeft wow"><small>Introducing the most instant fund trading system online... <span>supercoin-trade</span></small></h1>
                    <h1 class="fadeInRight wow"><small>Professional Trading On Cryptocurrency, Make Profit On Money Of The Future Today!</small></h1>
                    </div>

                    <div class="registeredbox hvr-bob flash wow">
                        <a href="user_registration.php" class="hvr-float-shadow fadeInUp wow">Open New Account</a>
                    </div>
                    <div class="site_description">
                        supercoin-trade is registered in the United Kingdom
                        Our company was formed to utilize advanced cloud
                        mining technology to mine for Cryptocurrencies.
                    </div>


                </div>


                <div class="clear"></div>

                <div class="statwrap">

                    <div class="statbox hvr-bob bounceIn wow"> <span class="icon"><img src="styles/images/stat5.png" alt="" /></span>
                        <div class="stat-left">
                            <h3>83</h3>
                            <p>Visitors  Online</p>
                        </div>
                    </div>

                    <div class="statbox hvr-bob bounceInRight wow"> <span class="icon"><img src="styles/images/stat2.png" alt="" /></span>
                        <div class="stat-left">
                            <h3>593</h3>
                            <p>Total Accounts</p>
                        </div>
                    </div>

                </div>

                <div class="statwrap">

                    <div class="statbox hvr-bob bounceInLeft wow"> <span class="icon"><img src="styles/images/stat4.png" alt="" /></span>
                        <div class="stat-left">
                            <h3>$ 12,735.00</h3>
                            <p>Total Deposited</p>
                        </div>
                    </div>
                    <div class="statbox hvr-bob bounceIn wow"> <span class="icon"><img src="styles/images/stat3.png" alt="" /></span>
                        <div class="stat-left">
                            <h3>$ 14,525.50</h3>
                            <p>Total Withdrawals</p>
                        </div>
                    </div>




                </div>



            </div>
        </div>

    </div>


</div>