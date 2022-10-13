<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="loginstyle.css">
    <title>admin login </title>
</head>
<body>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Admin Login</h5>
            <form action="user" method="post">
                {{ csrf_field() }}
              <div class="form-floating mb-3">
                <label for="floatingInput">User Name</label>
                <input type="Text" class="form-control" id="role" name="user" placeholder="user_name">

              </div>
              <div class="form-floating mb-3">
                <label for="floatingPassword">Password</label>
                <input type="password" class="form-control" id="pass" name="password" placeholder="Password">

              </div>

              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                <label class="form-check-label" for="rememberPasswordCheck">
                  Remember password
                </label>
              </div>
              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Sign in</button>
                  <button class="btn btn-danger btn-login text-uppercase fw-bold" type="reset">Clear</button>
              </div>
              <hr class="my-4">

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</body>
</html>
