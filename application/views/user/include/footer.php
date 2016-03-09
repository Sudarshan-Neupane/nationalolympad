<footer>
    <div class="copy_write">
        
        <p class="text-center bottom-padding10 copy-right top-padding10">Copyright &copy; 2014. All rights reserved National Olympiad | Powered BY :<a href="http://www.pangolinweb.com" style="color: #ffffff;">Pangolin Web Solution</a> </p>
        
    </div>
</footer>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

</script>
<script type="text/javascript">
    $(function() {

        $('#default').slidy();

        $('#pause').slidy({
            animation: 'fade',
            cursor: 'wait',
            pause: true,
            speed: 1700
        });


    });
</script>

<script type="text/javascript">

    $(function() {
        $('#vertical-ticker').totemticker({
            next: '#ticker-next',
            previous: '#ticker-previous',
            stop: '#stop',
            start: '#start',
            mousestop: true,
        });
    });
</script>
 
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</body>
</html>