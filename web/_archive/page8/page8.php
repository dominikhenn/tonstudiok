<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="content-type"
        content="text/html; charset=iso-8859-1" />
  <meta name="robots"
        content="all" />
  <meta name="generator"
        content="RapidWeaver" />
  <meta name="generatorversion"
        content="3.5 (Public Beta 1 Build 38)" />

  <title>Kontakt</title>
  <link rel="stylesheet"
        type="text/css"
        media="screen"
        href="../rw_common/themes/magnesium/styles.css" />
  <link rel="stylesheet"
        type="text/css"
        media="print"
        href="../rw_common/themes/magnesium/print.css" />
  <link rel="stylesheet"
        type="text/css"
        media="handheld"
        href="../rw_common/themes/magnesium/handheld.css" />
  <link rel="stylesheet"
        type="text/css"
        media="screen"
        href=
        "../rw_common/themes/magnesium/css/styles/electric.css" />
  <link rel="stylesheet"
        type="text/css"
        media="screen"
        href=
        "../rw_common/themes/magnesium/css/width/width_variable.css" />
        
  <link rel="stylesheet"
        type="text/css"
        media="screen"
        href=
        "../rw_common/themes/magnesium/css/sidebar/sidebar_left.css" />
        
<script type="text/javascript"
      src="../rw_common/themes/magnesium/javascript.js">
</script>
</head>
<!-- This page was created with RapidWeaver from Realmac Software. http://www.realmacsoftware.com -->

<body>
  <div id="container">
    <!-- Start container -->

    <div id="pageHeader">
      <!-- Start page header -->

      <h1>Musikproduktion Kern</h1>

      <h2>The best music you can get!</h2>
    </div><!-- End page header -->

    <div id="sidebarContainer">
      <!-- Start Sidebar wrapper -->

      <div id="navcontainer">
        <!-- Start Navigation -->

        <ul>
          <li><a href="../index.html"
             rel="self">Home</a></li>

          <li><a href="../page3/page3.html"
             rel="self">Allgemeines</a></li>

          <li><a href="../page4/page4.html"
             rel="self">Aufnahme</a></li>

          <li><a href="../page2/page2.html"
             rel="self">Regie</a></li>

          <li><a href="../page10/page10.html"
             rel="self">Equipment</a></li>

          <li><a href="../page5/page5.html"
             rel="self">Referenzen</a></li>

          <li><a href="../page6/page6.html"
             rel="self">Anfahrt</a></li>

          <li><a href="page8.php"
             rel="self"
             id="current"
             name="current">Kontakt</a></li>

          <li><a href="../page1/page1.html"
             rel="self">Impressum und Copyright</a></li>

          <li><a href="../page11/page11.html"
             rel="self"></a></li>

          <li><a href="../page7/page7.html"
             rel="self">Eva Lind Weihnachstedition</a></li>
        </ul>
      </div><!-- End navigation -->

      <div class="sideHeader"></div><!-- Sidebar header -->

      <div id="sidebar">
        <!-- Start sidebar content -->

        <br />
        <!-- sidebar content you enter in the page inspector -->
         <!-- sidebar content such as the blog archive links -->
      </div><!-- End sidebar content -->
    </div><!-- End sidebar wrapper -->

    <div id="contentContainer">
      <!-- Start main content wrapper -->

      <div id="content">
        <!-- Start content -->

        <div id="breadcrumbcontainer">
          <!-- Start the breadcrumb wrapper -->
        </div><!-- End breadcrumb -->

        <div class="message-text">
          <?php
          if (!$_SESSION['formMessage']) { 
          echo "Bitte f&uuml;llen Sie das untenstehende Formular aus, um uns eine E-Mail zu senden.";
          } else {
           echo $_SESSION['formMessage'];
           }
           ?>
        </div>
        <br />

        <form action="./files/mailer.php"
              method="post"
              enctype="multipart/form-data">
          <label>Mein Name/ Firma:</label> *
          <br />
          <input class="form-input-field"
                type="text"
                value="<?php echo $_SESSION['form_element0']; ?>"
                name="form_element0"
                size="40" />
          <br />
          <br />
          <label>Meine Emailadresse:</label> *
          <br />
          <input class="form-input-field"
                type="text"
                value="<?php echo $_SESSION['form_element1']; ?>"
                name="form_element1"
                size="40" />
          <br />
          <br />
          <label>Betreff:</label> *
          <br />
          <input class="form-input-field"
                type="text"
                value="<?php echo $_SESSION['form_element2']; ?>"
                name="form_element2"
                size="40" />
          <br />
          <br />
          <label>Nachricht:</label> *
          <br />
          <textarea class="form-input-field"
                name="form_element3"
                rows="8"
                cols="38">
<?php echo $_SESSION['form_element3']; ?>
</textarea>
          <br />
          <br />
          <input class="form-input-button"
                type="reset"
                name="resetButton"
                value="Zurücksetzen" /> <input class=
                "form-input-button"
                type="submit"
                name="submitButton"
                value="Abschicken" />
        </form><?php session_destroy(); ?>
      </div><!-- End content -->
    </div><!-- End main content wrapper -->

    <div class="clearer"></div>

    <div id="footer">
      <!-- Start Footer -->

      <p>© 2006 Musikproduktion Kern <a href=
      "mailto:info@musikproduktion-kern.de">Kontakt</a></p>
    </div><!-- End Footer -->
  </div><!-- End container -->
</body>
</html>
