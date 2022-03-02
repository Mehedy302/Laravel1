@extends('dashboard')
@section('title','Homepage')
@section('content')

<div id="container" style="width: 75%; 
          margin-left: auto;
          margin-right: auto;
          border: 2px solid gray; 
          text-indent: 50px"> 
<body  >
 
  <h1 style="color:white;background-color:red"> JobSearch.com</h1><br>

<h2 style="color:black;"> Create Your Account</h2><br>
<p style="color:red;"> *Required Information</p></br>



<h4 style="color:black;background-color:#c2bcbc">Basic Information</h4><br>

<form action="/create" method="post"  >
@csrf

 
<table style="width: 75%; 
          margin-left: auto;
          margin-right: auto;
         
          text-indent: 50px">

<tr>

<td>

<p style="color:black">Email</p>
</td>
<td>
<p style="color:red">*</p>
</td>
<td>
 
<input type="email" name="email" size="50" id="email" data-email data-required>
@if($errors->has('email'))
           <br>

          <p style="color:red"> {{$errors->first('email')}} </p>


@endif 
 
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
<input type="password" name="password" size="50" id="password">
@if($errors->has('password'))
           <br>

          <p style="color:red"> {{$errors->first('password')}} </p>


@endif 
 
</td>

</tr>


<tr>

<td>

<p style="color:black">Retypr Password</p>
</td>
<td>
<p style="color:red">*</p>
</td>
<td>
<input type="password" name="retype_password" size="50" id="retype_password">
@if($errors->has('retype_password'))
           <br>

          <p style="color:red"> {{$errors->first('retype_password')}} </p>


@endif 
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
<input type="text" name="first_name" size="50" id="first_name">
@if($errors->has('first_name'))
           <br>

          <p style="color:red"> {{$errors->first('first_name')}} </p>


@endif 
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
<input type="text" name="last_name" size="50" id="last_name">
@if($errors->has('last_name'))
           <br>

          <p style="color:red"> {{$errors->first('last_name')}} </p>


@endif 
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
<input type="tel" name="phone_number" size="50" id="phone_number" placeholder="Ex:01780675643">
@if($errors->has('phone_number'))
           <br>

          <p style="color:red"> {{$errors->first('phone_number')}} </p>


@endif 
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
<input type="text" name="address" size="50" id="address" >
@if($errors->has('address'))
           <br>

          <p style="color:red"> {{$errors->first('address')}} </p>


@endif 
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
<input type="text" name="city" size="50" id="city" >
@if($errors->has('city'))
           <br>

          <p style="color:red"> {{$errors->first('city')}} </p>


@endif 
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

<select name="province" id="province" >
  <option value="raj">Rjshahi</option>
  <option value="dha">Dhaka</option>
  <option value="bar">Barisal</option>
  <option value="chi">Chittagong</option>

  <option value="khu">Khulna</option>
  <option value="mym">Mymensingh</option>
  <option value="ran">Rangpur</option>
  <option value="syl">Sylhet</option>
</select> 

@if($errors->has('province'))
           <br>

          <p style="color:red"> {{$errors->first('province')}} </p>


@endif 

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
<input list="country" name="country" size="50">
  <datalist id="country">
    <option value="Bangladesh">
    <option value="India">
    <option value="Pakistan">
    <option value="Srilanka">
    <option value="other">
  </datalist>

  @if($errors->has('country'))
           <br>

          <p style="color:red"> {{$errors->first('country')}} </p>


@endif 

</td>

</tr>







</table >

<br>


<h4 style="color:black;background-color:#c2bcbc">Education</h4><br>


<table style="width: 75%; 
          margin-left: auto;
          margin-right: auto;
           
          text-indent: 50px">
<tr>

<td>

<p style="color:black">School</p>
</td>
<td>
<p style="color:red">*</p>
</td>
<td>
<input type="text" name="school" size="50" id="school" >
@if($errors->has('school'))
           <br>

          <p style="color:red"> {{$errors->first('school')}} </p>


@endif 
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
<input type="text" name="program" size="50" id="program" >
@if($errors->has('program'))
           <br>

          <p style="color:red"> {{$errors->first('program')}} </p>


@endif
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

<select name="educationlvl" id="educationlvl" >
  <option value="0">-select-</option>
  <option value="td">Technical Diploma</option>
  <option value="cd">College Diploma</option>
  <option value="bd">Bachelor's Degree</option>

  <option value="md">Master's Degree</option>
  <option value="ot">other</option>
   
</select> 

@if($errors->has('educationlvl'))
           <br>

          <p style="color:red"> {{$errors->first('educationlvl')}} </p>


@endif
</td>

</tr>


<tr>

<td>

<p style="color:black">&nbsp</p>
</td>
<td>
<p style="color:red">&nbsp</p>
</td>

<td align="left">
<p style="color:black"> Education Status</p>
<input type="radio" id="graduate" name="edustat" value="Graduated">
  <label style="color:black" for="Graduated">Graduated</label><br>
  <input type="radio" id="crenrolled" name="edustat" value="Current Enrolled">
  <label style="color:black" for="Current Enrolled">Current Enrolled</label><br>
  <input type="radio" id="didnotgrad" name="edustat" value="Did Not Graduate">
  <label style="color:black" for="Did Not Graduate">Did Not Graduate</label>

  @if($errors->has('edustat'))
           <br>

          <p style="color:red"> {{$errors->first('edustat')}} </p>


@endif
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
<input type="text" name="grdate" size="50" id="grdate" placeholder="DD-MM-YYYY" >
@if($errors->has('grdate'))
           <br>

          <p style="color:red"> {{$errors->first('grdate')}} </p>


@endif
</td>

</tr>






</table > 


<h4 style="color:black;background-color:#c2bcbc">Work Experience</h4><br>
 
<table style="width: 75%; 
          margin-left: auto;
          margin-right: auto;
           
          text-indent: 50px">
<tr>

<td>

<p style="color:black">Employer</p>
</td>
<td>
<p style="color:red">&nbsp</p>
</td>
<td>
<input type="text" name="emp" size="50" id="emp"   >
@if($errors->has('emp'))
           <br>

          <p style="color:red"> {{$errors->first('emp')}} </p>


@endif
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
<input type="text" name="jbtle" size="50" id="jbtle"   >
@if($errors->has('jbtle'))
           <br>

          <p style="color:red"> {{$errors->first('jbtle')}} </p>


@endif
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
<textarea name="jbduty"   id="jbduty" cols = "43"></textarea>
@if($errors->has('jbduty'))
           <br>

          <p style="color:red"> {{$errors->first('jbduty')}} </p>


@endif
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
<input type="number" name="worktime" size="50" id="worktime"   >
@if($errors->has('worktime'))
           <br>

          <p style="color:red"> {{$errors->first('worktime')}} </p>


@endif
</td>

</tr>



</table >

<br><br>

<h4 style="color:black;background-color:#c2bcbc">Attachments</h4><br>
<table style="width: 75%; 
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

<table  style="width: 75%; 
          margin-left: auto;
          margin-right: auto;
           
          text-indent: 50px">
<tr>

<td style="color:white">

<div class="form-item">
         <span> <input type="reset" id="submit" style="color:white;background-color:red" class="btn btn-primary">Reset</span>
        </div>

 
</td>


<td style="color:white">

<div class="form-item">
         <input type="submit" style="color:white;background-color:red" id="submit" name="submit" class="btn btn-primary" value="Apply"> 
        </div>

 
</td>

</tr>
</table>

</form>




   
 
 
 
 
</body>
<br><br>
</div>
@endsection