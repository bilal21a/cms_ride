<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PCHL</title>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend/header/header/tittle_icon.png') }}">
    {{-- <link rel="stylesheet" href="{{ asset('admin/assets/css/ride_page.css') }}"> --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d0a01f8990.js" crossorigin="anonymous"></script>
    @yield('css_after')
</head>

<body>
    @yield('content')
    @include('layouts.partials.footer')
    <div class="modal fade" id="teamModal" tabindex="-1" aria-labelledby="teamModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="team-modal-body">

                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        function showTeam(id) {
            var txt = $('.team_' + id).html()
            $('#teamModal').modal('show')
            var tempDiv = document.createElement('div');
            tempDiv.innerHTML = txt;

            var elementsWithDNoneClass = tempDiv.querySelectorAll('.d-none');
            elementsWithDNoneClass.forEach(function(element) {
                element.classList.remove('d-none');
            });

            var modifiedHTMLString = tempDiv.innerHTML;
            console.log('modifiedHTMLString: ', modifiedHTMLString);
            $('.team-modal-body').html(modifiedHTMLString)
        }
    </script>
</body>

</html>
