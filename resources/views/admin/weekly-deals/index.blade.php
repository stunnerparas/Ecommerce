@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Deals of the week</h1>
            <div class="section-header-breadcrumb">
                @can('Create Deal Of The Week')
                    <a class="btn btn-primary" href="{{ route('admin.deals.create') }}"><i class="fas fa-plus"></i>
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
                            @if ($deals->count() > 0)
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Image</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Link</th>
                                            <th scope="col">End Day</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($deals as $deal)
                                            <tr>
                                                <td>
                                                    <a href="{{ asset('images/' . ($deal->image ?: 'no-image.png')) }}"
                                                        data-fancybox="demo" class="fancybox">
                                                        <img src="{{ asset('images/' . ($deal->image ?: 'no-image.png')) }}"
                                                            alt="{{ $deal->title }}" style="height: 50px">
                                                    </a>
                                                </td>
                                                {{-- <td>{{ $slider->heading }}</td> --}}
                                                <td>{{ $deal->title }}</td>
                                                <td>{{ $deal->btn_link }}</td>
                                                <td>{{ \App\Models\WeeklyDeal::days[$deal->end_day] }}</td>

                                                <td>
                                                    <div class="row">
                                                        @can('Edit Deal Of The Week')
                                                            <a class="btn btn-success mr-1"
                                                                href="{{ route('admin.deals.edit', $deal->id) }}">Edit</a>
                                                        @endcan

                                                        @can('Delete Deal Of The Week')
                                                            <form class=""
                                                                action="{{ route('admin.deals.destroy', $deal->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger delete-deal" type="submit">
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

                                {{ $deals->links() }}
                            @else
                                <h5>No record Found !!</h5>
                            @endif

                        </div>
                    </div>
                </div>
            </div>

    </section>
@endsection

@section('scripts')
    <script>
        $('.delete-deal').click(function(e) {
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
