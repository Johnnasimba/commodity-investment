
<div class="ch-dropdown-wrapper" id="dropdown">
    <div class="dropdown-container">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
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
  
</script>