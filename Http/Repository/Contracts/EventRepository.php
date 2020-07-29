<?php

namespace Modules\EventManager\Repository\Contracts;

interface EventRepository
{
    public function store($data);
    public function index($username, $limit);
    public function indexByDocument($typeDocument, $idDocument, $limit);
    public function show($idEvent);
}
