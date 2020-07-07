<?php


namespace App\PartsClass;


class GirlsFilter
{
    protected $builder;
    protected $request;

    public function __construct($builder, $request)
    {
        $this->builder = $builder;
        $this->request = $request;
    }

    public function apply()
    {
        foreach ($this->filters() as $filter => $value) {
            if (method_exists($this, $filter)) {
                $this->$filter($value);
            }
        }

        return $this->builder;
    }

    public function name($value)
    {
        $this->builder->where('name', 'like', "%$value%");
    }

    public function boobs($value)
    {
        if($value == 0) return;
        $this->builder->where('boobs', '=', $value);
    }

    public function sex_classic($value)
    {
        $this->builder->whereHas('service', function ($query) { // use ($value)
            $query->where('sex_classic', '=', 1);
        });
    }

    public function sex_with_gandon($value)
    {
        $this->builder->whereHas('service', function ($query) {
            $query->where('sex_with_gandon', '=', 1);
        });
    }

    public function sex_with_no_gandon($value)
    {
        $this->builder->whereHas('service', function ($query) {
            $query->where('sex_with_no_gandon', '=', 1);
        });
    }

    public function minet_with_gandon($value)
    {
        $this->builder->whereHas('service', function ($query) {
            $query->where('minet_with_gandon', '=', 1);
        });
    }


    public function minet_with_no_gandon($value)
    {
        $this->builder->whereHas('service', function ($query) {
            $query->where('minet_with_no_gandon', '=', 1);
        });
    }


    function filters()
    {
        return $this->request->all();
    }
}
