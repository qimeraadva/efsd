



<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>LogOut</title>
	<style>
		h4 {
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    color: black;
    text-decoration: solid;
    display: inline;
    margin: 0 200px;
}
h4 i {
    font-size: 22px;
}
h4 a {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
body {
  background-color: #f8f8f8;
  color: black;
  font-family: Arial, sans-serif;
}

.message {
  width: 80%;
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
  background-color: #ffffff;
  border: 1px solid #cccccc;
  border-radius: 5px;
  box-shadow: 0 0 10px #cccccc;
}

.message h2 {
  font-size: 36px;
  font-weight: bold;
  margin-bottom: 25px;
}

.message p {
  font-size: 18px;
  line-height: 1.5;
  margin-bottom: 10px;
}
footer {
    text-align: center;
}
footer i {
    margin: 0 20px;
    float: right;
}
footer a {
    text-decoration: none;
    list-style-type: none;
    color: black;
}
.message footer a:hover {
  transition: 7s;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
}
h2 {

  float: buttom-right;
}
h3 {
  font-size: 18px;
     text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;
    display: inline;
    text-decoration: solid;
}





    </style>

</head>
<body>

         
         <br>
         <br>
         <div class="message">
            <h2>Welcome to our programming academy <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $user_data['user_name']; ?> </h3> </h2>
            <p>ჩვენ გთავაზობთ კურსების ფართო არჩევანს, რომელიც შექმნილია იმისთვის, რომ დაგეხმაროთ დაეუფლოთ ყველაზე პოპულარულ პროგრამირების ენებს, მათ შორის HTML, CSS, JavaScript, React, Django და Python. ხართ თუ არა დამწყები თუ მოწინავე მოსწავლე, ჩვენ გვაქვს იდეალური კურსი თქვენთვის.</p>
            <p>ჩვენი აკადემია მოიცავს 200-ზე მეტი წევრისგან შემდგარ საზოგადოებას, ყველა გატაცებული პროგრამით და სწავლის სურვილი. ჩვენ ვატარებთ ჩვენს გაკვეთილებს ონლაინ Discord-ის საშუალებით, რაც უზრუნველყოფს მოქნილ და მოსახერხებელ სასწავლო გამოცდილებას, რომელიც ჯდება თქვენს დატვირთულ გრაფიკში.</p>
            <p>ჩვენს ექსპერტ ინსტრუქტორებს აქვთ მრავალწლიანი გამოცდილება თავიანთ სფეროებში და ისინი მზად არიან დაგეხმაროთ თქვენი მიზნების მიღწევაში. ჩვენი ყოვლისმომცველი სასწავლო გეგმით და პრაქტიკული მიდგომით, თქვენ განავითარებთ პრაქტიკულ უნარებს, რომლებიც შეგიძლიათ გამოიყენოთ რეალურ სამყაროში არსებულ პროექტებზე.</p>
            <p>ჩვენს აკადემიაში ჩვენ გვჯერა, რომ სწავლა უნდა იყოს სახალისო, საინტერესო და მომგებიანი. ამიტომ ჩვენ ვცდილობთ შევქმნათ მხარდამჭერი და ინკლუზიური გარემო, რომელიც ხელს უწყობს თანამშრომლობას და შემოქმედებითობას. მიუხედავად იმისა, ახალი კარიერის დაწყებას ცდილობთ ან არსებული უნარების გაუმჯობესებას, ჩვენ აქ ვართ, რათა დაგეხმაროთ წარმატების მიღწევაში.</p>
            <p>შემოუერთდით ჩვენს პროგრამირების აკადემიას დღეს და გადადგით პირველი ნაბიჯი, გახდეთ გამოცდილი პროგრამისტი. ჩვენ მოუთმენლად ველით თქვენს ნახვას ჩვენს ვირტუალურ კლასში! <b>თუ შემოსვლა გსურთ ამ ტექსტის ქვევით მაუსი მიიტანეთ და გაიარეთ რეგისტრაცია</b></p>
            <a>
                <footer>
              
                <a target="_blank" href="https://www.youtube.com/@Goal_Oriented_Academy__GOA/featured"> <i class="fa-brands fa-youtube"></i>
                <a target="_blank" href="https://www.facebook.com/nika11keshelava"> <i class="fa-brands fa-facebook"></i></a>
                <a target="_blank" href="https://www.tiktok.com/@goal_oriented_academy"> <i class="fa-brands fa-tiktok"></i></a>
            </footer>
          </div>
          <br>
<br>
<br>

<br>

<br>
          <footer style="background-color: #444444; color: white; padding: 10px; text-align: center;">
            <p style="font-size: 14px;">© Goal Oriented Academy</p>
          </footer>

          <h3 style="font-family: 'Playfair Display', serif;
           font-weight: 700;
           font-size: 36px;
           letter-spacing: -1px;
           color: #283044;
           text-transform: uppercase;
           text-align: center;
           margin-bottom: 20px;
           list-style-type none;">
  <a href="logout.php">LogOut</a>
</h3>



	<br>
	
</body>
</html>