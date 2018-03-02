<!DOCTYPE html>
<html>
<head>
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</head>
<body>
<div class="navbar">
    <button id="fadeout_button">FadeOut</button>
    <button id="fadein_button">FadeIn</button><hr>
    <button id="hide_button">Hide</button>
    <button id="show_button">Show</button>
</div>

<div id="target">
    <p id="fade_targ">Faded</p><hr>
    <p id="toggle_targ">Toggled</p>
</div>
<div class="vot">

</div>

<script>
    $(document).ready(function(){

        $("#fadeout_button").click(function(){
            $("#fade_targ").fadeOut(800);
            $(".vot").show();
            $(".vot").text('Вот ты и кликнул. А ты переживал');
        });

        $("#fadein_button").click(function(){
            $("#fade_targ").fadeIn(800);
            $(".vot").hide();
        });

        $("#hide_button").click(function(){
            $("#toggle_targ").hide();
        });

        $("#show_button").click(function(){
            $("#toggle_targ").show();
        });

    });
</script>

</body>
</html>
