<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Repositories\TypePermissionRepository as TypePermissionRepo;
use App\Repositories\PermissionRepository as PermissionRepo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\AbstractList;

class PermissionController extends Controller
{
    protected $view = 'admin.permissions';
    protected $typePermissionRepoRepo;
    protected $permissionRepoRepo;

    public function __construct(TypePermissionRepo $typePermissionRepoRepo, PermissionRepo $permissionRepoRepo)
    {
        $this->permissionRepoRepo = $permissionRepoRepo;
        $this->typePermissionRepoRepo = $typePermissionRepoRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Permission $permission)
    {

        $this->authorize('viewAny', $permission);
        $permissions = $this->permissionRepoRepo->getPermissions();
        return view($this->view.'.index',[
            'permissions'  => $permissions,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(Permission $permission)
    {
        $this->authorize('create', $permission);
        $typePermissions = $this->typePermissionRepoRepo->getTypePermissionByStatus(true);
        $permission = new Permission();
        return view($this->view.'.create',[
            'typePermissions' => $typePermissions,
            'permission' => $permission,
            'view' => $this->view,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|unique:permissions',
            'key' => 'required|max:255|unique:permissions',
            'type_permission_id' => 'required',
        ]);

        $data = $request->only('name', 'key', 'type_permission_id');
        $data['status'] = isset($request['status']) ? 1 : 0;
        $data['employee_id'] = Auth::id();

        $this->permissionRepoRepo->create($data);
        return redirect(route('permissions.index'))->with('success',  'Thêm quyền thành công');
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
    public function edit(Permission $permission)
    {
        $this->authorize('update', $permission);
        $typePermissions = $this->typePermissionRepoRepo->getTypePermissionByStatus(true);
        if(!$permission) return  abort(404);
        return view($this->view.'.update',[
            'typePermissions' => $typePermissions,
            'permission' => $permission,
            'view' => $this->view,
        ]);
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
        $request->validate([
            'name' => 'required|max:255',
            'key' => 'required|max:255',
            'type_permission_id' => 'required',
        ]);

        $data = $request->only('name', 'key', 'type_permission_id');
        $data['status'] = isset($request['status']) ? 1 : 0;

        $this->permissionRepoRepo->update($data, $id);
        return redirect(route('permissions.index'))->with('success',  'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Permission::destroy($id);
        return redirect()->route('permissions.index')->with('success','Xóa thành công');
    }
}
