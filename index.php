<!DOCTYPE html>
<html lang="en">
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <![endif]-->
      <title>Test responsiveness</title>
      <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
      <link href="assets/css/bootstrap.css" rel="stylesheet">
      <link href="assets/css/style.css" rel="stylesheet">
      <link href="assets/css/ionicons.css" rel="stylesheet">
      <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head>
  <body>
    <header id="header">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-6 col-lg-offset-3 ">
                    <h1>Responsiveness</h1>
                      <div id="custom">
                        <div class="input-group">
                          <span class="input-group-addon" id="sizing-addon1">http://</span>
                          <input type="text" placeholder="Enter a website" value="aaron-welsh.co.uk" class="form-control" id="iframeURL" aria-describedby="basic-addon3">
                        </div>
                        W
                        <input type="number" id="iframeWidth" placeholder="400" value="400"> x
                        H
                        <input type="number" id="iframeHeight" placeholder="650" value="650">
                        </div>
                        <br>
                        <a href="https://github.com/aarogrammer/responsiveness" class="git"><i class="ion-social-github"></i></a>
                </div>
            </div>
        </div>
    </header>
    <section id="container">
        <div class="container">
            <div class="row">
               <div class="container-wrapper">
                    <div class="phone" id="phone">
                      <iframe id="iframe" src=""></iframe>
                      <div id="loadingMessage" style="display: none;"><img src="assets/img/gears.gif"></div>
                      <a id="circle" class="circle" style="position: relative;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    </div>
                      <div id="lapBtm" class=""></div>
                      <span id="currentRes"></span>
                    <div class="col-lg-8 col-lg-offset-2">
                        <h2>Note:</h2>
                        <p>This will only work for websites that allow iframes, i.e. don't have a header set to "X-Frame-Options: SAMEORIGIN"</p>
                        <label>Quick resize buttons: </label>
                        <button id="portrait" onclick="resp.portraitView()" value="400" class="btn btn-primary">Phone</button>
                        <button id="landscape" onclick="resp.landscapeView()" value="1024" class="btn btn-primary">Tablet</button>
                        <button id="laptop" onclick="resp.laptopView()" value="1224" class="btn btn-primary">Laptop</button>
                        <button id="desktop" onclick="resp.desktopView()" value="1824" class="btn btn-primary">Desktop</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h2>About this tool</h2>
                    <p>With the popularity of mobile devices, it is crucial for your website to ensure it responds to users device size.</p>
                    <p>This tool, completely built in JavaScript, allows for you to load your website within an iFrame and check each screen resolution that you want to test responsiveness for.</p>
                    <p>This tool is open-source and is easy to modify, allowing for better responsive tests to be done.</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <a class="logo img-responsive" href="#container"></a>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer" class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="myportfolio col-md-6 col-sm-5">
                        <h3>Why make this tool?</h3>
                        <p>This tool was made to test website that I was developing to ensure that they're responsive to certain devices.</p>
                        <p>This tool is simply made with JavaScript and the website is displayed in an iFrame.</p>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                      <h3>Get this tool!</h3>
                       <div class="socialIcons">
                            <a href="https://github.com/aarogrammer/responsiveness"><i class="ion-social-github"></i></a>
            			     </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright © <a href="http://aaron-welsh.co.uk">Aaron Welsh</a> 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery-1.12.0.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/classes.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/custom-jquery.js"></script>
    <script>
    resp.updateDevice();
    </script>
  </body>
</html>
