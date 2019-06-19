<?php
  session_start();
  include("connection.php");
  error_reporting(0);
  $user_profile = $_SESSION["user_name"];
  if ($user_profile ==true) {
    $Query = "SELECT * FROM student WHERE username = '$user_profile' ";
    $data = mysqli_query($conn, $Query);
    $result = mysqli_fetch_assoc($data);
    echo "Welcome to HomePage <br>". $result['name'];
  }
  else {
    header('location: login.php');
  }
 ?>

<p align="justify">
  <img src="<?php echo $result['picsource']; ?>" alt="USER Profile" width="300px" height="300px" align="left" hspace="20px">
  R é s u m é   of
Al-Amin
16, PC Culture Housing, Road-2
Shekhertek, Mohammadpur, Dhaka, Bangladesh
Mobile: +8801773754462
E-mail : gazialamin96@gmail.com
Github : https://github.com/gazialamin96
Career Objective  :
As a Software Engineering student I’m seeking the opportunity to work in a challenging environment that will encourage me to improve and learn necessary skills as well as be motivated by the company to do my best for the company advancement in the software industry.
 Academic Background :
Bachelor of  Science in Software Engineering
	Institute	:	American International University–Bangladesh.
	Session	:	2015 – Continue (last semester)
	CGPA	:	Appeared
Higher Secondary Certificate
	Institute	:     Dhaka Imperial College.
	Group 	:	Science
	Passing year	:	2014
	Board	:	Dhaka.
	GPA                    :     5.00 (out of 5.00)
Secondary School Certificate
	Institute	:	Pan Para High School and College
	Group	:	Science
	Passing year	:	2012
	GPA	:	 4.81 (out of 5.00)
	Board	:	Comilla.
Key  Qualification :
	Sound Presentation Skill
	Good Communication Skill
	Excellent Team Leader
	Like to Meet and Take Challenges
	Goal Oriented Person
Language Proficiency :
	Have An excellent command over both Bangla and English in speaking, reading, writing & listening

Computer Skills :
Operating  System:      Excellent at Windows (All version)
                                       Good at Linux (Ubuntu)
   Office Suite            :       Microsoft Word, Microsoft Excel, Microsoft Power point
   Others                    :      Superior skill on Internet and web-based information services.

Programming Skills  :
	Java (Superb)
	C# (Good)
	WEB TECHNOLOGIES (Good)
	C++ (Good)
	C (Excellent)
Database:
•	MySQL
Hobby & Interest  :
                                   Public Relation, Programming, Travelling.
Personal Details :
Father’s Name            : Abul Basar

Mother’s Name          : Amena Begum

Permanent Address    :
                                    Village : Das Para[Pas Kuri Bari]
                                     Post Office : Das Para
                                     Ramgonj, Laksmipur.

Date of Birth               : 5th December ,1996

Gender                         : Male

Citizenship                   : Bangladeshi

Religion                       : Islam

Marital status               : Single

Blood Group                : O (+VE)

Height                          : 176.784 cm (5 ‘- 8”)
Marital Status              : Unmarried

National ID Card No.  : 3274883051


Reference  :

	S.M. Abdur Bhuiyan Rouf
Assistant Professor
American International University-Bangladesh
      AIUB Campus, Kuratali, khilkhet
      Email: arouf@aiub.edu
      Cell : +8801720995443




Declaration :

I do hereby declare and certify that all information stated above is true and complete to the best of my knowledge and belief.

                                                                                                                                             Signature

Date : 11th February,2019	           …………………………………………….
</p>


<a href="logout.php">Logout</a>
