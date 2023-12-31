<?php

namespace App\Http\Controllers\Admin;

use App\DTO\Supports\CreateSupportDTO;
use App\DTO\Supports\UpdateSupportDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSupportRequest;
use App\Models\Support;
use App\Services\SupportService;
use Illuminate\Http\Request;

//use App\Http\Requests\StoreUpdateSupport;


class SupportController extends Controller
{
    public function __construct(protected SupportService $service)
    {}

//    public function index(Support $support) {
    public function index(Request $request)
    {
//        $supports = $this->service->getAll($request->filter);
        $supports = $this->service->paginate(
            page: $request->get('page', 1),
            totalPerPage: $request->get('per_page', 15),
            filter: $request->filter,
        );

        $filters = ['filter' => $request->get('filter', '')];

//        dd($supports->items());
//        dd($supports);

        return view('admin/supports/index', compact('supports', 'filters'));
    }

    public function show(string $id)
    {

//        Support::find($id)
//        Support::where('id', $id)->first();
//        Support::where('id', '!=' $id)->first();
//        Support::where('id', '=' $id)->first();
//        if (!$support = Support::find($id)) {

        if (!$support = $this->service->findOne($id)) {
            return back();
        }

        return view('admin/supports/show', compact('support'));
    }
    public function create()
    {
        return view('admin/supports/create');
    }
    public function store(StoreUpdateSupportRequest $request, Support $support)
    {
//        $data = $request->validated();
//        $data['status'] = 'a';
//
//        $support->create($data);
        $this->service->new(
            CreateSupportDTO::makeFromRequest($request)
        );

        return redirect()->route('supports.index');
    }

    public function edit(string $id)
    {
//        if (!$support = $support->where('id', $id)->first()) {
        if (!$support = $this->service->findOne($id)) {
            return back();
        }

        return view('admin/supports.edit', compact('support'));
    }

//    A validação foi criada através do comando:
//    php artisan make:request StoreUpdateSupportRequest, sendo assim não vou chamar aonde estou recebendo os dados com
//    Request e sim como StoreUpdateSupportRequest

    public function update(StoreUpdateSupportRequest $request, string|int $id, Support $support)
    {
//        if (!$support = $support->find($id)) {
//            return back();
//        }

//        $support->subject = $request->subject;
//        $support->body = $request->body;
//        $support->save();

//        $support->update($request->only([
//            'subject',
//            'body'
//        ]));

        $support = $this->service->update(
            UpdateSupportDTO::makeFromRequest($request)
        );

        if (!$support) {
            return back();
        }

//        $support->update($request->validated());

        return redirect()->route('supports.index');
    }

    public function destroy(string $id)
    {
        $this->service->delete($id);

        return redirect()->route('supports.index')->with('message', 'Deletado com sucesso');
    }
}
