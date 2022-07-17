    
    <?php 

        $title = 'Register';
        require_once 'includes/header.php'; 
        require_once 'db/conn.php';
    ?>
    

    <form method="post" action="success.php">
    <h3 align="Left">Trainee Details</h3>
    <br>
    <h5>Personal Details</h5>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="Enter your Name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your Name" name="pname" required>
        </div>
        <div class="form-group col-md-6">
            <label for="Parent Name">Father's Name</label>
            <input type="text" class="form-control" id="fname" placeholder="Enter Father's Name" name="fname" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="email">Email Address</label>
        <input type="email" class="form-control" id="email" placeholder="Enter your Email" name="pemail" required>
        </div>
        <div class="form-group col-md-6">
        <label for="phone">Contact Number</label>
        <input type="" class="form-control" id="phone" placeholder="Contact Number" name="pno" required>
        </div>
    </div>
    <div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" id="address" name="padd" required>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputCity">City</label>
        <input type="text" class="form-control" id="city" name="pcity" required>
        </div>
        <div class="form-group col-md-4">
        <label for="inputState">State</label>
        <select id="state" class="form-control" name="pstate">
            <option selected>Choose...</option>
            <option value="AN">Andaman and Nicobar Islands</option>
            <option value="AP">Andhra Pradesh</option>
            <option value="AR">Arunachal Pradesh</option>
            <option value="AS">Assam</option>
            <option value="BR">Bihar</option>
            <option value="CH">Chandigarh</option>
            <option value="CT">Chhattisgarh</option>
            <option value="DN">Dadra and Nagar Haveli</option>
            <option value="DD">Daman and Diu</option>
            <option value="DL">Delhi</option>
            <option value="GA">Goa</option>
            <option value="GJ">Gujarat</option>
            <option value="HR">Haryana</option>
            <option value="HP">Himachal Pradesh</option>
            <option value="JK">Jammu and Kashmir</option>
            <option value="JH">Jharkhand</option>
            <option value="KA">Karnataka</option>
            <option value="KL">Kerala</option>
            <option value="LA">Ladakh</option>
            <option value="LD">Lakshadweep</option>
            <option value="MP">Madhya Pradesh</option>
            <option value="MH">Maharashtra</option>
            <option value="MN">Manipur</option>
            <option value="ML">Meghalaya</option>
            <option value="MZ">Mizoram</option>
            <option value="NL">Nagaland</option>
            <option value="OR">Odisha</option>
            <option value="PY">Puducherry</option>
            <option value="PB">Punjab</option>
            <option value="RJ">Rajasthan</option>
            <option value="SK">Sikkim</option>
            <option value="TN">Tamil Nadu</option>
            <option value="TG">Telangana</option>
            <option value="TR">Tripura</option>
            <option value="UP">Uttar Pradesh</option>
            <option value="UT">Uttarakhand</option>
            <option value="WB">West Bengal</option>
        </select>
        </div>
        <div class="form-group col-md-2">
        <label for="inputZip">Zip</label>
        <input type="text" class="form-control" id="inputZip" name="pzip">
        </div>
    </div>

    <h5>Qualifications Details</h5>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="email">Class X Percentage</label>
        <input type="text" class="form-control" id="ten" placeholder="Enter your Class X Percentage" name="px" required>
        </div>
        <div class="form-group col-md-6">
        <label for="phone">Class XII Percentage</label>
        <input type="text" class="form-control" id="twelve" placeholder="Enter your Class XII Percentage" name="pxii" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="college">College / University</label>
        <input type="text" class="form-control" id="college" placeholder="Enter your College Name" name="pcollege" required>
        </div>
        <div class="form-group col-md-6">
        <label for="degree">Degree</label>
        <input type="text" class="form-control" id="degree" placeholder="Degree" name="pdegree" required >
        </div>
    </div>
    
    <br>
    <br>
    <h3 align="left">Guide Details</h3>
    <br>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="mname">Name</label>
        <input type="text" class="form-control" id="mname" name="mname" placeholder="Enter your Guide Name" required>
        </div>
        <div class="form-group col-md-6">
        <label for="mid">Employee ID</label>
        <input type="text" class="form-control" id="mid" name="mid" placeholder="Enter the Employee ID" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="memail">Email ID</label>
        <input type="text" class="form-control" id="memail" name="memail" required>
        </div>
        <div class="form-group col-md-6">
        <label for="dpart">Department</label>
        <input type="text" class="form-control" id="mdept" name="mdept" required>
        </div>
    </div>

    <br>
    <br>
    <h3 align="left">Referral Details</h3>
    <br>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="mname">Name</label>
        <input type="text" class="form-control" id="mmname" name="rname" placeholder="Enter your Referral's Name" required>
        </div>
        <div class="form-group col-md-6">
        <label for="mid">Employee ID</label>
        <input type="text" class="form-control" id="mmid" name="rid" placeholder="Enter the Employee ID" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="memail">Email ID</label>
        <input type="text" class="form-control" id="mmemail" name="remail" required>
        </div>
        <div class="form-group col-md-6">
        <label for="dpart">Department</label>
        <input type="text" class="form-control" id="rdept" name="rdept" required>
        </div>
    </div>

    
    <div class="text-right">
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
    <br>

    
    
    
    <?php require_once 'includes/footer.php';?>