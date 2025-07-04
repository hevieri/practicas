<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario en PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        .calendar-container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #f0f0f0;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
        }
        .calendar-header {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .calendar-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .calendar-day {
            position: relative;
            flex: 1;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
        }
        .today {
            background-color: #cccccc; 
            color: white;
        }
        .evento {
            font-size: 12px;
            color: #007bff;
            position: absolute;
            bottom: -20px;
            left: 0;
            width: 100%;
            padding: 0 5px;
            background-color: white;
        }
        .evento-list {
            margin-top: 20px;
            text-align: center; 
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="calendar-container">
            <div class="calendar-header">Abril 2024</div>
            <div class="calendar-row">
                <div class="calendar-day">Dom</div>
                <div class="calendar-day">Lun</div>
                <div class="calendar-day">Mar</div>
                <div class="calendar-day">Mie</div>
                <div class="calendar-day">Jue</div>
                <div class="calendar-day">Vie</div>
                <div class="calendar-day">Sab</div>
            </div>
            <?php
            date_default_timezone_set("America/Argentina/Buenos_Aires");
            $firstDayOfMonth = date('N', strtotime(date('Y-m-01')));
            $totalDaysOfMonth = date('t');
            $currentDayOfMonth = 1;

        
            $eventos = array(
                '2024-04-10' => array('titulo' => 'Cena con amigos'),
                '2024-04-22' => array('titulo' => 'Ir al dentista')
            );

            echo '<div class="calendar-row">';
            $dayCounter = 1;
            for ($i = 1; $i <= 42; $i++) {
                if ($i >= $firstDayOfMonth && $currentDayOfMonth <= $totalDaysOfMonth) {
                    $day = $currentDayOfMonth++;
                    $isToday = ($day == date('d')) ? 'today' : '';

                    
                    $fecha_actual = date('Y-m-d', strtotime("2024-04-$day"));
                    $evento = isset($eventos[$fecha_actual]) ? $eventos[$fecha_actual]['titulo'] : '';

                    ?>
                    <div class="calendar-day <?php echo $isToday; ?>">
                        <?php if (!empty($evento)) : ?>
                            <div class="evento"><?php echo $evento; ?></div>
                        <?php endif; ?>
                        <span><?php echo $day; ?></span>
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="calendar-day"></div>
                    <?php
                }
                if ($i % 7 == 0 && $i < 42) {
                    echo '</div><div class="calendar-row">';
                }
            }
            echo '</div>';
            ?>
        </div>
    </div>
</body>
</html>


