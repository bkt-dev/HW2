<?php

function task1(array $strings, bool $return = true)
{
    $result = implode("\n", array_map(function (string $str){
        return "<p>$str</p>";
    }, $strings));

  if ($return){
    return $result;
}
  echo $result;
}


function task2(string $action, ...$args)
{
    switch($action) {
        case '+':
            return array_sum($args);
        case '-':
            return array_shift($args) - array_sum($args);
        case '/':
            $result = array_shift($args);
            foreach ($args as $arg) {
                $result = $result / $arg;
            }
            return $result;
        case '*':
            $result = 1;
            foreach ($args as $arg){
                $result *= $arg;
            }


    }
}

function task3(int $a, int $b)
{
    if (!is_int($a)){
        trigger_error('a not int');
            return false;
    }
    if (!is_int($b)){
        trigger_error('b not int');
        return false;
    }

    $result = '<table>';
    for ($i = 1; $i < $a; $i++){
        $result .= '<tr>';
        for ($j = 1; $j < $b; $j++){
            $result .= '<td>';
            $result .= $i * $j;
            $result .= '</td>';
        }
        $result .= '</tr>';
    }
    $result .= '</table>';
    echo $result;
}

function my_file_get_contents(string $filename)
{
    $fp = fopen($filename, 'r');
    if (!$fp) {
        return false;
    }

    $str = '';
    while (!feof($fp)) {
        $str .= fgets($fp, 1024);
    }
    echo $str;
}
