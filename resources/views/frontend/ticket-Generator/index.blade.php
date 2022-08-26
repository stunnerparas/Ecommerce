@extends('frontend.layouts.master')
@section('content')
<!-- TicketGenerator Form -->
<section class="ticketGenerator py-5">
    <div class="icon">
        <i class="fas fa-gears"></i>
    </div>
    <div class="container">
        <h2 class="text-center">Generate Your Ticket</h2>
        <p class="text-center">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam
            debitis unde cumque, odio, molestiae sit ab et nulla, officiis
            assumenda consequuntur iusto saepe nesciunt. Iure deleniti totam
            expedita, ea est vitae nihil dolorem voluptates dignissimos
            exercitationem mollitia doloribus rem blanditiis error voluptatem,
            quos sit vel excepturi voluptas voluptatibus enim consectetur
            quibusdam repellat. Debitis architecto, natus in neque ipsum mollitia
            at!
        </p>
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
                <button type="submit" class="secondary-btn">Generate Ticket <i class="fas fa-arrow-right"></i></button>
            </div>
        </form>
    </div>
</section>







@endsection