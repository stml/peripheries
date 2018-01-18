<!DOCTYPE html>
<html lang="en">
<head>
<title>peripheries</title>

<link rel="stylesheet" href="styles.css?<?php echo rand(0,1000);?>"/>

<link rel="apple-touch-icon" sizes="57x57" href="/icon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/icon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/icon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/icon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/icon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/icon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/icon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/icon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/icon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/icon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/icon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/icon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/icon/favicon-16x16.png">
<link rel="manifest" href="/icon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/icon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

</head>
<body>

<div id="header">
<h1><strong><span class="gr">περιφερειών</span> / <span class="en">peripheries</span></strong></h1>
</div>

<div id="content">
<p><span class="gr">Μια μηνιαία συνάντηση για την τέχνη και την τεχνολογία στην Αθήνα</span></br><span class="en">A monthly meet-up for art and technology in Athens</span></p>

<p><span class="gr">Την πρώτη Τρίτη κάθε μήνα</span><br/><span class="en">First Tuesday of every month (Next: <?php echo date("jS F", strtotime("first tuesday of next month")); ?>)</span></p>

<p><span class="gr">Ένα μπαρ, πιθανότατα στο Ψυρρή</span></br/><span class="en">A bar, probably in Psyrri</span></p>

<p><span class="gr">Εγγραφείτε για υπενθυμίσεις</span> / πολύ περιστασιακή λίστα αλληλογραφίας:</br /><span class="en">Sign up for reminders / very occasional mailing list:</span></p>

<form action="https://tinyletter.com/peripheries-athens" method="post" target="popupwindow" onsubmit="window.open('https://tinyletter.com/peripheries-athens', 'popupwindow', 'scrollbars=yes,width=800,height=600');return true">
<p><label for="tlemail"><span class="gr">Hλεκτρονική διεύθυνσή</span> / <span class="en">Email address</span></label>: <input type="text" style="width:140px" name="email" id="tlemail" /> <input type="hidden" value="1" name="embed"/><input type="submit" value="Subscribe" />
</form>
</div>

<div id="footer">
<p><span class="en"><strong>peripheries</strong> is run by <a href="http://jamesbridle.com">James Bridle</a> and <a href="http://kyriakigoni.com/">Kyriaki Goni</span></a></p>
</div>

</body>
</html>
