

    <!-- Bootstrap JS and Popper.js (required for Bootstrap components) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Moment.js for date and time manipulation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

    <script>
        function updateClock() {
            var saatElement = document.getElementById("saat");
            var simdikiZaman = moment().format("HH:mm:ss");
            saatElement.textContent = simdikiZaman;
        }

        setInterval(updateClock, 1000);
    </script>
</body>
</html>