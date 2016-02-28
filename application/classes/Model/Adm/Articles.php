<?php

defined('SYSPATH') or die('No direct script access.');

class Model_Adm_Articles extends Model {

    protected $_tableArticles = 'articles';

    /**
     * Get all articles
     * @return array
     */
    public function get_all() {
        $sql = "SELECT *, DATE_FORMAT(date, '%e-%m-%Y') AS 'date' FROM " . $this->_tableArticles . " ORDER BY date DESC, id DESC LIMIT 3";

        return DB::query(Database::SELECT, $sql)
                        ->execute();
    }
		
		public function get_count() {
				$sql = "SELECT COUNT(*) AS 'count' FROM " . $this->_tableArticles;
				
				$query = DB::query(Database::SELECT, $sql)
												->execute();

						$count = $query->as_array();

				return $count[0];
		}

    public function get_article($id = '') {
        $sql = "SELECT *, DATE_FORMAT(date, '%e %M %Y') AS date FROM " . $this->_tableArticles . " WHERE `id` = :id";

        $query = DB::query(Database::SELECT, $sql, FALSE)
                ->param(':id', (int) $id)
                ->execute();

        $result = $query->as_array();

        if ($result)
            return $result[0];
        else
            return FALSE;
    }

}
