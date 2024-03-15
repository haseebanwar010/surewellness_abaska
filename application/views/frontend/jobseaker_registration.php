	<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
?>
<?php if(isset($sectionid) && $sectionid==1){ ?><div class="banner_inner" style="background-image: url(<?php echo $baseUrl; ?>assets/frontend/images/banner_innber.jpg);"></div><?php }else{ ?>
<div class="banner_inner" style="background-image: url(<?php echo $baseUrl; ?>assets/frontend/images/home/banner_innber.jpg);"></div><?php } ?>

	

</div>
<div class="breadcrumb_container">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="<?php echo $baseUrl; ?>">Home</a></li>
  <li class="breadcrumb-item active">Login as a job Seeker</li>
</ol>

				</div>
			</div>
		</div>
</div>
	<div class="job_container">
		<div class="container">
             <?php if(validation_errors()){ ?>
        <section class="content alertcontent">    
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                <?php echo validation_errors(); ?>
            </div>
        </section>
    <?php } ?>
            <?php if($this->session->flashdata('error_msg')){ ?>
        <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Error!</h4>
                <?=$this->session->flashdata('error_msg')?>
              </div>          
    <?php } ?>
            <?php if($this->session->flashdata('msg')){ ?>
        <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                <?=$this->session->flashdata('msg')?>
              </div>          
    <?php } ?>
		<div class="row">
			<div class="col-sm-12">
				<div class="inner_page_heading">
				<h3>Register Now Sign up as Job Seeker</h3>
				<button data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">login as a job Seeker </button>
			</div>
			<div class="inner_page_heading_line"></div>
			</div>
			<div class="col-sm-12">
				<div class="reigster">
						<form action="<?php echo $baseUrl; ?>job_seaker/register" id="employee_from" class="register-box register_box_margin" method="post" enctype="multipart/form-data" autocomplete="off">

                            <h1 class="section_label">Personal Information</h1>
                    <div class="form-st-rp">
                        <div class="form-wrp lefts">

                            <label>First Name<span class="mendiatory">*</span> </label>
                            <input type="text" placeholder="First Name" value="<?php if(isset($_POST['first_name'])){ echo $_POST['first_name']; }?>" name="first_name" class="register-form alpha-only ">

                        </div>
                        <div class="form-wrp rights">

                            <label>Middle Name<span class="mendiatory">*</span> </label>
                            <input type="text" placeholder="Middle Name" value="<?php if(isset($_POST['middle_name'])){ echo $_POST['middle_name']; }?>" name="middle_name" class="register-form alpha-only ">

                        </div>

                       
                    </div>

                    <div class="form-st-rp">
                         <div class="form-wrp lefts">

                            <label>Last Name <span class="mendiatory">*</span> </label>
                            <input type="text" placeholder="Last Name" value="<?php if(isset($_POST['last_name'])){ echo $_POST['last_name']; }?>" name="last_name" class="register-form alpha-only">

                        </div>
                          <div class="form-wrp rights">

                            <label>Address <span class="mendiatory">*</span> </label>
                            <input type="text" placeholder="Address" value="<?php if(isset($_POST['address'])){ echo $_POST['address']; }?>" class="register-form" name="address">
                                                           </div>
                        
                    </div>
                             <div class="form-st-rp">
                        <div class="form-wrp lefts query-form-top ">

                             <label>State <span class="mendiatory">*</span></label>
                             <div class="company-field ">
                                    <select class="form-control select2 state_changer" style="width:100%;" name="state">
                                        <option value="">---SELECT STATE---</option>
                                        <?php foreach($states as $state){ ?>
                                        <option <?php if(isset($_POST['gender']) && $_POST['gender']==$state['id']){ echo "selected"; }?> value="<?php echo $state['id']; ?>"><?php echo $state['name']; ?></option>
                                        <?php } ?>
                                    </select>
                                
                            </div>

                        </div>
                        <div class="form-wrp rights query-form-top">


                            <label>City <span class="mendiatory">*</span></label>
                             <div class="company-field ">
                                    <select class="form-control city_changer select2" style="width:100%;" name="city">

               
                                    </select>
                                
                            </div>

                        </div>
                    </div>
                            <div class="form-st-rp">
                        <div class="form-wrp lefts">
                            <label>Social Security Number <span class="mendiatory">*</span> </label>
                            <input type="text" placeholder="Social Security Number" value="<?php if(isset($_POST['ssn'])){ echo $_POST['ssn']; }?>" class="register-form" name="ssn">
                        </div>
                                 <div class="form-wrp rights">

                            <label>Email <span class="mendiatory">*</span> </label>
                            <input type="email" placeholder="Email" value="<?php if(isset($_POST['email'])){ echo $_POST['email']; }?>" class="register-form" name="email">
                                                           </div>
                    </div>    
                             <div class="form-st-rp">
                                  <div class="form-wrp lefts">

                            <label>Password <span class="file_msg">* Hint: Use combination of alphabets and numbers</span> </label>
                            <input type="password" placeholder="Password" id="password" name="password" class="register-form" value="<?php if(isset($_POST['password'])){ echo $_POST['password']; }?>">
                        </div>
                                 <div class="form-wrp rights">


                            <label>Home Phone <span class="mendiatory">*</span> </label>
                            <input type="text"  placeholder="Home Phone" value="<?php if(isset($_POST['home_phone'])){ echo $_POST['home_phone']; }?>" id="home_phone" name="home_phone" class="register-form">
                          

                        </div>
                            </div>
                            <div class="form-st-rp">
                    

                        <div class="form-wrp lefts">


                            <label>Cell Phone <span class="mendiatory">*</span> </label>
                            <input type="text"  placeholder="Cell Phone" value="<?php if(isset($_POST['cell_phone'])){ echo $_POST['cell_phone']; }?>" id="cell_phone" name="cell_phone" class="register-form">
                          

                        </div>
                                <div class="form-wrp rights">


                            <label>Work Phone <span class="mendiatory">*</span> </label>
                            <input type="text"  placeholder="Work Phone" value="<?php if(isset($_POST['work_phone'])){ echo $_POST['work_phone']; }?>" id="work_phone" name="work_phone" class="register-form">
                          

                        </div>
                            </div>
                            <div class="form-st-rp">
                        <div class="form-wrp lefts">
                            <label>Emergency Contact<span class="mendiatory">*</span> </label>
                            <input type="text"  placeholder="Emergency Contact" value="<?php if(isset($_POST['emergency_contact'])){ echo $_POST['emergency_contact']; }?>" id="emergency_contact" name="emergency_contact" class="register-form">
                        </div>
                               <div class="form-wrp rights">
                            <label>Are You 18 Years Of Age?<span class="mendiatory">*</span> </label>
                            <span>Yes:</span> <input type="radio" name="age_question" value="1">
                            <span>No:</span> <input type="radio" name="age_question" value="0">
                        </div>
                            </div>
                            <div class="form-st-rp">
                      <div class="form-wrp lefts">
                    <label>Date Of Birth</label>
                    <input type="text" placeholder="Date Of Birth" value="<?php if(isset($_POST['dob'])){ echo $_POST['dob']; }?>" name="dob" class="register-form datepicker">
                        </div>
                                <div class="form-wrp rights">
                            <label>Languages Spoken</label>
                            <input type="text"  placeholder="Languages Spoken" value="<?php if(isset($_POST['languages'])){ echo $_POST['languages']; }?>" id="languages" name="languages" class="register-form">
                        </div>
                        </div>
                        <div class="form-st-rp">
                            <div class="form-wrp lefts">
                                <label>Are you currently employed?<span class="mendiatory">*</span> </label>
                                <span>Yes:</span> <input type="radio" name="currently_employed" value="1">
                                <span>No:</span> <input type="radio" name="currently_employed" value="0">
                            </div>
                            <div class="form-wrp rights">
                                <label>May we contact your employer?<span class="mendiatory">*</span> </label>
                                <span>Yes:</span> <input type="radio" name="contact_employer" value="1">
                                <span>No:</span> <input type="radio" name="contact_employer" value="0">
                            </div>
                        </div>
                            <div class="form-st-rp">
                                <div class="form-wrp lefts">
                            <label>How did you find out about our company? </label>
                            <input type="text"  placeholder="How did you find out about our company?" value="<?php if(isset($_POST['how_find_company'])){ echo $_POST['how_find_company']; }?>" id="how_find_company" name="how_find_company" class="register-form">
                        </div>
                                <div class="form-wrp rights">
                            <label>Which cities would you prefer to work in?</label>
                            <input type="text"  placeholder="Which cities would you prefer to work in?" value="<?php if(isset($_POST['work_city'])){ echo $_POST['work_city']; }?>" id="work_city" name="work_city" class="register-form">
                        </div>
                                
                            </div>
                            <div class="form-st-rp">
                                <div class="form-wrp textareawrapper">
                            <label>Are you currently able to perform the essential functions, with or without a reasonable accommodation, for   the position for which you are applying?</label>
                                    <textarea class="class=register-form" name="essential_functions"><?php if(isset($_POST['essential_functions'])){ echo $_POST['essential_functions']; }?></textarea>
                            
                        </div>
                            </div>
                            <div class="form-st-rp">
                                <div class="form-wrp textareawrapper">
                            <label>Have you previously worked for our company? </label>
                                    <textarea class="class=register-form" name="previously_worked"><?php if(isset($_POST['previously_worked'])){ echo $_POST['previously_worked']; }?></textarea>
                            
                        </div>
                            </div>
                            
                            <h1 class="section_label">Education</h1>
                            
                            
                            <div class="form-st-rp">
                                <div class="form-wrp lefts">
                            <label>High School</label>
                            <input type="text"  placeholder="High School" value="<?php if(isset($_POST['high_school'])){ echo $_POST['high_school']; }?>" id="high_school" name="high_school" class="register-form">
                        </div>
                                <div class="form-wrp rights">
                                <label>Graduate?<span class="mendiatory">*</span> </label>
                                <span>Yes:</span> <input type="radio" name="graduate" value="1">
                                <span>No:</span> <input type="radio" name="graduate" value="0">
                            </div>
                            </div>
                            <div class="form-st-rp">
                                <div class="form-wrp lefts">
                            <label>College </label>
                            <input type="text"  placeholder="College" value="<?php if(isset($_POST['college'])){ echo $_POST['college']; }?>" id="college" name="college" class="register-form">
                        </div>
                                <div class="form-wrp rights">
                                <label>Trade, Business or Other Schooling</label>
                                <input type="text"  placeholder="Trade, Business or Other Schooling" value="<?php if(isset($_POST['trade'])){ echo $_POST['trade']; }?>" id="trade" name="trade" class="register-form">
                            </div>
                            </div>
                            <div class="form-st-rp">
                                <div class="form-wrp textareawrapper">
                            <label>Relevant Experience or Special Skills</label>
                                    <textarea class="class=register-form" name="relevant_experience"><?php if(isset($_POST['relevant_experience'])){ echo $_POST['relevant_experience']; }?></textarea>
                            
                        </div>
                            </div>
                            
                            <h1 class="section_label">EMPLOYMENT HISTORY</h1>
                            <p class="formdetails">
                                We will confirm dates of employment, positions held and reasons for leaving, with prior employers. 
Please explain all gaps in employment and any other information that may be relevant to eligibility and suitability with prior employers in the “additional Information” section.  Start with your current or most recent employers.
                            </p>
                            
                            <div class="form-st-rp">
                                <div class="form-wrp lefts">
                            <label>Name and Address of Employer</label>
                            <input type="text"  placeholder="College" value="<?php if(isset($_POST['employer_name_address1'])){ echo $_POST['employer_name_address1']; }?>" id="employer_name_address1" name="employer_name_address1" class="register-form">
                        </div>
                                <div class="form-wrp rights">
                                <label>Name of Supervisor</label>
                                <input type="text"  placeholder="Name of Supervisor" value="<?php if(isset($_POST['supervisor_name1'])){ echo $_POST['supervisor_name1']; }?>" id="supervisor_name1" name="supervisor_name1" class="register-form">
                            </div>
                            </div>
                            <div class="form-st-rp">
                                <div class="form-wrp lefts">
                    <label>Start Date</label>
                    <input type="text" placeholder="Start Date" value="<?php if(isset($_POST['start_date1'])){ echo $_POST['start_date1']; }?>" name="start_date1" class="register-form datepicker">
                        </div>
                                <div class="form-wrp rights">
                    <label>End Date</label>
                    <input type="text" placeholder="End Date" value="<?php if(isset($_POST['end_date1'])){ echo $_POST['end_date1']; }?>" name="end_date1" class="register-form datepicker">
                        </div>
                        </div>
                            <div class="form-st-rp">
                                <div class="form-wrp lefts">
                            <label>Job Title</label>
                            <input type="text"  placeholder="Job Title" value="<?php if(isset($_POST['job_title1'])){ echo $_POST['job_title1']; }?>" id="job_title1" name="job_title1" class="register-form">
                        </div>
                            </div>
                            <div class="form-st-rp">
                                <div class="form-wrp textareawrapper">
                            <label>Reasons for leaving</label>
                                    <textarea class="class=register-form" name="leaving_reason1"><?php if(isset($_POST['leaving_reason1'])){ echo $_POST['leaving_reason1']; }?></textarea>
                            
                        </div>
                            </div>
                            <div class="form-st-rp">
                                <div class="form-wrp textareawrapper">
                            <label>Description of Work Responsibilities</label>
                                    <textarea class="class=register-form" name="work_description1"><?php if(isset($_POST['work_description1'])){ echo $_POST['work_description1']; }?></textarea>
                            
                        </div>
                            </div>
                            
                                <div class="form-st-rp">
                                <div class="form-wrp lefts">
                            <label>Name and Address of Employer</label>
                            <input type="text"  placeholder="College" value="<?php if(isset($_POST['employer_name_address2'])){ echo $_POST['employer_name_address2']; }?>" id="employer_name_address2" name="employer_name_address2" class="register-form">
                        </div>
                                <div class="form-wrp rights">
                                <label>Name of Supervisor </label>
                                <input type="text"  placeholder="Name of Supervisor" value="<?php if(isset($_POST['supervisor_name2'])){ echo $_POST['supervisor_name2']; }?>" id="supervisor_name2" name="supervisor_name2" class="register-form">
                            </div>
                            </div>
                            <div class="form-st-rp">
                                <div class="form-wrp lefts">
                    <label>Start Date</label>
                    <input type="text" placeholder="Start Date" value="<?php if(isset($_POST['start_date2'])){ echo $_POST['start_date2']; }?>" name="start_date2" class="register-form datepicker">
                        </div>
                                <div class="form-wrp rights">
                    <label>End Date</label>
                    <input type="text" placeholder="End Date" value="<?php if(isset($_POST['end_date2'])){ echo $_POST['end_date2']; }?>" name="end_date2" class="register-form datepicker">
                        </div>
                        </div>
                            <div class="form-st-rp">
                                <div class="form-wrp lefts">
                            <label>Job Title</label>
                            <input type="text"  placeholder="Job Title" value="<?php if(isset($_POST['end_date2'])){ echo $_POST['end_date2']; }?>" id="end_date2" name="end_date2" class="register-form">
                        </div>
                            </div>
                            <div class="form-st-rp">
                                <div class="form-wrp textareawrapper">
                            <label>Reasons for leaving</label>
                                    <textarea class="class=register-form" name="leaving_reason2"><?php if(isset($_POST['leaving_reason2'])){ echo $_POST['leaving_reason2']; }?></textarea>
                            
                        </div>
                            </div>
                            <div class="form-st-rp">
                                <div class="form-wrp textareawrapper">
                            <label>Description of Work Responsibilities</label>
                                    <textarea class="class=register-form" name="work_description2"><?php if(isset($_POST['work_description2'])){ echo $_POST['work_description2']; }?></textarea>
                            
                        </div>
                            </div>
                            
                            
                                <div class="form-st-rp">
                                <div class="form-wrp lefts">
                            <label>Name and Address of Employer</label>
                            <input type="text"  placeholder="College" value="<?php if(isset($_POST['employer_name_address3'])){ echo $_POST['employer_name_address3']; }?>" id="employer_name_address3" name="employer_name_address3" class="register-form">
                        </div>
                                <div class="form-wrp rights">
                                <label>Name of Supervisor </label>
                                <input type="text"  placeholder="Name of Supervisor" value="<?php if(isset($_POST['supervisor_name3'])){ echo $_POST['supervisor_name3']; }?>" id="supervisor_name3" name="supervisor_name3" class="register-form">
                            </div>
                            </div>
                            <div class="form-st-rp">
                                <div class="form-wrp lefts">
                    <label>Start Date</label>
                    <input type="text" placeholder="Start Date" value="<?php if(isset($_POST['start_date3'])){ echo $_POST['start_date3']; }?>" name="start_date3" class="register-form datepicker">
                        </div>
                                <div class="form-wrp rights">
                    <label>End Date</label>
                    <input type="text" placeholder="End Date" value="<?php if(isset($_POST['end_date3'])){ echo $_POST['end_date3']; }?>" name="end_date3" class="register-form datepicker">
                        </div>
                        </div>
                            <div class="form-st-rp">
                                <div class="form-wrp lefts">
                            <label>Job Title</label>
                            <input type="text"  placeholder="Job Title" value="<?php if(isset($_POST['job_title3'])){ echo $_POST['job_title3']; }?>" id="job_title3" name="job_title3" class="register-form">
                        </div>
                            </div>
                            <div class="form-st-rp">
                                <div class="form-wrp textareawrapper">
                            <label>Reasons for leaving</label>
                                    <textarea class="class=register-form" name="leaving_reason3"><?php if(isset($_POST['leaving_reason3'])){ echo $_POST['leaving_reason3']; }?></textarea>
                            
                        </div>
                            </div>
                            <div class="form-st-rp">
                                <div class="form-wrp textareawrapper">
                            <label>Description of Work Responsibilities</label>
                                    <textarea class="class=register-form" name="work_description3"><?php if(isset($_POST['work_description3'])){ echo $_POST['work_description3']; }?></textarea>
                            
                        </div>
                            </div>
                            
                            <p class="formdetails">List the names of three persons, not related to you, whom you have known for at least one year:</p>
                            
                            
                            <div class="form-st-rp">
                                <div class="form-wrp lefts">
                            <label>Name, Address & Phone</label>
                            <input type="text"  placeholder="Name, Address & Phone" value="<?php if(isset($_POST['related_person_name_detail'])){ echo $_POST['related_person_name_detail']; }?>" id="related_person_name_detail" name="related_person_name_detail" class="register-form">
                        </div>
                                <div class="form-wrp rights">
                            <label>Business/Occupation</label>
                            <input type="text"  placeholder="Business/Occupation" value="<?php if(isset($_POST['business_occupation'])){ echo $_POST['business_occupation']; }?>" id="business_occupation" name="business_occupation" class="register-form">
                        </div>
                            </div>
                            <div class="form-st-rp">
                                <div class="form-wrp lefts">
                                    <label>Years Acquainted</label>
                                    <input type="text"  placeholder="Years Acquainted" value="<?php if(isset($_POST['years_acquainted'])){ echo $_POST['years_acquainted']; }?>" id="years_acquainted" name="years_acquainted" class="register-form">
                                </div>
                            </div>
                            
                            <h1 class="section_label">Licenses and Certificates</h1>
                            <p class="formdetails">What professional designations, do you currently hold?  Please check all that are applicable.</p>
                             
                            
                            <div class="form-st-rp">
                                <div class="form-wrp lefts">
                            <label>Certificates</label>
                            <input type="checkbox" name="certificates[]" value="Certified Nursing Assistant Certificate"> Certified Nursing Assistant Certificate<br>
                             <input type="checkbox" name="certificates[]" value="Home Care Aide Certificate"> Home Care Aide Certificate<br>
                             <input type="checkbox" name="certificates[]" value="Nursing Assistant Registered"> Nursing Assistant Registered (if you have proof of employment form 2011)<br>
                             <input type="checkbox" name="certificates[]" value="75 Hour Fundamentals"> 75 Hour Fundamentals<br>
                             <input type="checkbox" name="certificates[]" value="Core Training">  Core Training<br>
                        </div>
                                <div class="form-wrp rights">
                            <label>Have you applied for any of these licenses?<span class="mendiatory">*</span> </label>
                            <span>Yes:</span> <input type="radio" name="applied_licences" value="1">
                            <span>No:</span> <input type="radio" name="applied_licences" value="0">
                        </div>
                            </div>
                            
                            <h1 class="section_label">Notices</h1>
                            <div class="form-st-rp">
                                <div class="form-wrp lefts textareawrapper">
                            <label>New Employees are required to produce verification of their legal right to work in the United States.  If you are offered employment, can you produce sufficient documentation of your identity and right to work in the United States, and attest under penalty of perjury that the documents you produce are genuine and relate to you?<span class="mendiatory">*</span> </label>
                            <span>Yes:</span> <input type="radio" name="notices" value="1">
                            <span>No:</span> <input type="radio" name="notices" value="0">
                        </div>
                            </div>
                            
                            
                            <h1 class="section_label">Additional Information</h1>
                            <div class="form-st-rp">
                                <div class="form-wrp lefts textareawrapper">
                            <label>Have you ever been convicted of a felony or of any crime for which you served a jail or prison sentence?<span class="mendiatory">*</span> </label>
                            <span>Yes:</span> <input type="radio" name="any_crime" value="1">
                            <span>No:</span> <input type="radio" name="any_crime" value="0">
                        </div>
                            </div>
                            <div class="form-st-rp">
                                <div class="form-wrp lefts textareawrapper">
                            <label>Are you currently awaiting trial for any criminal offense?<span class="mendiatory">*</span> </label>
                            <span>Yes:</span> <input type="radio" name="criminal_trial" value="1">
                            <span>No:</span> <input type="radio" name="criminal_trial" value="0">
                        </div>
                            </div>
                            <div class="form-st-rp">
                                <div class="form-wrp lefts textareawrapper">
                            <label>Have you ever initiated an act of violence in the workplace?  <span class="mendiatory">*</span> </label>
                            <span>Yes:</span> <input type="radio" name="violence" value="1">
                            <span>No:</span> <input type="radio" name="violence" value="0">
                        </div>
                            </div>
                            
                             <div class="form-st-rp">
                                <div class="form-wrp lefts">
                                    <label></label>
                                    <input type="checkbox" name="agrred_terms" value="1"> I agree to the terms of service<br>
                                 </div>
                            </div>
                            
                            
                            
                            <!-- <div class="form-st-rp">
                    

                        <div class="form-wrp lefts">


                            <label>Cell Phone <span class="mendiatory">*</span> </label>
                            <input type="text"  placeholder="Phone" value="<?php if(isset($_POST['phone'])){ echo $_POST['phone']; }?>" id="phone" name="phone" class="register-form">
                          

                        </div>
                        <div class="form-wrp rights ">
                            <label for="employee_gender">Gender <span class="mendiatory">*</span> </label>
                            
                                <div class="company-field ">
                                    <select class="form-control input_error_margin select2" name="gender" style="width:100%;" id="employee_gender">
                                        <option value="">Gender</option>
                                        <option <?php if(isset($_POST['gender']) && $_POST['gender']=='Male'){ echo "selected"; }?> value="Male">Male</option>
                                        <option <?php if(isset($_POST['gender'])  && $_POST['gender']=='Female'){ echo "selected"; }?> value="Female">Female</option>

                                    </select>
                              
                            </div>
                        </div>
                    </div>
                   <div class="form-st-rp">

                        
                       
                                                           
                        <div class="form-wrp rights">

                            <label>Address <span class="mendiatory">*</span> </label>
                            <input type="text" placeholder="Address" value="<?php if(isset($_POST['address'])){ echo $_POST['address']; }?>" class="register-form" name="address">
                                                           </div>
                                                           
                    </div>
                    
                    <div class="form-st-rp">
                       


                        <div class="form-wrp rights">

                            <label>Confirm Password <span class="mendiatory">*</span> </label>
                            <input type="password" placeholder="Confirm Password" name="confirm_password" id="confirm_password" class="register-form" value="<?php if(isset($_POST['confirm_password'])){ echo $_POST['confirm_password']; }?>">
                        </div>


                    </div>
                   
                    <div class="form-st-rp">
                        <div class="form-wrp lefts query-form-top ">

                             <label>State</label>
                             <div class="company-field ">
                                    <select class="form-control select2 state_changer" style="width:100%;" name="state">
                                        <option value="">---SELECT STATE---</option>
                                        <?php foreach($states as $state){ ?>
                                        <option <?php if(isset($_POST['gender']) && $_POST['gender']==$state['id']){ echo "selected"; }?> value="<?php echo $state['id']; ?>"><?php echo $state['name']; ?></option>
                                        <?php } ?>
                                    </select>
                                
                            </div>

                        </div>
                        <div class="form-wrp rights query-form-top">


                            <label>City</label>
                             <div class="company-field ">
                                    <select class="form-control city_changer select2" style="width:100%;" name="city">

               
                                    </select>
                                
                            </div>

                        </div>
                    </div>
				
                    <div class="form-st-rp">
                      <div class="form-wrp lefts">
                    <label>Date Of Birth<span class="mendiatory">*</span> </label>
                    <input type="text" placeholder="Date Of Birth" value="<?php if(isset($_POST['dob'])){ echo $_POST['dob']; }?>" name="dob" class="register-form datepicker">
                        </div>
                        </div>
                        
                    <div class="form-wrp mr-frm rights my-cnic-top">
                            <label>CNIC <span class="mendiatory">*</span> </label>
                            <input type="text" placeholder="CNIC" id="cnic_number" name="cnic" value="<?php if(isset($_POST['cnic'])){ echo $_POST['cnic']; }?>" class="register-form">
                        </div>
                    
                    

                    <div class="form-st-rp ">
                        <div class="form-wrp lefts">
                            <label for="degreeLevel">Degree Level <span class="mendiatory">*</span> </label>
                            
                                <div class="company-field ">
                                    <select class="form-control input_error_margin select2" style="width:100%;" name="degree_level" >
                                        <option  value="">Select Degree Level</option>
                                        <option <?php if(isset($_POST['degree_level']) && $_POST['degree_level']=='Non-Matriculation'){ echo "selected"; }?> value="Non-Matriculation">Non-Matriculation</option>
                                        <option <?php if(isset($_POST['degree_level']) && $_POST['degree_level']=='Matriculation/O-Level'){ echo "selected"; }?> value="Matriculation/O-Level">Matriculation/O-Level</option>
                                        <option <?php if(isset($_POST['degree_level']) && $_POST['degree_level']=='Intermediate/A-Level'){ echo "selected"; }?> value="Intermediate/A-Level">Intermediate/A-Level</option>
                                        <option <?php if(isset($_POST['degree_level']) && $_POST['degree_level']=='Undergraduate/Bachelors'){ echo "selected"; }?> value="Undergraduate/Bachelors">Undergraduate/Bachelors</option>
                                        <option <?php if(isset($_POST['degree_level']) && $_POST['degree_level']=='Masters'){ echo "selected"; }?> value="Masters">Masters</option>
                                        <option <?php if(isset($_POST['degree_level']) && $_POST['degree_level']=='MPhil/MS'){ echo "selected"; }?> value="MPhil/MS">MPhil/MS</option>
                                        <option <?php if(isset($_POST['degree_level']) && $_POST['degree_level']=='PHD/Doctorate'){ echo "selected"; }?> value="PHD/Doctorate">PHD/Doctorate</option>
                                        <option <?php if(isset($_POST['degree_level']) && $_POST['degree_level']=='Certification'){ echo "selected"; }?> value="Certification">Certification</option>
                                        <option <?php if(isset($_POST['degree_level']) && $_POST['degree_level']=='Diploma'){ echo "selected"; }?> value="Diploma">Diploma</option>
                                        <option <?php if(isset($_POST['degree_level']) && $_POST['degree_level']=='Short Course'){ echo "selected"; }?> value="Short Course">Short Course</option>
                                    </select>
                                
                            </div>

                        </div>
                        <div class="form-wrp rights query-form-top">

                            <label for="functional_area">Institute <span class="mendiatory">*</span> </label>
                           <div class="company-field">
                                    <select class="form-control input_error_margin select2" style="width:100%;" name="institute">
                                        <option value="">Select Institute</option>
                                        <option <?php if(isset($_POST['institute']) && $_POST['institute']=='Diploma'){ echo "selected"; }?> value="Connecticut">Connecticut</option>
                                        <option <?php if(isset($_POST['institute']) && $_POST['institute']=='Maine'){ echo "selected"; }?> value="Maine">Maine</option>
                                        <option <?php if(isset($_POST['institute']) && $_POST['institute']=='Massachusetts'){ echo "selected"; }?> value="Massachusetts">Massachusetts</option>
                                        <option <?php if(isset($_POST['institute']) && $_POST['institute']=='Pennsylvania'){ echo "selected"; }?> value="Pennsylvania">Pennsylvania</option>
                                        <option <?php if(isset($_POST['institute']) && $_POST['institute']=='Vermont'){ echo "selected"; }?> value="Vermont">Vermont</option>
                                    </select>
                                
                            </div>
                        </div>

                    </div>
                    <div class="form-st-rp">
                        <div class="form-wrp lefts">

                            <label for="functional_area">Functional area <span class="mendiatory">*</span> </label>
                                <div class="company-field">
                                    <select id="degreeLevel " class="form-control input_error_margin select2" style="width:100%;" name="functional_area">
                                        <option value="">Select Functional area</option>
                                        <option <?php if(isset($_POST['functional_area']) && $_POST['functional_area']=='Account & Finance'){ echo "selected"; }?> value="Account & Finance">Account & Finance</option>
                                        <option <?php if(isset($_POST['functional_area']) && $_POST['functional_area']=='Administration'){ echo "selected"; }?> value="Administration">Administration</option>
                                    </select>
                                
                            </div>
                        </div>
                        <div class="form-wrp rights">

                            <label>Career Level<span class="mendiatory">*</span> </label>
                           
                                <div class="company-field">
                                    <select class="form-control select2" style="width:100%;" name="career_level">
                                        <option value="">Career Level</option>
                                                <option <?php if(isset($_POST['career_level']) && $_POST['career_level']=='Intern/Student'){ echo "selected"; }?> value="Intern/Student">Intern/Student</option>
                                                <option <?php if(isset($_POST['career_level']) && $_POST['career_level']=='Fresh Graduate/Entry Level'){ echo "selected"; }?> value="Fresh Graduate/Entry Level">Fresh Graduate/Entry Level</option>
                                                <option <?php if(isset($_POST['career_level']) && $_POST['career_level']=='Experienced Professional'){ echo "selected"; }?> value="Experienced Professional">Experienced Professional</option>
                                                <option <?php if(isset($_POST['career_level']) && $_POST['career_level']=='Department Head'){ echo "selected"; }?> value="Department Head">Department Head</option>
                                                <option <?php if(isset($_POST['career_level']) && $_POST['career_level']=='Director/CEO/Country Head/President'){ echo "selected"; }?> value="Director/CEO/Country Head/President">Director/CEO/Country Head/President</option>
                                    </select>
                               
                            </div>
                        </div>
                    </div>
                    <div class="form-st-rp">

                        <div class="form-wrp lefts query-form-top">

                            <label>Job Title </label>
                            <input type="text" placeholder="Job Title" value="<?php if(isset($_POST['job_title'])){ echo $_POST['job_title']; }?>" name="job_title" class="register-form">
                        </div>
                        <div class="form-wrp rights">


                            <label>Company </label>
                            <input type="text" placeholder="Company" value="<?php if(isset($_POST['company'])){ echo $_POST['company']; }?>" name="company" class="register-form">
                        </div>
                    </div>
                              <div class="form-st-rp">

                        <div class="form-wrp lefts">

                            <label>CV <span class="mendiatory">*</span> <span class="file_msg"> Allowed Types: pdf|doc|docx Maxsize: 3MB</span>
                            </label>
                            <div class=" query-upload">
                                <input type="file" name="cv" class="register-form1">
                                                            </div>

                        </div>
                        <div class="form-wrp rights">

                            <label>Other Document <span class="mendiatory">*</span> </label>
                           <div class=" query-upload">
                                <input type="file" name="document" class="register-form1">
                                                            </div>
                                                           </div>
                    </div>-->
            

                    <input type="submit" value="Sign up" class="register-btn">

                </form>
				
			</div>
			</div>
		</div>
	</div>
	</div>
	
	