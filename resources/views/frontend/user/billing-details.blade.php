@extends('frontend.layouts.master')

@section('content')
    <div class="container-fluid my-5">
        <div class="container">
            <div class="edit-container mt-3">
                <form action="{{ route('billing.details.update') }}" method="POST">
                    @include('frontend.includes.messages')
                    @csrf
                    <div class="shipping-form-inner">
                        <div class="h4 mb-3">Billing Details</div>
                        <div class="row my-3">
                            <div class="col-sm-6 col-12 mb-3 mb-sm-0">
                                <!-- First Name for shipping -->
                                <input type="text" value="{{ $billing->full_name ?? '' }}" name="full_name"
                                    class="form-control p-4" placeholder="Full Name">
                            </div>
                            <div class="col-sm-6 col-12">
                                <!-- Last Name for shipping -->
                                <input type="email" value="{{ $billing->email ?? '' }}" name="email"
                                    class="form-control p-4" placeholder="Email">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <!-- Address of shipping -->
                                <input type="text" value="{{ $billing->address ?? '' }}" name="address"
                                    class="form-control p-4" placeholder=" Address ">
                            </div>
                        </div>
                        <div class="row mb-3 ">
                            <div class="col ">
                                <!-- Apartment number, suite number -->
                                <input type="text " value="{{ $billing->apartment ?? '' }}" name="apartment"
                                    class="form-control p-4 " placeholder="Apartment, suite, (optional) ">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-4 col-6">
                                <!-- City for shipping -->
                                <input type="text " name="city" value="{{ $billing->city ?? '' }}"
                                    class="form-control p-4 " placeholder="City">
                            </div>
                            <div class="col-sm-4 col-6 mb-3 mb-sm-0">
                                <!-- State for shipping -->
                                <input type="text " name="state" value="{{ $billing->state ?? '' }}"
                                    class="form-control p-4 " placeholder="State">
                            </div>
                            <div class="col-sm-4 col-12">
                                <!-- Zip code for shipping -->
                                <input type="text " name="postal_code" value="{{ $billing->postal_code ?? '' }}"
                                    class="form-control p-4 " placeholder="Postal Code">
                            </div>
                        </div>
                        <div class="row mb-3 ">
                            <div class="col ">
                                <input type="text " value="{{ $billing->country ?? '' }}" name="country"
                                    class="form-control p-4 " placeholder="Country">
                            </div>
                        </div>
                        <div class="row mb-3 ">
                            <div class="col ">
                                <!-- Contact information for shipping -->
                                <input type="text " name="phone" value="{{ $billing->phone ?? '' }}"
                                    class="form-control p-4 " placeholder="Phone">
                            </div>
                        </div>

                    </div>
                    <div class="form-group mt-4">
                        <button type="submit" class="saveChangeBtn btn primary-btn p-4">SAVE CHANGES</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
