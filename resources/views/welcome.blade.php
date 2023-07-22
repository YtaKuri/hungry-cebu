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
        h1{
            text-align: center
        }

        .login-container {
          border: 1px solid #ddd;
          padding: 20px;
          margin-right: 10px;
          margin-bottom: 20px;
        }
    
        .login-container h2 {
          margin-bottom: 20px;
          text-align: center
        }
    
        .btn-container {
          display: flex;
          justify-content: space-around;
        }
      </style>
    </head>
    
    <body>
        <h1>hungry cebu</h1>
      <div class="container">
        <div class="row">
          <!-- ユーザーログインと新規登録 -->
          <div class="col-md-6">
            <div class="login-container">
              <h2>Guest</h2>
              <div class="btn-container">
                <form>
                  <button type="button"  class="btn btn-primary" onclick="userLogin()">login</button>
                </form>
                <form>
                  <button type="button" class="btn btn-primary" onclick="userRegistration()">Register</button>
                </form>
              </div>
            </div>
          </div>
    
          <!-- アドミンログインと新規登録 -->
          <div class="col-md-6">
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
              window.location.href = "user_login.html"; // ユーザーログインページへの遷移
            }
        
            function userRegistration() {
              // ユーザー新規登録ボタンがクリックされた時の処理
              window.location.href = "user_registration.html"; // ユーザー新規登録ページへの遷移
            }
        
            function adminLogin() {
              // アドミンログインボタンがクリックされた時の処理
              window.location.href = "admin_login.html"; // アドミンログインページへの遷移
            }
        
            function adminRegistration() {
              // アドミン新規登録ボタンがクリックされた時の処理
              window.location.href = "admin_registration.html"; // アドミン新規登録ページへの遷移
            }
          </script>
        

    </main>




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>