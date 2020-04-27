geocodesController (eloquent - model)

	public function index()
	{
		$geocodes = App\Geocode::all();
		return view('geocodes.index', compact('geocodes'));
	}
	
	public function show($id)
	{
		$geocode = Geocode::find($id);
		
		return view('geocodes.show', compact('task'));
	}
	
		public function show(Geocode $geocode)
	{
				
		return view('geocodes.show', compact('geocode'));
	}
	
	//controller => PostsController
	//
	eloquent model => post
	
	//migration => create_posts_table