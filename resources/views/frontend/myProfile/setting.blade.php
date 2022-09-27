@extends('frontend.layouts.master')
@section('content')


<div class="user-profile">
    <div class="container-fluid">
        <div class="row">
            <!-- Profile Navigation -->
            <div class="col-lg-2 profile-nav">
                <h2 class="py-3">My Profile</h2>
                <!-- Navigation links -->
                <ul>
                    <li><a href="{{route('myProfile')}}"><span class="material-symbols-outlined">
                                home
                            </span>Home</a></li>
                    <li><a href="#"><span class="material-symbols-outlined">
                                settings
                            </span>Setting</a></li>
                    <li><a href="{{route('my-orders')}}"><span class="material-symbols-outlined">
                                shopping_bag
                            </span>My Orders</a></li>
                </ul>


            </div>

            <!-- User Information -->
            <div class="col-lg-5 left-sec">
                <h2>Change Profile:</h2>
                <div class="profile-information-card ">
                    <!-- User Image -->
                    <div class="profile-image">
                        <img src="{{ asset('frontend/assets/images/krishnapokharel.jpg') }}" alt="">

                        <div class="icon">
                            <span class="material-symbols-outlined">
                                photo_camera
                            </span>

                        </div>

                    </div>
                    <!-- Display user informations -->
                    <!-- user name -->
                    <div class="username py-4">
                        <form action="">
                            <div class="full-name">
                                <!-- Name -->
                                <div class="first-name py-2">
                                    <label for="name">Full Name:</label>
                                    <input type="text" name="name" placeholder="Fullname">


                                </div>

                            </div>


                            <!-- contact-number -->

                            <div class="usernumber py-1">
                                <label for="contact">Contact:</label>
                                <input type="text" name="contact" placeholder="Contact no">


                            </div>

                            <!-- User email -->
                            <div class="useremail py-1">
                                <label for="email">Email:</label>
                                <input type="email" name="email" placeholder="Email">


                            </div>
                            <!-- User address -->
                            <div class="useraddress py-1">
                                <label for="address">Address:</label>
                                <input type="text" name="address" placeholder="Address">

                            </div>

                            <div class="button w-100 d-flex justify-content-center my-3">
                                <a href="#" class="secondary-btn" type="submit">Change</a>

                            </div>

                        </form>



                    </div>






                </div>

            </div>
            <div class="col-lg-5">
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
                                <a href="#" class="secondary-btn" type="submit">Change</a>

                            </div>
                        </form>
                    </div>


                </div>
                <!-- end -->
            </div>
        </div>
    </div>
</div>






@endsection