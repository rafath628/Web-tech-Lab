<!DOCTYPE html>
<html>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"   enctype="multipart/form-data">
        <fieldset style ="width:25%">
        <legend>REGISTRATION</legend>
        <div>
          <label for="Name">Name</label>
          <input style="margin-left: 100px;" type="text" name="Name">
        </div>
        <hr>
        <div>
          <label for="E-Mail">Email</label>
          <input style="margin-left: 100px;" type="Email" name="Email" >
        </div>
        <hr>
        <div>
         <label for="User Name">User Name</label>
         <input style="margin-left: 66px;" type="text" name="User Name">
        </div>
        <hr>
        <div>
           <label for="Password">Password</label>
           <input style="margin-left: 78px;" type="password">
        </div>
        <hr>
        <div>
            <label for="Confirm Password">Confirm Password</label>
            <input style="margin-left: 20px;" type="password">
        </div>
        <hr>
        <fieldset>
              <legend>Gender</legend>
        <div>
            <input type="radio" name=Gender>Male
             <input type="radio" name=Gender>Female
             <input type="radio" name=Gender>Other
        </div>

        </fieldset>
        <hr>
        <fieldset>
            <legend>Date Of Birth</legend>
            <div>
                <input type="date" name=""><label for="Name"> mm/dd/yy</label>
            </div>
            <fieldset>
            <legend>Upload a File</legend>
            <div>
                <input type="file" name="fileToUpload" id="fileToUpload">
            </div>
        </fieldset>
            <hr>
             <div>
                <input type="submit" name="submit">
             <input type="reset" name="reset">
             </div>
    </form>
</body>
</html>