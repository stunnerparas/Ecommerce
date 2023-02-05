@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Tickets ({{ $tickets->total() }})</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            @include('admin.includes.messages')
                            @if ($tickets->count() > 0)
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Ticket No</th>
                                            <th scope="col">Order No</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Full Name</th>
                                            <th scope="col">Date/Time</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tickets as $ticket)
                                            <tr>
                                                <td>{{ $ticket->ticket_no ?? '' }}</td>
                                                <td>{{ $ticket->order_no ?? '' }}</td>
                                                <td>{{ $ticket->email ?? '' }}</td>
                                                <td>+{{ ($ticket->code ?? '') . '-' . ($ticket->phone ?? '') }}</td>
                                                <td>{{ ($ticket->first_name ?? '') . ' ' . ($ticket->last_name ?? '') }}
                                                </td>
                                                <td>{{ $ticket->created_at ?? '' }}</td>
                                                <td>{{ $ticket->status ?? '' }}</td>
                                                <td>
                                                    <a href="{{ route('admin.tickets.show', $ticket->id) }}"
                                                        class="btn btn-success btn-sm">View</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                {{ $tickets->links() }}
                            @else
                                <h5>No Records !!</h5>
                            @endif

                        </div>
                    </div>
                </div>
            </div>

    </section>
@endsection
