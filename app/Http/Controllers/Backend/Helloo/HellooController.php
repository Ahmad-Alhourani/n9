<?php

namespace App\Http\Controllers\Backend\Helloo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Backend\Helloo\CreateHelloo;
use App\Http\Requests\Backend\Helloo\UpdateHelloo;
use App\Repositories\Backend\HellooRepository;
use App\Events\Backend\Helloo\HellooCreated;
use App\Events\Backend\Helloo\HellooUpdated;
use App\Events\Backend\Helloo\HellooDeleted;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\Helloo;

class HellooController extends Controller
{
    /** @var $hellooRepository */
    private $hellooRepository;

    public function __construct(HellooRepository $hellooRepo)
    {
        $this->hellooRepository = $hellooRepo;
    }

    /**
     * Display a listing of the Helloo.
     *
     * @param  Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */

    public function index(Request $request)
    {
        $this->hellooRepository->pushCriteria(new RequestCriteria($request));
        $data = $this->hellooRepository->paginate(25);

        return view('backend.helloos.index')->with('helloos', $data);
    }

    /**
     * Show the form for creating a new Helloo.
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function create()
    {
        return view('backend.helloos.create');
    }

    /**
     * Store a newly created Helloo in storage.
     *
     * @param CreateHelloo $request
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CreateHelloo $request)
    {
        $obj = $this->hellooRepository->create($request->only([]));

        event(new HellooCreated($obj));
        return redirect()
            ->route('admin.helloo.index')
            ->withFlashSuccess(__('alerts.frontend.helloo.saved'));
    }

    /**
     * Display the specified Helloo.
     *
     * @param Helloo $helloo
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function show(Helloo $helloo)
    {
        return view('backend.helloos.show')->with('helloo', $helloo);
    }

    /**
     * Show the form for editing the specified Helloo.
     *
     * @param Helloo $helloo
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function edit(Helloo $helloo)
    {
        return view('backend.helloos.edit')->with('helloo', $helloo);
    }

    /**
     * Update the specified Helloo in storage.
     *
     * @param UpdateHelloo $request
     *
     * @param Helloo $helloo
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(UpdateHelloo $request, Helloo $helloo)
    {
        $obj = $this->hellooRepository->update($helloo, $request->all());

        event(new HellooUpdated($obj));
        return redirect()
            ->route('admin.helloo.index')
            ->withFlashSuccess(__('alerts.frontend.helloo.updated'));
    }

    /**
     * Remove the specified Helloo from storage.
     *
     * @param Helloo $helloo
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function destroy(Helloo $helloo)
    {
        $obj = $this->hellooRepository->delete($helloo);
        event(new HellooDeleted($obj));
        return redirect()
            ->back()
            ->withFlashSuccess(__('alerts.frontend.helloo.deleted'));
    }
}
