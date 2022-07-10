@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Newsletters</h1>
            {{-- <div class="section-header-breadcrumb">
                <a class="btn btn-primary" href="{{ route('admin.faqs.create') }}"><i class="fas fa-plus"></i>
                    Create</a>
            </div> --}}
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            @include('admin.includes.messages')
                            @if ($newsletters->count() > 0)
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Email</th>
                                            <th scope="col">Date/Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($newsletters as $newsletter)
                                            <tr>
                                                <td>{{ $newsletter->email }}</td>
                                                <td>{{ $newsletter->created_at->diffForHumans() }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                {{ $newsletters->links() }}
                            @else
                                <h5>No Records !!</h5>
                            @endif

                        </div>
                    </div>
                </div>
            </div>

    </section>
@endsection

