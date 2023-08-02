<!DOCTYPE html>
<html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>一覧画面</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" href="{{ asset('css/index.css') }}">
      <style>

      .text-center{
          margin-right: 30px;
          margin-top: 0px;
          font-size: 36px;
          color: orange;
          font-weight: bold;
          text-shadow: 1px 1px 0 black, -1px -1px 0 black, 1px -1px 0 black, -1px 1px 0 black;
      }

      .subtitle{
        margin-left: 48px;
        margin-top: 25px;
        color: orange;
        font-size: 28px;
        font-weight: bold;
        text-shadow: 1px 1px 0 black, -1px -1px 0 black, 1px -1px 0 black, -1px 1px 0 black;
      }

      .login-container {
          /* border: 2px solid orange; */
          padding: 20px;
          margin-right: 22px;
          margin-top: 25px;
          margin-bottom: 14px;
          text-shadow: 1px 1px 0 black, -1px -1px 0 black, 1px -1px 0 black, -1px 1px 0 black;
        }

      .login-container h2 {
          margin-bottom: 20px;
          text-align: center;
          color: orange;
          font-size: 34px;
          font-weight: bold;
          text-shadow: 1px 1px 0 black, -1px -1px 0 black, 1px -1px 0 black, -1px 1px 0 black;
        }

      .btn-container {
          display: flex;
          justify-content: space-around;
        }

      .restaurant-img {
          width: 100%;
          height: 180px;
          object-fit: cover;
          border-radius: 5px;
        }

      .restaurant-name {
          font-size: 1.2rem;
          font-weight: bold;
          margin-top: 10px;
        }

      .restaurant-rating {
          color: orange;
          font-size: 1rem;
          margin-bottom: 5px;
          text-shadow: 1px 1px 0 black, -1px -1px 0 black, 1px -1px 0 black, -1px 1px 0 black;
        }

      .restaurant-description {
          font-size: 0.9rem;
          color: orange;
          text-shadow: 1px 1px 0 black, -1px -1px 0 black, 1px -1px 0 black, -1px 1px 0 black;
        }

      .restaurant-link {
          text-decoration: none;
          color: orange;
          text-shadow: 1px 1px 0 black, -1px -1px 0 black, 1px -1px 0 black, -1px 1px 0 black;
        }

      .container{
          width: 100vw;
          height: 100vh;
          background-image: url(../image/serch-view2.jpg);
          background-repeat: no-repeat;
          background-size: cover;
          position: relative;
          z-index: 0;
      }

      .container::before{
          content: '';
          background: inherit;
          -webkit-filter: blur(5px);
          -moz-filter: blur(5px);
          -o-filter: blur(5px);
          -ms-filter: blur(5px);
          filter: blur(5px);
          position: absolute;
          top: -5px;
          left: -5px;
          right: -5px;
          bottom: -5px;
          z-index: -1;
      }

      .row{
          transform:
          translate(0px,10px);
      }

      .btn{
          background-color: orange;
          color: black;
          margin-top: 20px;
          margin-bottom: 20px;
      }
      </style>
  </head>

  <body>

      <div class="container mt-5">
        <div class="container mt-5">
          <h1 class="text-center mb-4">H u n g r y - C e b u</h1>
          <h2 class="subtitle">Get a table right now!</h2>
          <div class="row">
              <!-- ユーザーログインと新規登録 -->
              <div class="col-md-6 col-md-offset-3">
                  <!-- コンテンツの中央配置 -->
                  <div class="login-container">
                      <h2>Guest</h2>
                      <div class="btn-container">
                          <form>
                              <button type="button" class="btn btn-primary" onclick="userLogin()">login</button>
                          </form>
                          <form>
                              <button type="button" class="btn btn-primary" onclick="userRegistration()">Register</button>
                          </form>
                      </div>
                  </div>
              </div>
              <!-- アドミンログインと新規登録 -->
              <div class="col-md-6 col-md-offset-3">
                  <!-- コンテンツの中央配置 -->
                  <div class="login-container">
                      <h2>Restaurant</h2>
                      <div class="btn-container">
                          <form>
                              <button type="button" class="btn btn-primary" onclick="adminLogin()">login</button>
                          </form>
                          <form>
                              <button type="button" class="btn btn-primary" onclick="adminRegistration()">register</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- Custom JavaScript -->
      <script>
          function userLogin() {
              // ユーザーログインボタンがクリックされた時の処理
              window.location.href = "/login"; // ユーザーログインページへの遷移
          }

          function userRegistration() {
              // ユーザー新規登録ボタンがクリックされた時の処理
              window.location.href = "/register"; // ユーザー新規登録ページへの遷移
          }

          function adminLogin() {
              // アドミンログインボタンがクリックされた時の処理
              window.location.href = "/admin/login"; // アドミンログインページへの遷移
          }

          function adminRegistration() {
              // アドミン新規登録ボタンがクリックされた時の処理
              window.location.href = "/admin/register"; // アドミン新規登録ページへの遷移
          }
      </script>

      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>

</html>
