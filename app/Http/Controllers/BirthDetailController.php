<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Repo\Repositories\BirthDetail\BirthDetailInterface as BirthDetail;
use Repo\Repositories\Address\AddressInterface as Location;
use Illuminate\Validation\Validator;

class BirthDetailController extends Controller {

    protected $birth;

    protected $location;

    function __construct(BirthDetail $birth,Location $location)
    {
        $this->birth = $birth;

        $this->location = $location;
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
        $district = $this->location->getLocationByParentId(0);

        //dd($district);

		return view('birth_details.create2');
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
            //return redirect('birth_details');
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

        return view('birth_details.show')->with('child',$birth_detail);
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

    public function getAllData()
    {
        return $this->birth->getAllChildren();
    }

}
