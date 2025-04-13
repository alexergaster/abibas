<?php


namespace App\Http\Filters;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

class ProductFilter extends AbstractFilter
{
    public const SEARCH = 'search';
    public const GENDER = 'gender';
    public const CATEGORY = 'category';
    public const BRAND = 'brand';
    public const IS_NEW = 'is_new';


    protected function getCallbacks(): array
    {
        return [
            self::SEARCH => [$this, 'search'],
            self::GENDER => [$this, 'gender'],
            self::CATEGORY => [$this, 'category'],
            self::BRAND => [$this, 'brand'],
            self::IS_NEW => [$this, 'is_new'],
        ];
    }

    public function search(Builder $builder, $value)
    {
        $builder->where(function ($query) use ($value) {
            $query->where('name', 'like', "%{$value}%")
                ->orWhere('size', 'like', "%{$value}%")
                ->orWhere('description', 'like', "%{$value}%")
                ->orWhere('color', 'like', "%{$value}%");
        });
    }

    public function gender(Builder $builder, $value)
    {
        $builder->where('gender_id', $value);
    }
    public function is_new(Builder $builder)
    {
        $builder->where('created_at', '>=', Carbon::now()->subDays(10));
    }

    public function brand(Builder $builder, $value)
    {
        $builder->where('brand_id', $value);
    }

    public function category(Builder $builder, $value)
    {
        $builder->where('category_id', $value);
    }

}
