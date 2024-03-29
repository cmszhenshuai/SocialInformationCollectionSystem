<?php

namespace framework\response;

class ResponseDataModel extends ResponseModel {
    /**
     * @var mixed 响应的数据
     */
    public mixed $data;


    /**
     * @param int $code     状态码
     * @param mixed $data   响应数据, 此参数为对象时，只有public字段会被序列化为json
     * @
     */
    public function __construct(int $code, mixed $data) {
        parent::__construct($code);
        $this->data = $data;
    }
}