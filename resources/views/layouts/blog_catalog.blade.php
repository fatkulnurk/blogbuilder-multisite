@include('layouts.components.app_bulma_header')
{{--@include('layouts.components.sub_navbar_bulma')--}}

@yield('content')
<footer class="footer">
    <div class="container has-text-centered">
        <p>&copy; Dcom - Platform Publikasi & Social Media</p>
        <p>Term of service . Policy Privasi . Dmca . Contact</p>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@stack('push-footer')
{{--<script src="{{ asset('js/sticky.js') }}"></script>--}}

<script>

    document.addEventListener('DOMContentLoaded', () => {

        // Get all "navbar-burger" elements
        const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

        // Check if there are any navbar burgers
        if ($navbarBurgers.length > 0) {

            // Add a click event on each of them
            $navbarBurgers.forEach( el => {
                el.addEventListener('click', () => {

                    // Get the target from the "data-target" attribute
                    const target = el.dataset.target;
                    const $target = document.getElementById(target);

                    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                    el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');

                });
            });
        }

    });
</script>
</body>
</html>
