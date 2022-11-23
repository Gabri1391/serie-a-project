<!DOCTYPE html>
<html lang="en">
@include('includes.head')

<body>
    @include('includes.header')
    <main>
        <div class="container">
            <div class="card main-card my-5 p-5">
                @yield('content')
            </div>
        </div>
    </main>
</body>
</html>