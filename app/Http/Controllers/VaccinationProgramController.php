<?php namespace App\Http\Controllers;

use App\BirthDetail;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Helper\NCDBHelper;
use App\Http\Requests\CreateChildVaccineRequest;
use App\VaccinationPlace;
use App\Vaccine;
use Illuminate\Http\Request;
use Repo\Repositories\Address\AddressInterface;
use Repo\Repositories\VaccineProgram\VaccineProgramInterface;
use Repo\Repositories\BirthDetail\BirthDetailInterface;

class VaccinationProgramController extends Controller {

    protected $vaccine_program;

    protected $location;

    protected $child;

    protected $helper;

    function __construct(VaccineProgramInterface $vaccine_program,AddressInterface $location,BirthDetailInterface $child, NCDBHelper $helper)
    {
        $this->vaccine_program = $vaccine_program;

        $this->location = $location;

        $this->child = $child;

        $this->helper = $helper;
    }


    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('vaccine_program.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateChildVaccineRequest $request
     * @return Response
     */
	public function store(CreateChildVaccineRequest $request)
	{
		$input = $request->all();
        //dd($input);
        $this->vaccine_program->store($input,1);

        return redirect('child_vaccines')->with('message','Vaccine Given');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $vaccines = $this->vaccine_program->getListOfVaccineForChild($id);

       //dd($vaccines);

        return view('vaccine_program.show')
            ->with('vaccines',$vaccines)
            ->with('child_id',$id);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function vaccineList($id)
    {
        return view('vaccine_program.vaccine_list');
    }

    /**
     * @param $vaccine_id
     * @param $child_id
     * @return $this
     */
    public function provideVaccine($vaccine_id,$child_id)
    {
        $vaccine = Vaccine::find($vaccine_id);

        $user = \Auth::user();

        //$child =  $this->child->getChildById($child_id);
        $child =  $this->child->getChildByRegistrationId($child_id);

        $address = $this->location->getFullAddress($user->office_address);

        $places = \DB::table('vaccination_places')->where('address','=',$user->office_address)->get();

        //$vaccinator = \DB::table('vaccillators')->where('vclr_address','=',$user->office_address)->get();
        $vaccilator = $this->helper->getVaccilatorList();

        return view('vaccine_program.create')
            ->with('vaccine',$vaccine)
            ->with('child',$child)
            ->with('address',$address)
            ->with('places',$places)
            ->with('vaccilator',$vaccilator);
    }
}
