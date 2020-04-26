<?PHP
$json = [];
$_grade = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
$place  = ["Pekalongan", "Kajen", "Bojong", "Wiradesa", "Kedungwuni", "Linggo Asri"];
for($i = 1; $i <= 100; $i++)
{
    $random_grade = array_rand($_grade, 1);
    $grade        = $_grade[$random_grade];
    $random_place = array_rand($place, 1);
    $gender = ($i % 2 == 0) ? "Male" : "Female";
    $date   = date("Y-m-d", strtotime("-$i day"));
    $json[] = 
    [
        $i,
        'Name number ' . $i,
        $grade,
        $grade >= 70 ? 1 : 0,
        $gender,
        $date,
        $place[$random_place]
    ];
}
echo json_encode($json);