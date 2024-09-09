<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//agregamos lo siguiente
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;
use App\Models\Departamento;
use Illuminate\Support\Facades\Validator;

class usuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //Sin paginación
        $usuarios = User::all();
        /* $usuarios = User::all();
        return view('usuarios.index',compact('usuarios')); */

        //Con paginación
        // $usuarios = User::paginate(2);
        return view('usuarios.index', compact('usuarios'));

        //al usar esta paginacion, recordar poner en el el index.blade.php este codigo  {!! $usuarios->links() !!}
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //aqui trabajamos con name de las tablas de users
        $roles = Role::pluck('name', 'name')->all();
        return view('usuarios.crear', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => [
                'required',
                'regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/u',
                'min:2',
                'max:50'
            ],
            'email' => 'required|email|max:254|unique:users,email',
            'roles' => 'required',
            'password' => [
                'required',
                'confirmed',
                'min:8',
                'max:16',
                'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[\W_]).{8,16}$/',
            ],
            'password' => ['required', 'confirmed', 'min:8', 'max:16', 'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[\W_]).{8,16}$/']

        ]);

        if ($validator->fails()) {
            return redirect('usuarios/create')
                ->withErrors($validator)
                ->withInput();
        }

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        return redirect()->route('usuarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
     /**   $roles = Role::pluck('name', 'name')->all();
       * $userRole = $user->roles->pluck('name', 'name')->all();
        *$departamentosDisponibles = Departamento::whereDoesntHave('users', function ($query) use ($id) {
        *    $query->where('user_id', '<>', $id);
        *})->pluck('nombre', 'id');
        *$usuarioDepartamentos = $user->departamentos->pluck('id')->toArray();
        *return view('usuarios.editar', compact('user', 'roles', 'userRole', 'departamentosDisponibles', 'usuarioDepartamentos'));
        */
        }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'required|regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/u|min:2|max:50',
            'email' => 'required|email|unique:users,email,' . $id,
            'roles' => 'required'
        ];

        // Solo agregamos las reglas de la contraseña si se ha proporcionado una nueva
        if ($request->filled('password')) {
            $rules['password'] = 'min:8|max:16|confirmed|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W]).*$/';
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect('usuarios/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput();
        }

        $input = $request->except(['password_confirmation', 'password']);
        if ($request->filled('password')) {
            $input['password'] = Hash::make($request->password);
        }

        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id', $id)->delete();
        $user->assignRole($request->input('roles'));

        return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('usuarios.index');
    }


    


}
