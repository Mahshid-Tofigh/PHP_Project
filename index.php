
<?php
        if(!isset($firstnameError)) {$firstnameError = "";}
        if(!isset($lastnameError)) {$lastnameError = "";}
        if(!isset($emailaddressError))  {$emailaddressError = "";}
        if(!isset($SeenError))  {$SeenError = "";}
        if(!isset($firstname)) {$firstname = "";}
        if(!isset($lastname)) {$lastname = "";}
        if(!isset($emailaddress))  {$emailaddress = "";}
        if(!isset($Seen))  {$Seen = "";}
        if(!isset($notMatchedFirstname)) {$notMatchedFirstname = "";}
        if(!isset($notMatchedLastname)) {$notMatchedLastname = "";}
        
        ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Simple Form</title>
        <link rel="stylesheet" href="Form.css">
    </head>
    
    <body>
        
        <h3>Aliens Abducted Me - Report an Abduction</h3>
        
        <p>Share your story of alien abduction:</p>
        <Form action="report.php" method="post">
            <div class="design"> 
             <div>
            <label for="firstname">*First Name:  </label>
            <input type="text" name="firstname" id="firstname" placeholder="first name" value= "<?php print $firstname?>" ><br>
             <?php echo $firstnameError, $notMatchedFirstname ?> 
             </div><br>
             <div>
            <label for="lastname"> *Last Name: </label>
            <input type="text" name="lastname" id="lastname" placeholder="last name" value ="<?php print $lastname?>" ><br>
            <?php echo $lastnameError, $notMatchedLastname ?>
            </div><br>
            <div>
            <label for="emailaddress"> *What is your email address? </label>
            <input type="email" name="emailaddress" id="emailaddress" placeholder="email" value="<?php print $emailaddress?>" > <br>
            <?php echo $emailaddressError ?> 
            </div> <br>
            <div>
            <label for="timehappening"> When did it happen? </label>
            <input type="date" name="timehappening" id="timehappening" placeholder="timehappening" value= "<?php print $timehappening;?>">
            </div><br>
            <div>
            <label for="missingtime"> How long were you gone? </label>
            <input type="text" name="missingtime" id="missingtime" placeholder="How long missing?" value = "<?php print $missingtime; ?>" >
            </div><br>
            <div>
            <label for="numbers"> How many did you see? </label>
            <input type="number" name="numbers" id="numbers" placeholder="How many did you see?" value = "<?php print $numbers; ?>">
            </div><br>
            <div>
            <label for="discription"> Describe them: </label>
            <input type="text" name="discription" id="discription" placeholder="Describe them" value = "<?php print $discription; ?>">
            </div><br>
            <div>
            <label for="thingsTheyDid"> what did they do to you? </label>
            <input type="text" name="thingsTheyDid" id="thingsTheyDid" placeholder="Things they did" value = "<?php print $thingsTheyDid; ?>">
            </div><br>
            
            <p>*Have you seen my dog Fluffy?</p>
                <div class="marg">  
            <label for="SeenYes">Yes</label>
            <input type="radio" name="Seen" id="SeenYes" value="Y" <?php if($Seen == "Y") echo "checked" ?>>
            <label for="SeenNo">No</label>
            <input type="radio" name="Seen" id="SeenNo" value="N" <?php if($Seen == "N") echo "checked" ?>>
            <?php print $SeenError ?>
            </div><br>
                </div>
            <div>
            <img src="puppy.jpeg" height="150" width="150" alt="Puppy photo">
            </div>
            <div >
            <label for="addMore">Anything else you want to add?</label>
            </div><br>
            <textarea name="addMore" id="addMore" placeholder="Anything else to add"> <?php print $addMore; ?> </textarea><br>

            <input type="submit" style="width=25%" name="submit" value="Report abduction">
            
        </form>
    </body>
    
</html>

           