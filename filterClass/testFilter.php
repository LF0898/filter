<?php
//namespace Boomdawn;

/**
 * 验证类
 */
class TestFilter
{
    /**
     * 需要验证的数据
     *
     * @var
     */
    protected $field;
    /**
     * 错误信息
     *
     * @var
     */
    protected $message = [];
    /**
     * 设置要验证的数据
     *
     * @param $data
     */
    public function field($data)
    {
        $this->field = $data;
        return $this;
    }
    /**
     * 不能为空
     *
     * @return $this
     */
    public function required($msg = '')
    {
        if (empty($this->field)) {
            $this->message[] = empty($msg) ? $this->field . "不能为空" : $msg;
        }
        return $this;
    }
    /**
     * 邮箱验证
     *
     * @return $this
     */
    public function email($msg = '')
    {
        if (filter_var($this->field, FILTER_VALIDATE_EMAIL) === false) {
            $this->message[] = empty($msg) ? "邮箱格式不正确" : $msg;
        }
        return $this;
    }

    public function http($msg = '')
    {
        if (filter_var($this->field, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED) === false) {
            $this->message[] = empty($msg) ? "网址格式错误" : $msg;
        }
        return $this;
    }

    /****************
     * 验证ip
     */
    public function ip($msg = '')
    {
        if (filter_var($this->field, FILTER_VALIDATE_IP) === false) {
            $this->message[] = empty($msg) ? "ip格式错误" : $msg;
        }
        return $this;
    }
    /*********************
     * 验证int
     */
    public function intt($msg = '')
    {
        if (filter_var($this->field, FILTER_VALIDATE_INT) === false) {
            $this->message[] = empty($msg) ? "非整型" : $msg;
        }
        return $this;
    }
    public function get()
    {
        if (empty($this->message)) {
            return true;
        }
        return $this->message;
    }
}
