<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Kanchan Cashmere</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('admin/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/modules/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('admin/modules/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/modules/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/modules/owlcarousel2/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/modules/owlcarousel2/dist/assets/owl.theme.default.min.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/modules/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/modules/jquery-selectric/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/modules/chocolat/dist/css/chocolat.css') }}">

    <!-- fancybox image -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css"
        type="text/css" media="screen" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css"
        type="text/css" media="screen" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.css" />

    {{-- autocomplete --}}
    <link rel="stylesheet" href="{{ asset('autocomplete/typeahead-1.2.0.min.css') }}">

</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            @include('admin.layouts.nav')
            @include('admin.layouts.sidebar')

            <div class="main-content">
                @yield('content')
            </div>

            @include('admin.layouts.footer')

        </div>
    </div>


    <!-- General JS Scripts -->
    <script src="{{ asset('admin/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/modules/popper.js') }}"></script>
    <script src="{{ asset('admin/modules/tooltip.js') }}"></script>
    <script src="{{ asset('admin/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('admin/modules/moment.min.js') }}"></script>
    <script src="{{ asset('admin/js/stisla.js') }}"></script>

    <!-- JS Libraies -->
    <script src="{{ asset('admin/modules/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('admin/modules/chart.min.js') }}"></script>
    <script src="{{ asset('admin/modules/owlcarousel2/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('admin/modules/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('admin/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('admin/js/page/index.js') }}"></script>
    <script src="{{ asset('admin/modules/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('admin/js/page/forms-advanced-forms.js') }}"></script>
    <script src="{{ asset('admin/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <!-- Template JS File -->
    <script src="{{ asset('admin/js/scripts.js') }}"></script>
    <script src="{{ asset('admin/js/custom.js') }}"></script>

    <!-- fancybox image-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js"></script>

    <!-- Sweetalert-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>

    {{-- datepicker --}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

    {{-- autocomplete --}}
    <script src="{{ asset('autocomplete/bloodhound-1.2.0.min.js') }}"></script>
    <script src="{{ asset('autocomplete/typeahead-1.2.0.min.js') }}"></script>

    @yield('scripts')
    <script>
        $("body").on("change", ".preview-image", function(e) {
            var input = this;
            var nthis = $(this);
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    nthis
                        .parent()
                        .find(".preview-image-src")
                        .attr("src", e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        });

        $(".datepicker").datepicker({
            dateFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true,
            yearRange: "1800:+nn",
        });
    </script>

    <script>
        var filterResult = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            remote: {
                url: "{{ url('admin/search-results?query=%QUERY') }}",
                wildcard: '%QUERY',
            },
        })

        $('#search-input').typeahead({
            minLength: 1
        }, {
            name: 'item',
            source: filterResult, // suggestion engine is passed as the source
            display: function(data) { // display: 'name' will also work
                return data.name;
            },
            templates: {
                empty: [
                    '<div class="empty-message ml-1"> ',
                    'Not Found....',
                    '</div>'
                ].join('\n'),
                suggestion: function(data) {
                    // return '<div><strong class="p-0">' + data.name +
                    //     '</strong> </div>';
                    if(data.type == 'Category'){
                        var url = "{{ URL::to('/admin/categories') }}/" +data.id+ "/edit";
                    }else{
                        var url = "{{ URL::to('/admin/products') }}/" +data.id+ "/edit";
                    }
                    return '<div class="search-item"><a href="'+url+'" style="text-decoration:none;color:#6c757d";font-family: Nunito;font-weight:400>'+
                        '<div class="row">'+
                            '<div class="col-md-3">'+
                                '<img class="mr-3 rounded" width="30" src="{{ asset('images') }}/' +(data.image ? data.image : 'no-image.png') + '" alt="' + data.type + '">'+
                            '</div>' +
                            '<div class="col-md-9">'+
                                data.name +
                                '<br><span style="background:#6777ef;color:#ffff;font-size:10px;padding:2px">'+data.type+'</span>'+
                            '</div>'+
                        '</div>'+
                        '</a></div>';
                },
                pending: function(query) {
                    console.log(query);
                    return '<div class="ml-1">Loading .............</div>';
                }
            }
        });
    </script>

</body>

</html>
