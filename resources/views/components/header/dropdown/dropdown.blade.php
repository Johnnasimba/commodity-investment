
<div class="ch-dropdown-wrapper" id="dropdown">
    <div class="dropdown-container">
        {{-- Link card class is also used with Jquery for hover effect. Do not change this class without modifying Jquery --}}
        <a href="{{ url('client') }}" class="ch-link-card">
            <span class="iconify dropdown-icon" data-icon="ci:dashboard"></span>
            <h3 class="ch-title">DASHBOARD</h3>
        </a>
        <a href="{{ url('/profile') }}" class="ch-link-card">
            <span class="iconify dropdown-icon" data-icon="healthicons:ui-user-profile-outline"></span>
            <h3 class="ch-title">PROFILE</h3>
        </a>
        <a href="{{ url('/client/no-history') }}" class="ch-link-card">
            <span class="iconify dropdown-icon" data-icon="fa-solid:history"></span>
            <h3 class="ch-title">HISTORY</h3>
        </a>
        <a href="{{ url('/client/profile/upload-docs') }}" class="ch-link-card">
            <span class="iconify" data-icon="fa-solid:file-upload"></span>
            <h3 class="ch-title">UPLOAD DOCS</h3>
        </a>
        <a href="{{ url('/client/profile/unverified-account') }}" class="ch-link-card">
            <span class="iconify dropdown-icon" data-icon="et:wallet"></span>
            <h3 class="ch-title">WALLET</h3>
        </a>
        <a href="{{ url('/user/profile') }}" class="ch-link-card">
            <span class="iconify" data-icon="carbon:user-settings"></span>
            <h3 class="ch-title">ACCOUNT SETTINGS</h3>
        </a>
        <div class="ch-link-card">
            <span class="iconify dropdown-icon" data-icon="ri:logout-circle-line"></span>
            <form method="POST" action="{{ route('logout') }}" class="ch-title">
                @csrf

                <x-jet-responsive-nav-link style="color:#283048;text-decoration:none;padding-top:10px;" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                this.closest('form').submit();">
                    {{ __('LOG OUT') }}
                </x-jet-responsive-nav-link>
            </form>
        </div>
    </div>        
</div>
<script>
    $( "#client-name" ).mouseover(function() {
        $('#dropdown').css('display', 'block');
    });
    $( "#client-name" ).mouseleave(function() {
        $('#dropdown').css('display', 'none');
    });
    $( "#dropdown" ).mouseenter(function() {
        $('#dropdown').css('display', 'block');
    });
    $( "#dropdown" ).mouseleave(function() {
        $('#dropdown').css('display', 'none');
    });

    $('.ch-link-card').mouseenter(function(){
        $(this).addClass("active")
        // $('.dropdown-icon').attr('class', 'active')
    })
    $(".ch-link-card").mouseleave(function(){
        $(this).removeClass("active")
    })
  
</script>