<?php
/**
 * @author <mig1098@hotmail.com>
 * @date 25-01-2016
 * */
namespace Model;
use Library\Ingrammicro\IngrammicroClient;

class Ingrammicro{
    private $IngrammicroClient;
    public function __construct($data){
        $this->IngrammicroClient = new IngrammicroClient($data['url'],$data['login'],$data['password']);
    }
    
    public function orderEntryTransaction($data){
        return $this->IngrammicroClient->call('POST','orderEntryTransaction',$data);
    }
    
    public function OrderStatusRequest($data){
        return $this->IngrammicroClient->call('POST','OrderStatusRequest',$data);
    }
    
    public function PNArequest($data){
        return $this->IngrammicroClient->getObject(false)->call('POST','ProductRequest',$data);
    }
}
