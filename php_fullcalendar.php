<?php
//Database
$data = array();
$link = mysqli_connect("127.0.0.1", "root", "", "ifs");
mysqli_set_charset($link, 'utf8');

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
$query = "SELECT * FROM tb_event";

if ($result = $link->query($query)) {

    /* fetch object array */
    while ($obj = $result->fetch_object()) {
       $data[] = array(
                    'id' => $obj->id,
                    'title'=> $obj->title,
                    'start'=> $obj->start,
                    'end'=> $obj->end
                    );
    }
    /* free result set */
    $result->close();
}
mysqli_close($link);
/*
$array = array(
            array('title'=> 'Long Event',
                    'start'=> '2015-02-07',
                    'end'=> '2015-02-10'),
            array('id'=> 999,
                    'title'=> 'Repeating Event',
                    'start'=> '2015-02-16T16:00:00')
         );
         */

?>
<script>

    $(document).ready(function() {

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,basicWeek,basicDay'
            },
            defaultDate: '<?php echo date('Y-m-d');?>',
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events : <?php echo json_encode($data);?>
        });
    });
</script>
<div id='calendar'></div>
