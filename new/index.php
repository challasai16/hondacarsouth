<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="vL4yI7nXu4jBMuAYfiT-NMjU7XeirxOY6JN3t38PnR0" />
    <link rel="icon" href="https://hondacarssouth.com/honda-icon.png">
    <link rel="stylesheet" href="webstyles.css">
        <!--aos animation-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    
    <style>
        
        .hero {
         background-image: url("sky.webp");
        }
         
          /* drive test */
    .test .container {
        display: flex;
        flex-wrap: wrap;
        margin: 0 auto;
        width: 85%;
        margin-top: 100px;
        margin-bottom: 100px;
    }

    .test .inner-box {
        flex: 1 1 auto;
        max-width: 24%;      
        border-radius: 0.5rem;
        box-shadow: 1px 0rem 0.6rem 0 hsl(0deg 0% 77%);
        background-color: hsla(0, 0%, 100%, .5);
        padding: 1.7rem 1.4rem 2.2rem 2.2rem;
        /* height: 27.2rem; */
        /* width: 25.8rem; */
        bottom: 0;
        /* transition-duration: .5s; */
        left: 50%;
        /* transform: translateX(-50%); */
        overflow: hidden;
        margin-right: 7px;
        transition: all 1.2s ease;
    }

    .inner-box:hover {
        transform: translateY(-15px);
    }

    .image img {
        width: 50%;
    }

    button {
        padding: 5px 25px;
        margin-top: 15px;
        border-radius: 10px;
        background: red;
        color: white;
        font-size: 15px;
        border: red;
        font-family: 'Poppins';
        font-weight: 600;
        transition: all 1.2s ease;
    }

    button:hover {
        transform: scale(1.2);
    }
        .btn button {
    cursor: pointer;
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

<!--header-->
<div class="sticky-header">
<div class="main-header">
    <div class="header">
        <!--left-->
        <div class="left">
            <img src="logo-honda.webp">
        </div>
        
        <!--right-->
        <div class="right">
            <ul>
                <li><a href="#">Test Form</a></li>
            </ul>
        </div>
    </div>
</div>
</div>
<!--header end-->

  <section class="hero">
    <div class="hero-container">

      <div class="contact-form" id="tes-form">
          <h2>For Test Driving</h2>
          <form class="" action="contact.php" method="post">
            <input type="text" name="name" value="" placeholder="Enter Name" required class="name-main">
            <input type="tel" name="phone" value="" placeholder="Enter Mobile Number" maxlength="10" minlength="10" required>
            <input type="email" name="email" value="" placeholder="Enter Email Id" required>
            <!--<label for=""> Select Car</label><br>-->
            <select class"" name="models">
                 <option value="Selected" selected>Select Model</option>
                 <option value="Jazz">Honda City</option>
                 <option value="Amaze">Honda Amaze</option>
            </select>
            <!--states-->
              <select class"" name="state" id="models">
                 <option value="Selected" selected>Select State</option>
                 <option value="Telangana">Telangana</option>
                 <option value="Andhra Pradesh">Andhra Pradesh</option>
                 <option value="Kerala">Kerala</option>
                 
            </select>
            <select id="kerala" class="dealer-select" name="options_kerala" required>
               <option value="Dealerlocation" selected>Nearest Dealer Location</option>
               <option value="Mountroad">Peninsular Honda - Ernakulam, Cochin</option>
               <option value="Nandanam">Peninsular Honda - Thodupuzha</option>
               <option value="Ambattur">Peninsular Honda - Trivandrum</option>
               <option value="Annanagar">Peninsular Honda - Attingal</option>
               <option value="Tiruvallur">Vision Honda - Kottayam</option>
               <option value="omrChennai">Vision Honda - Pathanamthitta</option>
               <option value="gstChennai">Signature Honda - Kannur</option>
               <option value="velacheryChennai">Signature Honda - Kannur</option>
               <option value="porurChennai">Vision Honda - Thrissur</option>
               <option value="vadapalaniChennai">Muthoot Honda - Kollam, Kadapakkada</option>
               <option value="Vellore">Muthoot Honda - Kollam, Kottarakkara</option>
               <option value="balajiKanchipuram">Muthoot Honda - Kollam, Karunagappally</option>
               <option value="urapakkamKancheepuram">Muthoot Honda - Kollam, Nilamel</option>
               <option value="avinashiCoimbatore">Apco Honda - Kozhikode</option>
               <option value="pollachiCoimbatore">Apco Honda - Vadakara</option>
               <option value="mettupalayamCoimbatore">Vision Honda - Pathanamthitta</option>
               <option value="Cuddalore">Signature Honda - Kasaragod</option>
               <option value="Erode">Apco Honda - Malappuram, Perinthalmanna</option>
               <option value="Madurai">Apco Honda - Tirur</option>
               <option value="Nagercoil">Apco Honda - Malappuram, Melmuri</option>
               <option value="Tuticorin">Vision Honda - Calicut</option>
               <option value="Tirunelveli">Vision Honda - Wayanad</option>
               <option value="Pondicherry">Peninsular Honda - Alappuzha</option>
               <option value="Salem">Vision Honda - Muvattupuzha</option>
               <option value="Hosur">Vision Honda - Cochin, Palarivattom</option>
               <option value="Thanjavur">Palace Honda - Mavelikara</option>
               <option value="Trichy">Palace Honda - Keerikadu</option>
               <option value="Karur">Premier Honda - Kottayam</option>
               <option value="Tirupur">Premier Honda - Kottayam</option>
               <option value="Pudukotai">Johns Honda - Thrissur</option>
               <option value="Kumbakonam">Indel Honda - Palakad</option>
                <option value="Tirupur">Muthoot Honda - Thiruvananthapuram</option>
               <option value="Pudukotai">Vision Honda - Cochin</option>
               
            </select>
            
            
         
           <!--Andhra Pradesh-->
           <select id="andhra" class="dealer-select" name="options_andhra" style="display:none" required>
               <option value="Dealerlocation" selected>Nearest Dealer Location</option>
               <option value="Nellore">Express Honda - Nellore</option>
               <option value="Tirupati">Express Honda - Tirupati</option>
               <option value="Guntur">Express Honda - Guntur</option>
               <option value="Ongole">Express Honda - Ongole</option>
               <option value="Visakhapatnam">Central Honda - Visakhapatnam</option>
               <option value="Rajamahendravaram">Elite Honda -  Rajamahendravaram</option>
               <option value="Kakinada">Elite Honda - Kakinada</option>
               <option value="Bhimavaram">Elite Honda - Bhimavaram</option>
               <option value="Visakhapatnam">Sundaram Honda - Visakhapatnam</option>
               <option value="Vijayawada">Sundaram Honda - Vijayawada</option>
               <option value="Eluru">Sundaram Honda - Eluru</option>
               <option value="Anantapur">Premium Honda - Anantapur</option>
               <option value="Kurnool">Premium Honda - Kurnool</option>
               <option value="Kadapa">Premium Honda - Kadapa</option>
               
            </select>
            
            <!--Telangana-->
             <select id="telangana" class="dealer-select" name="options_telangana" style="display:none" required>
               <option value="Dealerlocation" selected>Nearest Dealer Location</option>
               <option value="Mountroad">Pride Honda - Miyapur, Hyderabad</option>
               <option value="Nandanam">Metro Honda - Secunderabad</option>
               <option value="Ambattur">Green Honda - Hyderabad</option>
               <option value="Annanagar">Green Honda - Mabubnagar</option>
               <option value="Tiruvallur">Green Honda - Warangal</option>
               <option value="omrChennai">Green Honda - Khammam</option>
               <option value="gstChennai">Green Honda - Karimnagar</option>
               <option value="velacheryChennai">Sundaram Honda - Secunderabad</option>
               <option value="porurChennai">Pride Honda - Madhapur, Hyderabad</option>
               <option value="vadapalaniChennai">Pride Honda - Banjara Hills, Hyderabad</option>
            </select>
           
            <input type="submit" name="submit" value="Submit" class="submit-form-btn">


          </form>

      </div>
    </div>
  </section>
  
  <!--testdrive-->
  
  <div class="test">
        <div class="container">
            <!-- 1 -->
            <div class="inner-box">
                <div class="image">
                    <img src="honda-new-elevateV2_new.webp">
                </div>
                <div class="text">
                    <h2>
                        <span>All-New Elevate</span>
                    </h2>
                    <p>Starts from ₹ 11 57 900<sup>*</sup></p>
                </div>
                <div class="btn">
                    <a href="#tes-form">
                        <button>Book test drive</button>
                    </a>
                </div>
            </div>
            <!-- 2 -->
            <div class="inner-box">
                <div class="image">
                    <img src="City-Desktop.webp">
                </div>
                <div class="text">
                    <h2>
                        <span>City - 5th Gen</span>
                    </h2>
                    <p>Starts from ₹ 11 70 900<sup>*</sup></p>
                </div>
                <div class="btn">
                    <a href="#tes-form">
                        <button>Book test drive</button>
                    </a>
                </div>
            </div>

            <!-- 3 -->
            <div class="inner-box">
                <div class="image">
                    <img src="eHEV-Desktop.webp">
                </div>
                <div class="text">
                    <h2>
                        <span>City e:HEV</span>
                    </h2>
                    <p>Starts from ₹ 18 89 000<sup>*</sup></p>
                </div>
                <div class="btn">
                    <a href="#tes-form">
                        <button>Book test drive</button>
                    </a>
                </div>
            </div>
            <!-- 4 -->
            <div class="inner-box">
                <div class="image">
                    <img src="Amaze.webp">
                </div>
                <div class="text">
                    <h2>
                        <span>Amaze</span>
                    </h2>
                    <p>Starts from ₹ 7 15 900<sup>*</sup></p>
                </div>
                <div class="btn">
                    <a href="#tes-form">
                        <button>Book test drive</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- testdrive end -->
  
  <!--<section class="interior interior1">-->
  <!--    <h2> Interiors</h2>-->
  <!--   <div class="interior-container">-->
  <!--       <div class="interior-box"><img src="int1.jpg"></div>-->
  <!--       <div class="interior-box"><img src="int2.jpg"></div>-->
  <!--       <div class="interior-box"><img src="int3.jpg"></div>-->
  <!--       <div class="interior-box"><img src="int4.jpg"></div>-->
  <!--       <div class="interior-box"><img src="int5.jpg"></div>-->
  <!--       <div class="interior-box"><img src="int6.jpg"></div>-->
  <!--   </div>-->
  <!--</section>-->
  
  
  <!--  <section class="interior">-->
  <!--    <h2> Exteriors</h2>-->
  <!--   <div class="interior-container">-->
  <!--       <div class="interior-box"><img src="ext1.jpg"></div>-->
  <!--       <div class="interior-box"><img src="ext2.jpg"></div>-->
  <!--       <div class="interior-box"><img src="ext3.jpg"></div>-->
  <!--       <div class="interior-box"><img src="ext4.jpg"></div>-->
  <!--       <div class="interior-box"><img src="ext5.jpg"></div>-->
  <!--       <div class="interior-box"><img src="ext6.jpg"></div>-->
  <!--   </div>-->
  <!--</section>-->
  
  <script type="text/javascript" src="scripts.js"></script>
  <script>
   document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('models').addEventListener('change', function() {
        var selectedValue = this.value.toLowerCase();
        var dealerSelects = document.getElementsByClassName('dealer-select');
        
        for (var i = 0; i < dealerSelects.length; i++) {
            dealerSelects[i].style.display = 'none';
        }

        if (selectedValue === 'telangana') {
            document.getElementById('telangana').style.display = 'block';
        } else if (selectedValue === 'andhra pradesh') {
            document.getElementById('andhra').style.display = 'block';
        } else if (selectedValue === 'kerala') {
            document.getElementById('kerala').style.display = 'block';
        }
    });
});
</script>
     <!--<label for=""> Nearest Dealer Location</label><br>-->
        
              <!--tamilnadu-->
            
            <!--<option value="Dealerlocation" selected>Nearest Dealer Location</option>-->
            <!--   <option value="Mountroad">Mount Road - Sundaram Honda, Chennai</option>-->
            <!--   <option value="Nandanam">Nandanam - Sundaram Honda, Chennai</option>-->
            <!--   <option value="Ambattur">Ambattur - Olympia Honda, Chennai</option>-->
            <!--   <option value="Annanagar">Anna Nagar - Olympia Honda, Chennai</option>-->
            <!--   <option value="Tiruvallur">Tiruvallur - Olympia Honda, Chennai</option>-->
            <!--   <option value="omrChennai">OMR - Capital Honda, Chennai</option>-->
            <!--   <option value="gstChennai">GST Road - Capital Honda, Chennai</option>-->
            <!--   <option value="velacheryChennai">Velachery - Capital Honda, Chennai</option>-->
            <!--   <option value="porurChennai">Porur  - Maansarovar Honda, Chennai</option>-->
            <!--   <option value="vadapalaniChennai">Vadapalani - Maansarovar Honda, Chennai</option>-->
            <!--   <option value="Vellore">Vellore - Balaji Honda, Vellore</option>-->
            <!--   <option value="balajiKanchipuram">Kancheepuram - Balaji Honda, Kancheepuram</option>-->
            <!--   <option value="urapakkamKancheepuram">Urapakkam - Balaji Honda, Kancheepuram</option>-->
            <!--   <option value="avinashiCoimbatore">Avinashi Rd - Manchester Honda, Coimbatore</option>-->
            <!--   <option value="pollachiCoimbatore">Pollachi - Manchester Honda, Coimbatore</option>-->
            <!--   <option value="mettupalayamCoimbatore">Mettupalayam Rd - Sundaram Honda, Coimbatore</option>-->
            <!--   <option value="Cuddalore">Cuddalore - Capital Honda</option>-->
            <!--   <option value="Erode">Erode - Sundaram Honda</option>-->
            <!--   <option value="Madurai">Madurai - Sundaram Honda</option>-->
            <!--   <option value="Nagercoil">Nagercoil - Southern Honda</option>-->
            <!--   <option value="Tuticorin">Tuticorin - Southern Honda, Tuticorin</option>-->
            <!--   <option value="Tirunelveli">Tirunelveli - Southern Honda</option>-->
            <!--   <option value="Pondicherry">Pondicherry - Capital Honda</option>-->
            <!--   <option value="Salem">Salem - Sundaram Honda</option>-->
            <!--   <option value="Hosur">Hosur - Grand Honda, Hosur</option>-->
            <!--   <option value="Thanjavur">Thanjavur - Capital Honda, Thanjavur</option>-->
            <!--   <option value="Trichy">Trichy - Capital Honda</option>-->
            <!--   <option value="Karur">Karur - Sundaram Honda</option>-->
            <!--   <option value="Tirupur">Tirupur - Sundaram Honda</option>-->
            <!--   <option value="Pudukotai">Pudukotai - Capital Honda</option>-->
            <!--   <option value="Kumbakonam">Kumbakonam - Capital Honda</option>-->
            
            <script>
    window.addEventListener('scroll', function() {
        var header = document.querySelector('.sticky-header');
        if (window.scrollY > 50) { // Check if scrolled more than 40px
            header.classList.add('active'); // Add 'active' class to .main-header
        } else {
            header.classList.remove('active'); // Remove 'active' class from .main-header
        }
    });
</script>

<!--aos animation-->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
            
  </body>
</html>
