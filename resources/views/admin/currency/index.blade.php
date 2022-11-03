@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Currencies</h1>
            <div class="section-header-breadcrumb">
                @can('View Currency')
                    <a class="btn btn-primary" href="{{ route('admin.currency.create') }}"><i class="fas fa-plus"></i>
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
                            @if ($currencies->count() > 0)
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Currency</th>
                                            <th scope="col">Symbol</th>
                                            <th scope="col">Rate</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($currencies as $currency)
                                            <tr>
                                                <td>{{ $currency->currency ?? '' }}</td>
                                                <td>{{ $currency->symbol ?? '' }}</td>
                                                <td>{{ $currency->rate ?? '' }}</td>

                                                <td>
                                                    <div class="row">
                                                        @if ($currency->currency != 'USD')
                                                            @can('Edit Currency')
                                                                <a class="btn btn-success mr-1"
                                                                    href="{{ route('admin.currency.edit', $currency->id) }}">Edit</a>
                                                            @endcan

                                                            @can('Delete Currency')
                                                                <form class=""
                                                                    action="{{ route('admin.currency.destroy', $currency->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="btn btn-danger delete-currency"
                                                                        type="submit">
                                                                        Delete
                                                                    </button>
                                                                </form>
                                                            @endcan
                                                        @endif

                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                {{ $currencies->links() }}
                            @else
                                <h5>No Currency Found !!</h5>
                            @endif

                        </div>
                    </div>
                </div>
            </div>

    </section>
@endsection

@section('scripts')
    <script>
        $('.delete-currency').click(function(e) {
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
