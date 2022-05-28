<form method="POST" action="user_data.php"> 
    <div class="container">  
    <center>  <h1>Registeration Form</h1> </center>  

    <hr>  

    <label> <b>Fullname</b> </label>   

    <input type="text" name="name" placeholder= "Fullname" size="50" required /> <br> 

    <label for="email"><b>Email</b></label>  

    <input type="text" placeholder="Enter Email" name="email" required> <br> 

    <label for="dob"><b>Date of birth</b></label>  

    <input type="date" placeholder="dob" name="dob" required> <br> 

    <div>  

    <label>   

    <b>Gender : </b> 

    </label><br>  

    <input type="radio" value="Male" name="gender" checked > Male   

    <input type="radio" value="Female" name="gender"> Female   

    <input type="radio" value="Other" name="gender"> Other  <br>
    <label> <b>Country</b> </label>   

    <input type="text" name="country" placeholder= "country" size="50" required /> 

    <button type="submit" class="Submit">Submit</button>    
    </div>  
</form>

