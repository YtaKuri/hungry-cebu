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

        
          body {
              background-color: #f8f9fa;
              font-family: Arial, sans-serif;
          }

          .login-container {
              border: 1px solid #007bff;
              padding: 20px;
              margin-right: 10px;
              margin-bottom: 20px;
          }

          .login-container h2 {
              margin-bottom: 20px;
              text-align: center;
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
              color: #f8ad1c;
              font-size: 1rem;
              margin-bottom: 5px;
          }

          .restaurant-description {
              font-size: 0.9rem;
              color: #007bff;
          }

          .restaurant-link {
              text-decoration: none;
              color: #007bff;
          }

          body {
            background-image:url("image/serch-view2.jpg");
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
            background-position: center;
            background-size: cover;
          }
          
          h1 {
          color: #46aae1;
          margin: 24px;
          }
          h2 {
          color: #007bff;
          }
          .row{
            transform: 
            translate(0px,10px)

          }
      </style>
  </head>

  <body>

      <div class="container mt-5">
        <div class="container mt-5">
          <h1 class="text-center mb-4">hungry cebu</h1>          
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
