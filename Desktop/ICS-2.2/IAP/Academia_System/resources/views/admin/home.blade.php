<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!--  Administrator Functionalities
  1. Register A Student,
  2. Delete A User,
  3. View Users. -->

   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Academia Online - Administrator Homepage</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- owl carousel style -->
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/assets/owl.carousel.min.css" />
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>

<style type="text/css">
        
tbody th {
  background-color: #36c;
  color: #fff;
  text-align: left;
  padding: 25px;
  border: black 2px solid;
}

tbody tr:nth-child(even) th {
  background-color: #25c;
  padding: 25px;
}
    </style>

            <script type="text/javascript">
function printData()
{
   var divToPrint=document.getElementById("printTable");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>

            <script type="text/javascript">
function printData1()
{
   var divToPrint=document.getElementById("printTable1");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>


            <script type="text/javascript">
function printData2()
{
   var divToPrint=document.getElementById("printTable2");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>


            <script type="text/javascript">
function printData3()
{
   var divToPrint=document.getElementById("printTable3");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>

            <script type="text/javascript">
function printData4()
{
   var divToPrint=document.getElementById("printTable4");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>


            <script type="text/javascript">
function printData5()
{
   var divToPrint=document.getElementById("printTable5");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>

            <script type="text/javascript">
function printData6()
{
   var divToPrint=document.getElementById("printTable6");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>

<script type="text/javascript">
  function text(x){
    if(x == 0){
      document.getElementById('course').style.display = 'none';
      document.getElementById('department').style.display = 'none';
      document.getElementById('unit').style.display = 'none';
    }else  if(x == 1){
      document.getElementById('course').style.display = 'none';
      document.getElementById('department').style.display = 'none';
      document.getElementById('unit').style.display = 'none';
    }else  if(x == 2){
      document.getElementById('course').style.display = 'block';
      document.getElementById('department').style.display = 'none';
      document.getElementById('unit').style.display = 'block';
    }else  if(x == 3){
      document.getElementById('course').style.display = 'none';
      document.getElementById('department').style.display = 'block';
      document.getElementById('unit').style.display = 'none';
    }else{
      document.getElementById('course').style.display = 'none';
      document.getElementById('department').style.display = 'none';
      document.getElementById('unit').style.display = 'none';
    }
    }
</script>

   <body>
      <!--header section start -->
      <div class="header_section">
         <div class="container">
            <nav class="navbar navbar-dark bg-dark">
               <a class="logo" href="index.html"><img src="images/logo1.png"></a>
               <div class="search_section">
                  <ul>
                  <x-app-layout></x-app-layout>
                  </ul>
               </div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarsExample01">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#about">About Us</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#data">Database</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#func">Functions</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#reviews">User Reviews</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Us</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
         <!--banner section start -->
         <div class="banner_section layout_padding">
            <div id="my_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="taital_main">
                                 <h4 class="banner_taital"><span class="font_size_90">A</span>cademia</h4>
                                 <p class="banner_text">Consider us as your child's educational partner!</p>
                                 <!-- <div class="book_bt"><a href="#">Get Started</a></div> -->
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div><img src="images/home4.jpg" class="image_1"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
         <!--banner section end -->
      </div>
      <!--header section end -->
      <!--about section start -->
      <div id="about" class="container">
         <div class="category_section_2">
            <div class="row">
               <div class="col-lg-12 col-sm-12">
                  <div class="beds_section active">
                     <h1 class="bed_text">ABOUT US</h1>
                     <br>
                     <div><p>Welcome to Academia where we provide a high-quality education to students of all ages. Established in 2020, we have a long history of academic excellence and a strong commitment to shaping the next generation of leaders.
                        <br>
                     At Academia, we believe in fostering a love of learning in our students through a well-rounded curriculum that includes core subjects such as math, science, and language arts, as well as electives in the arts, athletics, and technology. We have dedicated and highly qualified teachers who are passionate about their subjects and committed to helping their students succeed.
                        <br>
                     In addition to our excellent academic program, we also place a strong emphasis on character education, helping our students develop important values such as responsibility, respect, and kindness. Our extracurricular activities and community service programs further provide opportunities for students to develop their skills and interests outside of the classroom.
                        <br>
                     We believe that education is not just about memorizing facts, but about developing critical thinking skills, fostering creativity, and building self-confidence. That's why we create an environment that promotes individual development and encourages students to take risks and strive for their personal best.
                        <br>
                     We welcome you to visit our campus and see firsthand the amazing things happening at Academia. Thank you for considering us as your child's educational partner.</p></div>
                  </div>
               </div>
         </div>
      </div>
   </div>
      <!-- about section end -->
      <!-- database section start -->
      <div id="data" class="product_section layout_padding">
         <div class="container">
            <h1 class="feature_taital">DATABASE</h1>
            <div class="product_section_2">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="feature_box">
                        <h1 class="readable_text">Administrators</h1>
                        <div>
                <table id="printTable">
                <tr style="text-align: left;
                  padding: 8px;">
                <th style="text-align: left;
                  padding: 8px;">User ID</th>
                <th style="text-align: left;
                  padding: 8px;">Fullname</th>
                <th style="text-align: left;
                  padding: 8px;">Email Address</th>
                <th style="text-align: left;
                  padding: 8px;">Phone Number</th>
                <th style="text-align: left;
                  padding: 8px;">Created At</th>
                <th style="text-align: left;
                  padding: 8px;">Updated At</th>
                  <th style="text-align: left; padding: 8px;"></th>
                </tr>

                @foreach($administrator_store as $administrators)

                <tr style="text-align: left;
                  padding: 8px;">
                <td style="text-align: left;
                  padding: 8px;">{{$administrators->id}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$administrators->name}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$administrators->email}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$administrators->phone_number}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$administrators->created_at}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$administrators->updated_at}}</td>
                <td style="text-align: left;
                  padding: 8px;"><a href="{{ url('delete_user',$administrators->id) }}" class="btn btn-primary px-4 mx-auto mb-4" onclick="return confirm('Are You Sure You Want To Delete This User ?')">Delete Administrators</a></td>
                </tr>

                @endforeach

                </table>
                <br>
                 <a onclick="printData();" class="btn btn-primary px-4 mx-auto mb-4">Print Administrators</a>
                        </div>
                     </div>
                  </div>
                  <br>
                  <br>
                                    <div class="col-sm-12">
                     <div class="feature_box">
                        <h1 class="readable_text">Students</h1>
                        <div>
                <table id="printTable1">
                <tr style="text-align: left;
                  padding: 8px;">
                <th style="text-align: left;
                  padding: 8px;">User ID</th>
                <th style="text-align: left;
                  padding: 8px;">Fullname</th>
                <th style="text-align: left;
                  padding: 8px;">Email Address</th>
                <th style="text-align: left;
                  padding: 8px;">Phone Number</th>
                <th style="text-align: left;
                  padding: 8px;">Course</th> 
                <th style="text-align: left;
                  padding: 8px;">Created At</th>
                <th style="text-align: left;
                  padding: 8px;">Updated At</th>
                <th style="text-align: left;
                  padding: 8px;">Profile Picture</th>
                  <th style="text-align: left; padding: 8px;"></th>
                </tr>

                @foreach($student_store as $students)
                <tr style="text-align: left;
                  padding: 8px;">
                <td style="text-align: left;
                  padding: 8px;">{{$students->id}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$students->name}}</td>
                <td style="text-align: left;
                  padding: 8px;"><a href='mailto:{{$students->email}}'>{{$students->email}}</a></td>
                <td style="text-align: left;
                  padding: 8px;">{{$students->phone_number}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$students->course}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$students->created_at}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$students->updated_at}}</td>
                <td style="text-align: left;
                  padding: 8px;"><img src="images/{{$students->profile_photo_path}}" title="{{$students->profile_photo_path}}" width = '150px'></td>
                <td style="text-align: left;
                  padding: 8px;"><a href="{{ url('delete_user',$students->id) }}" class="btn btn-primary px-4 mx-auto mb-4" onclick="return confirm('Are You Sure You Want To Delete This User ?')">Delete Students</a></td>
                </tr>

                @endforeach

                </table>
                <br>
                 <a onclick="printData1();" class="btn btn-primary px-4 mx-auto mb-4">Print Students</a>
                        </div>
                     </div>
                  </div>
                  <br>
                  <br>
                     <div class="col-sm-12">
                     <div class="feature_box">
                        <h1 class="readable_text">Lecturers</h1>
                        <div>
 <table id="printTable2">
                <tr style="text-align: left;
                  padding: 8px;">
                <th style="text-align: left;
                  padding: 8px;">User ID</th>
                <th style="text-align: left;
                  padding: 8px;">Fullname</th>
                <th style="text-align: left;
                  padding: 8px;">Email Address</th>
                <th style="text-align: left;
                  padding: 8px;">Phone Number</th>
                <th style="text-align: left;
                  padding: 8px;">Course</th>
                <th style="text-align: left;
                  padding: 8px;">Unit</th>
                <th style="text-align: left;
                  padding: 8px;">Created At</th>
                <th style="text-align: left;
                  padding: 8px;">Updated At</th>
                <th style="text-align: left;
                  padding: 8px;">Profile Picture</th>
                  <th style="text-align: left; padding: 8px;"></th>
                </tr>

                @foreach($lecturer_store as $lecturers)

                <tr style="text-align: left;
                  padding: 8px;">
                <td style="text-align: left;
                  padding: 8px;">{{$lecturers->id}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$lecturers->name}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$lecturers->email}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$lecturers->phone_number}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$lecturers->course}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$lecturers->unit}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$lecturers->created_at}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$lecturers->updated_at}}</td>
                <td style="text-align: left;
                  padding: 8px;"><img src="images/{{$lecturers->profile_photo_path}}" title="{{$lecturers->profile_photo_path}}" width = '150px'></td>
                <td style="text-align: left;
                  padding: 8px;"><a href="{{ url('delete_user',$lecturers->id) }}" class="btn btn-primary px-4 mx-auto mb-4" onclick="return confirm('Are You Sure You Want To Delete This User ?')">Delete Lecturers</a></td>
                </tr>

                @endforeach

                </table>
                <br>
                <a onclick="printData2();" class="btn btn-primary px-4 mx-auto mb-4">Print Lecturers</a>
                        </div>
                     </div>
                  </div>
                  <br>
                  <br>
                                    <div class="col-sm-12">
                     <div class="feature_box">
                        <h1 class="readable_text">Staff</h1>
                        <div>
                 <table id="printTable3">
                <tr style="text-align: left;
                  padding: 8px;">
                <th style="text-align: left;
                  padding: 8px;">User ID</th>
                <th style="text-align: left;
                  padding: 8px;">Fullname</th>
                <th style="text-align: left;
                  padding: 8px;">Email Address</th>
                <th style="text-align: left;
                  padding: 8px;">Phone Number</th>
                <th style="text-align: left;
                  padding: 8px;">Department</th>
                <th style="text-align: left;
                  padding: 8px;">Created At</th>
                <th style="text-align: left;
                  padding: 8px;">Updated At</th>
                <th style="text-align: left;
                  padding: 8px;">Profile Picture</th>
                  <th style="text-align: left; padding: 8px;"></th>
                </tr>

                @foreach($staff_store as $staffs)

                <tr style="text-align: left;
                  padding: 8px;">
                <td style="text-align: left;
                  padding: 8px;">{{$staffs->id}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$staffs->name}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$staffs->email}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$staffs->phone_number}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$staffs->department}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$staffs->created_at}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$staffs->updated_at}}</td>
                <td style="text-align: left;
                  padding: 8px;"><img src="images/{{$staffs->profile_photo_path}}" title="{{$staffs->profile_photo_path}}" width = '150px'></td>
                <td style="text-align: left;
                  padding: 8px;"><a href="{{ url('delete_user',$staffs->id) }}" class="btn btn-primary px-4 mx-auto mb-4" onclick="return confirm('Are You Sure You Want To Delete This User ?')">Delete Staff</a></td>
                </tr>

                @endforeach

                </table>
                <br>
                 <a onclick="printData3();" class="btn btn-primary px-4 mx-auto mb-4">Print Messages</a>
                        </div>
                     </div>
                  </div>
                  <br>
                  <br>
                                    <div class="col-sm-12">
                     <div class="feature_box">
                        <h1 class="readable_text">Courses</h1>
                        <div>
                <table id="printTable4">
                <tr style="text-align: left;
                  padding: 8px;">
                <th style="text-align: left;
                  padding: 8px;">Course ID</th>
                <th style="text-align: left;
                  padding: 8px;">Name</th>
                <th style="text-align: left;
                  padding: 8px;">Course Code</th>
                <th style="text-align: left;
                  padding: 8px;">Year</th>
                   <th style="text-align: left;
                  padding: 8px;">Status</th>
                <th style="text-align: left;
                  padding: 8px;">Created At</th>
                  <th style="text-align: left;
                  padding: 8px;">Updated At</th>
                  <th style="text-align: left; padding: 8px;"></th>
                </tr>

                @foreach($course_store as $courses)

                <tr style="text-align: left;
                  padding: 8px;">
                <td style="text-align: left;
                  padding: 8px;">{{$courses->id}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$courses->name}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$courses->code}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$courses->year}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$courses->status}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$courses->created_at}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$courses->updated_at}}</td>
                <td style="text-align: left;
                  padding: 8px;"><a href="{{ url('delete_course',$courses->id) }}" class="btn btn-primary px-4 mx-auto mb-4" onclick="return confirm('Are You Sure You Want To Delete This Course ?')">Delete Course</a></td>
                </tr>

                @endforeach

                </table>
                <br>
                <a onclick="printData4();" class="btn btn-primary px-4 mx-auto mb-4">Print Courses</a>
                        </div>
                     </div>
                  </div>
                  <br>
                  <br>
                     <div class="col-sm-12">
                     <div class="feature_box">
                        <h1 class="readable_text">Graduations</h1>
                        <div>
                 <table id="printTable5">
                <tr style="text-align: left;
                  padding: 8px;">
                <th style="text-align: left;
                  padding: 8px;">Graduation ID</th>
                <th style="text-align: left;
                  padding: 8px;">Course</th>
                <th style="text-align: left;
                  padding: 8px;">Student ID</th>
                <th style="text-align: left;
                  padding: 8px;">Status </th>
                <th style="text-align: left;
                  padding: 8px;">Created At</th>
                  <th style="text-align: left;
                  padding: 8px;">Updated At</th>
                  <th style="text-align: left;
                  padding: 8px;"></th>
                  <th style="text-align: left;
                  padding: 8px;"></th>
                </tr>

                @foreach($graduation_store as $graduations)

                <tr style="text-align: left;
                  padding: 8px;">
                <td style="text-align: left;
                  padding: 8px;">{{$graduations->id}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$graduations->course}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$graduations->student}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$graduations->status}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$graduations->created_at}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$graduations->updated_at}}</td>
                <td style="text-align: left;
                  padding: 8px;"><a href="{{ url('delete_graduation',$graduations->id) }}" class="btn btn-primary px-4 mx-auto mb-4" onclick="return confirm('Are You Sure You Want To Delete This Graduation ?')">Delete Graduation</a></td>
                <td style="text-align: left;
                  padding: 8px;"><a href="{{ url('update_graduation',$graduations->id) }}" class="btn btn-primary px-4 mx-auto mb-4" onclick="return confirm('Are You Sure You Want To Update This Graduation ?')">Update Graduation</a></td>
                </tr>

                @endforeach

                </table>
                <br>
                <a onclick="printData5();" class="btn btn-primary px-4 mx-auto mb-4">Print Graduations</a>
                        </div>
                     </div>
                  </div>
                                    <br>
                  <br>
                     <div class="col-sm-12">
                     <div class="feature_box">
                        <h1 class="readable_text">Timetable</h1>
                        <div>
               <table id="printTable6">
                <tr style="text-align: left;
                  padding: 8px;">
                <th style="text-align: left;
                  padding: 8px;">Timetable ID</th>
                <th style="text-align: left;
                  padding: 8px;">Course</th>
                <th style="text-align: left;
                  padding: 8px;">Lecturer</th>
                <th style="text-align: left;
                  padding: 8px;">Unit</th>
                   <th style="text-align: left;
                  padding: 8px;">Day</th>
                   <th style="text-align: left;
                  padding: 8px;">Finish Time</th>
                  <th style="text-align: left;
                  padding: 8px;">Start Time</th>
                <th style="text-align: left;
                  padding: 8px;">Created At</th>
                  <th style="text-align: left;
                  padding: 8px;">Updated At</th>
                </tr>

                @foreach($timetable_store as $timetables)

                <tr style="text-align: left;
                  padding: 8px;">
                <td style="text-align: left;
                  padding: 8px;">{{$timetables->id}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$timetables->course}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$timetables->lecturer}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$timetables->unit}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$timetables->day}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$timetables->start_time}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$timetables->finish_time}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$timetables->created_at}}</td>
                <td style="text-align: left;
                  padding: 8px;">{{$timetables->updated_at}}</td>
                <td style="text-align: left;
                  padding: 8px;"><a href="{{ url('delete_timetable',$timetables->id) }}" class="btn btn-primary px-4 mx-auto mb-4" onclick="return confirm('Are You Sure You Want To Delete This Timetable ?')">Delete Timetable</a></td>
                </tr>

                @endforeach
                
                </table>
                <br>
                 <a onclick="printData6();" class="btn btn-primary px-4 mx-auto mb-4">Print Timetable</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- database section end -->
      <!-- reviews section start -->
      <div id="reviews" class="client_section layout_padding">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="feature_taital">User Review</h1>
                     <div class="client_section_2">
                        <div class="image_9"><img src="images/img-9.png"></div>
                        <h3 class="nolmal_text">John Allan</h3>
                        <p class="ipsum_text">I've been using the Academia School Management System for the past year and it has greatly improved the efficiency and effectiveness of our school's operations.
                           <br>
                        The system has a variety of modules that automate critical processes such as student registration, enrollment, and scheduling. It also includes features for handling grades, transcripts, and reports, as well as tools for communication and collaboration among faculty, staff, and students. One of the major advantages of this system is its ability to easily track and manage student information, including demographic data, grades, and attendance records.
                           <br>
                        Overall, I highly recommend the Academia to other educational institutions looking to improve their operations and student outcomes. It has been a valuable asset to our school and saved us a lot of time and effort.</p>
                        <div class="image_9"><img src="images/icon-10.png"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- reviews section end -->
      <!-- actions section start -->
      <div id="func" class="newsletter_section layout_padding">
         <div class="container">
            <h1 class="newsletter_taital">FUNCTIONS</h1>
            <br>
                    <div class="col-md-6">
                     <div class="email_text">
                                  <h6 class="conect_text">Register a User</h6>
 <form action="{{ url('add_user') }}" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <input type="text" class="email-bt" placeholder="Fullname" required="required" name="name" id="name"/>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="email-bt" placeholder="Email Address" required="required" name="email" id="email"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="email-bt" placeholder="Phone Number" required="required" name="phone_number" id="phone_number"/>
                                </div>
                                <div class="form-group">
                                  <label class="email-bt">Profile Picture</label>
                                    <input type="file" class="email-bt" required="required" name="image" id = "image" value="" accept=".jpg, .jpeg, .png"/>
                                </div>
                                <div class="form-group">
                                  <label class="email-bt">Select A User Type</label>
                                  <br>
                                  <input id="user_type" type="radio" name="user_type" class="" value="0" onclick="text(0)"/>Student
                                  <br>
                                  <input id="user_type" type="radio" name="user_type" class="" value="1" onclick="text(1)"/>Administrator
                                  <br>
                                  <input id="user_type" type="radio" name="user_type" :value="old('user_type')" class="" value="2" onclick="text(2)"/>Lecturer
                                  <br>
                                  <input id="user_type" type="radio" name="user_type" class="" value="3" onclick="text(3)"/>Staff
                                  <br>
                                </div>
                                <div class="form-group">
                                    <input style="display: none;" type="text" class="email-bt" placeholder="Unit" name="unit" id="unit"/>
                                </div>
                                <div class="form-group">
                                    <select class="custom-select border-0 px-4" style="display: none; height: 47px;" id="department" name="department">
                                    <option value="" selected disabled>Select Department</option>
                                    <option value="Finance">Finance</option>
                                    <option value="IT">IT</option>
                                    <option value="Lab Technician">Lab Technician</option>
                                    <option value="Cleaning Staff">Cleaning Staff</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="custom-select border-0 px-4" style="display: none; height: 47px;" id="course" name="course">
                                     <option value="" selected disabled>Select A Course</option>
                                     <?php
                       
                                      // Connect to database
                                      $con = mysqli_connect("localhost","root","","intergrated_school_system");
                                       
                                      // mysqli_connect("servername","username","password","database_name")
                                    
                                      // Get all the courses from category table
                                      $sql = "SELECT * FROM `courses`";
                                      $all_categories = mysqli_query($con,$sql);
                                      // use a while loop to fetch data
                                      // from the $all_categories variable
                                      // and individually display as an option
                                      while ($category = mysqli_fetch_array(
                                              $all_categories,MYSQLI_ASSOC)):;
                                  ?>
                                      <option value="<?php echo $category["name"];?>">
                                          <?php echo $category["name"];
                                              // To show the course name to the user
                                          ?>
                                      </option>
                                  <?php
                                      endwhile;
                                      // While loop must be terminated
                                  ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="email-bt" placeholder="Password" required="required" name="password" id="password"/>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="email-bt" required="required" name="password_confirmation" id = "password_confirmation" placeholder="Confirm Password"/>
                                </div>
                                <div>
                                    <button class="send_btn" type="submit">Register</button>
                                </div>
                            </form>
                         </div>
                  </div>
                  <br>
                  <br>
                                     <div class="col-md-6">
                                    <div class="email_text">
                                                  <h6 class="conect_text">Add a Course</h6>
                            <form action="{{ url('add_course') }}" method="post" enctype="multipart/form-data">
                      @csrf
                                <div class="form-group">
                                    <input type="text" class="email-bt" placeholder="Name" required="required" name="name" id="name"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="email-bt" placeholder="Code" required="required" name="code" id="code"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="email-bt" placeholder="Year" required="required" name="year" id="year"/>
                                </div>
                                <div class="form-group">
                                    <select class="custom-select border-0 px-4" style="height: 47px;" id="status" name="status" required>
                                    <option value="" selected disabled>Select Status</option>
                                    <option value="Active">Active</option>
                                    <option value="Pending">Pending</option>
                                    </select>
                                </div>
                                <div>
                                    <button class="send_btn" type="submit">Add</button>
                                </div>
                            </form>
                         </div>
                  </div>
                                     <div class="col-md-6">
                                    <div class="email_text">
                                  <h6 class="conect_text">Add a Timetable</h6>
                            <form action="{{ url('add_timetable') }}" method="post" enctype="multipart/form-data">
                      @csrf
                                                      <div class="form-group">
                                    <select class="custom-select border-0 px-4" style="height: 47px;" id="course" name="course" required>
                                     <option value="" selected disabled>Select A Course</option>
                                     <?php
                       
                                      // Connect to database
                                      $con = mysqli_connect("localhost","root","","intergrated_school_system");
                                       
                                      // mysqli_connect("servername","username","password","database_name")
                                    
                                      // Get all the courses from category table
                                      $sql = "SELECT * FROM `courses`";
                                      $all_categories = mysqli_query($con,$sql);
                                      // use a while loop to fetch data
                                      // from the $all_categories variable
                                      // and individually display as an option
                                      while ($category = mysqli_fetch_array(
                                              $all_categories,MYSQLI_ASSOC)):;
                                  ?>
                                      <option value="<?php echo $category["name"];?>">
                                          <?php echo $category["name"];
                                              // To show the course name to the user
                                          ?>
                                      </option>
                                  <?php
                                      endwhile;
                                      // While loop must be terminated
                                  ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="custom-select border-0 px-4" style="height: 47px;" id="lec" name="lec" required>
                                     <option value="" selected disabled>Select A Lecturer</option>
                                      <?php
 
                // Connect to database
                $con = mysqli_connect("localhost","root","","intergrated_school_system");
                 
                // mysqli_connect("servername","username","password","database_name")
              
                // Get all the courses from category table
                $sql = "SELECT * FROM `users` WHERE `user_type` = '2'";
                $all_categories = mysqli_query($con,$sql);
                // use a while loop to fetch data
                // from the $all_categories variable
                // and individually display as an option
                while ($category = mysqli_fetch_array(
                        $all_categories,MYSQLI_ASSOC)):;
            ?>
                <option value="<?php echo $category["name"];?>">
                    <?php echo $category["name"];
                        // To show the course name to the user
                    ?>
                </option>
            <?php
                endwhile;
                // While loop must be terminated
            ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="email-bt" placeholder="Unit" required="required" name="unit" id="unit"/>
                                </div>
                                <div class="form-group">
                                    <select class="custom-select border-0 px-4" style="height: 47px;" id="day" name="day" required>
                    <option value="" selected disabled>Select Day</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                    <option value="Saturday">Saturday</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                  <label class="email-bt">Start Time</label>
                                    <input type="time" class="email-bt" required="required" name="start_time" id="start_time"/>
                                </div>
                                <div class="form-group">
                                  <label class="email-bt">Finish Time</label>
                                    <input type="time" class="email-bt" required="required" name="finish_time" id="finish_time"/>
                                </div>
                                <div>
                                    <button class="send_btn" type="submit">Add</button>
                                </div>
                            </form>
                  </div>
               </div>
                  <br>
                  <br>
            </div>
         </div>
      <!-- actions section end -->
      <!-- footer section start -->
      <div id="contact" class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-sm-12">
                  <h4 class="information_text">Welcome!</h4>
                  <p class="dummy_text">We welcome you to visit our campus and see firsthand the amazing things happening at Academia. Thank you for considering us as your child's educational partner.</p>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <div class="information_main">
                     <h4 class="information_text">Useful Links</h4>
                     <p>
                        <a class="many_text" href="#about">About,</a>
                        <a class="many_text" href="#data">Database,</a>
                        <a class="many_text" href="#func">Function,</a>
                        <a class="many_text" href="#reviews">Review,</a>
                        <a class="many_text" href="#contact">Contact.</a>
                     </p>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <div class="information_main">
                     <h4 class="information_text">Contact Us</h4>
                     <p class="call_text"><a href="#">+254 727 295997</a></p>
                     <p class="call_text"><a href="#">academia@gmail.com</a></p>
                     <div class="social_icon">
                        <ul>
                           <li><a href="#"><img src="images/fb-icon.png"></a></li>
                           <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                           <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
                           <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright_section">
               <h1 class="copyright_text">
               Copyright 2020 All Right Reserved</a>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script> 
      <script type="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2//2.0.0-beta.2.4/owl.carousel.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
      <script src="../../assets/js/vendor/popper.min.js"></script>
      <script src="../../dist/js/bootstrap.min.js"></script>
   </body>
</html>