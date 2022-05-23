@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>
                @if ($parentAttribute)
                    Values ({{ $parentAttribute->name }})
                @else
                    Attributes
                @endif
            </h1>
            <div class="section-header-breadcrumb">
                @if ($parent == 0)
                    <a class="btn btn-primary" href="{{ route('admin.attributes.create') }}"><i class="fas fa-plus"></i>
                        Create</a>
                @else
                    <a class="btn btn-primary" href="{{ route('admin.attributes.create', ['parent' => $parent]) }}"><i
                            class="fas fa-plus"></i>
                        Create</a>
                @endif
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            @include('admin.includes.messages')
                            @if ($attributes->count() > 0)
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Show</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($attributes as $key => $attribute)
                                            <tr>
                                                <td>{{ $attribute->name }}</td>
                                                <td>{{ $attribute->show }}</td>
                                                <td>
                                                    <div class="row">
                                                        @if (!$parent)
                                                            <a class="btn btn-primary mr-1"
                                                                href="{{ route('admin.attributes.index', ['parent' => $attribute->id]) }}">Values</a>
                                                        @endif

                                                        @if (!$parent)
                                                            <a class="btn btn-success mr-1"
                                                                href="{{ route('admin.attributes.edit', $attribute->id) }}">Edit</a>
                                                        @else
                                                            <a class="btn btn-success mr-1"
                                                                href="{{ route('admin.attributes.edit', ['attribute' => $attribute->id, 'parent' => $parent]) }}">Edit</a>
                                                        @endif

                                                        <form class=""
                                                            action="{{ route('admin.attributes.destroy', $attribute->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger delete-attribute" type="submit">
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @if ($parent)
                                    {{ $attributes->appends($params)->links() }}
                                @else
                                    {{ $attributes->links() }}
                                @endif
                            @else
                                <h5>No Attributes Found !!</h5>
                            @endif

                        </div>
                    </div>
                </div>
            </div>

    </section>
@endsection

@section('scripts')
    <script>
        $('.delete-attribute').click(function(e) {
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
