@extends('frontend.layouts.master')

@section('content')
    <div class="container-fluid main-container">
        <div class="container my-5 text-center">
            <h3 class="page-heading mb-3  fw-bold heading">My Cart</h3>
            <div class="cart-info-container">
                <div id="cart-view"></div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(function() {
            loadCart();
        })

        function loadCart() {
            $.ajax({
                url: "{{ route('cartItems.view') }}",
                type: "GET",
                success: function(data) {
                    $('#cart-view').html(data);
                },
                error: function(data) {
                    alert("Some Problems Occured!");
                },
            });
        }
    </script>

    <script>
        $(document).on('click', '.btn-increase', function(e) {
            var id = $(this).attr('value');

            $.ajax({
                url: "{{ url('view-items/cart/increase') }}" + "/" + id,
                type: "GET",
                success: function(data) {
                    loadCart();
                },
                error: function(data) {
                    alert("Some Problems Occured!");
                },
            });
        })

        $(document).on('click', '.btn-decrease', function(e) {
            var id = $(this).attr('value');

            $.ajax({
                url: "{{ url('view-items/cart/decrease') }}" + "/" + id,
                type: "GET",
                success: function(data) {
                    loadCart();
                },
                error: function(data) {
                    alert("Some Problems Occured!");
                },
            });
        })

        $(document).on('click', '.btn-remove-cart', function(e) {
            var id = $(this).attr('value');

            $.ajax({
                url: "{{ url('view-items/cart/remove') }}" + "/" + id,
                type: "GET",
                success: function(data) {
                    loadCart();
                },
                error: function(data) {
                    alert("Some Problems Occured!");
                },
            });
        })
    </script>
@endsection
