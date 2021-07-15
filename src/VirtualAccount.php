<?php

namespace Razorpay\Api;

class VirtualAccount extends Entity
{
    public function create($attributes = array())
    {
        return parent::create($attributes);
    }

    public function fetch($id)
    {
        return parent::fetch($id);
    }

    public function all($options = array())
    {
        return parent::all($options);
    }

    public function close($id)
    {
<<<<<<< HEAD
        $relativeUrl = $this->getEntityUrl() . $id . '/close';

        $data = array(
            // 'status' => 'closed'
        );

        return $this->request('POST', $relativeUrl, $data);
=======
        $relativeUrl = $this->getEntityUrl() . $this->id . '/close';


        return $this->request('POST', $relativeUrl);
>>>>>>> 93638edd548f0c402ddccc45d5a05ed75cb63201
    }

    public function payments()
    {
        $relativeUrl = $this->getEntityUrl() . $this->id . '/payments';

        return $this->request('GET', $relativeUrl);
    }
}