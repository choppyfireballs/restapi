<html>
 <head>
  <title> Resume </title>
  <?php echo $includes_view;?>
 </head>
 <body>
  <?php echo $navbar_view; ?>
   <div class='resume-div'>
   <object data="http://<?php echo Request::server('HTTP_HOST');?>/resume.pdf" type="application/pdf" class='resume_object'>
   <p>It appears you don't have a PDF plugin for this browser.
   No biggie... you can <a href="resume.pdf">click here to
  download the PDF file.</a></p>
  </object>
  </div>
 </body>
</html>
