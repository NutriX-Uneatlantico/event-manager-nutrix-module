<?php

namespace Modules\EventManager\Repository\Implementation;

use Modules\EventManager\Entities\Event;
use Modules\EventManager\Repository\Contracts\EventRepository as IEventRepository;

class EventRepository implements IEventRepository
{
    public function store($data)
    {
        return Event::create($data);
    }
    public function index($username, $limit)
    {
        $events = Event::where('username', $username)->orderBy('created_at', 'desc')->paginate($limit);
        return $events;
    }
    public function indexByDocument($typeDocument, $idDocument, $limit)
    {
        $events = Event::where('document_type', $typeDocument)->where('document_id', $idDocument)->orderBy('created_at', 'desc')->paginate($limit);
        return $events;
    }

    public function show($idEvent)
    {
        $event = Event::findOrFail($idEvent);
        return $event;
    }
}
