<!DOCTYPE html>
<html>
<head>
	<title></title>
	    <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
        <title>JyotishBichar </title>
    <link rel = "icon" href = "https://toppng.com/uploads/preview/design-for-logo-11549988276bxsuzsd1y1.png" 
        type = "image/x-icon">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
<style type="text/css">
      
      body{
        background: #f4f4f4;
      }


      .history{
        margin-left: 15px;
      }

     .container{

          display: grid;
        
          grid-template-columns: repeat(3, 1fr);
          grid-gap: 1em;
          margin-left:  2em;

          
        }

        .container > div{
             background: #f1f1f114;
             padding: 1em;
             margin-top: 30px;


             margin-bottom:40px ;
             
             position:  relative;

           }

        .overlay {
             margin-bottom: 100px;
             
             
             font-size: 13px;
             text-shadow: 5px 5px 10px black ;
             position:  absolute;
             top:  18px;
             left: 18px;
             color: white;
         }



        .container img {
               object-fit: cover;
               width: 395px;        } 


       

       .box1{
             padding-bottom:40px ;
             margin-right: 12px;



            }

        .box2{
               position: relative;
             }

         .overlay{
               position: absolute;
                font-size: 13px;
             text-shadow: 5px 5px 10px black ;
             position:  absolute;
             top:  18px;
             left: 18px;
             color: white;


           }  


           .box3{
            margin-right: 24px;
           }

           .userName{

              display: inline-block;
              color: white;

           }

           .section1{
             display: inline-block;
             position: relative;
             left: 20px;

           }

           .section2{
             
             display: inline-block;
             position: relative;
             left: 34px;

           }

           .section3{
              display: inline-block;
              position: relative;
              left: 16px;

           }

           .section4{
              display: inline-block;
              position: relative;
              left: 18px;

           }
      

       #myVideo{
                
                margin-top: 84px;
                right: 0;
                bottom: 0;
                min-width: 50%; 
                min-height: 20%;

                
       }
       .footer {
     padding: 40px 0;
     background-color: #fff; 
   }

       .footer ul {

        margin-top: 0;
        padding: 0;
        list-style: none;
        font-size: 18px;
        line-height: 1.6;
        margin-bottom: 0;
        text-align: center;
      }

      .footer ul li a {
        color: inherit;
        text-decoration: none;
        opacity: 0.8;
      }

      .footer ul li {

        display: inline-block;
        padding: 0 15px;


      }

      .footer ul li a:hover {

       opacity: 1;
     }

     .footer .copyright {

      margin-top: 15px;
      text-align: center;
      font-size: 13px;
      color: #aaa;
    }




    #srch{
    grid-template-rows: 1fr 1fr;
    grid-gap: 1em;
    margin-left: 26em;

      }

      

    @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap');

    
          .history{
                  
                  font-family: "Oswald";

                  font-size: 25px;
             }


            

                
       }

       .payment{
        position: relative;
        left:10px;
        right:10px;
       }

       .footer1{
      position: relative;
      top:350px;
    }

}

</style>

 

</head>
<body>
   <nav id="nav" class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{route('dashboard')}}">JyotishBichar</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="stockPhoto"><a href="jyotishtalk">Talk To Jyotish</a></li>
      <li><a href="{{route('subscription')}}">Subscription</a></li>
      <li><a href="{{route('horscope')}}">Horoscope</a></li>
    </ul>
    <form class="navbar-form navbar-left" action="" method="get">
                    
                          <div  id="srch" class="form-group">
                             <input type="text" class="form-control" placeholder="Search" name="query">
                          </div>
                          <button type="submit" class="btn btn-default">Search</button>
                  
                   
        <div class="section1">
            
            @auth
              <div class="userName">{{ Auth::user()->name }}</div>
              
                   </div>

                  <div class="section2">

              <div class="userName"><a href="{{route('logout')}}"><input type="button" name="" class="btn btn-primary" value="Logout"></a>
                  
                  </div>
           
            @endauth

            @guest
            
                    <div class="section3">

              <div class="userName"><a href="{{route('login')}}"><input type="button" name="" class="btn btn-primary" value="Login"></a>

                    </div>


                    <div class="section4">

              <a href="{{route('register')}}"><input type="button" name="" class="btn btn-success" value="Register"></a>
                    
                    </div>
        
            @endguest

        </div>

    </form>
  </div>

</nav>


  <p style="text-align: center;"><button id="payment-button" class="btn-success">Subscribe and Pay with Khalti</button></p>
  <p style="text-align: center;">Please wait don't close the window, payment verification is processing</p>
  
  <br>
  <div class="footer1">
    <section class="footer">

     <ul class="list">
       <li>
         <a href="{{route('dashboard')}}">JyotishBichar</a>

       </li>

       <li>
         <a href="#">About</a>
       </li>

       <li>
         <a href="#">Terms</a>
       </li>

       <li>
         <a href="">Privacy Policy</a>
       </li>
     </ul>

     <p class="copyright">
      JyotishBichar © 2022,  Inc. All rights reserved.  
    </p>    

  </section>


     <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>
            var config = {
                // replace the publicKey with yours
                "publicKey": "{{ config('app.khalti_public_key') }}",
                "productIdentity": "1234567890",
                "productName": "Dragon",
                "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
                "paymentPreference": [
                    "KHALTI",
                    "EBANKING",
                    "MOBILE_BANKING",
                    "CONNECT_IPS",
                    "SCT",
                    ],
                "eventHandler": {
                    onSuccess (payload) {
                        // hit merchant api for initiating verfication
                        $.ajax({
                            type : 'POST',
                            url : "{{ route('verify') }}",
                            data: {
                                token : payload.token,
                                amount : payload.amount,
                                "_token" : "{{ csrf_token() }}"
                            },
                            success : function(res){
                                $.ajax({
                                    type : "POST",
                                    url : "{{ route('khalti.storePayment') }}",
                                    data : {
                                        response : res,
                                        "_token" : "{{ csrf_token() }}"
                                    },
                                    success: function(res){

                                        console.log('transaction successfull');
                                        window.location.href = res['location'];
                                    }

                                });
                                console.log(res);
                            }
                        });
                        console.log(payload);
                    },
                    onError (error) {
                        console.log(error);
                    },
                    onClose () {
                        console.log('widget is closing');
                    }
                }
            };
            var checkout = new KhaltiCheckout(config);
            var btn = document.getElementById("payment-button");
            btn.onclick = function () {
                // minimum transaction amount must be 10, i.e 1000 in paisa.
                checkout.show({amount: 1000});
            }
        </script>
        @if(session()->has('message'))

                        

                                {{session()->get('message')}}

                  @endif
                  
</body>
</html>