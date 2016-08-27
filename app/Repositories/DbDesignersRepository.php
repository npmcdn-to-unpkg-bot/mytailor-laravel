<?php


namespace MyTailor\Repositories;

use MyTailor\Designer;

class DbDesignersRepository implements DesignersRepositoryInterface
{
    /**
     * @var Designer
     */
    private $designers;

    /**
     * DbDesignersRepository constructor.
     * @param Designer $designers
     */
    public function __construct(Designer $designers)
    {

        $this->designers = $designers;
    }

    /**
     * @param $cat
     * @return mixed
     */
    public function favorites($cat)
    {

        return $this->designers->with('user', 'profile', 'shots')
            ->orderByRaw("id")
            ->limit(20)
            ->get();

    }

    public function mostViewed($cat)
    {
        
    }

    public function latest($cat)
    {
        
    }

    public function local($cat)
    {

    }

    public function showcase($cat)
    {

    }

}