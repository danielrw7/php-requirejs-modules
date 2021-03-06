<?php
/**
 * Examples of using the method `load_multiple`
 */

require_once("../../RequireJSModules.php");

$js_modules = new RequireJSModules(array(), ".");

$js_modules->load_multiple("example", array(
   array(
      "option1" => "value",
      "option2" => "value",
   ),
   array(
      "option1" => "another value",
      "option2" => "another value",
   ),
));

$js_modules->load_multiple(array(
   array(
      "file" => "example2",
      "options" => array(
         "option1" => "value",
         "option2" => "value",
      )
   ),
   array(
      "file" => "example2",
      "options" => array(
         "option1" => "another value",
         "option2" => "another value",
      )
   ),
));

echo "<script src='lib/require.js'></script>";
echo $js_modules->output();

?>
