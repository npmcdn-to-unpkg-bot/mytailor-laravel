<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 8/23/2016
 * Time: 2:34 PM
 */

namespace MyTailor\Repositories;


interface DesignersRepositoryInterface
{
    /**
     * @param $cat
     * @return mixed
     */
    public function favorites($cat);

    /**
     * @param $cat
     * @return mixed
     */
    public function latest($cat);

    /**
     * @param $cat
     * @return mixed
     */
    public function showcase($cat);

    /**
     * @param $cat
     * @return mixed
     */
    public function local($cat);

    /**
     * @param $cat
     * @return mixed
     */
    public function mostViewed($cat);
}