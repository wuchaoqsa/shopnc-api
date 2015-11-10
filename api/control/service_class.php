<?php
/**
 * 服务分类 api
 */
defined('InShopNC') or exit('Access Invalid!');

class service_classControl extends apiHomeControl
{

    public function __construct()
    {
        parent::__construct();
    }

    public function indexOp()
    {
        /**
         * 此处读取micro_personal_class表中的分类
         */
        $model_service_class = Model('micro_personal_class');
        //取分类
        $service_class_list = $model_service_class->getList(TRUE,NULL,'class_sort asc');

        output_data(array('service_class' => $service_class_list));
    }
}
