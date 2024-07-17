<!-- <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</head> -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Set the max date to 20 years ago from today
        const today = new Date();
        const maxDate = new Date(today.getFullYear() - 23, today.getMonth(), today.getDate());
        const formattedMaxDate = maxDate.toISOString().split('T')[0];
        document.getElementById('dob').setAttribute('max', formattedMaxDate);
    });

    function calculateAge() {
        const dob = document.getElementById('dob').value;
        const dobDate = new Date(dob);
        const today = new Date();
        let age = today.getFullYear() - dobDate.getFullYear();
        const monthDifference = today.getMonth() - dobDate.getMonth();

        if (monthDifference < 0 || (monthDifference === 0 && today.getDate() < dobDate.getDate())) {
            age--;
        }

        document.getElementById('age').value = age;
    }
</script>
<table class="table-responsive border_table">
    <tbody>
        <hr style="color:#28a745; height:10px; ">
        <p style="color: #28a745; font-weight:bold;">Name & Status :</p>

        <div class="form-group">
            <b>Fullname :<input type="text" placeholder="Enter Your Fullname" name="fullname" maxlength="46" required="required" style="color:black;"> </b>
            <b style="margin-left: 25%;">Date Of Birth :</b>
            <input type="date" id="dob" placeholder="Birthdate" name="dob" required="required" style="color: black;" oninput="calculateAge()">

        </div>
        <div class="form-group"><b>Gender :
                <select name="sex" required="required">
                    <option value="">-- Gender --</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
                </select>
            </b>
            <b style="margin-left: 40%;">Age : <input type="text" placeholder="Age" id="age" name="age" required="required" style="color:black;" readonly></b>
        </div>
        <div class="form-group">

            <b>Marital Status :</b>
            <select name="cs" required="required">
                <option value="">--Status--</option>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Separeted">Separated</option>
                <option value="Single Parent">Single Parent</option>
                <option value="Widow or Widower">Widow or Widower</option>
            </select>
            <b style="margin-left: 24%;">Religion : </b>
            <select name="religion" required="required">
                <option value="">-- Religious Affiliation --</option>
                <option value="Roman Catholic">Christian</option>
                <option value="Iglesia Ni Cristo">Islam</option>
                <option value="Methodist">Budaism</option>
                <!-- <option value="Jehovah's Witnesses">Non-Beliver</option> -->
                <!-- <option value="Islam">Islam</option>
                <option value="Born Again Christian">Pentecostal</option> -->
                <option value="Others">Other</option>
            </select>
        </div>
        <hr style="color:#28a745; height:10px; ">
        <p style="color: #28a745; font-weight:bold;"> Permanent Address :</p>
        <div class="form-group">
            <b> Town:</b>
            <input type="text" placeholder="Street" name="street" maxlength="46" required="required" style="color:black;">
            <b style="margin-left: 5%;"> Address:</b>
            <input type="text" placeholder="Address" name="adress" maxlength="46" required="required" style="color:black;">
        </div>

        <div class="form-group">
            <b> District :</b>
            <input type="text" placeholder="District" name="municipal" maxlength="46" required="required" style="color:black;">
            <!-- <b style="margin-left: 7%;">   Province :</b>
                                   <input type ="text" placeholder="Province" name="province" maxlength="46" > -->
        </div>
        <div class="form-group">
            <b> Region</b>
            <select name="region" required="required">
                <option value="">--Region of Origin --</option>
                <option value="Region 1">Southern</option>
                <option value="Region 2">Central</option>
                <option value="Region 3">Northern</option>

            </select>
            <b style="margin-left: 15%;">Postal Code :</b>
            <input type="text" placeholder="Postal Code" name="zipcode" maxlength="46" style="color: black;">
        </div>

        <div class="form-group">
            <b> Country :</b>
            <input type="text" placeholder="country" name="country" maxlength="46" style="color: black;">
        </div>
        </td>
        <hr style="color:#28a745; height:10px; ">
        <p style="color: #28a745; font-weight:bold;">Educational Background : </p>
        <div class="form-group">
            <b> Course Degree :</b>
            <select name="course" required>
                <option value="">--Course Graduated--</option>
                <option value="BSIT">BSc in African Musicology</option>
                <option value="BSCS">BSc in Business IT</option>
            </select>
            <b style="margin-left: 6%;"> YR.Graduated :</b>
            <select name="batch" required>
                <option value="">--Year--</option>
                <option value="Batch 2014"> 2019</option>
                <option value="Batch 2015"> 2020</option>
                <option value="Batch 2016"> 2021</option>
                <option value="Batch 2017"> 2022</option>
                <option value="Batch 2018"> 2023</option>
            </select>
        </div>
        <hr style="color:#28a745; height:10px; ">
        <p style="color: #28a745; font-weight:bold;">Social Network I.D : </p>
        <div class="form-group">
            <b> Facebook(Optional):</b>
            <input type="text" placeholder="FB" name="facebook" maxlength="46" style="color: black;">
            <b style="margin-left: 8%;"> Twitter(Optional):</b>
            <input type="text" placeholder="twitter" name="twitter" maxlength="46" style="color: black;">
        </div>
        <div class="form-group">
            <b>Phone Number:</b>
            <input name="phonenumber" type="text" maxlength="46" placeholder="Enter phonenumber" style="color: black;" required>
            <b style="margin-left: 8%;"> Email Address:</b>
            <input name="email" type="text" maxlength="46" placeholder="Enter Email" style="color: black;" required>
        </div>
        <hr style="color:#28a745; height:10px; ">
        <p style="color: #28a745; font-weight:bold;">Employability Status :</p>
        <div class="form-group">
            <b> Are you presently??:</b>

            <input name="estatus" type="radio" value="Employed" maxlength="46" required><b>Employed</b>
            <input name="estatus" type="radio" value="Self-employed" maxlength="46" required><b>Self-employed</b>
            <input name="estatus" type="radio" value="Unemployed" maxlength="46" required><b>Unemployed</b>
        </div>
    </tbody>
</table>
<br>

<table class="table-responsive border_table">
    <tbody>
        <div style="text-align: center;font-family: Arial; font-size: 14px; background: #14244c; border: solid 1px #eaeaea;color: white;"> Questions for Employed Alumni</div>
        <div class="form-group"><br>
            <b> 1. Type of Organization ? :</b>


            <select name="organization">
                <option value="">--Select--</option>
                <option value="Government Organization (GO)">Government Organization (GO)</option>
                <option value="Private Organization">Private Organization</option>
                <option value="Cooperative">Cooperative</option>
                <option value="Non-Government Organization (NGO)">Non-Government Organization</option>

            </select>
            <br> <br> <b> 2. Job type? : </b>

            <input type="text" placeholder="Profession" name="profession" style="color:black;">


            <br> <br> <b> 3. Employment type? : </b>

            <input name="type" type="radio" value="Working Fulltime" maxlength="46"><b>Working Fulltime</b>
            <input name="type" type="radio" value="Working Partime" maxlength="46"><b>Working Partime</b>
            <input name="type" type="radio" value="Others" maxlength="46"><b>Internship</b>
            <br> <br> <b> 4. Place of work ? :</b>
            <input name="location" type="checkbox" value="local" maxlength="46"><b>Local</b>
            <input name="location" type="checkbox" value="abroad" maxlength="46"><b>Abroad</b>

            <br> <br> <b> 5. Job Situation? :</b>
            <input name="status" type="checkbox" value="Permanent" maxlength="46"><b>Permanent</b>
            <input name="status" type="checkbox" value="Contractual" maxlength="46"><b>Contractual</b>
            <input name="status" type="checkbox" value="Casual" maxlength="46"><b>Casual</b>
            <input name="status" type="checkbox" value="Others" maxlength="46"><b>Others</b>
            <br> <br> <b> 6. Number of years in Company or in your Work? :</b>
            <input name="number" type="radio" value="1-5 yrs" maxlength="46"><b>1-5</b>
            <input name="number" type="radio" value="6-10 yrs" maxlength="46"><b>6-10</b>
            <input name="number" type="radio" value="10-15 yrs" maxlength="46"><b>10-15</b>
            <input name="number" type="radio" value="16-20 yrs" maxlength="46"><b>16-20</b>
            <input name="number" type="radio" value="20-25 yrs" maxlength="46"><b>20-25</b>
            <input name="number" type="radio" value="25 yrs above" maxlength="46"><b>25 above</b>

            <br> <br> <b> 7. How much is your monthly income range? : </b>

            <input type="text" name="income" placeholder="e.g 100-200,000 Kwacha" style="color:black;">


            <br> <br><b> 8. Is your job related to degree or program in college? :</b>
            <input name="relate" type="radio" value="Yes" maxlength="46"><b>Yes</b>
            <input name="relate" type="radio" value="No" maxlength="46"><b>No</b>


            <br> <br><b> 9. Please state your reasons for staying on the job? : </b>
            <textarea name="sreason" style="width: 50%; height: 15%; color:black;"></textarea>
        </div>
    </tbody>
</table>

<table class="table-responsive border_table">
    <tbody>

        <div style="text-align: center;font-family: Arial; font-size: 14px; background: #14244c; border: solid 1px #eaeaea;color: white;"> Questions for Self-Employed</div>
        <div class="form-group"><br>
            <b> 1. Nature of Employment? :</b>
            <input type="text" name="nature" style="color:black;">

            <br> <br> <b> 2.Company or agency Name? :</b>
            <input type="text" name="company" style="color:black;">

            <br> <br> <b> 3. Number of years work in company or agency? : </b>
            <input name="num" type="checkbox" value="0-5 yrs"><b>0-5</b>
            <input name="num" type="checkbox" value="6-10 yrs"><b>6-10</b>
            <input name="num" type="checkbox" value="10-15 yrs"><b>10-15</b>
            <input name="num" type="checkbox" value="16 yrs above"><b>16 Above</b>
            <br> <br><b> 4. Monthly Income? :</b>
            <input type="text" name="mincome" style="color:black;">
    </tbody>
</table>
<br>
<table class="table-responsive border_table">
    <tbody>
        <div style="font-family: Arial; font-size: 14px; background: #14244c;border: solid 1px #eaeaea;color: white;text-align:center;"> Questions for Unemployed</div>
        <div class="form-group"><br>
            <b> 1. Please state your reason(s) why you are not employed :</b>
            <textarea name="reason" style="width: 50%; height: 25%; color:black;"></textarea>



            <br> <br><b> 2. Do you consider MUST and the course you selected as a factor for not being employed? :</b>
            <input name="consider" type="radio" value="Yes"><b>Yes</b>
            <input name="consider" type="radio" value="No"><b>No</b>

        </div>
        </div>


    </tbody>
</table>
<!-- <script>
    $(function() {
        $("input[name='dob']").datepicker({
            dateFormat: 'yy-mm-dd', // Adjust the date format as needed
            changeMonth: true,
            changeYear: true,
            yearRange: "-100:+0" // Adjust the range of years as needed
        });
    });
</script> -->