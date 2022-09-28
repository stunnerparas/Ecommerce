@extends('frontend.layouts.master')
@section('content')
<!-- TicketGenerator Form -->
<section class="ticketGenerator py-5">
    <div class="icon">
        <i class="fas fa-gears"></i>
    </div>
    <div class="container">
        <h2 class="text-center">Generate Your Ticket</h2>
       
        <form>
            <div class="row my-3">
                <div class="col-sm-6 col-12 mb-3 mb-sm-0">
                    <!-- First Name-->
                    <input type="text" class="form-control p-4" placeholder="First Name" />
                </div>
                <div class="col-sm-6 col-12">
                    <!-- Last Name  -->
                    <input type="text" class="form-control p-4" placeholder="Last Name" />
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <!-- Address  -->
                    <input type="text" class="form-control p-4" placeholder=" Address " />
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <!-- Order Number -->
                    <input type="text " class="form-control p-4" placeholder="Order Number (optional) " />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <!-- Your Description -->
                    <textarea name="description" id="description" placeholder="Your Message Here" cols="30" rows="10" class="w-100"></textarea>
                </div>
            </div>
            <div class="button w-100 d-flex justify-content-center">
                <a href="{{route('thankYou')}}" type="submit" class="secondary-btn">Generate Ticket</a>
            </div>
        </form>
    </div>
</section>







@endsection