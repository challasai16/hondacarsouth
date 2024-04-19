<?php
    $servername = "localhost";
    $username = "u468158713_leads";
    $password = "Honda@leads123";
    $database = "u468158713_honda_leads";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password,$database);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected successfully";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="webstyles.css">
    <link rel="icon" href="https://hondacarssouth.com/honda-icon.png">
    <title>LEADS - KARNATAKA</title>
    <!--<link rel="stylesheet" href="../assets/css/styles.css">-->
    <style>
        body{
            width:80%;
            margin:0 auto;
        }
        table{
            border: 1px solid black;
            border-collapse: collapse;
            margin-top: 50px;
            width: 100%;
            text-align: center;
            padding: 04px;
         }
        
         table td{
            border: 1px solid black;
            padding: 04px;
         }
        
         nav{
           gap: 10px;
        }
        a{
            padding: 10px;
            text-decoration: none;
            color: black;
            gap: 10px;
         }
         a:hover,.active{
            color: Orange;
            font-weight: bolder;
         }
         .filter{
             margin:50px 0;
             margin-top: 0;
             border-top: 1px solid grey;
             padding-top: 20px;
         }
         button{
             margin: 50px auto;
         }
         input {
             padding: 0.3rem;
             font-size: 1.1rem;
         }
         .lead-fomr-btn {
             background-color: black;
             color: white;
             padding: 0.3rem 1rem;
             cursor: pointer;
         }
         #btnExport {
             margin:0;
             background-color: red;
             font-size: 1.1rem;
             color: white;
             padding: 0.3rem 1rem;
             border: 0;
             cursor: pointer;
         }
         .access-section {
             width: 100%;
             height: 100vh;
             background-color: white;
             position: fixed;
             left: 0;
             top: 0;
             display: flex;
             justify-content: center;
             align-items: center;
         }
         .access-form {
             margin-top: 2rem;
         }
         .access-form input {
             width: 100%;
             padding: 0.7rem 1rem;
             margin-bottom: 2rem;
             outline: none;
         }
         .access-form a {
             font-size: 1.1rem;
             background-color: black;
             color: white;
             padding: 0.5rem 1rem;
             width: 100%;
             display: block;
             text-align: center;
             cursor: pointer;
            
         }
         .access-container {
             width: 40%;
             margin: 0 auto;
             padding: 3rem;
             box-shadow: 0px 0px 40px 10px rgba(0, 0, 0, 0.1);
             padding-bottom: 4rem;
         }
          .access-section img {
              width: 40%;
          }
          thead {
              background-color: black;
              color: white;
              text-transform: uppercase;
              padding: 0.4rem 1rem;
          }
          .access-form {
              width: 100%;
              position: fixed;
              top: 0;
              left: 0;
              background-color: white;
              z-index: 1000;
              height: 100vh;
              margin: 0;
              display: flex;
              align-items: center;
          }
          .access-form-manu {
              display: none;
          }
          .access-form-container {
              width: 50%;
              margin: 0 auto;
              border: 1px solid grey;
              padding: 3rem;
              border-radius: 10px;
          }
          .access-form-logo {
              text-align: center;
              margin-bottom: 20px;
          }
          .access-form-logo img {
              width: 50%;
              text-align: center;
          }
          .login-btn {
              background-color: black;
              color: white;
              border: 0;
              cursor: pointer;
          }
           .login-btn:hover {
               background-color: red;
               
           }
           @media(max-width:900px) {
               form {
                   display: none;
               }
               table {
                   display: none;
               }
               a {
                   display: none;
               }
               button {
                   display: none;
               }
               img {
                   display: none;
               }
           }
    </style>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="addCategory">
        
        <div class="leads-logo">
            <img src="leads-logo.svg">
        </div>
            
        <!--<form action="leadview.php">-->
        <!--    <label for="filter">Date:</label>-->
        <!--    <input type="date" id="filter" name="filter">-->
        <!--    <input type="submit">-->
        <!-- </form>-->
        <h1 class="leads-heading">HONDA LEADS - KARNATAKA</h1>
        
         <form action="leads.php" class="filter" method="GET">
            <label for="filter"> From:</label>
            <input type="date" id="startfilter" name="startfilter">
            <label for="filter"> To:</label>
            <input type="date" id="endfilter" name="endfilter">
            <input type="submit" class="lead-fomr-btn">
            <a class="logout-btn">Logout</a>
         </form>
         <button id="btnExport" onclick="fnExcelReport();"> DOWNLOAD TO EXCELSHEET </button>
        <?php
            
            
            
            // echo $_GET['startfilter'];
            
            
            
            if(!empty($_GET['startfilter'] && $_GET['endfilter'])){
                
                $start_date = date('Y-m-d', strtotime($_GET['startfilter']));
                
                echo "Start Date:  " . $start_date . "</br></br>" ;
                 $end_date = date('Y-m-d', strtotime($_GET['endfilter']));
                echo "End Date:  " . $end_date. "</br></br>";
            }
            
            // if(!empty($_GET['endfilter'])){
                
             
            //  $end_date = date('Y-m-d', strtotime($_GET['endfilter']));
            //  echo "End Date:  " . $end_date. "</br></br>";
            // }
        ?>
        
        
      
        <table id="headerTable">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Name</td>
                    <td>Mobile</td>
                    <td>email</td>
                    <td>Model</td>
                    <td>Dealer</td>
                    <td>Date</td>
                </tr>
            </thead>
            <tbody>
                <?php
                        if(!empty($_GET['startfilter'] && $_GET['endfilter'])){
                             $sql = "SELECT * FROM `Leads_info` WHERE Date BETWEEN '$start_date' and '$end_date'";
                        }else {
                            $sql = "SELECT * FROM `karnataka_honda_leads`";
                            // echo "Please Select the Date";
                        }
                       
                        $result = $conn->query($sql);
                        
                        if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                                    ?>
                        <tr>
                            <td><?= $row['ID']?></td>
                            <td><?= $row['NAME']?></td>
                            <td><?= $row['MOBILE']?></td>
                            <td><?= $row['EMAIL']?></td>
                            <td><?= $row['MODEL']?></td>
                            <td><?= $row['DEALER']?></td>
                            <td><?= $row['DATE']?></td>
                        </tr>
                    <?php
                        }
                        
                    }else{
                        echo "NO RECORDS FOUND";
                        
                    }
                        ?>
            </tbody>
        </table>
        <iframe id="txtArea1" style="display:none"></iframe>
        

    </div>
    <!--access form -->
    <section class="access-form">
            <div class="access-form-container">
                <div class="access-form-logo">
                   <img src="leads-logo.svg">
                </div>
                <input type="text" placeholder="Enter Username" class="username">
                <input type="password" placeholder="Enter Password" class="password">
                <input type="submit" value="Login" class="login-btn">
                <p class="error-details" style="color: red;"></p>
            </div>
    </section>
    <script>
    let accessForm = document.querySelector(".access-form");
    let loginBtn = document.querySelector(".login-btn");
    let username = document.querySelector(".username");
    let password = document.querySelector(".password");
    let errorText = document.querySelector(".error-details");
    let logoutBtn = document.querySelector(".logout-btn");
    
    loginBtn.addEventListener('click', function(){
      if(username.value == "honda" && password.value=="Honda@123") {
          accessForm.classList.add('access-form-manu');
          let locasStorage = localStorage.setItem("closeLogin", "true");
          
      }else {
          errorText.innerHTML = "Please Enter Correct Details"
      }
      
    });
    
    if(localStorage.getItem("closeLogin")) {
        accessForm.classList.add('access-form-manu');
    }
    
    logoutBtn.addEventListener('click', ()=> {
        localStorage.clear("closeLogin", "true");
        window.location.href = "./leads.php";
    })
    </script>
    
    <!--access form -->
    <script>
    function fnExcelReport()
        {
            var tab_text="<table border='none'><tr bgcolor='#87AFC6'>";
            var textRange; var j=0;
            tab = document.getElementById('headerTable'); // id of table
        
            for(j = 0 ; j < tab.rows.length ; j++) 
            {     
                tab_text=tab_text+tab.rows[j].innerHTML+"</tr>";
                //tab_text=tab_text+"</tr>";
            }
        
            tab_text=tab_text+"</table>";
            tab_text= tab_text.replace(/<A[^>]*>|<\/A>/g, "");//remove if u want links in your table
            tab_text= tab_text.replace(/<img[^>]*>/gi,""); // remove if u want images in your table
            tab_text= tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params
        
            var ua = window.navigator.userAgent;
            var msie = ua.indexOf("MSIE "); 
        
            if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer
            {
                txtArea1.document.open("txt/html","replace");
                txtArea1.document.write(tab_text);
                txtArea1.document.close();
                txtArea1.focus(); 
                sa=txtArea1.document.execCommand("SaveAs",true,"Say Thanks to Sumit.xls");
            }  
            else                 //other browser not tested on IE 11
                sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));  
        
            return (sa);
        }
        
        
        // access form js 
        // let accessUser = document.querySelector("");
        // let accessUser = document.querySelector("");
        // let accessBtn = document.querySelector(".accessbtn");
        
        // access-form.addEventListener("form", ()=> {
        //     preventDefault();
            
        // })
</script>
</body>
</html>