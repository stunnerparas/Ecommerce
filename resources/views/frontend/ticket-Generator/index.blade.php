@extends('frontend.layouts.master')
@section('content')
    <!-- TicketGenerator Form -->
    <section class="ticketGenerator py-5">
        <div class="icon">
            <i class="fas fa-gears"></i>
        </div>
        <div class="container">
            <h2 class="text-center">Generate Your Ticket</h2>

            <form method="POST" action="{{ route('generate.ticket') }}">
                @csrf
                <input type="hidden" name="email" value="{{ $request->email ?? '' }}" id="">
                <input type="hidden" name="phone" value="{{ $request->phone ?? '' }}" id="">
                <input type="hidden" name="code" value="{{ $request->code ?? '' }}" id="">
                <div class="row my-3">
                    <div class="col-sm-6 col-12 mb-3 mb-sm-0">
                        <!-- First Name-->
                        <input type="text" required name="first_name" class="form-control p-4" placeholder="First Name" />
                    </div>
                    <div class="col-sm-6 col-12">
                        <!-- Last Name  -->
                        <input type="text" required name="last_name" class="form-control p-4" placeholder="Last Name" />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <!-- Address  -->
                        <input type="text" required name="address" class="form-control p-4" placeholder=" Address " />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <!-- Order Number -->
                        <input type="text " name="order_no" class="form-control p-4"
                            placeholder="Order Number (optional) " />
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <!-- Your Description -->
                        <textarea required name="message" id="description" placeholder="Your Message Here" cols="30" rows="10" class="w-100"></textarea>
                    </div>
                </div>
                <div class="button w-100 d-flex justify-content-center">
                    <button type="submit" class="secondary-btn">Generate Ticket</button>
                </div>
            </form>
        </div>
    </section>
@endsection
