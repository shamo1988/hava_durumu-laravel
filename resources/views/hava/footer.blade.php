<section class="footer">
   
    <!-- 2ND ROW ENDS -->
    <!-- 3RD ROW STARTS -->
    <div class="row3">
        <div class="container">
            <div class="row">
                <div style="font-size:20px;" class="col-lg-12 copyright">ⒸCreated by <a href="https://www.facebook.com/Shamo.Hasanov" target="_blank">Shamo Hasanov</a>/ Hava proqnozu weather.day.az tərəfindən təqdim olunub.</div>
            </div>
        </div>
    </div>
    <!-- 3RD ROW ENDS -->
</section>
   
</body>
<script src="{{ url('js/ajax.js') }}"></script>

<script src="{{ url('js/jquery.dd.js') }}"></script>

<script >
$(document).ready(function(){
    $('#dil').change(function(){
    if($(this).val()=="aze"){
        window.location.href = '/az';
    }
   else if($(this).val()=="rus"){
        window.location.href = '/ru';
    }
    else if($(this).val()=="en"){
        window.location.href = '/en';
    }
    });
});

    </script>

<script>
$(document).ready(function() {
$("#dil").msDropdown();
})
</script>


</html>