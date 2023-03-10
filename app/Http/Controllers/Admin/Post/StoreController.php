<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Requests\Admin\Post\StoreRequest;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {   $data = $request->validated(); //обработка запроса
        $this->service->store($data);  //обращение к базе

        return redirect()->route('admin.post.index');  //возвращение ответа
    }
}
