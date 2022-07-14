<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{ asset('css/style-reset.css') }}">
<link rel="stylesheet" href="{{ asset('css/style-navbar.css') }}">
@yield('extra-css')
@yield('title')
<script>
            function toggleNav() {
                var x=document.getElementsByTagName('nav');
                if (x.style.display === "block") {
                    x.style.display ="none";
                }
                else {
                    x.style.display="block";
                }
            }
</script>
