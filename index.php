<? if (isset($_REQUEST['phpinfo'])) phpinfo();
else { ?>

<html>
<head>
<style type="text/css">
  body 
  {
    font-size:16px;
    font-family:Helvetica;
    color:#aaaaaa;
    background-color:#111111;
    line-height:22px;
  }
 
  h2, h3, h4
  {
    color:#dddddd;
    margin:0px;
    font-weight:300;
  }
  .codebox
  {
    background-color:#222222;
    border-color:#444444;
    border-style:solid;
    border-width:1px;
    margin:auto;
    margin-left:100px;
    margin-right:100px;
    padding:40px;
    margin-top:25px;
  }
  a 
  {
    color:#4499ff;
  }
  b
  {
    color:#4499ff;
    font-weight:500;
  }
</style>
</head>

<body>

<div class="codebox">

<div style="margin:auto;width:200px;padding-bottom:60px;">
    <img src="phpdc.png" width=180/><br/>
</div>

<h2>Welcome to DraftCode PHP</h2> 
<p>Welcome to developing and running PHP, JS, HTML and CSS locally on your iPad or iPhone. Right now DraftCode is running this simple php file that creates this welcome page.</p>
<p>DraftCode currently runs PHP version <? echo phpversion();?>. You can enable PHP 8 in the settings panel after a little In-App purchase that keeps us going. To see the current PHP configuration, please have a look at <a href="index.php?phpinfo=1">phpinfo</a>.</p>

<p>Press the STOP button to return to the workspace and see the source code and files.</p>
    
<p>We hope DraftCode is very intuitive to use, but here a few quick pointers:</p>

<ul>
  <li>Use the file browser <b>toolbar</b> to access Settings, to create folders, files, import files or move items around.</li>
  <li>Use <b>swipe</b> actions to share, rename, delete items, zip/unzip them or <b>execute them as scripts</b>.</li>
  <li>Use the <b>Settings</b> panel to move the <b>workspace location</b> to a different App or iCloud.</li>
  <li>Use the <b>Settings</b> panel to install packages like <b>WordPress, phpMyAdmin</b> (without a database!), etc.</li>
  <li>As long as DraftCode is running (for example in Split-Screen),you can access the server from <b>any App for example Safari</b> on your iPad via <b>http://127.0.0.1:8080</b>.</li>
  <li>If you are using an external keyboard, hold down the option key in the source editor or during preview to see the convenient <b>keyboard shortcuts</b>.</li>
  <li>Set a preferred start file by using the <b>star button</b>.</li>
  <li>To run a PHP app in <b>Kiosk mode</b>, enable it in Settings.</li>
</ul>
<br/>
<h2>Help and Documentation</h2>
<p>
Unsure how to do something? Please have a look at the <a href="http://solesignal.com/draftcode/help">help page</a>. It contains answers to the most common questions and also an option to get in touch.
</p>

</div>
</body>
</html> 
<?}?>
