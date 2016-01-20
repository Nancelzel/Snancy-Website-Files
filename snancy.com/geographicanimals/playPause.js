<script type="text/javascript">
   $(function() {
     $(".playback").click(function(e) {
       e.preventDefault();

       // This next line will get the audio element
       // that is adjacent to the link that was clicked.
       var song = $(this).next('audio').get(0);
       if (song.paused)
         song.play();
       else
         song.pause();
     });
   });
</script>