<?php

namespace App\Repositories;

use Illuminate\Http\Request;

interface RepositoryInterface
{
    public function getAll();

    public function find($id);

    public function store(array $data);

    public function edit($id);

    public function update($id, array $data);

    public function delete($id);

    public function logMsg($exception);

    public function search(Request $request);

    public function index();

}
