
<?php
    require "libs/functions.php";
?>



<?php include "partials/_header.php" ?>
<?php include "partials/_navbar.php" ?>

<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Takvim</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- FullCalendar CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css">
  <!-- Custom CSS -->
  <style>
    /* İşaretlenen günleri vurgula */
    .marked {
      background-color: #ffc107; /* Bootstrap'un sarı rengi */
      color: #212529; /* Bootstrap'un metin rengi */
      font-weight: bold;
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div id="calendar"></div>
    </div>
  </div>
</div>

<!-- Bootstrap JS ve Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>

<script>
  $(document).ready(function() {
    
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      select: function(start, end) {
        $('#calendar').fullCalendar('addEventSource', [{
          start: start,
          end: end,
          rendering: 'background',
          className: 'marked'
        }]);
        $('#calendar').fullCalendar('unselect');
      },
      eventRender: function(event, element) {
        if (event.rendering === 'background') {
          element.append(' İşaretlendi');
        }
      },
      dayNamesShort: ['Paz', 'Pzt', 'Sal', 'Çar', 'Per', 'Cum', 'Cmt'],
      dayNames: ['Pazar', 'Pazartesi', 'Salı', 'Çarşamba', 'Perşembe', 'Cuma', 'Cumartesi'],
      monthNamesShort: ['Oca', 'Şub', 'Mar', 'Nis', 'May', 'Haz', 'Tem', 'Ağu', 'Eyl', 'Eki', 'Kas', 'Ara'],
      monthNames: ['Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık'],
      buttonText: {
        today: 'Bugün',
        month: 'Ay',
        week: 'Hafta',
        day: 'Gün'
      }
    });
  });
</script>

</body>
</html>
