@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Orders</h1>
            {{-- <div class="section-header-breadcrumb">
                <a class="btn btn-primary" href=""><i class="fas fa-plus"></i>
                    Create</a>
            </div> --}}
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            @include('admin.includes.messages')
                            @if ($orders->count() > 0)
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Order Number</th>
                                            <th scope="col">Customer</th>
                                            <th scope="col">Payment Method</th>
                                            <th scope="col">Currency</th>
                                            <th scope="col">Total Amount</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Order Time</th>
                                            <th scope="col">Seen</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $key => $order)
                                            <tr>
                                                <td>{{ $order->order_number }}</td>
                                                <td>{{ $order->user->name ?? 'Not Registered' }}</td>
                                                <td>{{ $order->payment_method ?: 'NA' }}</td>
                                                <td>{{ $order->currency ?? '' }}</td>
                                                <td>{{ $order->total_amount }}</td>
                                                <td>{{ $order->status }}</td>
                                                <td>{{ date('Y-m-d, h:i A', strtotime($order->created_at)) }}</td>
                                                <td>{{ $order->is_seen ? 'Seen' : '' }}</td>

                                                <td>
                                                    <div class="row">
                                                        @can('View Order Details', $post)
                                                            <a class="btn btn-success mr-1"
                                                                href="{{ route('admin.orders.items', $order->id) }}">View</a>
                                                        @endcan

                                                        @can('Delete Order')
                                                            <form class=""
                                                                action="{{ route('admin.orders.delete', $order->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger delete-order" type="submit">
                                                                    Delete
                                                                </button>
                                                            </form>
                                                        @endcan

                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                {{ $orders->links() }}
                            @else
                                <h5>No Orders Found !!</h5>
                            @endif

                        </div>
                    </div>
                </div>
            </div>

    </section>
@endsection

@section('scripts')
    <script>
        $('.delete-order').click(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                html: 'If you delete this, you can recover this from trash.',
                showDenyButton: true,
                confirmButtonText: 'Yes',
                denyButtonText: `No`,
                icon: 'warning'
            }).then((result) => {
                if (result.isConfirmed) {
                    $(this).closest("form").submit();
                }
            })
        })
    </script>
@endsection
