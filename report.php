<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf8">
        <title>Aliens Abducted Me - Report an Abduction</title>
    </head>

    <body>
        <h2>Aliens Abducted Me - report an Abduction</h2>
        <!-- php script starts here-->
        <?php
             //get variable from form submission
             $firstname = $_POST['firstname'];
             if ($firstname == NULL){
                $firstnameError = 'You must enter your first name.';
             }
             else{
                 $firstname = test_input($_POST['firstname']);
                 if(!preg_match("/^[a-zA-Z ]*$/",$firstname)){
                    $firstnameError = "Only letters and white space allowed";
                } 
            }

               
            $lastname = $_POST['lastname'];
            
            if ($lastname == NULL){
                $lastnameError = 'You must enter your last name.';
            }
            else{
                $lastname = test_input($_POST['lastname']);
                if (!preg_match("/^[a-zA-Z ]*$/",$lastname)){
                    $lastnameError= "Only letters and white space allowed";
                    }

            }
             $lastname = test_input($_POST['lastname']);
             $emailaddress = filter_input(INPUT_POST, 'emailaddress', FILTER_VALIDATE_EMAIL);
             $timehappening = $_POST ['timehappening'];
             $missingtime = $_POST ['missingtime'];
             $numbers = $_POST ['numbers'];
             $discription = $_POST ['discription'];
             $thingsTheyDid  = $_POST  ['thingsTheyDid'];
             $Seen =  filter_input(INPUT_POST, 'Seen');
             $addMore = $_POST ['addMore'];

             function test_input($data){
                $data = trim($data);
                return $data;
            }

            if ($emailaddress == NULL){
                $emailaddressError = 'You must enter a valid email addresss.';
            }
            if ($Seen == NULL){
                $SeenError = 'You should click yes or no.';
            }
            if (($firstnameError != '') || ($lastnameError !='') ||($emailaddressError !='') || ($SeenError !='') || 
            ($notMatchedFirstName !='') || $notMatechedLastName !=''){
            
                include('index.php');

            }
            
            
            else{

             //display an output message to user
             print "<p> Thanks for submitting the form <strong>$firstname $lastname</strong>.</p>" ;
             print "<p>You were abducted on <strong>$timehappening</strong> and gone for<strong> $missingtime</strong>.</p>";
             print "<p>You said:\" there were <strong>$numbers</strong> of them and <strong>$thingsTheyDid</strong>.\"</p>";
             print "<p>You told that:\" <strong>$discription</strong>.\"</p>";
             print "<p>Did you see Fluffy? You answered: <strong>$Seen</strong></p>";
             print "<p>Your other comment were: <strong>$addMore</strong>.</p>";
             print "<p>We will contact you at: <strong>$emailaddress</strong> if we have any relevant news.</p>";
            }
             //$to = 'mtofigh@mail.dccc.edu';
             //$subject = 'Alien Abducted me Form Submission';
             //$body = "$firstname $lastname - $emailaddress \n Date: $timehappening \n How long you were missed: $missingtime \n Numbers of Aliens: $numbers \n Aliens dicription: $discription\n Things they did: $thingsTheyDid\n Did you see Fluffy? $Seen\n Add more: $addMore";

             //mail($to, $subject, $body);

        ?>
        <!-- end php script -->


    </body>

</html>