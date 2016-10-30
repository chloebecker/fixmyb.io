<?php
// functions for use in php

// outputs a document heading tag and
// stylesheet link, and a title tag
//  $stylesheet - name of stylesheet relative to this page
//  $title - title of page
function printDocHeading($materializeCss, $materializeJS, $jQuery, $materialIcons, $font1, $customJS, $customCss, $title)
{
  print
    '<!DOCTYPE html>'. "\n" .
    '<html lang="en">' . "\n" .
    '<head> ' ."\n" .
    '<meta charset="utf-8" />'. "\n".
    '<meta name="viewport" content="width=device-width, initial-scale=1.0">' ."\n".
    '<meta name="author" content="">'. "\n".
    '<link rel="icon" href="http://drbaker.create.stedwards.edu/favicon.ico" type="image/x-icon"  />' . "\n".
    '<link rel = "STYLESHEET" href = "' . $materializeCss. '" type = "text/css" />'."\n".
    '<script type = "text/javascript" src="' . $jQuery . '"></script>'."\n".
    '<script src="' . $materializeJS . '"></script>'."\n".
    '<link href="' . $materialIcons . '" rel="stylesheet" />'."\n".
    '<link href="' . $font1 . '" rel="stylesheet" />'."\n".
    '<script src="' . $customJS . '"></script>'."\n".
    '<link rel="STYLESHEET" href="' . $customCss . '"  type="text/css" />'."\n" .
    '<title>' . "\n" .$title . "\n" .'</title> ' ."\n" .
    '</head> '. "\n" ;
}

// outputs a document heading tag and
// stylesheet link, and a title tag
//  $stylesheet - name of stylesheet relative to this page
//  $title - title of page
//  $jsfile1 - javascript file to be used in page
//  $jsfile2 - optional javascript file for page
function printDocHeadingJS($stylesheet, $title, $jsfile1, $jsfile2="")
{
  print
    '<!DOCTYPE html>'. "\n" .
    '<html lang="en">' . "\n" .
    '<head> ' ."\n" .
    '<meta charset="utf-8" />'. "\n".
    '<meta name="viewport" content="width=device-width, initial-scale=1.0">' ."\n".
    '<meta name="author" content="Laura J. Baker">'. "\n".
    '<link rel="icon" href="../favicon.ico" type="image/x-icon"  />' . "\n".
    '<link rel="STYLESHEET" href="' . $stylesheet . '"  type="text/css" />'."\n" .
    '<script  src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js">'.
    '</script>' . "\n".
    '<script  src="'.$jsfile1.'"> </script>' . "\n";
    if($jsfile2) {
      print
         '<script type="text/javascript" src="'.$jsfile2.'"> </script>' . "\n";
    }
  print
       '<title>' . "\n" .$title . "\n" .'</title> ' ."\n" .
       '</head> ' . "\n" ;
} // end of printDocHeadingJS

// prints a page footer in small font with copyright
function printDocFooter()
{
  print "<footer>"."\n";
  print "&copy; aleonard\n" .
        "Last update:\n" .
        "<script type='text/javascript'>\n" .
        "document.write(document.lastModified);\n" .
        "</script> &nbsp;&nbsp;&nbsp;\n" .
        "<a href='http://validator.w3.org/check?uri=referer'>\n" .
        "<strong>html5</strong></a>\n" .
        "&nbsp;&nbsp;&nbsp;&nbsp;\n" .
        "<a href='http://jigsaw.w3.org/css-validator/check?uri=referer'>\n" .
        "<strong>CSS</strong></a>\n";
  print "</footer>\n";
  print "</body>\n";
  print "</html>\n";
}//end printDocFooter

//function that outputs a link that links back to this script with no data sent
// returns back to the beginning as a link.
function startOverLink()
{
  $self = $_SERVER['PHP_SELF'];
  print "<a href='$self'>Back to start</a>\n";
}
// function that prints the $_POST array and the $_GET array
//  in a nice, readable format
function printAll()
{
print "<br /> POST array : <br />\n";
foreach($_POST as $key=>$value)
{
   print " [ $key ] ====> $value <br />\n";
}
print "<br /> GET array : <br />\n";
foreach($_GET as $key=>$value)
{
   print " [ $key ] ====> $value <br />\n";
}
print "<br />\n";
}
?>
