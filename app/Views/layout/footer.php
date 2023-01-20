    <!-- JS -->
     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>

        <script type="text/javascript">
            var myAudio = document.getElementById("Audio");
            var isPlaying = true;
            function togglePlay(){
                myAudio.play();
                terakhir = document.querySelector('#box');
                terakhir.classList.add('hide');
            };
        </script>
</body>

</html>