<?php

class db extends db_orm {

    private $pdo = NULL;

    public function __construct(array $db_data) {

        try {
            $this->pdo = new PDO("mysql:dbname=" . $db_data['dbname'] . ";host=" . $db_data['host'], $db_data['user'], $db_data['password']);
        } catch (PDOException $e) {
            dump($e, 'PDO Exception');
        }

    }

    public function get($table = '', $fields = '', $where = array(), $group = array(), $order = array()) {

        if (empty($fields)) {
            $fields = '*';
        }

        $sql = 'SELECT ' . $fields . ' FROM ' . $table ;

        foreach (array('where', 'group', 'order') AS $value) {

            if (!empty($$value)) {
                $sql .= ' ' . strtoupper($value) . ' ' . implode($$value, ' AND ');
            }

        }

        $query = $this->pdo->prepare($sql);
        $query->execute();

        $res = $query->fetch(PDO::FETCH_ASSOC);

        return $res;

    }

    public function save($item) {

        var_dump($item->get_storable_table());
        var_dump($item->get_storable_fields());
        var_dump($item->get_storable_values());

        $sql = 'INSERT ON DUPLICATE KEY UPDATE INTO ' . $item->get_storable_table() . ' (' . $item->get_storable_fields() . ') VALUES ' . $item->get_storable_values();
        $query = $this->pdo->prepare($sql);
        $query->execute();
    }

    public function update($table = '', $fields = '', $values = '', $where = array()) {

    }

    public function delete($table = '', $id) {

    }

}
