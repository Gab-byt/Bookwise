<?php

class Database {

    private $db;

    public function __construct(array $config) {

        if (empty($config)) {
            throw new Exception("Configuração inválida: config não pode ser vazio");
        }

        $this->db = new PDO($this->getDsn($config));
    }

    private function getDsn(array $config) {

        $driver = $config['driver'];

        // SQLITE -> monta e sai
        if ($driver === 'sqlite') {
            return "sqlite:" . $config['database'];
        }

        // MYSQL/POSTGRES
        // remove driver antes de montar query
        unset($config['driver']);

        return $driver . ':' . http_build_query($config, '', ';');
    }

    public function query($query, $class = null, $params = []) {

        $prepare = $this->db->prepare($query);

        if ($class) {
            $prepare->setFetchMode(PDO::FETCH_CLASS, $class);
        }

        $prepare->execute($params);

        return $prepare;
    }
}

$config = require 'config.php';  // ← ESSENCIAL
$database = new Database($config['database']);
