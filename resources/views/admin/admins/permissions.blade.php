@extends('admin.layouts.master')

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 style="float: left" class="card-title">{{ __('User') . ' (' . $user->name . ')' }}</h4>

                <form id="user-create-form" action="{{ route('user.assign.permissions', $user->id) }}" method="POST"
                    enctype="multipart/form-data" class="forms-sample mt-5">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">{{ __('Permissions') }}</label>
                        <div class="row row-cols-2">
                            @foreach ($permissions as $key => $permission)
                                <div class="div mt-4">
                                    <input type="checkbox" child-class="{{ $key }}" class="select-all" name=""
                                        value="">
                                    {{ $key }}

                                    @foreach ($permission as $item)
                                        <div class="ml-4">
                                            <input @if (in_array($item->id, $userPermissions)) {{ 'checked' }} @endif
                                                type="checkbox" class="{{ $key }}" name="permission[]"
                                                value="{{ $item->id }}">
                                            {{ $item->name }}
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                            @error('permission')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary btn-sm mt-5">{{ __('Submit') }}</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('.select-all').click(function(e) {
            var childclass = $(this).attr('child-class');
            if ($(this).prop('checked')) {
                $('.' + childclass).prop('checked', true);
            } else {
                $('.' + childclass).prop('checked', false);
            }
        })
    </script>
@endsection
