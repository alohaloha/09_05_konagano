<?php
// 変更したよ
// 反映されるかな
function connect_to_pref_db()
{
    $dbn = 'mysql:dbname=gsacf_l03_05;charset=utf8;port=3306;host=localhost';
    $user = 'root';
    $pwd = '';
    try {
        return new PDO($dbn, $user, $pwd);
    } catch (PDOException $e) {
        exit('dbError:' . $e->getMessage());
    }
}
