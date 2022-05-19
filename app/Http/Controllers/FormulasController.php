<?php

namespace App\Http\Controllers;

use App\Models\Formula;
use App\Models\Elemento;
use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\ElementosFormula;
use Illuminate\Support\Facades\DB;
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
     * Muestra las fórmulas y las filtra por la busqueda
     * @param Request $request
     * 
     * @return array
     */
    public function index(Request $request)
    {
        $busqueda = trim($request->get('busqueda'));

        $formulas = Formula::where("nombre_comun", "LIKE", "%{$request->get('busqueda')}%")->paginate(4);

        return view('formulas.index', [
            "formulas"=>$formulas,
            "busqueda"=>$busqueda
            ]);
    }

    /**
     * Muestra el formulario de crear
     * @return array
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
     * Crea y guarda la nueva fórmula
     * @param SaveFormulaRequest $request
     * 
     * @return array
     */
    public function store(SaveFormulaRequest $request)
    {
        $this->validate($request, [
            'nombre_comun' => 'required|string|min:3|regex:/^\S*$/u',
            'descripcion' => 'required|string|max:150|regex:/^\S*$/u',
            'nombre_sistematico' => 'required|string|min:3',
            'tipo' => 'required'
        ]);

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
            'user_id' => $id,
            'elemento_1' => request('elemento_1'),
            'elemento_2' => request('elemento_2'),
            'elemento_3' => request('elemento_3'),
        ]);

        $formula->save();

        $url = Auth::user()->user .'-'. $formula->id;
        $formula->url = $url;
        $formula->save();

        return redirect()->route('formulas.index')->with('success','Fórmula creada correctamente!');
    }

    /**
     * Muestra la fórmula más detallada
     * @param Formula $formula
     * 
     * @return array
     */
    public function show(Formula $formula)
    {
        
        return view('formulas.show', ["formula" => $formula]);
    }

    /**
     * Muestra el formulario para editar la fórmula
     * @param Formula $formula
     * 
     * @return array
     */
    public function edit(Formula $formula)
    {      
        $arraySolos = ['Fr','Ra','Rf','Db','Sg','Bh','Hs','Mt','Ds','Rg','Cn','Nh','Fl','Mc','Lv','Ts','Og','He','Ne','Ar','Kr','Xe','Rn','At','Po','Pm','Ac','Pa','Np','Pu','Am','Pu','Am','Cm','Bk','Cf','Es','Fm','Md','No','Lr'];
        $elementosCompost = Elemento::all()->whereNotIn('simbolo', $arraySolos);

        if (Auth::user()->id != $formula->user_id) {
            return view('formulas.show', ["formula" => $formula]);
        }

        $this->authorize('update', $formula);
        $elementos = Elemento::all();

        return view('formulas.edit', [
            'formula' => $formula,
            'elementosCompost' => $elementosCompost,
            'elementos' => $elementos,
            'categorias' => Categoria::pluck('nombre','id')
        ]);
    }

    /**
     * Se edita y se guarda la fórmula editada
     * @param Formula $formula
     * @param SaveFormulaRequest $request
     * 
     * @return array
     */
    public function update(Formula $formula, SaveFormulaRequest $request)
    {
        $this->validate($request, [
            'nombre_comun' => 'required|string|min:3|regex:/^\S*$/u',
            'descripcion' => 'required|string|max:150|regex:/^\S*$/u',
            'nombre_sistematico' => 'required|string|min:3',
            'tipo' => 'required'
        ]);

        $this->authorize('update', $formula);

        $formula->update($request->all());

        return redirect()->route('formulas.show', $formula);
    }


    /**
     * Elimina la fórmula seleccionada
     * @param Formula $formula
     * 
     * @return array
     */
    public function destroy(Formula $formula)
    {
        $this->authorize('delete', $formula);

        $formula->delete();
        return redirect()->route('formulas.index');
    }

    /**
     * 
     * Guarda en la tabla las fórmulas favoritas del usuario
     * @param Request $request
     * 
     * @return array
     */
    public function addToFavourites(Request $request){ 
        $user = Auth::user();        
        DB::table('favorites')->insert([
            'user_id' => $user->id,
            'formula_id' => $request->formula_id
        ]);

        return response()->json([
            'message' => "Formula añadida a favoritos"
        ]);
	}

    /**
     * Quita de la tabla las fórmulas favoritas del usuario
     * @param Request $request
     * 
     * @return array
     */
    public function deleteFavourites(Request $request) {
        $user = Auth::user();
        DB::table('favorites')->where('formula_id','=',$request->formula_id)->where('user_id','=',$user->id)->delete();

        // return redirect()->route('formulas.index');
        return response()->json([
            'message' => "Formula eliminada de favoritos"
        ]);
    }
}
