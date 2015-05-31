<!DOCTYPE.HTML>
        <html>
            <head>
             <!--Ajout de la head-->
                <?php include ("head.php"); ?>
                <!--Ajout de la head-->
            </head>
                <header>
                    <!--Ajout du menu-->
                    <?php include ("menu.php"); ?>
                    <!--AJout du menu-->
                    </header>
                    <body>
                        <div id="block_page">

                                <!-- Ajout du Carousel-->
                            <?php include ("carousel.php"); ?>
                                <!-- Ajout du Carousel-->
								<aside class="col-lg-6">
                                           <a class="twitter-timeline"  href="https://twitter.com/SWBFNewsFR" data-widget-id="604013817652203520">Tweets de @SWBFNewsFR</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
									</aside>
									<aside class="col-lg-6">
									    <!--derniers articles-->
									</aside>
                            <div class="row">
                            <section class="col-md-12 col-lg-12 col-sm-12 col-xs-12">

                                <!--Article-->
                                    <?php include ("requete/query.php");?>
                                <!--Article-->
                            </section>
                            </div>
                        </div>
                        </div>
                    </body>

        </html>