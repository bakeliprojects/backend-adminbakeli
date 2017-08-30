<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatevcRequest;
use App\Http\Requests\UpdatevcRequest;
use App\Repositories\vcRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use View;
use Validator;
use Input;
use Session;
use Redirect;
use App\Models\vc;

class vcController extends AppBaseController
{
    /** @var  vcRepository */
    private $vcRepository;

    public function __construct(vcRepository $vcRepo)
    {
        $this->vcRepository = $vcRepo;
    }

    /**
     * Display a listing of the vc.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->vcRepository->pushCriteria(new RequestCriteria($request));
        $vcs = $this->vcRepository->all();

        return view('vcs.index')
            ->with('vcs', $vcs);
    }

    /**
     * Show the form for creating a new vc.
     *
     * @return Response
     */
    public function create()
    {
        return view('vcs.create');
    }

    /**
     * Store a newly created vc in storage.
     *
     * @param CreatevcRequest $request
     *
     * @return Response
     */
    public function store()
    {
        // $input = $request->all();

        // $vc = $this->vcRepository->create($input);

      
          $destination='images';

           $extension=Input::file('image')->getClientOriginalExtension();

           $filename=rand(11111,99999).'.'.$extension;

           Input::file('image')->move($destination, $filename);
           $vc = new vc;
           $vc->image = $filename;
           $vc->nom = Input::get('nom');
           $vc->prenom = Input::get('prenom');
           $vc->disponiblite = Input::get('disponiblite');
           $vc->cour = Input::get('cour');
           $vc->education = Input::get('education');
           $vc->technologie = Input::get('technologie');
           $vc->language = Input::get('language');
           $vc->motivation = Input::get('motivation');


          
           $vc->save();

         Flash::success('Vc saved successfully.');

        return redirect(route('vcs.index'));
    }


    /**
     * Display the specified vc.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $vc = $this->vcRepository->findWithoutFail($id);

        if (empty($vc)) {
            Flash::error('Vc not found');

            return redirect(route('vcs.index'));
        }

        return view('vcs.show')->with('vc', $vc);
    }

    /**
     * Show the form for editing the specified vc.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $vc = $this->vcRepository->findWithoutFail($id);

        if (empty($vc)) {
            Flash::error('Vc not found');

            return redirect(route('vcs.index'));
        }

        return view('vcs.edit')->with('vc', $vc);
    }

    /**
     * Update the specified vc in storage.
     *
     * @param  int              $id
     * @param UpdatevcRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatevcRequest $request)
    {
        $vc = $this->vcRepository->findWithoutFail($id);

        if (empty($vc)) {
            Flash::error('Vc not found');

            return redirect(route('vcs.index'));
        }

        $vc = $this->vcRepository->update($request->all(), $id);

        Flash::success('Vc updated successfully.');

        return redirect(route('vcs.index'));
    }

    /**
     * Remove the specified vc from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $vc = $this->vcRepository->findWithoutFail($id);

        if (empty($vc)) {
            Flash::error('Vc not found');

            return redirect(route('vcs.index'));
        }

        $this->vcRepository->delete($id);

        Flash::success('Vc deleted successfully.');

        return redirect(route('vcs.index'));
    }
}
