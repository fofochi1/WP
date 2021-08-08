
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="stylesheet" href="styles.css">

   </head>
   <body>

     <div class="header">
      <h1>Update an Entry</h1>
     </div>

     <div class="add_form">
       <form class="" action="UPDATES.php" method="post">

         <label for="firstname">First Name: </label>
         <input type="text" name="first_name" id="firstname">
         <br>
         <br>
         <label for="lastname">Last Name: </label>
         <input type="text" name="last_name" id="lastname">
         <br>
         <br>
         <label for="address_1">Address Line 1: </label>
         <input type="text" name="address1" id="address_1">
         <br>
         <br>
         <label for="address_2">Address Line 2: </label>
         <input type="text" name="address2" id="address_2">
         <br>
         <br>
         <label for="address_3">Address Line 3: </label>
         <input type="text" name="address3" id="address_3">
         <br>
         <br>
         <label for="state_code">State: </label>
         <input type="text" name="state" id="state_code">
         <br>
         <br>
         <label for="phone">Phone Number: </label>
         <input type="text" name="phone_number" id="phone">
         <br>
         <br>
         <label for="email">Email: </label>
         <input type="text" name="email_id" id="email">
         <br>
         <br>
         <label for="alt_num">Alternative Phone: </label>
         <input type="text" name="alt_phone_number" id="alt_num">
         <br>
         <br>
         <input type="submit" name="" value="Submit">
         <button type="reset" value="Reset">Clear to restart</button>

       </form>
     </div>
   </body>
 </html>
