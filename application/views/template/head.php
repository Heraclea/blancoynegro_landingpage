<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">

<title>BYN Textiles</title>

<!-- GOOGLE FONTS
    ================================================== -->
<link href='https://fonts.googleapis.com/css?family=Lato:400,300italic,300,100italic,100,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,600,600italic,700,700italic,900italic,900,300,300italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
<!-- CSS BEGINS 
    ================================================== -->
<!-- ELEMENTS BASE CSS -->
<link href="<?= base_url() ?>assets/css/elements.min.css" rel="stylesheet" type="text/css" />
<!-- THEME BASE CSS -->
<link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css" />
<!-- COLOR SCHEME -->
<link href="<?= base_url() ?>assets/css/colors/color1.css" id="changeable-colors" rel="stylesheet" />
<!-- CSS ENDS   
 	 ================================================== -->

<input type="hidden" id="base_url" value="<?= base_url(); ?>">

<meta name="description" content="<?= $seo->website_description ?>">
<meta name="keywords" content="<?= $seo->website_keywords ?>">

<?php if(!empty($seo->google_analytics_code)){ ?>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', '<?= $seo->google_analytics_code ?>', 'auto');
    ga('send', 'pageview');

  </script>
<?php } ?>