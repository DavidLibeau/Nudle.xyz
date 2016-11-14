<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<link rel="icon" type="image/png" href="img/favicon.png"/>
    <title>Nudle</title>
	<meta name="description" content="Search all the web with nudle."/>
	<meta name="keywords" content="watch dogs, watchdogs, nudle, ubisoft, hacking, search, google, game"/>
    <meta name="theme-color" content="#D4D4D4"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="Nudle.xyz">
	<meta name="twitter:title" content="Nudle">
	<meta name="twitter:description" content="Nudle search engine">
	<meta name="twitter:creator" content="">
	<meta name="twitter:image" content="http://nudle.xyz/img/nudle_preview.jpg">
	<meta property="og:title" content="Nudle">
	<meta property="og:type" content="article">
	<meta property="og:url" content="http://nudle.xyz">
	<meta property="og:image" content="http://nudle.xyz/img/nudle_preview.jpg">
	<meta property="og:description" content="Nudle search engine">
	<meta property="og:site_name" content="Nudle">

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="inc/material.min.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="inc/material.min.js"></script>

    <?php if(isset($_GET["q"])){ ?>
    <style>
        #logo{
            margin:2vh;
        }
        #logo img{
            width: auto;
            height: 10vh;
        }
    </style>
    <? 
    $q=str_replace('"',"",strip_tags($_GET["q"]));
    }
    ?>
</head>
    <!-- Join the Reddit topic here : https://www.reddit.com/r/watch_dogs/comments/4ofa3t/nudlexyz_google_of_watchdogs_2_recreate/ ! -->
<body>

    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div aria-expanded="false" role="button" tabindex="0" class="mdl-layout__drawer-button">
                <i class="material-icons">menu</i>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link account-navigation" href="/login">
                    <span><i class="material-icons">account_circle</i>Sign in</span>
                </a>
                <a class="mdl-navigation__link" href="/trends"><i class="material-icons">whatshot</i>Trends</a>
                <a class="mdl-navigation__link" href="/share"><i class="material-icons">share</i>Share</a>
                <a class="mdl-navigation__link" href="/jobs"><i class="material-icons">work</i>Careers</a>
                <a class="mdl-navigation__link" href="/about"><i class="material-icons">info</i>About</a>
                <a class="mdl-navigation__link" href="/privacy"><i class="material-icons">security</i>Privacy</a>
                <a class="mdl-navigation__link" href="/settings"><i class="material-icons">settings</i>Setting</a>
            </nav>
        </div>
    </div>

    <main class="mdl-layout__content">

    <h1 id="logo"><?php if(isset($_GET["q"])){ ?><a href="/"><?php } ?><img src="img/nudle_logo.gif" alt="Nudle logo"/><?php if(isset($_GET["q"])){ ?></a><?php } ?></h1>
    <form action="/">
        <div id="search">
            <?php if(isset($_GET["q"])){ ?>
            <input type="text" name="q" value="<?php echo($q); ?>"/>
            <?php } else { ?>
            <input type="text" name="q" value="" placeholder="Search Nudle or type URL"/>
            <?php } ?>
            <button type="submit" class="mdl-js-ripple-effect"><i class="material-icons">search</i></button>
        </div>
    </form>
    <?php if(isset($_GET["q"])){ ?>
    <div id="results">
        <?php if(preg_match("/.+\..+/",$q)==1) {
            $url=$q;
            $break=0;
            if(preg_match("/.+:\/\/.+/",$q)==1) {
                for($i=0;$i<strlen($q);$i++){
                    if(preg_match("/:|\//",$url[$i])==1){
                        $break++;
                    }
                    if($break==3){
                        $url=substr($url,$i+1,strlen($url));
                        $i=strlen($q);
                    }
                }
            }
        ?>
        <a class="result" href="http://<?php echo(urlencode($url));?>" target="_blank">
          <i class="material-icons">link</i>
          <div>
            <h2>Direct link to "<?php echo($q);?>"</h2>
            <em><?php echo(urlencode($url));?></em>
          </div>
        </a>
        <?php } ?>
        <a class="result sponsored" href="https://www.google.com/search?q=<?php echo(urlencode($q));?>" target="_blank">
          <i class="material-icons">&#xE8FA;</i>
          <div>
            <h2>Google results for "<?php echo($q);?>"</h2>
            <p>Access to all the results for "<strong><?php echo($q);?></strong>" from Google search engine.</p>
            <em>https://www.google.com/search?q=<?php echo(urlencode($q));?></em>
          </div>
        </a>
        <a class="result sponsored" href="https://duckduckgo.com/?q=<?php echo(urlencode($q));?>" target="_blank">
          <i class="material-icons">&#xE8FA;</i>
          <div>
            <h2>DuckDuckGo results for "<?php echo($q);?>"</h2>
            <p>The Duck will anwser you for "<strong><?php echo($q);?></strong>" with the DuckDuckGo search engine.</p>
            <em>https://duckduckgo.com/?q=<?php echo(urlencode($q));?></em>
          </div>
        </a>
        <a class="result sponsored" href="https://www.bing.com/search?q=<?php echo(urlencode($q));?>" target="_blank">
          <i class="material-icons">&#xE8FA;</i>
          <div>
            <h2>Bing results for "<?php echo($q);?>"</h2>
            <p>Ping Bing for "<strong><?php echo($q);?></strong>" and get results with the Bing search engine.</p>
            <em>https://www.bing.com/search?q=<?php echo(urlencode($q));?></em>
          </div>
        </a>
        <a class="result sponsored" href="https://search.yahoo.com/search?p=<?php echo(urlencode($q));?>" target="_blank">
          <i class="material-icons">&#xE8FA;</i>
          <div>
            <h2>Yahoo results for "<?php echo($q);?>"</h2>
            <p>Say Yahoo! when you see results for "<strong><?php echo($q);?></strong>" from Yahoo search engine.</p>
            <em>https://search.yahoo.com/search?p=<?php echo(urlencode($q));?></em>
          </div>
        </a>
        <a class="result sponsored" href="https://www.qwant.com/?q=<?php echo(urlencode($q));?>" target="_blank">
          <i class="material-icons">&#xE8FA;</i>
          <div>
            <h2>Qwant results for "<?php echo($q);?>"</h2>
            <p>Find what you want, here "<strong><?php echo($q);?></strong>", with Qwant search engine.</p>
            <em>https://www.qwant.com/?q=<?php echo(urlencode($q));?></em>
          </div>
        </a>

        <p class="errormessage"><i class="material-icons">warning</i><br/>No other results found for "<strong><?php echo($q); ?></strong>"...</p>
     </div>
    
    <?php } ?>
    </main>
</body>
</html>


