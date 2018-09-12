<html lang="en" class="no-js">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <link rel="icon" href="../../img/kk.png" type="image/png">
    <title>Kate K photography</title>
<link rel="stylesheet" href="../../css/style_web.css" type="text/css"/>
    <link rel="stylesheet" href="../../css/style_home.css" type="text/css"/>
    <link rel="stylesheet" href="../../css/style_media.css" type="text/css"/>
    <link rel="stylesheet" href="../../css/style_contacts.css" type="text/css"/>
    <link rel="stylesheet" href="../../css/style_photo.css" type="text/css"/>
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="../../js//script_web.js"></script>
    <script src="../../js//script_home.js"></script>
      <script src="../../js//device.js"></script>
      <script src="../../js//device.m.t.js"></script>
  	<link rel="stylesheet" href="../../css/style_mobile.css" type="text/css"/>
  	<link rel="stylesheet" href="../../css/style_tablet.css" type="text/css"/>



       <meta charset="UTF-8"/>
       <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Gamma Gallery - A Responsive Image Gallery Experiment"/>
        <meta name="keywords" content="html5, responsive, image gallery, masonry, picture, images, sizes, fluid, history api, visibility api"/>
        <meta name="author" content="Codrops"/>

        <link rel="stylesheet" type="text/css" href="../../css/gallery/style.css"/>
    <script src="../../js/gallery/modernizr.custom.70736.js"></script>
    <noscript><link rel="stylesheet" type="text/css" href="../../css/gallery/noJS.css"/></noscript>
  </head>
  <body>
    <div class="box">
      <header role="banner">
              <a  id="home_rus" class="menu" alt="главная" title="На главную">Kate Kosushkina <span>photography</span></a>
              <div id="language" role="group" aria-label="...">
                          <button type="button" class="btn" onclick="location.href='../../eng/photo/family.php'">ENG</button>
                          <button type="button" class="btn" onclick="location.href='../../rus/photo/family.php'">RU</button>
              </div>
       </header>
      <nav>
                  <ul class="nav n">
                         <li><a id="home_rus" class="menu" alt="главная" href="../../rus.php" >Главная</a></li>
                         <li><a id="photo_rus" class="menu" alt="photo" href="../../rus/photo/">Портфолио</a></li>
                         <li><a id="contacts_rus" class="menu" alt="контакты" href="../../rus/contacts/">Контакты</a></li>
                  </ul>
      </nav>
      <a id="move_up" href="#">
        <div class="triangle">
        </div>
      </a>
		<div class="container">
			<div id="content" class="content">

        <div class="gamma-container gamma-loading" id="gamma-container">

          <ul class="gamma-gallery">
        <?php
        error_reporting(E_ALL);
        $ph = scandir('../../img/family/original',1);
        foreach ($ph as $value)
        {
           if (!in_array($value,array(".","..",".DS_Store"))){
             $result[] = $value;
           }

        }


        foreach ($result as $photo){
        $n = $photo;

        echo "<li>";
        echo "<div data-max-width=\"1800\" data-max-height=\"1350\">";
        echo "<div data-src=\"../../img/family/original/";
        echo $n;
        echo "\" data-min-width=\"250\"></div>";
        echo "<div data-src=\"../../img/family/thumbs/";
        echo $n;
        echo "\"></div><noscript>";
        echo "<img src=\"../../img/family/thumbs/";
        echo $n;
        echo "\" /></noscript></div>";
        echo "</li>";
        }
        ?>
      </ul>

      <div class="gamma-overlay"></div>

    </div>

  </div>
</div>
    <script src="../../js/gallery/jquery.masonry.min.js"></script>
    <script src="../../js/gallery/js-url.min.js"></script>
    <script src="../../js/gallery/jquerypp.custom.js"></script>
    <script src="../../js/gallery/gamma.js"></script>
    <script src="../../js//script_web.js"></script>
<script type="text/javascript">

    $(function() {

                                var GammaSettings = {

                                        viewport : [ {
                                            width : 1400,
                                            columns : 6
                                        }, {
                                            width : 1200,
                                            columns : 5
                                        }, {
                                            width : 900,
                                            columns : 4
                                        }, {
                                            width : 500,
                                            columns : 3
                                        }, {
                                            width : 320,
                                            columns : 2
                                        }, {
                                            width : 0,
                                            columns : 2
                                        } ]
                                };

    Gamma.init( GammaSettings, fncallback );

    function fncallback() {

      $( '#loadmore' ).show().on( 'click', function() {

        ++page;
        var newitems = items[page-1]
        if( page <= 1 ) {

          Gamma.add( $( newitems ) );

        }
        if( page === 1 ) {

          $( this ).remove();

        }

      } );

    }

  });


</script>
        </div>
        </div>

        	<footer role="contentInfo">
        	<div class="icons">
        	<a target="_blank" href="http://vk.com/kate.kosushkina" title="vkontakte"><img src="../../img/icons2/vk.png" alt="vkontakte"></a>
        	<a target="_blank" href="https://www.facebook.com/profile.php?id=100006261739136" title="facebook"><img src="../../img/icons2/f.png" alt="facebook"></a>
        	<a target="_blank" href="http://instagram.com/kosushkina_ph" title="instagram"><img src="../../img/icons2/instagram.png" alt="instagram"></a>
        	</div>
        			<span>&copy; 2017 Kate K</span>
        	</footer>

         </div>

  <div>
  </body>
  </html>
