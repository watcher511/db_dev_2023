<?php

/**
 * Team:对影成三人队
 * By lixiang
 * history traffic query
 */

namespace common\models;

/**
 * This is the ActiveQuery class for [[HistoricalViews]].
 *
 * @see HistoricalViews
 */
class HistoricalViewsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return HistoricalViews[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return HistoricalViews|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}