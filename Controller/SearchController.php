<?php

class SearchController
{
    private $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function handleRequest()
    {
        $results = [];
        $query = '';

        if (!empty($_GET['q'])) {
            $query = htmlspecialchars($_GET['q']);
            $results = $this->model->search($query);
        }

        include '../views/searchView.php';
    }
}
