<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <title>Donate</title>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0">
    
</head>

<body>
    <div class="container">
        <div class="nav uni">
            <div class="logo">
                <div class="img">
                    <img src="logo.png" alt="RGUKT">
                </div>
                <div class="title" onclick="url('logo.php')">
                    <span>Donate</span>
                </div>
                <div class="bars">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div class="links">
                <div onclick="url('index.php')" class="active"><i class="fas fa-home"></i>&nbsp;&nbsp;HOME</div>
                
                <div onclick="url('about.php')"><i class="fas fa-user"></i>&nbsp;&nbsp;ABOUT</div>
                
		        <div onclick="url('https://rzp.io/l/417Mw4NLht')" class="don">DONATE</div>
            </div>
           

        </div>
    </div>
    
    <div class="row">
        <div class="col">
            <div class="right">
               <img src="logo.png" alt="IMG" class="bg">
                <div class="text">
                <h1>Donate</h1>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Something of value such as money or goods that is given to help a person or organization such as a charity, or the act of giving this money, etc.: It is possible to make a donation with conditions attached, for example requiring the funds to be used for a specific purpose.</p>
               
                <button onclick="url('https://rzp.io/l/417Mw4NLht')"> DONATE &nbsp;&nbsp; <i class="fa fa-arrow-alt-circle-right"></i></button>
                </div>
                
                
                
            </div>
            <div>
                <img src="don2.jpg" alt="IMG">
            </div>
        </div>
    </div>
    
    
    

   
   
    <div class="footer">
        <div>
            
            &copy; 2021, All Rights Reserved<br/>
           <p> Desighned by <span>Vishnu</span></p>
        </div>
    </div>
         
<script src="js/jquery-3.3.1.min.js">
</script>
    </body>


</html>

  

<script>
     

    let url = (url) => {
        window.location = url;
    }
    $('div.nav div.bars').click(function() {
        $(this).toggleClass('active');
        $('div.nav').toggleClass('mobile');
    })

    $('#dpdwn').click(function() {
        $('div.dropcontent').toggleClass('active');
    })


</script>