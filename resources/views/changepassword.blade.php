<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Dashboard</title>
  </head>
 <body>
        <div class="container-fluid bg-light" >
            <div class="row">
                <div class="col-2">

                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <img src="img/logo.png" alt="logo" style="width:100%;">
                            <a class="nav-link p-3 mb-2 bg-info text-white" href="/dashboard" id="v-pills-home-tab" ><i class="bi bi-speedometer" style="margin-right: 15px"></i>Summery</a>
                            <a class="nav-link p-3 mb-2 bg-info text-white" id="v-pills-profile-tab" href="/products"><i class="bi bi-bag-check" style="margin-right: 15px"></i>Products</a>


                            <a class="nav-link p-3 mb-2 bg-info text-white" id="v-pills-home-tab" ><i class="bi bi-sliders" style="margin-right: 15px"></i>Admin Settings</a>
                            <a class="nav-link p-3 mb-2 bg-info text-white" id="v-pills-home-tab" ><i class="bi bi-box-arrow-right" style="margin-right: 15px"></i>Log out</a>
                    </div>

                </div>
                <div class="container-fluid col-10">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                        <ul class="navbar-nav mr-auto" style="">
                        {{-- float left--}}
                        </ul>
                        <div class="float-right">
                            
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            <i class="bi bi-person-circle"> </i>Admin
                            </button>

                            <!-- Modal -->

                        </div>
                    </nav>
                    <hr>
                {{--end of nav bar --}}
                {{--start of bill table --}}

                <form class="col-6">
                <div class="form-group">
                    <label >Current Password</label>
                    <input type="text" class="form-control" id="currentpass"  placeholder="Enter current password here">

                </div>
                <div class="form-group">
                    <label >New Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="New Password">
                </div>
                <div class="form-group">
                    <label >Retype New Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="New Password">
                </div>

                <button type="submit" class="btn btn-primary">Save New Password</button>
                <button type="reset" class="btn btn-danger">Clear</button>
                </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
