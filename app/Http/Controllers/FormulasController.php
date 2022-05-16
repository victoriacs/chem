<?php

namespace App\Http\Controllers;

use App\Models\Formula;
use App\Models\Elemento;
use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\ElementosFormula;
use Maize\Markable\Models\Favorite;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\SaveFormulaRequest;

class FormulasController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $busqueda = trim($request->get('busqueda'));

        $formulas = Formula::where("nombre_comun", "LIKE", "%{$request->get('busqueda')}%")->paginate(3);

        return view('formulas.index', [
            "formulas"=>$formulas,
            "busqueda"=>$busqueda
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $arraySolos = ['Fr','Ra','Rf','Db','Sg','Bh','Hs','Mt','Ds','Rg','Cn','Nh','Fl','Mc','Lv','Ts','Og','He','Ne','Ar','Kr','Xe','Rn','At','Po','Pm','Ac','Pa','Np','Pu','Am','Pu','Am','Cm','Bk','Cf','Es','Fm','Md','No','Lr'];

        $elementosCompost = Elemento::all()->whereNotIn('simbolo', $arraySolos);
        $elementos = Elemento::all();
        $this->authorize('create', $formula = new Formula);
        return view('formulas.create',[
            'elementosCompost' => $elementosCompost,
            'elementos' => $elementos,
            'formula' => $formula,
            'categorias' => Categoria::pluck('nombre','id')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveFormulaRequest $request)
    {
        $id = Auth::id();

        if(request('elemento_2')) {
            $this->validate($request, [
                'elemento_1' => 'required'
            ]);
        } else if(request('elemento_3')) {
            $this->validate($request, [
                'elemento_1' => 'required',
                'elemento_2' => 'required'
            ]);
        }

        $formula = new Formula([
            'nombre_comun' => request('nombre_comun'),
            'nombre_sistematico' => request('nombre_sistematico'),
            'tipo' => request('tipo'),
            'descripcion' => request('descripcion'),
            'user_id' =>$id,
            'elemento_1' => request('elemento_1'),
            'elemento_2' => request('elemento_2'),
            'elemento_3' => request('elemento_3'),
        ]);

        $formula->save();


        $url = Auth::user()->user .'-'. $formula->id;
        $formula->url = $url;
        $formula->save();

        return redirect()->route('formulas.index')->with('status','Fórmula creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Formula $formula)
    {
        
        return view('formulas.show', ["formula" => $formula]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Formula $formula)
    {
        if (Auth::user()->id != $formula->user_id) {
            return view('formulas.show', ["formula" => $formula]);
        }

        $this->authorize('update', $formula);
        $elementos = Elemento::all();

        return view('formulas.edit', [
            'formula' => $formula,
            'elementos' => $elementos,
            'categorias' => Categoria::pluck('nombre','id')
        ]);
    }

    public function update(Formula $formula, SaveFormulaRequest $request)
    {
        $this->authorize('update', $formula);

        $formula->update($request->all());

        return redirect()->route('formulas.show', $formula);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formula $formula)
    {
        $this->authorize('delete', $formula);

        $formula->delete();
        return redirect()->route('formulas.index');
    }

    public function addToFavourites(Request $request){ 
        $user = Auth::user();
		$formula = Formula::find($request->item_id); 
        
		$user->user->favorite($formula); 

	} 

    public function desfavorite() {

    }
}
