<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
    /**
     * Возвращает список товаров выбранной категории
     */
    public function getProducts() {
        return Product::where('category_id', $this->id)->get();
    }

    /**
     * Связь «один ко многим» таблицы `brands` с таблицей `products`
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products() {
        return $this->hasMany(Product::class);
    }
}
