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

        <div class="container-fluid bg-light" >
            <div class="row">
                <div class="col-2">
                

                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <img src="img/logo.png" alt="logo" style="width:100%;">
                            <a class="nav-link p-3 mb-2 bg-info text-white" href="/dashboard" id="v-pills-home-tab" ><i class="bi bi-speedometer" style="margin-right: 15px"></i>Summery</a>
                            <a class="nav-link p-3 mb-2 bg-info text-white" id="v-pills-profile-tab" href="/products"><i class="bi bi-bag-check" style="margin-right: 15px"></i>Products</a>
                            <a class="nav-link p-3 mb-2 bg-info text-white" href="/sales" id="v-pills-home-tab" ><i class="bi bi-receipt-cutoff" style="margin-right: 15px"></i>Sales</a>
                            <a class="nav-link p-3 mb-2 bg-info text-white" id="v-pills-home-tab" ><i class="bi bi-receipt-cutoff" style="margin-right: 15px"></i>Customers</a>
                            <a class="nav-link p-3 mb-2 bg-info text-white" id="v-pills-home-tab" ><i class="bi bi-flag-fill" style="margin-right: 15px"></i>Reports</a>
                            <a class="nav-link p-3 mb-2 bg-info text-white" id="v-pills-home-tab" ><i class="bi bi-sliders" style="margin-right: 15px"></i>Admin Settings</a>
                            <a class="nav-link p-3 mb-2 bg-info text-white" id="v-pills-home-tab" ><i class="bi bi-box-arrow-right" style="margin-right: 15px"></i>Log out</a>
                    </div>

                </div>
                <div class="container-fluid col-10">
                    @yield('nav_bar')
                    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                        <ul class="navbar-nav mr-auto" style="">
                        {{-- float left--}}
                        </ul>
                        <div class="float-right">
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
                            <i class="bi bi-bell"> 4</i>
                            </button>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            <i class="bi bi-person-circle"> </i>Admin
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>

                                    </div>
                                    <div class="modal-body">
                                        <div>
                                            ...ad
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                    <hr>
