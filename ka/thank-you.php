<html>
    
    <head>
        <link rel="icon" href="https://hondacarssouth.com/honda-icon.png">
        <title>Thank You</title>
     <style>
     body {
         text-align: center;
         display: flex;
         text-align: center;
         justify-content: center;
         align-items: center;
         flex-direction: column;
         height: 90vh;
     }
         h1 {
             font-size: 30px;
             text-align: center;
             padding: 10px 0;
             padding-top: 0;
             width: 70%;
             
         }
         a {
             font-size: 20px;
             padding: 10px 0;
             color: blue;
             text-decoration: none;
             border-bottom: 2px solid blue;
             text-align: center;
         }
     </style>
    </head>
    <body>
        <?php
        session_start();
        if (isset($_SESSION['user_details'])) {
            $userDetails = $_SESSION['user_details'];
        }
        ?>
        
        
        <h1 clas="thank-you">Hi! <?php echo $userDetails['name']; ?>,  Thank You! For Contacting Us, Will Contact You Back Soon... <?php echo $userDetails['email']; ?> </h1>
        <a href="index.php">Go back to Home Page</a>
        
        <script type="text/javascript" src="scripts.js"></script>
    </body>
</html>