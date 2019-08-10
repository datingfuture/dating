
<?php 
use App\User; 
$filloutformCount = User::filloutformProfileExists(Auth::User()['id']);
if($filloutformCount==1){
    $filloutformCountContent = "My Dating Profile";
    $filloutformCountContent2 = "Update Dating profile below:- ";
} else {
    $filloutformCountContent = "Add Dating Profile";
    $filloutformCountContent2 = "Add Dating profile by filling out the form below:- ";
}
$filloutformContent = User::filloutformProfileDetails(Auth::User()['id']);

?>








@extends('layouts.frontview.master')


@section('content')



<div id="right_container">
<div class="container">

  <div class="row">

    <div class="col-md-2"></div>

    <div class="col-md-10 showcase">

      <h1>Add Dating Profile</h1>
 
       <h5>Add Dating profile by filling out the below</h5>

    


        <form id="recordForm" name="recordForm" action="{{ url('/phase/2') }}" method="post">{{ csrf_field() }}
  
          




           @if(!empty($filloutformContent->user_id))
        <input type="hidden" name="user_id" value="{{ $filloutformContent->user_id }}">
        
        @endif



          <div class="form-group">

           <label for="inputEmail" class="sr-only">Date of Birth:</label>
          <input autocomplete="off" id="dob" name="dob" @if(!empty($filloutformContent['dob'])) value="{{ $filloutformContent['dob'] }}" @endif type="text" class="form-control" placeholder="Name">

         </div>


          <div class="form-group">
          
            <label>Date of Birth:</label>

             <select name="gender">
                <option>Select</option>
                <option value="Male" @if(!empty($filloutformContent['gender']) && $filloutformContent['gender']=="Male") selected="" @endif>Male</option>
                <option value="Female" @if(!empty($filloutformContent['gender']) && $filloutformContent['gender']=="Female") selected="" @endif>Female</option>
             </select>


          </div>
         


          <div class="form-group">

           <label for="inputEmail" class="sr-only">Height:</label>
          

         </div>


         <div class="form-group">

   <select name="height" style="width:220px; font-size: 16px; height: 25px;">
                                <option value="">Feet/Inches</option>
                                <option value="4' 0'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="4' 0'") selected="" @endif>4' 0"</option>

                                <option value="4' 1'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="4' 1'") selected="" @endif>4' 1"</option>
                                <option value="4' 2'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="4' 2'") selected="" @endif>4' 2"</option>
                                <option value="4' 3'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="4' 3'") selected="" @endif>4' 3"</option>
                                <option value="4' 4'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="4' 4'") selected="" @endif>4' 4"</option>
                                <option value="4' 5'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="4' 5'") selected="" @endif>4' 5"</option>
                                <option value="4' 6'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="4' 6'") selected="" @endif>4' 6"</option>
                                <option value="4' 7'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="4' 7'") selected="" @endif>4' 7"</option>
                                <option value="4' 8'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="4' 8'") selected="" @endif>4' 8"</option>
                                <option value="4' 9'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="4' 9'") selected="" @endif>4' 9"</option>
                                <option value="4' 10'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="4' 10'") selected="" @endif>4' 10"</option>
                                <option value="4' 11'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="4' 11'") selected="" @endif>4' 11"</option>
                                <option value="5' 0'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="5' 0'") selected="" @endif>5' 0"</option>
                                <option value="5' 1'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="5' 1'") selected="" @endif>5' 1"</option>
                                <option value="5' 2'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="5' 2'") selected="" @endif>5' 2"</option>
                                <option value="5' 3'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="5' 3'") selected="" @endif>5' 3"</option>
                                <option value="5' 4'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="5' 4'") selected="" @endif>5' 4"</option>
                                <option value="5' 5'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="5' 5'") selected="" @endif>5' 5"</option>
                                <option value="5' 6'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="5' 6'") selected="" @endif>5' 6"</option>
                                <option value="5' 7'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="5' 7'") selected="" @endif>5' 7"</option>
                                <option value="5' 8'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="5' 8'") selected="" @endif>5' 8"</option>
                                <option value="5' 9'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="5' 9'") selected="" @endif>5' 9"</option>
                                <option value="5' 10'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="5' 10'") selected="" @endif>5' 10"</option>
                                <option value="5' 11'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="5' 11'") selected="" @endif>5' 11"</option>
                                <option value="6' 0'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="6' 0'") selected="" @endif>6' 0"</option>
                                <option value="6' 1'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="6' 1'") selected="" @endif>6' 1"</option>
                                <option value="6' 2'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="6' 2'") selected="" @endif>6' 2"</option>
                                <option value="6' 3'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="6' 3'") selected="" @endif>6' 3"</option>
                                <option value="6' 4'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="6' 4'") selected="" @endif>6' 4"</option>
                                <option value="6' 5'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="6' 5'") selected="" @endif>6' 5"</option>
                                <option value="6' 6'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="6' 6'") selected="" @endif>6' 6"</option>
                                <option value="6' 7'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="6' 7'") selected="" @endif>6' 7"</option>
                                <option value="6' 8'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="6' 8'") selected="" @endif>6' 8"</option>
                                <option value="6' 9'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="6' 9'") selected="" @endif>6' 9"</option>
                                <option value="6' 10'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="6' 10'") selected="" @endif>6' 10"</option>
                                <option value="6' 11'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="6' 11'") selected="" @endif>6' 11"</option>
                                <option value="7' 0'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="7' 0'") selected="" @endif>7' 0"</option>
                                <option value="7' 1'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="7' 1'") selected="" @endif>7' 1"</option>
                                <option value="7' 2'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="7' 2'") selected="" @endif>7' 2"</option>
                                <option value="7' 3'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="7' 3'") selected="" @endif>7' 3"</option>
                                <option value="7' 4'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="7' 4'") selected="" @endif>7' 4"</option>
                                <option value="7' 5'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="7' 5'") selected="" @endif>7' 5"</option>
                                <option value="7' 6'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="7' 6'") selected="" @endif>7' 6"</option>
                                <option value="7' 7'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="7' 7'") selected="" @endif>7' 7"</option>
                                <option value="7' 8'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="7' 8'") selected="" @endif>7' 8"</option>
                                <option value="7' 9'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="7' 9'") selected="" @endif>7' 9"</option>
                                <option value="7' 10'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="7' 10'") selected="" @endif>7' 10"</option>
                                <option value="7' 11'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="7' 11'") selected="" @endif>7' 11"</option>
                                <option value="8' 0'" @if(!empty($filloutformContent['height']) && $filloutformContent['height']=="8' 0'") selected="" @endif>8' 0"</option>
                            </select>


</div>


      <div class="form-group">

           <label for="inputEmail" class="sr-only">Marital Status:</label>
          

         </div>



          <div class="form-group">
            <select name="marital_status" style="width:208px; font-size: 14px; height: 25px;">
               <option value="Unmarried" @if(!empty($filloutformContent['marital_status']) && $filloutformContent['marital_status']=="Unmarried") selected="" @endif>Unmarried</option>
               <option value="Married"  @if(!empty($filloutformContent['marital_status']) && $filloutformContent['marital_status']=="Married") selected="" @endif>Married</option>
               <option value="Divorced"  @if(!empty($filloutformContent['marital_status']) && $filloutformContent['marital_status']=="Divorced") selected="" @endif>Divorced</option>
               <option value="Widowed"  @if(!empty($filloutformContent['marital_status']) && $filloutformContent['marital_status']=="Widowed") selected="" @endif>Widowed</option>
               <option value="Seperated"  @if(!empty($filloutformContent['marital_status']) && $filloutformContent['marital_status']=="Seperated") selected="" @endif>Seperated</option>
               <option value="Annulled"  @if(!empty($filloutformContent['marital_status']) && $filloutformContent['marital_status']=="Annulled") selected="" @endif>Annulled</option>
               <option value="Other"  @if(!empty($filloutformContent['marital_status']) && $filloutformContent['marital_status']=="Other") selected="" @endif>Other</option>
           </select>


          </div>


      <div class="form-group">

       <label for="inputPassword" class="sr-only">Body Type:</label>
      </div>



          <div class="form-group">

             <select name="body_type" style="width:220px; font-size: 16px; height: 25px;">
                <option value="">Select</option>
                <option value="Slim" @if(!empty($filloutformContent['body_type']) && $filloutformContent['body_type']=="Slim") selected="" @endif>Slim</option>
                <option value="Average" @if(!empty($filloutformContent['body_type']) && $filloutformContent['body_type']=="Average") selected="" @endif>Average</option>
                <option value="Athletic" @if(!empty($filloutformContent['body_type']) && $filloutformContent['body_type']=="Athletic") selected="" @endif>Athletic</option>
                <option value="Heavy" @if(!empty($filloutformContent['body_type']) && $filloutformContent['body_type']=="Heavy") selected="" @endif>Heavy</option>
            </select>

          </div>


        <div class="form-group">

         <label for="inputPassword" class="sr-only">Complexion:</label>
        </div>


          <div class="form-group">

             <select name="complexion" style="width:220px; font-size: 16px; height: 25px;">
                <option value="">Select</option>
                <option value="Very Fair" @if(!empty($filloutformContent['complexion']) && $filloutformContent['complexion']=="Very Fair") selected="" @endif>Very Fair</option>
                <option value="Fair" @if(!empty($filloutformContent['complexion']) && $filloutformContent['complexion']=="Fair") selected="" @endif>Fair</option>
                <option value="Wheatish" @if(!empty($filloutformContent['complexion']) && $filloutformContent['complexion']=="Wheatish") selected="" @endif>Wheatish</option>
                <option value="Dark" @if(!empty($filloutformContent['complexion']) && $filloutformContent['complexion']=="Dark") selected="" @endif>Dark</option>
            </select>
          </div>


            <div class="form-group">

               <label >City:</label>
            </div>

            <div class="form-group">
               <label for="inputEmail" class="sr-only">City:</label>
            <input autocomplete="off" id="city" name="city" @if(!empty($filloutformContent['city'])) value="{{ $filloutformContent['city'] }}" @endif type="text" class="form-control" placeholder="City">
            </div>

           <div class="form-group">

             <label >State:</label>
            </div>

            <div class="form-group">
               <label for="inputEmail" class="sr-only">State:</label>
            <input autocomplete="off" id="state" name="state" @if(!empty($filloutformContent['state'])) value="{{ $filloutformContent['state'] }}" @endif type="text" class="form-control" placeholder="Name">
            </div>

         

            <div class="form-group">

                 <label>Country:</label>
            </div>


            <div class="form-group">
               <label for="inputEmail" class="sr-only">Country:</label>
            <select name="country" style="width:208px; font-size: 14px; height: 25px;">
            <option value="">Select</option>
              @foreach($countries as $country)
              <option value="{{ $country->name }}" @if(!empty($filloutformContent['country']) && $filloutformContent['country']==$country->name) selected="" @endif>{{ $country->name }}</option>
              @endforeach
            </select>
            </div>
    

         <div class="form-group">

            <label for="inputPassword" class="sr-only">Languages:</label>
         </div>


          <div class="form-group">

              <select name="languages[]" multiple style="width:210px; font-size: 16px; height: 110px;">
              <option value="">Select</option>

              @foreach($languages as $language)
                                 


              <option value="{{ $language->name }}" <?php if(!empty($filloutformContent->hobbies) && preg_match('/'.$language->name.'/i', $filloutformContent->languages)){ echo "selected"; } ?>>{{ $language->name }}</option>
              @endforeach
              </select>

          </div>



           <div class="form-group">

            <label >Hobbies:</label>
          </div>


              <div class="form-group">

                  <select name="hobbies[]" multiple style="width:208px; font-size: 14px; height: 100px;">
                  <option value="">Select</option>

                  @foreach($hobbies as $hobby)
                  <option value="{{ $hobby->title }}"  <?php if(!empty($filloutformContent->hobbies) && preg_match('/'.$hobby->title.'/i', $filloutformContent->hobbies)){ echo "selected"; } ?>>{{ $hobby->title }}</option>
                  @endforeach
                 </select>
            </div>



          

           <div class="form-group">

            <label>Highes Education:</label>
          </div>


            <div class="form-group">

            
    
           <input autocomplete="off" id="education" name="education" @if(!empty($filloutformContent['education'])) value="{{ $filloutformContent['education'] }}" @endif type="text" class="form-control" placeholder="Eductaion">
    
          </div>


         <div class="form-group">

            <label>Occupation:</label>
          </div>

         
         <div class="form-group">

           <select name="occupation" style="width:220px; font-size: 16px;">
               

               <option value="">Select</option>
               <option value="Student" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Student") selected="" @endif>Student</option>
                                <option value="Not working" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Not working") selected="" @endif>Not working</option>
                                <option value="Non-mainstream" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Student") selected="" @endif>Non-mainstream</option>
                                <option value="Accountant" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Accountant") selected="" @endif>Accountant</option>
                                <option value="Acting" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Acting") selected="" @endif>Acting</option>
                                <option value="Actor" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Actor") selected="" @endif>Actor</option>
                                <option value="Administration" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Administration") selected="" @endif>Administration</option>
                                <option value="Advertising" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Advertising") selected="" @endif>Advertising</option>
                                <option value="Advocate" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Advocate") selected="" @endif>Advocate</option>
                                <option value="Air Hostess" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Air Hostess") selected="" @endif>Air Hostess</option>
                                <option value="Airlines" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Airlines") selected="" @endif>Airlines</option>
                                <option value="Architect" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Architect") selected="" @endif>Architect</option>
                                <option value="Artisan" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Artisan") selected="" @endif>Artisan</option>
                                <option value="Audiologist" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Audiologist") selected="" @endif>Audiologist</option>
                                <option value="Banker" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Banker") selected="" @endif>Banker</option>
                                <option value="Beautician" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Beautician") selected="" @endif>Beautician</option>
                                <option value="Biologist/Botanist" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Biologist/Botanist") selected="" @endif>Biologist/Botanist</option>
                                <option value="Business Person" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Business Person") selected="" @endif>Business Person</option>
                                <option value="Chartered Accountant" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Chartered Accountant") selected="" @endif>Chartered Accountant</option>
                                <option value="Chemist" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Chemist") selected="" @endif>Chemist</option>
                                <option value="Civil Engineer" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Civil Engineer") selected="" @endif>Civil Engineer</option>
                                <option value="Clerical Official" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Clerical Official") selected="" @endif>Clerical Official</option>
                                <option value="Commercial Pilot" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Commercial Pilot") selected="" @endif>Commercial Pilot</option>
                                <option value="Company Secretary" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Company Secretary") selected="" @endif>Company Secretary</option>
                                <option value="Computer Professional" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Computer Professional") selected="" @endif>Computer Professional</option>
                                <option value="Consultant" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Consultant") selected="" @endif>Consultant</option>
                                <option value="Contractor" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Contractor") selected="" @endif>Contractor</option>
                                <option value="Cost Accountant" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Cost Accountant") selected="" @endif>Cost Accountant</option>
                                <option value="Creative Person" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Creative Person") selected="" @endif>Creative Person</option>
                                <option value="Customer Support" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Customer Support") selected="" @endif>Customer Support</option>
                                <option value="Defence Employee" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Defence Employee") selected="" @endif>Defence Employee</option>
                                <option value="Dentist" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Dentist") selected="" @endif>Dentist</option>
                                <option value="Designer" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Designer") selected="" @endif>Designer</option>
                                <option value="Doctor" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Doctor") selected="" @endif>Doctor</option>
                                <option value="Economist" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Economist") selected="" @endif>Economist</option>
                                <option value="Engineer" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Engineer") selected="" @endif>Engineer</option>
                                <option value="Engineer (Mechanical)" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Engineer (Mechanical)") selected="" @endif>Engineer (Mechanical)</option>
                                <option value="Engineer (Project)" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Engineer (Project)") selected="" @endif>Engineer (Project)</option>
                                <option value="Entertainment" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Entertainment") selected="" @endif>Entertainment</option>
                                <option value="Event Manager" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Event Manager") selected="" @endif>Event Manager</option>
                                <option value="Executive" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Executive") selected="" @endif>Executive</option>
                                <option value="Factory worker" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Factory worker") selected="" @endif>Factory worker</option>
                                <option value="Farmer" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Farmer") selected="" @endif>Farmer</option>
                                <option value="Fashion Designer" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Fashion Designer") selected="" @endif>Fashion Designer</option>
                                <option value="Finance" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Finance") selected="" @endif>Finance</option>
                                <option value="Flight Attendant" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Flight Attendant") selected="" @endif>Flight Attendant</option>
                                <option value="Freelancer" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Freelancer") selected="" @endif>Freelancer</option>
                                <option value="Government Employee" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Government Employee") selected="" @endif>Government Employee</option>
                                <option value="Health Care" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Health Care") selected="" @endif>Health Care</option>
                                <option value="Home Maker" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Home Maker") selected="" @endif>Home Maker</option>
                                <option value="Hotel &amp; Restaurant" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Hotel &amp; Restaurant") selected="" @endif>Hotel &amp; Restaurant</option>
                                <option value="Human Resources" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Human Resources") selected="" @endif>Human Resources</option>
                                <option value="Interior Designer" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Interior Designer") selected="" @endif>Interior Designer</option>
                                <option value="Investment" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Investment") selected="" @endif>Investment</option>
                                <option value="IT/Telecom" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="IT/Telecom") selected="" @endif>IT/Telecom</option>
                                <option value="Journalist" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Journalist") selected="" @endif>Journalist</option>
                                <option value="Lawyer" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Lawyer") selected="" @endif>Lawyer</option>
                                <option value="Lecturer" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Lecturer") selected="" @endif>Lecturer</option>
                                <option value="Legal" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Legal") selected="" @endif>Legal</option>
                                <option value="Manager" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Manager") selected="" @endif>Manager</option>
                                <option value="Marketing" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Marketing") selected="" @endif>Marketing</option>
                                <option value="Media" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Media") selected="" @endif>Media</option>
                                <option value="Medical" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Medical") selected="" @endif>Medical</option>
                                <option value="Medical Transcriptionist" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Medical Transcriptionist") selected="" @endif>Medical Transcriptionist</option>
                                <option value="Merchant Naval Officer" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Merchant Naval Officer") selected="" @endif>Merchant Naval Officer</option>
                                <option value="Model" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Model") selected="" @endif>Model</option>
                                <option value="Nurse" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Nurse") selected="" @endif>Nurse</option>
                                <option value="Occupational Therapist" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Occupational Therapist") selected="" @endif>Occupational Therapist</option>
                                <option value="Optician" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Optician") selected="" @endif>Optician</option>
                                <option value="Pharmacist" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Pharmacist") selected="" @endif>Pharmacist</option>
                                <option value="Physician Assistant" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Physician Assistant") selected="" @endif>Physician Assistant</option>
                                <option value="Physicist" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Physicist") selected="" @endif>Physicist</option>
                                <option value="Physiotherapist" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Physiotherapist") selected="" @endif>Physiotherapist</option>
                                <option value="Pilot" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Pilot") selected="" @endif>Pilot</option>
                                <option value="Politician" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Politician") selected="" @endif>Politician</option>
                                <option value="Production" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Production") selected="" @endif>Production</option>
                                <option value="Professor" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Professor") selected="" @endif>Professor</option>
                                <option value="Psychologist" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Psychologist") selected="" @endif>Psychologist</option>
                                <option value="Public Relations" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Public Relations") selected="" @endif>Public Relations</option>
                                <option value="Real Estate" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Real Estate") selected="" @endif>Real Estate</option>
                                <option value="Research Scholar" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Research Scholar") selected="" @endif>Research Scholar</option>
                                <option value="Retired Person" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Retired Person") selected="" @endif>Retired Person</option>
                                <option value="Retail" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Retail") selected="" @endif>Retail</option>
                                <option value="Sales" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Sales") selected="" @endif>Sales</option>
                                <option value="Scientist" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Scientist") selected="" @endif>Scientist</option>
                                <option value="Self-employed Person" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Self-employed Person") selected="" @endif>Self-employed Person</option>
                                <option value="Social Worker" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Social Worker") selected="" @endif>Social Worker</option>
                                <option value="Software Consultant" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Software Consultant") selected="" @endif>Software Consultant</option>
                                <option value="Software Engineer" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Software Engineer") selected="" @endif>Software Engineer</option>
                                <option value="Sportsman" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Sportsman") selected="" @endif>Sportsman</option>
                                <option value="Student" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Student") selected="" @endif>Student</option>
                                <option value="Teacher" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Teacher") selected="" @endif>Teacher</option>
                                <option value="Technician" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Technician") selected="" @endif>Technician</option>
                                <option value="Training" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Training") selected="" @endif>Training</option>
                                <option value="Transportation" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Transportation") selected="" @endif>Transportation</option>
                                <option value="Veterinary Doctor" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Veterinary Doctor") selected="" @endif>Veterinary Doctor</option>
                                <option value="Volunteer" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Volunteer") selected="" @endif>Volunteer</option>
                                <option value="Web Designer" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Web Designer") selected="" @endif>Web Designer</option>
                                <option value="Writer" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Writer") selected="" @endif>Writer</option>
                                <option value="Zoologist" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Zoologist") selected="" @endif>Zoologist</option>
                                <option value="Other" @if(!empty($filloutformContent['occupation']) && $filloutformContent['occupation']=="Other") selected="" @endif>Other</option>

           </select>
          </div>

          <div class="form-group">

            <label>Income:</label>
          </div>


           <div class="form-group">

           <select name="income" style="width:210px; font-size: 16px; height: 25px;">
            <option value="">Select</option>
            <option value="Under $25,000" @if(!empty($filloutformContent['income']) && $filloutformContent['income']=="Under $25,000") selected="" @endif>Under $25,000</option>
            <option value="$25,001-50,000" @if(!empty($filloutformContent['income']) && $filloutformContent['income']=="$25,001-50,000") selected="" @endif>$25,001-50,000</option>
           <option value="$50,001-75,000" @if(!empty($filloutformContent['income']) && $filloutformContent['income']=="$50,001-75,000") selected="" @endif>$50,001-75,000</option>
           <option value="$75,001-100,000" @if(!empty($filloutformContent['income']) && $filloutformContent['income']=="$75,001-100,000") selected="" @endif>$75,001-100,000</option>
           <option value="$100,001-150,000" @if(!empty($filloutformContent['income']) && $filloutformContent['income']=="$100,001-150,000") selected="" @endif>$100,001-150,000</option>
           <option value="$150,001-200,000" @if(!empty($filloutformContent['income']) && $filloutformContent['income']=="$150,001-200,000") selected="" @endif>$150,001-200,000</option>
           <option value="$200,001 and above" @if(!empty($filloutformContent['income']) && $filloutformContent['income']=="$200,001 and above") selected="" @endif>$200,001 and above</option>
           </select>


           </div>


            <div class="form-group">

            <label>About Myself:</label>
          </div>

         <div class="form-group">
          <textarea name="about_myself" style="width:210px; font-size: 16px; height: 100px;"> @if(!empty($filloutformContent['about_myself'])) {{ $filloutformContent['about_myself'] }} @endif</textarea>

          </div>


           <div class="form-group">

            <label>About My Preferred Partner:</label>
          </div>


           <div class="form-group">

            <strong>Partner Details:</strong>
          </div>

            <div class="form-group">

             <textarea name="about_partner" style="width:210px; font-size: 16px; height: 100px;">@if(!empty($filloutformContent['about_partner'])) {{ $filloutformContent['about_partner'] }} @endif</textarea>
          </div>

         <td><input type="submit" name="submit" class="button" value="Submit" /></td>
 
         </form>



</div>


</div>

</div>

</div>

@endsection