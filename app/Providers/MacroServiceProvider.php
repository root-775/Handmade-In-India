<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Arr;

class MacroServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Builder::macro('whereNotEquals', function ($column, $value) {
            return $this->where($column, '<>', $value);
        });

        Builder::macro('whereUid', function ($id, $column = 'id') {
            return $this->where($column, (int)decodeId($id));
        });

        Builder::macro('findByUid', function ($id) {
            return $this->whereUid($id)->first();
        });

        Builder::macro('findByUidOrFail', function ($id) {
            return $this->whereId((int)decodeId($id))->firstOrFail();
        });

        Response::macro('success', function (array $data = []) {
            return Response::json(array_merge($data, ['success' => true]), 200);
        });

        Response::macro('error', function (array $data) {
            $statusCode = Arr::get($data, 'statusCode', 400);
            unset($data['statusCode']);
            return Response::json(array_merge($data, ['success' => false]), $statusCode);
        });
    }
}
