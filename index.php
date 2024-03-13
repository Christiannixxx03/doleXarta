<!--Author: DOLE CDO FO
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/-->
<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" type="x-icon" href="DOLE.png">
<title>DOLE CLIENT FEEDBACK FORM</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elegant Feedback Form  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--/custom-theme -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"/> -->
<link href="style.css" rel="stylesheet" type="text/css"/>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
 <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"> 
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<header>
        <div class="hbg">
            <img src="images/Header.png" style="width: 1030px;">
        </div>
    </header>
<body class="agileits_w3layouts">


    <div class="w3layouts_main wrap">
	 
	   <form action="feedback.php" method="post" class="agile_form">
         <div class="int">
             <center><div class="h2"><h2>Please help us to serve you better by taking a couple of minutes. </h2></div></center>
		 <div class="textup">
              <h2><i class="fa-solid fa-people-group"></i>Client type <br> 


        
    <p id="currentDate" class="date"></p>

    <script>
        // JavaScript to get the current date and display it
        var currentDateElement = document.getElementById('currentDate');
        var currentDate = new Date();
        currentDateElement.textContent = currentDate.toDateString();
    </script>




                <input type="radio" name="client" id="" value="Citizen" required>
                  <i class="fa fa-solid fa-user"></i> 
                    Citizen
                   
                <input type="radio" name="client" id="" value="Business">
                  <i class="fas fa-address-card"></i>
                    Business
                    
                <input type="radio" name="client" id=""  value="Government">   
                  <i class="fas fa-building"></i>
                    Government (Employee or another agency)
                </div>
              <div class="d2">
                <h3>Region of residence <br>
                (Rehiyon o Lugar ng tirahan):</h3>
                               <textarea id="region" name="region" 
                      rows="1" cols="20" required> 
                </textarea> 
            
                <h2><i class="fa fa-intersex" style="position: absolute; top: 235px ; left:450px ;"></i><p class="gender" style="position: absolute; top:210px ; left: 470px;">Gender</h2>

               <!--  <h2><i class="fa fa-calendar" style="position: absolute"></i>Age</h2> -->
            
             <label for="gender">
                <input type="radio" id="male" name="gender" value="Male" style="position: absolute; top:280px ; left:410px;" required> 
                  <i class="fa fa-male " style="position: absolute; top:280px ; left: 430px;"></i>
                    <p class="male" style="position: absolute; top:265px ; left: 440px;">Male</p>
                
                <input type="radio" id="female" name="gender" value="Female" style="position: absolute; top:280px ; left: 510px;"> <required>
                  <i class="fa fa-female" style="position: absolute; top:280px ; left: 530px;"></i>
                    <p class="female" style="position: absolute; top:265px ; left: 540px;">Female</p>
 
            </label> 
                    <h2><i class="fa fa-calendar" style="position: absolute; left: 800px; top: 235px;"></i><p class="age" style="position: absolute; left: 820px; top: 210px;">Age</h2>
            <required><input type="number" name="age" id="age"value="age" style="position: absolute; left: 770px; top: 280px;"></required>
            </div> 


             <center><label for="dropdown">Service Availed</label> </center>
    <select id="dropdown" name="service" onchange="handleDropdownChange()">
         <option value="">Select a Service</option>
  <option value="1. Application for Livelihood Project Assistance ">1. Application for Livelihood Project Assistance </option>
  <option value="2. Issuance of Letter of Approval/Disapproval of Construction Safety and Health Program (CSHP) Application">2. Issuance of Letter of Approval/Disapproval of Construction Safety and Health Program (CSHP) Application</option>
  <option value="3. Registration of Workers’ Association">3. Registration of Workers’ Association</option>
  <option value="4. Registration of Establishment under Rule 1020 of the Occupational Safety and Health Standards">4. Registration of Establishment under Rule 1020 of the Occupational Safety and Health Standards</option>
  <option value="5. Registration of Collective Bargaining Agreement ">5. Registration of Collective Bargaining Agreement </option>
  <option value="6. Registration of Contractors">6. Registration of Contractors</option>
  <option value="7. Application for Alien Employment Permit(New/Renewal)">7. Application for Alien Employment Permit(New/Renewal)</option>
  <option value="8. Issuance of Certificate of Exclusion from Alien Employment Permit">8. Issuance of Certificate of Exclusion from Alien Employment Permit</option>
  <option value="9. Application for Working Child Permit ">9. Application for Working Child Permit </option>
  <option value="10. Application for Sugar Workers’ Death Benefit Claim ">10. Application for Sugar Workers’ Death Benefit Claim </option>
  <option value="11. Application for Sugar Workers’ Maternity Benefit Claim">11. Application for Sugar Workers’ Maternity Benefit Claim</option>
  <option value="12. Application for Accreditation of Co-Partner">12. Application for Accreditation of Co-Partner</option>
  <option value="13. Registration of Union ">13. Registration of Union </option>
  <option value="14. Clearing of Technical Plans for Mechanical Equipment and Electrical Installation">14. Clearing of Technical Plans for Mechanical Equipment and Electrical Installation</option>
  <option value="15. Conduct of Technical Safety Inspection for the Issuance of Permit to Operate (PTO) Mechanical Installation/Certificate of Electrical Inspection (CEI)">15. Conduct of Technical Safety Inspection for the Issuance of Permit to Operate (PTO) Mechanical Installation/Certificate of Electrical Inspection (CEI)</option>
  <option value="16. Issuance of Certificate of Appearance for Professional Mechanical Engineer/Professional Electrical Engineer">16. Issuance of Certificate of Appearance for Professional Mechanical Engineer/Professional Electrical Engineer</option>
  <option value="17. Application for Job Fair Clearance">17. Application for Job Fair Clearance</option>
  <option value="18. Application for Job Fair Permit">18. Application for Job Fair Permit</option>
  <option value="19. Application for Authority to Operate Branch Office of a Private Employment Agency">19. Application for Authority to Operate Branch Office of a Private Employment Agency</option>
  <option value="20. Application for Authority to Recruit">20. Application for Authority to Recruit</option>
  <option value="21. Application for License to Operate Private Employment Agency (PEA)">21. Application for License to Operate Private Employment Agency (PEA)</option>
  <option value="22. Issuance of Permit to Operate (PTO) Mechanical Installation/Certificate of Electrical Inspection(CEI)">22. Issuance of Permit to Operate (PTO) Mechanical Installation/Certificate of Electrical Inspection(CEI)</option>
  
        <option value="">Other</option>
    </select>
    
    <div id="otherOptionInput" style="display: none;">
        <label for="otherOption">Enter Service Availed: <required></label>
        <input type="text" name="other_service" id="otherOption">
    </div>

    <script>
        function handleDropdownChange() {
            var dropdown = document.getElementById("dropdown");
            var otherOptionInput = document.getElementById("otherOptionInput");
            var otherOptionInputField = document.getElementById("otherOption");

            if (dropdown.value === "") {
                otherOptionInput.style.display = "block";
                otherOptionInputField.required = true;
            } else {
                otherOptionInput.style.display = "none";
                otherOptionInputField.required = false;
            }
        }
    </script>
    
   <!--  <div id="otherOptionInput" style="display: none;">
        <label for="otherOption">Enter your option:</label>
        <input type="text" id="otherOption" name="service">
    </div>

    <script>
        function handleDropdownChange() {
            var dropdown = document.getElementById("dropdown");
            var otherOptionInput = document.getElementById("otherOptionInput");
            var otherOptionInputField = document.getElementById("otherOption");

            if (dropdown.value === "other") {
                otherOptionInput.style.display = "block";
                otherOptionInputField.required = true;
            } else {
                otherOptionInput.style.display = "none";
                otherOptionInputField.required = false;
            }
        }
    </script>
  </div>
   -->







            <div class="d3">
                CC1.
                Which of the following best describes your awareness of a CC? (Alin sa mga sumusunod ang pinaka naglalarawan ng iyong kamalayan sa CC?)<br>
                <br>
                
                <input type="radio" name="c" value="I_Know_what_a_CC_is_and_I_saw_this_offices_CC" id=""required>I Know what a CC is and I saw this office's CC. (Alam ko ang ibig sabihin ng CC at nakita ko na ito.) <br>
                
                <input type="radio" name="c" value="I_know_what_a_CC_is_but_I_did_NOT_see_this_offices_CC" id="">I know what a CC is but I did NOT see this office's CC. (Alam ko ang ibig sabihin ng CC ngunit hindi  ko pa ito nakita.)<br>
                
                <input type="radio" name="c" value="I_learned_of_the_CC_only_when_I_saw_this_offices_C" id="">I learned of the CC only when I saw this office's CC. (Natutunan ko kung ano ang CC nung nakita ko ito.)<br>
                
                <input type="radio" name="c" value="I_do_not_know_what_a_CC_is_and_I_did_not_see_one_in_this_office_Answer_N/A_on_CC2_and_CC3" id="">I do not know what a CC is and I did not see one in this office. (Answer 'N/A' on CC2 and CC3) (Hindi ko alam kung ano ang CC at hindi ko pa ito nakikita. Lagyan ng 'N/A' ang CC2 at CC3)
            </div>
           <div class="section">
                CC2.
                If aware of CC (answered 1-3 in CC1) would you say that the CC of this office was..? (kung alam mo ang CC (kung ang sagot mo ay nasa 1-3 ng CC1). Masasabi mo ba na ang CC ng opisinang ito ay..?)<br>
                <br>

                <input type="radio" name="cc" value="Easy_to_see"required>Easy to see (Madaling makita)<br>
                <input type="radio" name="cc" value="Somewhat_easy_to_see">Somewhat easy to see (Medyo madaling makita)<br>
                <input type="radio" name="cc" value="Difficult_to_see">Difficult to see (Mahirap makita)<br>
                <input type="radio" name="cc" value="Not_visible_at_all">Not visible at all (Hindi talaga nakikita)<br>
                <input type="radio" name="cc" value="N/A">N/A (Hindi na-aangkop)
            </div>

            <div class="sect2">
                CC3.
                If aware of CC (answered codes 1-3 in CC1), how much did the CC help you in your transaction? (Kung batid mo ang CC (Kung ang sagot mo ay nasa 1-2 ng CC1). Gaano makatulong ang CC sa inyong transaksyon?)<br>
                <br>

                <input type="radio" name="ccc" value="Helped_very_much"required>Helped very much (Nakatulong ng lubusan)<br>
                <input type="radio" name="ccc" value="Somewhat_helped">Somewhat helped (Bahagyang nakatulong)<br>
                <input type="radio" name="ccc" value="Did_not_help">Did not help (Hindi ito nakatulong )<br>
                <input type="radio" name="ccc" value="N/A">N/A (Hindi na-aangkop)

            </div>

            <div class="sqd0">
                SQD0. I am satisfied with the service that I availed (Ako ay kontento sa serbisyo na aking napakinabangan)<br>
                <input type="radio" name="sqd" value="Strongly_Agree" required>Strongly Agree (Lubos na sumasang-ayon)<br>
                <input type="radio" name="sqd" value="Agree">Agree (Sumasang-ayon)<br>
                <input type="radio" name="sqd" value="Disagree">Disagree (Hindi sumasang-ayon)<br>
                <input type="radio" name="sqd" value="Strongly_disagree">Strongly disagree(Lubos na hindi sumasang-ayon)<br>
                <input type="radio" name="sqd" value="Neither_Agree_nor_Disagree">Neither Agree nor Disagree (Sumasang-ayon na hindi rin sumasang-ayon)<br>
                <input type="radio" name="sqd" value="N/A_not_Applicable">N/A not Applicable (Hindi na aangkop)
            </div>

                  <div class="sqd1">
                      SQD1. I spent an acceptable amount of time to complete my transaction (Gumugol ako ng katanggap-tanggap na tagal ng oras upang makumpleto ang aking transaksyon) (Responsiveness)<br>
                            <input type="radio" name="sqd_one" value="Strongly_Agree" required>Strongly Agree (Lubos na sumasang-ayon)<br>
                            <input type="radio" name="sqd_one" value="Agree">Agree (Sumasang-ayon)<br>
                            <input type="radio" name="sqd_one" value="Disagree">Disagree (Hindi sumasang-ayon)<br>
                            <input type="radio" name="sqd_one" value="Strongly_disagree">Strongly disagree(Lubos na hindi sumasang-ayon)<br>
                            <input type="radio" name="sqd_one" value="Neither_Agree_nor_Disagree">Neither Agree nor Disagree (Sumasang-ayon na hindi rin sumasang-ayon)<br>
                            <input type="radio" name="sqd_one" value="N/A_not_Applicable">N/A not Applicable (Hindi na aangkop)
                  </div>

                        <div class="sqd2">
                            SQD2. The office accurately informed and followed the transaction's requirements and steps based on the information provided (Ang opisina ay may wastong kaalaman at sinusunod ang mga kinakailangan at hakbang ng transaksyon) (Reliability)<br>
                                <input type="radio" name="sqd_two" value="Strongly_Agree"required>Strongly Agree (Lubos na sumasang-ayon)<br>
                                <input type="radio" name="sqd_two" value="Agree">Agree (Sumasang-ayon)<br>
                                <input type="radio" name="sqd_two" value="Disagree">Disagree (Hindi sumasang-ayon)<br>
                                <input type="radio" name="sqd_two" value="Strongly_disagree">Strongly disagree(Lubos na hindi sumasang-ayon)<br>
                                <input type="radio" name="sqd_two" value="Neither_Agree_nor_Disagree">Neither Agree nor Disagree (Sumasang-ayon na hindi rin sumasang-ayon)<br>
                                <input type="radio" name="sqd_two" value="N/A_not_Applicable">N/A not Applicable (Hindi na aangkop)
                          </div>

                                <div class="sqd3">
                                  SQD3. The steps (including payment) I needed to do for my transaction were easy and simple. (Kabilang ang mga hakbang at pagbabayad) ay simple at maginhawa)  (Access and  Facilities)<br>
                                   <input type="radio" name="sqd_three" value="Strongly_Agree"required>Strongly Agree (Lubos na sumasang-ayon)<br>
                                <input type="radio" name="sqd_three" value="Agree">Agree (Sumasang-ayon)<br>
                                <input type="radio" name="sqd_three" value="Disagree">Disagree (Hindi sumasang-ayon)<br>
                                <input type="radio" name="sqd_three" value="Strongly_disagree">Strongly disagree(Lubos na hindi sumasang-ayon)<br>
                                <input type="radio" name="sqd_three" value="Neither_Agree_nor_Disagree">Neither Agree nor Disagree (Sumasang-ayon na hindi rin sumasang-ayon)<br>
                                <input type="radio" name="sqd_three" value="N/A_not_Applicable">N/A not Applicable (Hindi na aangkop)
                                </div>

                                      <div class="sqd4">
                                        SQD4. I easily found information about my transaction from the office or its website. (Madali kong nahanap ang impormasyon tungkol sa aking transaksyon mula sa opisina o website nito) (Communication) <br>
                                       <input type="radio" name="sqd_four" value="Strongly_Agree"required>Strongly Agree (Lubos na sumasang-ayon)<br>
                                <input type="radio" name="sqd_four" value="Agree">Agree (Sumasang-ayon)<br>
                                <input type="radio" name="sqd_four" value="Disagree">Disagree (Hindi sumasang-ayon)<br>
                                <input type="radio" name="sqd_four" value="Strongly_disagree">Strongly disagree(Lubos na hindi sumasang-ayon)<br>
                                <input type="radio" name="sqd_four" value="Neither_Agree_nor_Disagree">Neither Agree nor Disagree (Sumasang-ayon na hindi rin sumasang-ayon)<br>
                                <input type="radio" name="sqd_four" value="N/A_not_Applicable">N/A not Applicable (Hindi na aangkop)
                                      </div>

                                            <div class="sqd5">
                                              SQD5. I paid an acceptable amount of fees for my transaction (Nagbayad ako ng katanggap-tanggap na halaga ng mga bayarin para sa transaksyon) (Costs)<br>
                                               <input type="radio" name="sqd_five" value="Strongly_Agree"required>Strongly Agree (Lubos na sumasang-ayon)<br>
                                <input type="radio" name="sqd_five" value="Agree">Agree (Sumasang-ayon)<br>
                                <input type="radio" name="sqd_five" value="Disagree">Disagree (Hindi sumasang-ayon)<br>
                                <input type="radio" name="sqd_five" value="Strongly_disagree">Strongly disagree(Lubos na hindi sumasang-ayon)<br>
                                <input type="radio" name="sqd_five" value="Neither_Agree_nor_Disagree">Neither Agree nor Disagree (Sumasang-ayon na hindi rin sumasang-ayon)<br>
                                <input type="radio" name="sqd_five" value="N/A_not_Applicable">N/A not Applicable (Hindi na aangkop)

                                            </div>

                                                  <div class="sqd6">
                                                    SQD6. I am confident my online transaction was secure (Ako ay tiwala na ang aking online na transaksyon ay naging matiwasay) (Integrity)<br>
                                                   <input type="radio" name="sqd_six" value="Strongly_Agree"required>Strongly Agree (Lubos na sumasang-ayon)<br>
                                <input type="radio" name="sqd_six" value="Agree">Agree (Sumasang-ayon)<br>
                                <input type="radio" name="sqd_six" value="Disagree">Disagree (Hindi sumasang-ayon)<br>
                                <input type="radio" name="sqd_six" value="Strongly_disagree">Strongly disagree(Lubos na hindi sumasang-ayon)<br>
                                <input type="radio" name="sqd_six" value="Neither_Agree_nor_Disagree">Neither Agree nor Disagree (Sumasang-ayon na hindi rin sumasang-ayon)<br>
                                <input type="radio" name="sqd_six" value="N/A_not_Applicable">N/A not Applicable (Hindi na aangkop)
                                                  </div>

                                                         <div class="sqd7">
                                                          SQD7. The office's online support was available, or (if asked questions) online support was quick to respond (Available ang online na suporta ng opisina, o (Kung magtatanong) mabilis na tumugon ang online na suporta) (Assurance)<br>
                                                           <input type="radio" name="sqd_seven" value="Strongly_Agree"required>Strongly Agree (Lubos na sumasang-ayon)<br>
                                <input type="radio" name="sqd_seven" value="Agree">Agree (Sumasang-ayon)<br>
                                <input type="radio" name="sqd_seven" value="Disagree">Disagree (Hindi sumasang-ayon)<br>
                                <input type="radio" name="sqd_seven" value="Strongly_disagree">Strongly disagree(Lubos na hindi sumasang-ayon)<br>
                                <input type="radio" name="sqd_seven" value="Neither_Agree_nor_Disagree">Neither Agree nor Disagree (Sumasang-ayon na hindi rin sumasang-ayon)<br>
                                <input type="radio" name="sqd_seven" value="N/A_not_Applicable">N/A not Applicable (Hindi na aangkop)
                                                        </div>
                                                        
                                                               <div class="sqd8">
                                                                SQD8. I got what I needed from the government office, or (if denied) denial of request was suffciently explained to me. (Nakuha ko ang kailangan ko sa opisina ng gobyerno, o (kung tinanggihan) pagtanggi sa aking kahilingan ay napaliwanag ng husto) (Outcome)<br>
                                                                   <input type="radio" name="sqd_eight" value="Strongly_Agree" required>Strongly Agree (Lubos na sumasang-ayon)<br>
                                <input type="radio" name="sqd_eight" value="Agree">Agree (Sumasang-ayon)<br>
                                <input type="radio" name="sqd_eight" value="Disagree">Disagree (Hindi sumasang-ayon)<br>
                                <input type="radio" name="sqd_eight" value="Strongly_disagree">Strongly disagree(Lubos na hindi sumasang-ayon)<br>
                                <input type="radio" name="sqd_eight" value="Neither_Agree_nor_Disagree">Neither Agree nor Disagree (Sumasang-ayon na hindi rin sumasang-ayon)<br>
                                <input type="radio" name="sqd_eight" value="N/A_not_Applicable">N/A not Applicable (Hindi na aangkop)

                                                              </div>






			<div class="feed"><h2>If you have specific feedback, Please write to us...</h2>
			<textarea placeholder="Your suggeston (optional)" name="suggestion" style="width:400px; height: 100px;" ></textarea>
      <input type="email" placeholder="Your Email (optional)" name="email" style="position:absolute; left: 600px; height: 40px;"> 
			<center><input type="submit" value="SUBMIT FEEDBACK" class="agileinfo" /></center></div>
	  </form>
      
	</div>
	</body>
</html>

