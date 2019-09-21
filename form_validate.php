<!-- FormDataValidationWithErrorCount.php
<?php
  function validate_form(){
      global $nickname, $firstname, $lastname, $email;

      $errors=0;
      if (!trim($nickname)) 
      {
          echo "<BR><B>Nickname</B> is required.";
          $errors++;
      }
     
      if (!trim($firstname))
      {
          echo "<BR><B>First name</B> is required.";
          $errors++;
      }
     
      if (!trim($lastname))
      {
          echo "<BR><B>Last name</B> is required.";
          $errors++;
      }
     
      if (!trim($email))
      {
          echo "<BR><B>Primary email address</B> is required.";
          $errors++;
      }
    
      switch ($errors){
          case 0:
                  return TRUE;

          case 1:
                  echo "<BR><BR><BR>Please use your ";
                  echo "browser's back button to return to ";
                          echo "the form, correct the error, and ";
                          echo "re-submit the form.";
                  return FALSE;

          default:
                  echo "<BR><BR><BR>Please use your ";
                  echo "browser's back button to return to ";
                          echo "the form, correct the errors, and ";
                          echo "re-submit the form.";
                  return FALSE;
      }
}

function update_database(){
   echo "<BR>Updating database....";
}

$ok = validate_form();
if ($ok)
    update_database();

?>

</BODY>
</HTML>


-->