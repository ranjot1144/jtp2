<!DOCTYPE html>
<html>
    <head>
      <title>JTP-404</title>
      <link rel="stylesheet" type="text/css" href="styles.css">
      <style>
        * {
          box-sizing: border-box;
        }

        body{
          margin: 0;
          padding: 0;
          display:flex;
          align-items: center;
          justify-content: center;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            padding: 10em;
        }

        .text h1{
          font-size: 13rem;
          font-weight: bolder;
          margin: 0;
        }

        .text h3{
          font-size: 2rem;
          font-weight: 200;
          margin:3rem auto 2rem;
          width:60%;
          text-align:left;
        }

        .text {
            width: 50%;
            text-align: center;
        }

        .text p{
            font-size: 18px;
            width:60%;
            margin: 3rem auto 4rem;
            text-align:left;
        }

        .image {
            width: 40%;
            text-align: center;
        }

        .image img {
            max-width: 100%;
            height: auto;
        }

        .buttons {
            display: inline-block;
        }

        .btn {
            display: inline-block;
            padding: 10px 40px;
            border: 1px solid #f15b29;
            border-radius: 20px;;
            background-color: #fff;
            color: #f05a29;
            text-decoration: none;
            margin: 0 10px;
        }
        .btn:hover {
            background: #f15b29;
            color:#fff;
        }

        @media screen and (max-width: 1024px) {
            .container{
              padding: 0em;
            }
            .text h3{
              width: 80%;
            }
            .text p{
              width: 80%;
            }
            .btn{
              float:left;
              padding: 10px 20px;
            }
        }

      </style>
    </head>

    <body>
      <div class="container">
        
        <div class="text">

          <h1>404</h1>
          <h3>Something's wrong here...</h3>
          <p>We're sorry, it look like the page you're looking for isn't in our system. May be try our Support page or return to the Home page.</p>

          <div class="buttons">
            <a href="{{ URL('/support/contact-us') }}" class="btn">Contact Us</a>
            <a href="{{ URL('/') }}" class="btn">Go to Home Page</a>
          </div>
          
        </div>

        <div class="image">
          <img src="{{ asset('assets/images/error/404.png') }}" alt="Not Found" />
        </div>
      </div>
    </body>
</html>