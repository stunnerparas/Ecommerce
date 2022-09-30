@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Ticket Details</h1>
            <div class="section-header-breadcrumb">
                <a class="btn btn-secondary" href="{{ route('admin.tickets.index') }}"><i class="fas fa-arrow-left"></i>
                    Back</a>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            @include('admin.includes.messages')
                            <table class="table table-striped">
                                <tr>
                                    <th>Ticket No</th>
                                    <td>{{ $ticket->ticket_no ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Order No</th>
                                    <td>{{ $ticket->order_no ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $ticket->email ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>+{{ ($ticket->code ?? '') . '-' . ($ticket->phone ?? '') }}</td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td>{{ ($ticket->first_name ?? '') . ' ' . ($ticket->last_name ?? '') }}</td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td>{{ $ticket->address ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Message</th>
                                    <td>{{ $ticket->message ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Date</th>
                                    <td>{{ $ticket->created_at ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>
                                        <span class="badge badge-primary">{{ $ticket->status ?? '' }}</span>
                                    </td>
                                </tr>
                            </table>
                            @if ($ticket->status == 'Pending')
                                <a href="{{ route('admin.tickets.complete', $ticket->id) }}"
                                    class="btn btn-success btn-sm">Mark as
                                    complete</a>
                            @endif

                        </div>
                    </div>
                </div>
            </div>

    </section>
@endsection
