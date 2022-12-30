@include('layouts.main.head')
<body class="nk-body bg-lighter npc-default has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">

            @include('layouts.sidebar.index')

            <!-- wrap @s -->
            <div class="nk-wrap ">
            <!-- main header @s -->
                @include('layouts.headbar.index')
            <!-- main header @s -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                    @include('layouts.footbar.index')
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    
</body>    
@include('layouts.main.end')