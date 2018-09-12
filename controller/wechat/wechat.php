<?php
include '../core/db.php';

class wechat extends db
{
    public function feed()
    {

        $feed = $this->pdo
            ->query('select * from feed')
            ->fetchAll();
        echo json_encode($feed);

    }

        public function insert()
    {

     $stmt = $this->pdo->prepare("insert into feed (user_name, user_avater, content, pubtime, address, images) values (?,?,?,?,?,?)");
        $stmt->bindValue(1, $_GET['user_name']);
        $stmt->bindValue(2, $_GET['user_avater']);
        $stmt->bindValue(3, $_GET['content']);
        $stmt->bindValue(4, '2018-9-12');
        $stmt->bindValue(5, '学府街');
        $stmt->bindValue(6, '');
 
        echo $stmt->execute();

    }



}