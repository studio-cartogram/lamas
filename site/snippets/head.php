<?php
echo '<!DOCTYPE html>';
echo '<html lang="en">';
    echo '<head>';
        echo '<meta charset="utf-8" />';
        echo '<meta name="viewport" content="width=device-width,initial-scale=1.0">';
        echo '<title>' . $site->title()->html() . '</title>';
        echo '<meta name="description" content="' . $site->description()->html() . '">';
        echo '<meta name="keywords" content="' . $site->keywords()->html() . '">';
        echo '<script src="https://use.typekit.net/mfx6oxh.js"></script><script>try{Typekit.load({ async: true });}catch(e){}</script>';
        echo '<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">';
        echo '<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">';
        echo '<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">';
        echo '<link rel="manifest" href="/manifest.json">';
        echo '<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#000000">';
        echo '<meta name="theme-color" content="#ffffff">';
    echo css('assets/style.css');?>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-86341925-1', 'auto');
  ga('send', 'pageview');

</script><?php
    echo '</head>';
    echo '<body class="is-loading template-' . $page->template() . ' page-' . $page->uid() . '">';

?>
