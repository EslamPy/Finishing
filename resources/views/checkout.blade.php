@extends('Layouts.master')

@section('static')
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- title -->
    <title>Check Out</title>
    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

</head>

    <body>

        <!-- search area -->
        <div class="search-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <span class="close-btn"><i class="fas fa-window-close"></i></span>
                        <div class="search-bar">
                            <div class="search-bar-tablecell">
                                <h3>Search For:</h3>
                                <input type="text" placeholder="Keywords">
                                <button type="submit">Search <i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end search area -->

        <!-- breadcrumb-section -->
        <div class="breadcrumb-section breadcrumb-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="breadcrumb-text">
                            <p>TECHNICAL AND EFFICIENT</p>
                            <h1>Check Out</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end breadcrumb section -->

        <!-- check out section -->
        <div class="checkout-section mt-150 mb-150">
            <section class="bg-light py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 mb-4">
                            <div class="card mb-4 border shadow-0">
                                <div class="p-4 d-flex justify-content-between">
                                    <div>
                                        <h5>Have an account?</h5>
                                        <p class="mb-0 text-wrap">Sign in now to access exclusive features and personalized content tailored just for you.</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center flex-column flex-md-row">
                                        <a href="{{ route('login') }}" class="btn btn-primary shadow-0 text-nowrap mx-2 w-100" style="background-color: #f28123 !important; border-color: #f28123 !important;">Login in</a>
                                        <a href="{{ route('register') }}" class="btn btn-primary shadow-0 text-nowrap mx-2 w-100" style="background-color: #f28123 !important; border-color: #f28123 !important;">Register</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Checkout -->
                            <div class="card shadow-0 border">
                                <div class="p-4">
                                    <h5 class="card-title mb-3">Guest checkout</h5>
                                    <div class="row">
                                        <div class="col-6 mb-3">
                                            <p class="mb-0">First name</p>
                                            <div class="form-outline">
                                                <input type="text" id="typeText" placeholder="Type here"
                                                    class="form-control" />
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <p class="mb-0">Last name</p>
                                            <div class="form-outline">
                                                <input type="text" id="typeText" placeholder="Type here"
                                                    class="form-control" />
                                            </div>
                                        </div>

                                        <div class="col-6 mb-3">
                                            <p class="mb-0">Phone</p>
                                            <div class="form-outline">
                                                <input type="tel" id="typePhone" placeholder="+02 " class="form-control" />
                                            </div>
                                        </div>

                                        <div class="col-6 mb-3">
                                            <p class="mb-0">Email</p>
                                            <div class="form-outline">
                                                <input type="email" id="typeEmail" placeholder="example@gmail.com"
                                                    class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault" />
                                        <label class="form-check-label" for="flexCheckDefault">Keep me up to date on news</label>
                                    </div>

                                    <hr class="my-4" />

                                    <h5 class="card-title mb-3">Shipping info</h5>

                                    <div class="row mb-3">
                                        <div class="col-lg-4 mb-3">
                                            <!-- Default checked radio -->
                                            <div class="form-check h-100 border rounded-3">
                                                <div class="p-3">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                        id="flexRadioDefault1" checked />
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Express delivery <br />
                                                        <small class="text-muted">3-4 days via Fedex </small>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <!-- Default radio -->
                                            <div class="form-check h-100 border rounded-3">
                                                <div class="p-3">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                        id="flexRadioDefault2" />
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        Post office <br />
                                                        <small class="text-muted">20-30 days via post </small>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <!-- Default radio -->
                                            <div class="form-check h-100 border rounded-3">
                                                <div class="p-3">
                                                    <input class="form-check-input" type="radio"
                                                        name="flexRadioDefault" id="flexRadioDefault3" />
                                                    <label class="form-check-label" for="flexRadioDefault3">
                                                        Self pick-up <br />
                                                        <small class="text-muted">Come to our shop </small>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-8 mb-3">
                                            <p class="mb-0">Address</p>
                                            <div class="form-outline">
                                                <input type="text" id="typeText" placeholder="Type here" class="form-control"/>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 mb-3">
                                            <p class="mb-0">Governorate</p>
                                            <select class="form-select">
                                                <option value="1">Cairo</option>
                                                <option value="2">Alexandria</option>
                                                <option value="3">Aswan</option>
                                                <option value="4">Asyut</option>
                                                <option value="5">Beheira</option>
                                                <option value="6">Beni Suef</option>
                                                <option value="7">Dakahlia</option>
                                                <option value="8">Damietta</option>
                                                <option value="9">Faiyum</option>
                                                <option value="10">Gharbia</option>
                                                <option value="11">Giza</option>
                                                <option value="12">Ismailia</option>
                                                <option value="13">Kafr El Sheikh</option>
                                                <option value="14">Luxor</option>
                                                <option value="15">Matrouh</option>
                                                <option value="16">Minya</option>
                                                <option value="17">Monufia</option>
                                                <option value="1">Mansoura</option>
                                                <option value="18">New Valley</option>
                                                <option value="19">North Sinai</option>
                                                <option value="20">Port Said</option>
                                                <option value="21">Qalyubia</option>
                                                <option value="22">Qena</option>
                                                <option value="23">Red Sea</option>
                                                <option value="24">Sharqia</option>
                                                <option value="25">Sohag</option>
                                                <option value="26">South Sinai</option>
                                                <option value="27">Suez</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-4 mb-3">
                                            <p class="mb-0">House</p>
                                            <div class="form-outline">
                                                <input type="text" id="typeText" placeholder="Type here"
                                                    class="form-control" />
                                            </div>
                                        </div>

                                        <div class="col-sm-4 col-6 mb-3">
                                            <p class="mb-0">Postal code</p>
                                            <div class="form-outline">
                                                <input type="text" id="typeText" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="col-sm-4 col-6 mb-3">
                                            <p class="mb-0">Zip</p>
                                            <div class="form-outline">
                                                <input type="text" id="typeText" class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault1" />
                                        <label class="form-check-label" for="flexCheckDefault1">Save this address</label>
                                    </div>

                                    <div class="mb-3">
                                        <p class="mb-0">Message to seller</p>
                                        <div class="form-outline">
                                            <textarea class="form-control" id="textAreaExample1" rows="2"></textarea>
                                        </div>
                                    </div>

                                    <hr class="my-4" />

                                    <h5 class="card-title mb-3">Payment info</h5>
                                    <div class="row">
                                        <div class="col-lg-4 mb-3">
                                            <div class="form-check h-100 border rounded-3">
                                                <div class="p-3">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" checked />
                                                    <label class="form-check-label" for="flexRadioDefault4">Credit card</label>
                                                    <div class="pt-1 payment-icons">
                                                        <img height="30" src="https://cdn1.iconfinder.com/data/icons/credit-card-icons/512/visa.png " style="width: 20%; max-width: 100px; alt="Visa">
                                                        <img height="30" src="https://cdn.icon-icons.com/icons2/1186/PNG/512/1490135018-mastercard_82253.png" style="width: 20%; max-width: 100px; alt="MasterCard">
                                                        <img height="30" src="https://cdn0.iconfinder.com/data/icons/flat-design-business-set-3/24/payment-method-amex-512.png" style="width: 20%; max-width: 100px; alt="American Express">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <div class="form-check h-100 border rounded-3">
                                                <div class="p-3">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5" />
                                                    <label class="form-check-label" for="flexRadioDefault5">Paypal</label>
                                                    <div class="pt-1 payment-icons">
                                                        <img height="30" src="https://cdn-icons-png.flaticon.com/512/174/174861.png" style="width: 20%; max-width: 100px;" alt="Paypal">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                        </div>
                                    </div>

                                    <div class="float-end">
                                        <button class="btn btn-primary shadow-0 border" style="background-color: #f28123 !important; border-color: #f28123 !important;">Cancel</button>
                                        <button class="btn btn-primary shadow-0 border" style="background-color: #f28123 !important; border-color: #f28123 !important;">Confirm order</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                                <!-- Checkout summary section -->
                                <div class="col-xl-4 col-lg-4 d-flex justify-content-center justify-content-lg-end">
                                    <div class="ms-lg-4 mt-4 mt-lg-0" style="max-width: 320px;">
                                        <h6 class="mb-3">Summary</h6>
                                        <div class="d-flex justify-content-between">
                                            <p class="mb-2">Subtotal Cost:</p>
                                            <p class="mb-2" id="subtotal">${{ number_format($subtotal, 2) }}</p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p class="mb-2">Shipping cost:</p>
                                            <p class="mb-2 text-success">- ${{ number_format($shipping, 2) }}</p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p class="mb-2">Total cost:</p>
                                            <p class="mb-2" id="total">${{ number_format($total, 2) }}</p>
                                        </div>
                                        <hr />
                                        <h6 class="text-dark my-2">Items in cart</h6>
                                        @foreach ($cartItems as $item)
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="me-3 position-relative">
                                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill badge-secondary">{{ $item['quantity'] }}</span>
                                                    <img src="{{ $item['image'] }}" style="height: 96px; width: 96px;" class="img-sm rounded border" />
                                                </div>
                                                <div class="">
                                                    <a href="#" class="nav-link">{{ $item['name'] }}</a>
                                                    <div class="price text-muted">Total: ${{ number_format($item['price'] * $item['quantity'], 2) }}</div>
                                                </div>
                                                {{-- <!-- Delete Button -->
                                                <div class="ms-auto">
                                                    <a href="#" onclick="removeProduct({{ $item['id'] }})" class="text-danger"><i class="far fa-window-close"></i></a>
                                                </div> --}}
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                    </div>
                </div>
            </section>
            <!-- end check out section -->
            <script>
                // Calculate subtotal and total dynamically
                document.addEventListener('DOMContentLoaded', function() {
                    var subtotal = {{ $subtotal }};
                    var shipping = {{ $shipping }};
                    var total = {{ $total }};
                    
                    // Calculate subtotal based on cart items
                    var cartItems = @json($cartItems);
                    var subtotalFromItems = cartItems.reduce(function(acc, item) {
                        return acc + (item.price * item.quantity);
                    }, 0);
                    
                    // Update subtotal and total in DOM
                    document.getElementById('subtotal').innerText = '$' + subtotalFromItems.toFixed(2);
                    document.getElementById('total').innerText = '$' + (subtotalFromItems + shipping).toFixed(2);
                });
            </script>
            
    </body>

    </html>
@endsection
