
<div class="ch-dropdown-wrapper" id="dropdown">
    <div class="dropdown-container">
        {{-- Link card class is also used with Jquery for hover effect. Do not change this class without modifying Jquery --}}
        <div class="ch-link-card">
            <span class="iconify dropdown-icon" data-icon="ci:dashboard"></span>
            <a href="{{ url('client') }}">DASHBOARD</a>
        </div>
        <div class="ch-link-card">
            <span class="iconify dropdown-icon" data-icon="healthicons:ui-user-profile-outline"></span>
            <a href="{{ url('client/profile') }}">PROFILE</a>
        </div>
        <div class="ch-link-card">
            <span class="iconify dropdown-icon" data-icon="fa-solid:history"></span>
            <a href="{{ url('/client/no-history') }}">HISTORY</a>
        </div>
        <div class="ch-link-card">
            <span class="iconify dropdown-icon" data-icon="et:wallet"></span>
            <a href="{{ url('/client/profile/unverified-account') }}">WALLET</a>
        </div>
        <div class="ch-link-card">
            <span class="iconify dropdown-icon" data-icon="ri:logout-circle-line"></span>
            <a href="{{ url('client') }}">LOG OUT</a>
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