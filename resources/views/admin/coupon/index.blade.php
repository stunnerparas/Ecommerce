@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Coupons</h1>
            <div class="section-header-breadcrumb">
                @can('Create Coupon')
                    <a class="btn btn-primary" href="{{ route('admin.coupon.create') }}"><i class="fas fa-plus"></i>
                        Create</a>
                @endcan
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            @include('admin.includes.messages')
                            @if ($coupons->count() > 0)
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Code</th>
                                            <th scope="col">Limit</th>
                                            <th scope="col">Discount Amount</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($coupons as $coupon)
                                            <tr>
                                                <td>{{ $coupon->code ?? '' }}</td>
                                                <td>{{ $coupon->limit ?? '' }}</td>
                                                <td>{{ $coupon->discount ?? '' }}</td>

                                                <td>
                                                    <div class="row">
                                                        @can('Edit Coupon')
                                                            <a class="btn btn-success mr-1"
                                                                href="{{ route('admin.coupon.edit', $coupon->id) }}">Edit</a>
                                                        @endcan

                                                        @can('Delete Coupon')
                                                            <form class=""
                                                                action="{{ route('admin.coupon.destroy', $coupon->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger delete-coupon" type="submit">
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

                                {{ $coupons->links() }}
                            @else
                                <h5>No Coupons Found !!</h5>
                            @endif

                        </div>
                    </div>
                </div>
            </div>

    </section>
@endsection

@section('scripts')
    <script>
        $('.delete-coupon').click(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                html: 'If you delete this, it will be gone forever.',
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
