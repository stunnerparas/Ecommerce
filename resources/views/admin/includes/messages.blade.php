@if (Session::has('message'))
    <div class="alert alert-primary alert-dismissible fade show" role="alert" style="height: 50px;padding: 10px 20px;">
        <p>{{ Session::get('message') }}</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if (Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" style="height: 50px;padding: 10px 20px;">
        <p>{{ Session::get('success') }}</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if (Session::has('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert" style="height: 50px;padding: 10px 20px;">
        <p>{{ Session::get('error') }}</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
