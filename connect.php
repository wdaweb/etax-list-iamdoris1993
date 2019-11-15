<?php

$dsn = "mysql:host=localhost;charset=utf8;dbname=lottery";
$pdo = new PDO($dsn,'root','0303');

function all($table){
    global $pdo;
    $sql = "select * from $table";
    return $pdo->query($sql)->fetchAll();
}

// look up receipt by month
function find($table,$period){
    global $pdo;
    $year = 2019;
    $oddMonth = ($period*2)-1;
    $evenMonth = $period*2;
    $sql = "select * from $table where (month='$oddMonth' or month='$evenMonth') and year='$year'";
    return $pdo->query($sql)->fetchAll();
}

// look up rewards by monthgroup
function findGP($table,$period){
    global $pdo;
    $year = 2019;
    $oddMonth = ($period*2)-1;
    $evenMonth = $period*2;
    $monthGroup = $oddMonth."-".$evenMonth;
    $sql = "select * from $table where month_group='$monthGroup' and year='$year'";
    return $pdo->query($sql)->fetch();
}

function insert($table,$data){
    global $pdo;
    $row = "`".implode("`,`",array_keys($data))."`";
    $value = "'".implode("','",$data)."'";
    $sql = "insert into $table($row) values($value)";
    return $pdo->exec($sql);
}

function deleted($table,$id){
    global $pdo;
    $sql = "delete from $table where id='$id'";
    $pdo->exec($sql);
}

//checked the grand reward
function checked($receiptnum, $grandnum){
    for($i=0; $i<6; $i++){
        if(substr($receiptnum, $i) == substr($grandnum, $i)){
            switch($i){
                case 0:
                    echo "<tr><td>恭喜中獎金20萬元</td>";
                    echo "<td>".$receiptnum."</td></tr>";
                    return 200000;
                    break;
                case 1:
                    echo "<tr><td>恭喜中獎金4萬元</td>";
                    echo "<td>".$receiptnum."</td></tr>";
                    return 40000;
                    break;
                case 2:
                    echo "<tr><td>恭喜中獎金1萬元</td>";
                    echo "<td>".$receiptnum."</td></tr>";
                    return 10000;
                    break;
                case 3:
                    echo "<tr><td>恭喜中獎金4千元</td>";
                    echo "<td>".$receiptnum."</td></tr>";
                    return 4000;
                    break;
                case 4:
                    echo "<tr><td>恭喜中獎金1千元</td>";
                    echo "<td>".$receiptnum."</td></tr>";
                    return 1000;
                    break;
                case 5:
                    echo "<tr><td>恭喜中獎金200元</td>";
                    echo "<td>".$receiptnum."</td></tr>";
                    return 200;
                    break;
            }
        break;
        }
    }
}

//checked the others rewards
function checkOthers($receiptnum, $othersnum){
    if(substr($receiptnum, 5) == $othersnum){
        echo "<tr><td>恭喜中獎金200元</td>";
        echo "<td>".$receiptnum."</td></tr>";
        return 200;
    }
}

?>