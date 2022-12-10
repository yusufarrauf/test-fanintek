<?php

$array =  [10, 20, 20, 10, 10, 30, 50, 10, 20];
$answer = [];
foreach($array as $data){
    if(!in_array($data, $answer)){
        array_push($answer, $data);
    }
}
$answer = array_slice($answer, 0, 3);
echo "Jawaban 1A ";
echo '<br>Output : '. count($answer) . ' [' . implode(", ", $answer) . "]<br><br>";

$array =  [6, 5, 2, 3, 5, 2, 2, 1, 1, 5, 1, 3, 3, 3, 5];
$answer = [];
for($i = 1; $i <= 6; $i++){
    if (!in_array($i, $answer)) {
        array_push($answer, $i);
    }
}

$answer = array_slice($answer, 0, 6);
echo "Jawaban 1B ";
echo '<br>Output : ' . count($answer) . ' [' . implode(", ", $answer) . "]<br><br>";

$array =  [1, 1, 3, 1, 2, 1, 3, 3, 3, 3];
$answer = array_filter(array_count_values($array), function($v) { return $v == 4;});
$value = intval(implode("", $answer));
$data = [];
for($i=0; $i < $value; $i++){
    array_push($data, array_search(4, $answer));
}
echo "Jawaban 1C ";
echo '<br>Output : ' . $value . ' [' . implode(", ", $data) . "]<br><br><br>";

$string = "Saat meng*ecat tembok, Agung dib_antu oleh Raihan.";
$answer = explode(" ", $string);
foreach($answer as $key=>$data){
    if (preg_match('/[\'^£$%&*()}{@#~><>,|=_+¬-]/', $data)) {
        $answer = $answer[$key];
        $string = $answer;
        break;
    }
}
$chars = str_split($answer);
foreach ($chars as $key => $data) {
    if (preg_match('/[\'^£$%&*()}{@#~><>,|=_+¬-]/', $data)) {
        $answer = $answer[$key];
        $chars = $key + 1;
        break;
    }
}
echo "Jawaban 2A ";
echo '<br>Output : ' . $chars . ' = ' . $answer . " Didalam Kata '$string'<br><br><br>";

$string = "Berapa u(mur minimal[ untuk !mengurus ktp?";
$answer = explode(" ", $string);
$chars = 0;
$array = [];
foreach ($answer as $key => $data) {
    if (preg_match('/[\'^£$%&*()}{@#~><>[!,|=_+¬-]/', $data)) {
        array_push($array, $data);
        $chars +=1;
    }
}
echo "Jawaban 2B ";
echo '<br>Output : ' . $chars .' Didalam Kata '. implode(", ", $array) . "<br><br><br>";

$string = "Masing-masing anak mendap(atkan uang jajan ya=ng be&rbeda.";
$answer = explode(" ", $string);
$chars = 0;
$array = [];
foreach ($answer as $key => $data) {
    if (preg_match('/[\'^£$%&*()}{@#~><>[!,|=_+¬-]/', $data)) {
        array_push($array, $data);
        $chars += 1;
    }
}
echo "Jawaban 2C ";
echo '<br>Output : ' . $chars . ' Didalam Kata ' . implode(", ", $array) . "<br><br><br>";

?>


