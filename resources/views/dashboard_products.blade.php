<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

  </head>
<body>
        <div class="container-fluid bg-light" >
            <div class="row">
                <div class="col-2">

                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <img src="img/logo.png" alt="logo" style="width:100%;">
                            <a class="nav-link p-3 mb-2 bg-info text-white" href="/dashboard" id="v-pills-home-tab" ><i class="bi bi-speedometer" style="margin-right: 15px"></i>Summery</a>
                            <a class="nav-link p-3 mb-2 bg-info text-white" id="v-pills-profile-tab" href="/products"><i class="bi bi-bag-check" style="margin-right: 15px"></i>Products</a>


                            <a class="nav-link p-3 mb-2 bg-info text-white" href="/changepassword"id="v-pills-home-tab" ><i class="bi bi-sliders" style="margin-right: 15px"></i>Admin Settings</a>
                            <a class="nav-link p-3 mb-2 bg-info text-white" href="/logout"id="v-pills-home-tab" ><i class="bi bi-box-arrow-right" style="margin-right: 15px"></i>Log out</a>
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
                    {{--end of nav bar--}}

                    <div class="container col-12" >
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add New Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">View All Products</a>
                            </li>

                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <br>
                                        @if(count($errors) > 0 )
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                Please Fill All Required Fields.!
                                            </div>
                                        @endif
                                        @if(session()->has('message'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            {{ session()->get('message') }}
                                        </div>
                                        @endif

                                    <form method="POST" action="/productadded">
                                        {{ csrf_field() }}
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                            <label for="inputcategory">Product Category</label>
                                            <select name="inputcategory" class="form-control">
                                                <option selected>Choose...</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>

                                            </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                            <label for="inputbrandId">Product Id</label>
                                            <input type="Text" class="form-control" name="inputproductid" placeholder="Product Id">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                            <label for="inputproductname">Product Name</label>
                                            <input type="text" class="form-control" name="inputproductname"  placeholder="Product Name">
                                            </div>
                                            <div class="form-group col-md-6">
                                            <label for="inputbrandname">Brand Name</label>
                                            <input type="Text" class="form-control" name="inputbrandname"  placeholder="Brand Name">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                            <label for="itemprice">Item Price</label>
                                            <input type="text" class="form-control" name="inputitemprice" placeholder="Item Price">
                                            </div>
                                            <div class="form-group col-md-6">
                                            <label for="Quantity">Quantity</label>
                                            <input type="text" class="form-control" name="inputquantity" placeholder="Quantity">
                                            </div>
                                        </div>

                                            <div class="form-row">
                                            <div class="form-group col-md-6">
                                            <label for="Manufacture Date">Manufacture Date</label>
                                            <input type="Date" class="form-control" name="inputmdate" placeholder="Manufacture Date">
                                            </div>
                                            <div class="form-group col-md-6">
                                            <label for="Expire Date">Expire Date</label>
                                            <input type="Date" class="form-control" name="inputedate" placeholder="Expire Date">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress2">Manufacturer Details</label>
                                            <input type="text" class="form-control" name="inputmdetails" id="inputAddress2" placeholder="Apartment, studio, or floor, Contact Numbers">
                                        </div>

                                        <button type="submit" class="btn btn-primary" value="">Add</button>
                                        <button type="reset" class="btn btn-warning" value="">Clear</button>

                                    </form>
                                </div>

                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <br>

                                    <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                        <th scope="col">Product Category</th>
                                        <th scope="col">Product Id</th>
                                        <th scope="col">Product name</th>
                                        <th scope="col">Brand Name</th>
                                        <th scope="col">Item Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Manufacture Date</th>
                                        <th scope="col">Expire Date</th>
                                        <th scope="col">Manufacturer details</th>
                                        <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{$product ['product_category']}}</td>
                                                <td>{{$product ['product_id']}}</td>
                                                <td>{{$product ['product_name']}}</td>
                                                <td>{{$product ['brand_name']}}</td>
                                                <td>{{$product ['item_price']}}</td>
                                                <td>{{$product ['quantity']}}</td>
                                                <td>{{$product ['manufacture_date']}}</td>
                                                <td>{{$product ['expire_date']}}</td>
                                                <td>{{$product ['manufacturer_details']}}</td>
                                                <td>

                                                    <a href="editproduct/{{$product->id}}" class="btn btn-warning">Edit</a>

                                                    <a href="deleteproduct/{{$product->id}}" class="btn btn-danger">Delete</a>

                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                    </table>

                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <br>
                                    <table class="table">
                                        <thead class="thead-dark">
                                            <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">P.Name</th>
                                            <th scope="col">Brand Name</th>
                                            <th scope="col">Quentity</th>
                                            <th scope="col">Available Quantity</th>
                                            <th scope="col">Item Price</th>
                                            <th scope="col">Expire Date</th>
                                            <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            </tr>
                                            <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                            </tr>
                                            <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                        </table>

                                </div>
                            </div>

                    </div>


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
