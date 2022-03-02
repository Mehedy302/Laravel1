@extends('dashboard')  
@section('content')
    <div class="row" style="width: 75%; 
          margin-left: auto;
          margin-right: auto;
          border: 2px solid gray; 
          text-indent: 50px">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            <h1 style="color:white;background-color:red"> JobSearch.com</h1><br>
                <h2 style="color:white;background-color:red">Edit Application</h2>
            </div>
             
        </div>
    </div>
   
       
  
<div id="container" style="width: 75%; 
          margin-left: auto;
          margin-right: auto;
          border: 2px solid gray; 
          text-indent: 50px"> 
<body  >
 
  

<h4 style="color:black;background-color:#c2bcbc">Basic Information</h4><br>

<form action="{{ route('update',$aid->email) }}" method="POST">
@csrf
@method('PUT')

 
<table class="center" style="width: 75%; 
          margin-left: auto;
          margin-right: auto;
          border: 2px solid gray; 
          text-indent: 50px">

<tr>

<td>

<p style="color:black">Email</p>
</td>
<td>
<p style="color:red">*</p>
</td>
<td>
 
<input type="email" name="email" size="50" id="email" data-email data-required value="{{ $aid->email }}">
 
 
</td>

</tr>

<tr>

<td>

<p style="color:black">Password</p>
</td>
<td>
<p style="color:red">*</p>
</td>
<td>
<input type="password" name="password" size="50" id="password" value="{{ $aid->passsword }}">
</td>

</tr>


<tr>

<td>

<p style="color:black">Retype Password</p>
</td>
<td>
<p style="color:red">*</p>
</td>
<td>
<input type="password" name="retype_password" size="50" id="retype_password" value="{{ $aid->retype_password }}">
</td>

</tr>

<tr>

<td>

<p style="color:black">First Name</p>
</td>
<td>
<p style="color:red">*</p>
</td>
<td>
<input type="text" name="first_name" size="50" id="first_name" value="{{ $aid->first_name }}">
</td>

</tr>

<tr>

<td>

<p style="color:black">Last Name</p>
</td>
<td>
<p style="color:red">*</p>
</td>
<td>
<input type="text" name="last_name" size="50" id="last_name" value="{{ $aid->last_name }}">
</td>

</tr>

<tr>

<td>

<p style="color:black">Phone Number</p>
</td>
<td>
<p style="color:red">*</p>
</td>
<td>
<input type="tel" name="phone_number" size="50" id="phone_number" value="{{ $aid->phone_number }}">
</td>

</tr>

<tr>

<td>

<p style="color:black">Address</p>
</td>
<td>
<p style="color:red">*</p>
</td>
<td>
<input type="text" name="address" size="50" id="address" value="{{ $aid->address }}">
</td>

</tr>

<tr>

<td>

<p style="color:black">City</p>
</td>
<td>
<p style="color:red">*</p>
</td>
<td>
<input type="text" name="city" size="50" id="city" value="{{ $aid->city }}">
</td>

</tr>


<tr>

<td>

<p style="color:black">Province</p>
</td>
<td>
<p style="color:red">*</p>
</td>
<td>
 <label for="province" size="50">Province</label>

<select name="province" id="province" value="{{ $aid->province }}">
  <option value="raj">Rjshahi</option>
  <option value="dha">Dhaka</option>
  <option value="bar">Barisal</option>
  <option value="chi">Chittagong</option>

  <option value="khu">Khulna</option>
  <option value="mym">Mymensingh</option>
  <option value="ran">Rangpur</option>
  <option value="syl">Sylhet</option>
</select> 
</td>

</tr>

<tr>

<td>

<p style="color:black">Country</p>
</td>
<td>
<p style="color:red">*</p>
</td>
<td>
<input list="country" name="country" size="50"value="{{ $aid->country }}">
  <datalist id="country">
    <option value="Bangladesh">
    <option value="India">
    <option value="Pakistan">
    <option value="Srilanka">
    <option value="other">
  </datalist>
</td>

</tr>







</table>

<br>


<h4 style="color:black;background-color:#c2bcbc">Education</h4><br>


<table class="center" style="width: 75%; 
          margin-left: auto;
          margin-right: auto;
          border: 2px solid gray; 
          text-indent: 50px">
<tr>

<td>

<p style="color:black">School</p>
</td>
<td>
<p style="color:red">*</p>
</td>
<td>
<input type="text" name="school" size="50" id="school" value="{{ $aid->school }}" >
</td>

</tr>

<tr>

<td>

<p style="color:black">Program</p>
</td>
<td>
<p style="color:red">*</p>
</td>
<td>
<input type="text" name="program" size="50" id="program" value="{{ $aid->program }}">
</td>

</tr>


<tr>

<td>

<p style="color:black">Education Level</p>
</td>
<td>
<p style="color:red">*</p>
</td>
<td>
 <label for="educationlvl" size="50">Education Level</label>

<select name="educationlvl" id="educationlvl" value="{{ $aid->educationlvl }}">
  <option value="0">-select-</option>
  <option value="td">Technical Diploma</option>
  <option value="cd">College Diploma</option>
  <option value="bd">Bachelor's Degree</option>

  <option value="md">Master's Degree</option>
  <option value="ot">other</option>
   
</select> 
</td>

</tr>


<tr>

<td>

<p style="color:black">&nbsp</p>
</td>
<td>
<p style="color:red">&nbsp</p>
</td>

<td style="align:left">
<p style="color:black"> Education Status</p>
<input type="radio" id="graduate" name="edustat" value="{{ $aid->edustat }}">
  <label style="color:black" for="Graduated">Graduated</label><br>
  <input type="radio" id="crenrolled" name="edustat" value="Current Enrolled">
  <label style="color:black" for="Current Enrolled">Current Enrolled</label><br>
  <input type="radio" id="didnotgrad" name="edustat" value="Did Not Graduate">
  <label style="color:black" for="Did Not Graduate">Did Not Graduate</label>
</td>

</tr>

<tr>

<td>

<p style="color:black">Graduation Date</p>
</td>
<td>
<p style="color:red">*</p>
</td>
<td>
<input type="text" name="grdate" size="50" id="grdate"  value="{{ $aid->grdate }}">
</td>

</tr>






</table>


<h4 style="color:black;background-color:#c2bcbc">Work Experience</h4><br>
 
<table class="center" style="width: 75%; 
          margin-left: auto;
          margin-right: auto;
          border: 2px solid gray; 
          text-indent: 50px">
<tr>

<td>

<p style="color:black">Employer</p>
</td>
<td>
<p style="color:red">&nbsp</p>
</td>
<td>
<input type="text" name="emp" size="50" id="emp" value="{{ $aid->emp }}"  >
</td>

</tr>

<tr>

<td>

<p style="color:black">Job Title</p>
</td>
<td>
<p style="color:red">&nbsp</p>
</td>
<td>
<input type="text" name="jbtle" size="50" id="jbtle"   value="{{ $aid->jbtle }}">
</td>

</tr>

<tr>

<td>

<p style="color:black">Job Duty</p>
</td>
<td>
<p style="color:red">&nbsp</p>
</td>
<td>
<textarea name="jbduty"   id="jbduty" cols = "43" value="{{ $aid->jbduty }}"></textarea>
</td>

</tr>

<tr>

<td>

<p style="color:black">Worked Year</p>
</td>
<td>
<p style="color:red">&nbsp</p>
</td>
<td>
<input type="number" name="worktime" size="50" id="worktime"   value="{{ $aid->worktime }}">
</td>

</tr>



</table>

<br><br>

<h4 style="color:black;background-color:#c2bcbc">Attachments</h4><br>
<table class="center" style="width: 75%; 
          margin-left: auto;
          margin-right: auto;
          
          text-indent: 50px">
<tr>

<td>

<p style="color:black">&nbsp</p>
</td>
<td>
<p style="color:red">&nbsp</p>
</td>
<td style="color:black">
<label for="files"> Attachments</label>
  <input type="file" id="files" name="files" multiple><br><br>
</td>

</tr>
</table>

<table class="center" style="width: 75%; 
          margin-left: auto;
          margin-right: auto;
           
          text-indent: 50px">
<tr>

<td style="color:white">

<div class="form-item">
         <span> <input type="reset" id="submit" style="color:red" class="submit">Reset</span>
        </div>

 
</td>


<td style="color:white">

<div class="form-item">
         <input type="submit" style="color:green" id="submit" name="submit" class="submit" value="Apply"> 
        </div>

 
</td>

</tr>
</table>

</form>




   
 
 
 
 
</body>
<br><br>
</div>
@endsection