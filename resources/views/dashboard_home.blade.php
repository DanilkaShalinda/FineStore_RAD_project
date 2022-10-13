<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link re="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorig>
    <title>Dashboard</title>
  </head>
<body class="">

        <div class="container-fluid bg-light" >
            <div class="row">
                <div class="col-2">

                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <img src="img/logo.png" alt="logo" style="width:100%;">
                            <a class="nav-link p-3 mb-2 bg-info text-white" id="v-pills-home-tab" ><i class="bi bi-speedometer" style="margin-right: 15px"></i>Summery</a>
                            <a class="nav-link p-3 mb-2 bg-info text-white" id="v-pills-profile-tab" href="/products"><i class="bi bi-bag-check" style="margin-right: 15px"></i>Products</a>

                            <a class="nav-link p-3 mb-2 bg-info text-white" href="/changepassword"id="v-pills-home-tab" ><i class="bi bi-sliders" style="margin-right: 15px"></i>Admin Settings</a>
                            <a class="nav-link p-3 mb-2 bg-info text-white" href="/logout"id="v-pills-home-tab" ><i class="bi bi-box-arrow-right" style="margin-right: 15px"></i>Log out</a>
                    </div>

                </div>
                <div class="container-fluid col-10">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                            </div>
                        </div>
                    </nav>
                    {{--end of nav bar--}}
                    <hr>

                    <div class="col-md-10 ">
                            <div class="row ">
                                <div class="col-xl-3 col-lg-6">
                                    <div class="card l-bg-cherry">
                                        <div class="card-statistic-3 p-4">
                                            <div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div>
                                            <div class="mb-4">
                                                <h5 class="card-title mb-0">Total No Of Products</h5>
                                            </div>
                                            <div class="row align-items-center mb-2 d-flex">
                                                <div class="col-8">
                                                    <h2 class="d-flex align-items-center mb-0">
                                                        {{$products}}
                                                    </h2>
                                                </div>
                                                <div class="col-4 text-right">
                                                    <span><i class="fa fa-arrow-up"></i></span>
                                                </div>
                                            </div>
                                            <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                                <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6">
                                    <div class="card l-bg-blue-dark">
                                        <div class="card-statistic-3 p-4">
                                            <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                                            <div class="mb-4">
                                                <h5 class="card-title mb-0">Total Product Quantity</h5>
                                            </div>
                                            <div class="row align-items-center mb-2 d-flex">
                                                <div class="col-8">
                                                    <h2 class="d-flex align-items-center mb-0">
                                                        {{$quantity}}
                                                    </h2>
                                                </div>
                                                <div class="col-4 text-right">
                                                    <span> <i class="fa fa-arrow-up"></i></span>
                                                </div>
                                            </div>
                                            <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                                <div class="progress-bar l-bg-green" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <hr>





                </div>
            </div>




        </div>












    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
