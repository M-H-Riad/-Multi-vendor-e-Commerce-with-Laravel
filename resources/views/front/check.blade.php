@if (Auth::guest())
    <script>
        alert("You need to login first.");
        window.location.href = "/login";
    </script>
@else
    <script>
        window.location.href = "/checkout";
    </script>

@endif