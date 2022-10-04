<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Log;

abstract class BaseRepository implements RepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    abstract public function getModel();

    public function setModel()
    {
        $this->model = app()->make($this->getModel());
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function store(array $data)
    {
        return $this->model->store($data);
    }

    public function edit($id)
    {
        return $this->model->edit($id);
    }

    public function update($id, array $data)
    {
        return $this->model->update($id, $data);
    }

    public function delete($id)
    {
        return $this->model->delete($id);
    }

    public function logMsg($exception)
    {
        Log::error($exception->getMessage());
        Log::info($exception->getMessage());
        Log::debug($exception->getMessage());
    }

    public function index()
    {
        return $this->model->index();
    }
}
