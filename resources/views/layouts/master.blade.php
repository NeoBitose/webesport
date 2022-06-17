<!DOCTYPE html>
<html>

<head>
    @include('layouts.head')
</head>

<body>
    <!-- Sidenav -->
    @include('layouts.sidebar')
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        @include('layouts.navbar')

        <div class="container-fluid mt-4">
            
            @yield('konten')
            
        </div>
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    @include('layouts.script')
    
</body>

</html>
