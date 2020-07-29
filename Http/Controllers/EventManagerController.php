<?php

namespace Modules\EventManager\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\EventManager\Repository\Contracts\EventRepository;
use Modules\EventManager\Transformers\EventCollection;
use Modules\EventManager\Transformers\EventResource;

class EventManagerController extends Controller
{
    protected $eventRepository;
    public function __construct(EventRepository $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }

    public function index(Request $request)
    {
        $user = $request->user();
        $limit = $request->query('limit', 20);
        $events = $this->eventRepository->index($user->username, $limit);
        return new EventCollection($events);
    }

    public function indexByDocument(Request $request, $documentType, $documentId)
    {
        $limit = $request->query('limit', 20);
        $events = $this->eventRepository->indexByDocument($documentType, $documentId, $limit);
        return new EventCollection($events);
    }

    public function show($id)
    {
        $event = $this->eventRepository->show($id);
        return new EventResource($event);
    }
}
