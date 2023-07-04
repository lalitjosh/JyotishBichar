<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

       .vd{
            margin-top: 84px;
            align-content: center;
                
       }


}

</style>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>   
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

<p style="text-align: center;">HOROSCOPE</p>


                   

</script>
 
</script>
</div>
</body>
</html>
