<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\UpdateBirthDetailRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Repo\Repositories\BirthDetail\BirthDetailInterface as BirthDetail;
use Repo\Repositories\Address\AddressInterface as Location;
use Repo\Repositories\ParentsDetail\ParentsDetailRepository as Parents;
use Illuminate\Validation\Validator;
use App\Helper\NCDBHelper;

class BirthDetailController extends Controller {

    protected $birth;

    protected $location;

    protected $parent;

    private $helper;

    function __construct(BirthDetail $birth,Location $location,Parents $parent, NCDBHelper $helper)
    {
        $this->birth = $birth;

        $this->location = $location;

        $this->parent = $parent;

        $this->helper = $helper;
    }

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('birth_details.index2');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $district = $this->location->getLocationsByLocnType('District');//dd($district);

        $handicapTypes = $this->birth->getAllHandicapType();

        $castes = $this->birth->getAllCastes();

        $birthHelpers = $this->birth->getAllBirthHelpers();

        $birthPlaces = $this->birth->getAllBirthPlaces();

        $birthTypes = $this->helper->getBirthTypes();

		return view('birth_details.create')
            ->with('districts',$district)
            ->with('handicapType',$handicapTypes)
            ->with('birthHelpers',$birthHelpers)
            ->with('castes',$castes)
            ->with('birthPlaces',$birthPlaces)
            ->with('birthTypes',$birthTypes);
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param Requests\CreateBirthDetailRequest $request
     * @return Response
     */
	public function store(Requests\CreateBirthDetailRequest $request)
	{
		$input = $request->all();

        $result = $this->birth->registerChild($input);

        if($result['success'] == true){
            return view('birth_details.birth_certificate')->with('child',$result);
        }

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$birth_detail = $this->birth->getChildById($id);

        $address = $this->location->getFullAddress($birth_detail['brth_address']);

        $father_details = $this->parent->getAllParentDetails($birth_detail['brth_father']);

        $mother_details = $this->parent->getAllParentDetails($birth_detail['brth_mother']);


        return view('birth_details.show')
            ->with('child',$birth_detail)
            ->with('address',$address)
            ->with('father',$father_details->toArray())
            ->with('mother',$mother_details->toArray());
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$child = $this->birth->getChildById($id);

        return view('birth_details.edit')->with('child',$child);
	}

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateBirthDetailRequest $request
     * @param  int $id
     * @return Response
     */
	public function update(UpdateBirthDetailRequest $request,$id)
	{
        $result = $this->birth->updateChild($request->all(),$id);

        return redirect('birth_details')->with('message',$result['message']);
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

    public function getAllData()
    {
        return $this->birth->getAllChildren();
    }

    public function getChildLocation($id)
    {
       $address = $this->birth->getChildLocation($id);

        return json_encode($address);
    }

    public function viewBirthCertificate($id)
    {
        $result = $this->birth->viewBirthCertificate($id);

        return view('birth_details.birth_certificate')->with('child',$result);
    }

}
