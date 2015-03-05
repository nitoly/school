<?php 
	
	require_once __DIR__ . '/../classes/DB.php';

    class News {

        public $id;
        public $title;
        public $new;

       public static function getAll() {
        $db = new DB();
            return $db->queryAll('SELECT * FROM news', 'News');
        }

        public static function getOne($id) {
            $db = new DB();
            return $db->queryOne('SELECT * FROM news WHERE id='. $id, 'News');
        }
        public static function putAll($data) {
            $sql = "INSERT INTO news
            (title, new)
            VALUES
           ('" . $data['title'] ."', '" . $data['new'] ."')";
           new DB();
            mysql_query($sql);
          }
        }

?>