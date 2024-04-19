<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Honda Cars - Andhra Pradesh & Telangana</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="vL4yI7nXu4jBMuAYfiT-NMjU7XeirxOY6JN3t38PnR0" />
    <link rel="stylesheet" href="webstyles.css">
    <link rel="icon" href="https://hondacarssouth.com/honda-icon.png">
    
    <style>
        
        .hero {
         background-image =url("honda-l.jpg");
            
        }
    </style>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-YTVYGG8W10"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-YTVYGG8W10');
</script>
  </head>
  <body>

 <!--header starts here -->
        <section class="header-main">
            <div class="header-container">
                <!--logo-->
                <div class="logo">
                  <img src="./logo.svg">
                </div>
                <!--menu-->
                <div class="menu"></div>
            </div>
            
        </section>
        <!--header ends here-->
  <section class="hero">
    <div class="hero-container">
       <img src="honda-banner-desk.jpg" class="desktop-banner">
       <img src="honda-banner-mobile.jpg" class="mobile-banner">
       
        <!--form starts here -->
  <div class="contact-form">
          <h2>For Test Driving</h2>
          <form class="" action="contact.php" method="post">
            <input type="text" name="name" value="" placeholder="Enter Name" required class="name-main">
            <input type="tel" name="phone" value="" onkeypress="isInputNumber(event); if(this.value.length==10) return false;" placeholder="Enter Mobile Number" maxlength="10" minlength="10" required>
            <input type="email" name="email" value="" placeholder="Enter Email Id" required>
            <!--<label for=""> Select Car</label><br>-->
            <select class"" name="models">
                 <option value="Selected" selected>Select Model</option>
                 <option value="Honda City">Honda City</option>
                 <option value="Honda Amaze">Honda Amaze</option>
            </select>
            <!--<label for=""> Nearest Dealer Location</label><br>-->
            
            <select class="" name="options" required>
               <option value="Dealerlocation" selected>Nearest Dealer Location</option>
               <option value="Green Honda-Nagole,Hyderabad/Secunderabad">Green Honda - Nagole, Hyderabad</option>
               <option value="Metro Honda-Bowenpally,Hyderabad/Secunderabad">Metro Honda - Bowenpally, Hyderabad</option>
               <option value="Pride Honda-Madhapur,Hyderabad">Pride Honda - Madhapur, Hyderabad</option>
               <option value="Pride Honda-Banjarahills,Hyderabad">Pride Honda - Banjarahills, Hyderabad</option>
               <option value="Pride Honda-Miyapur,Hyderabad">Pride Honda - Miyapur,Hyderabad</option>
               <option value="Sundaram Honda-Ranigunj,Hyderabad">Sundaram Honda- Ranigunj, Hyderabad</option>
               <option value="Green Honda-Warangal">Green Honda- Warangal</option>
               <option value="Green Honda-Karimnagar">Green Honda - Karimnagar</option>
               <option value="Green Honda-Nizamabad">Green Honda - Nizamabad</option>
               <option value="Green Honda-Kammam">Green Honda - Kammam</option>
               <option value="Green Honda-Mahabubnagar">Green Honda - Mahabubnagar</option>
               <option value="Pride Honde-Nalgonda">Pride Honde - Nalgonda</option>
               <option value="Sundaram Honda-Vijaywada">Sundaram Honda - Vijaywada</option>
               <option value="Central Honda-Vizag">Central Honda - Vizag</option>
               <option value="Sundaram Honda-Vizag">Sundaram Honda - Vizag</option>
               <option value="Express Honda-Guntur">Express Honda - Guntur</option>
               <option value="Express Honda-Nellore">Express Honda - Nellore</option>
               <option value="Elite Honda-Rajahmundry">Elite Honda - Rajahmundry</option>
               <option value="Premium Honda-Anantapur">Premium Honda - Anantapur</option>
               <option value="Premium Honda-Kurnool">Premium Honda - Kurnool</option>
               <option value="Express Honda-Ongole">Express Honda - Ongole</option>
               <option value="Sundaram Honda-Eluru">Sundaram Honda - Eluru</option>
               <option value="Elite Honda-Kakinada">Elite Honda - Kakinada</option>
               <option value="Express Honda-Tirupati">Express Honda - Tirupati</option>  
               <option value="Premium Honda-Kadapa">Premium Honda - Kadapa</option>
               <option value="Elite Honda-Bhimavaram">Elite Honda - Bhimavaram</option>
          
            </select>
            <input type="submit" name="submit" value="Submit" class="submit-form-btn">


          </form>

      </div>
  <!--form ends here-->
       <!--container closed here -->
    </div>
  </section>
  
 
  
  <section class="interior interior1">
      <h2> Interiors</h2>
     <div class="interior-container">
         <div class="interior-box"><img src="int1.jpg"></div>
         <div class="interior-box"><img src="int2.jpg"></div>
         <div class="interior-box"><img src="int3.jpg"></div>
         <div class="interior-box"><img src="int4.jpg"></div>
         <div class="interior-box"><img src="int5.jpg"></div>
         <div class="interior-box"><img src="int6.jpg"></div>
     </div>
  </section>
  
  
    <section class="interior">
      <h2> Exteriors</h2>
     <div class="interior-container">
         <div class="interior-box"><img src="ext1.jpg"></div>
         <div class="interior-box"><img src="ext2.jpg"></div>
         <div class="interior-box"><img src="ext3.jpg"></div>
         <div class="interior-box"><img src="ext4.jpg"></div>
         <div class="interior-box"><img src="ext5.jpg"></div>
         <div class="interior-box"><img src="ext6.jpg"></div>
     </div>
  </section>
  
  <script type="text/javascript" src="scripts.js"></script>
  <script>
       function isInputNumber(evt) {
        var ch = String.fromCharCode(evt.which);

        if (!/^[0-9]$/.test(ch)) {
          evt.preventDefault();
        }
      }

  </script>
  </body>
</html>
