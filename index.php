<!DOCTYPE html>
<html lang="en">
<head>
<title>περιφέρειες / peripheries</title>

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
<h1><strong><span class="gr">περιφέρειες</span> / <span class="en">peripheries</span></strong></h1>
</div>

<div id="content">
<p><span class="gr">Μια μηνιαία συνάντηση για την τέχνη και την τεχνολογία στην Αθήνα</span></br><span class="en">A monthly meet-up for art and technology in Athens</span></p>

<?php $next = strtotime("first tuesday of next month"); ?>
<?php
if (date("n", $next) == 1) { $month = 'Ιανουάριος'; }
else if (date("n", $next) == 2) { $month = 'Φεβρουάριος'; }
else if (date("n", $next) == 3) { $month = 'Μάρτιος'; }
else if (date("n", $next) == 4) { $month = 'Απρίλιος'; }
else if (date("n", $next) == 5) { $month = 'Μάιος'; }
else if (date("n", $next) == 6) { $month = 'Ιούνιος'; }
else if (date("n", $next) == 7) { $month = 'Ιούλιος'; }
else if (date("n", $next) == 8) { $month = 'Αύγουστος'; }
else if (date("n", $next) == 9) { $month = 'Σεπτέμβριος'; }
else if (date("n", $next) == 10) { $month = 'Οκτώβριος'; }
else if (date("n", $next) == 11) { $month = 'Νοέμβριος'; }
else if (date("n", $next) == 12) { $month = 'Δεκέμβριος'; }
else { $month = ''; }
?>

<p><span class="gr">Την πρώτη Τρίτη κάθε μήνα, 8μμ</span><br/><span class="en">First Tuesday of every month, 8pm</span></p>
<!-- <p><span class="gr">Την πρώτη Τρίτη κάθε μήνα, 8μμ  (προσεχής: <?php echo date("j", $next)." ".$month; ?>)</span><br/><span class="en">First Tuesday of every month, 8pm (next: <?php echo date("jS F", $next); ?>)</span></p> -->

<p><span class="gr">2018: 6 Φεβρουαρίου, 6 Μαρτίου, 3 Απριλίου, <strike>1 Μαΐου</strike>, 5 Ιουνίου, 3 Ιουλίου</span><br/>
   <span class="en">2018: 6 February, 6 March, 3 April, <strike>1 May</strike>, 5 June, 3 July</span></p>

<p><span class="gr">Mέρος: <a href="https://goo.gl/maps/2hh35gNd8mP2">Φορμάικα</a>, Καρόρη 5, Αθήνα 105 51</span></br/><span class="en">Venue: <a href="https://goo.gl/maps/2hh35gNd8mP2">Formeika</a>, Karori 5, Athens 105 51</span></p>

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
