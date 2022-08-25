@extends('frontend.layouts.master')
@section('content')
<!-- User profile section -->
<div class="user-profile">
    <div class="container">
        <h2>My Profile</h2>
        <div class="row">
            <!-- User Information -->
            <div class="col-lg-6 left-sec">
                <div class="profile-information-card ">
                    <!-- User Image -->
                    <div class="profile-image">
                        <img src="{{ asset('frontend/assets/images/krishnapokharel.jpg') }}" alt="">

                    </div>
                    <!-- Display user informations -->
                    <!-- user name -->
                    <div class="username py-4">
                        <h2>User Information</h2>
                        <!-- Name -->
                        <div class="name py-2">
                            <label for="name">Name :</label>
                            <input type="text" name="name" value="Krishna Pokharel">
                            <i class="fas fa-pen"></i>

                        </div>

                        <!-- contact-number -->

                        <div class="usernumber py-2">
                            <label for="phone">Contact no :</label>
                            <input type="text" name="phone" value="+977 9745695847">
                            <i class="fas fa-pen"></i>


                        </div>

                        <!-- User email -->
                        <div class="useremail py-2">
                            <label for="mail">E-mail :</label>
                            <input type="text" name="mail" value="krishnapokharel.2022@gmail.com" disabled>


                        </div>
                        <!-- User address -->
                        <div class="useraddress py-2">
                            <label for="address">Address :</label>
                            <input type="text" name="address" value="Old baneswor,Kathmandu 44600">

                        </div>


                    </div>
                    <!-- button -->
                    <div class="button w-100 d-flex justify-content-center">
                        <a href="#" class=secondary-btn>Save</a>
                    </div>




                </div>

            </div>
            <!-- user profile right sec -->
            <div class="col-lg-6 right-sec px-3">
                <!-- Password box -->
                <div class="password-box my-3">
                    <!-- heading -->
                    <div class="heading">
                        <h3>Change Password</h3>
                    </div>
                    <!-- password-form -->
                    <div class="password-form">
                        <form action="">
                            <!-- current password -->
                            <div class="current">
                                <label for="current">Current :</label>
                                <input type="password" class="current-pass" name="current">

                            </div>
                            <!-- New password -->
                            <div class="new">
                                <label for="new">New :</label>
                                <input type="password" class="new-pass" name="new">
                            </div>

                            <!-- confirm password -->
                            <div class="confirm">
                                <label for="confirm">Confirm :</label>
                                <input type="password" name="confirm">
                            </div>
                            <div class="button w-100 d-flex justify-content-center">
                                <a href="#" class="secondary-btn">Change</a>

                            </div>
                        </form>
                    </div>


                </div>
                <!-- end -->
                <!-- recent orders -->
                <div class="user-order">
                    <!-- heading -->
                    <div class="heading">
                        <h2 style="font-size: 30px;">Recent Orders</h2>
                        <a href="#">See all <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <!-- product 1 start -->
                    <div class="user-product-container d-flex py-2 justify-content-between">
                        <!-- image -->
                        <div class="product-name-image d-flex">
                        <div class="image">
                            <img src="{{ asset('frontend/assets/images/classic-collection/DSC03699.jpg') }}" class="w-100 h-100" alt="">
                        </div>
                        <!-- product name -->
                        <div class="title px-4">
                            <h4>Long Cardian</h4>
                            <h5 class="py-1">Small</h5>
                        </div>

                        </div>
                       
                        <!-- product-rate -->
                        <div class="product-rate" style="text-align: end;">
                            <h4>Rs 400</h4>
                            <h5 class="py-1">Qty 3</h5>
                        </div>
                        
                    </div>
                    <!-- end -->
                     <!-- product 2 start -->
                     <div class="user-product-container d-flex py-2 justify-content-between">
                        <!-- image -->
                        <div class="product-name-image d-flex">
                        <div class="image">
                            <img src="{{ asset('frontend/assets/images/classic-collection/DSC03699.jpg') }}" class="w-100 h-100" alt="">
                        </div>
                        <!-- product name -->
                        <div class="title px-4">
                            <h4>Long Cardian</h4>
                            <h5 class="py-1">Small</h5>
                        </div>

                        </div>
                       
                        <!-- product-rate -->
                        <div class="product-rate" style="text-align: end;">
                            <h4>Rs 400</h4>
                            <h5 class="py-1">Qty 3</h5>
                        </div>
                        
                    </div>
                    <!-- end -->
                </div>


            </div>
        </div>
    </div>
</div>


@endsection