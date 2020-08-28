<div class="welcome-section content-hidden">
        <div class="content-wrap">
            <ul class="fly-in-text">
                <li>W</li>
                <li>E</li>
                <li>L</li>
                <li>C</li>
                <li>O</li>
                <li>M</li>
                <li>E</li>
            </ul>
            <a href="#" class="enter-button">ENTER</a>
        </div>
    </div>
    <script type="text/javascript">
    $(function(){
        var welcomeSection = $('.welcome-section'),
        enterButton = welcomeSection.find('.enter-button');

        setTimeout(function(){
            welcomeSection.removeClass('content-hidden');

        },800);

        enterButton.on('click', function(e){
            e.preventDefault();
            welcomeSection.addClass('content-hidden').fadeOut();
            document.getElementById("body").style.overflow = "visible";

        })
 
  });


    </script>