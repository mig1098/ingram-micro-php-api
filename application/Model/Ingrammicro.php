<?php
/**
 * @author <mig1098@hotmail.com>
 * @date 5-5-2016
 * */
namespace Model;
use Library\Ingrammicro\IngrammicroClient;

class Ingrammicro{
    private $IngrammicroClient;
    public function __construct($data){
        $this->IngrammicroClient = new IngrammicroClient($data['url'],$data['login'],$data['password']);
    }
    
    public function SynchronousOrderRequestTransaction($data){
        return $this->IngrammicroClient->call('POST','SynchronousOrderRequestTransaction',$data);
    }
    
    public function orderDetailTransaction($data){
        return $this->IngrammicroClient->call('POST','orderDetailTransaction',$data);
    }
    
    public function orderStatusTransaction($data){
        return $this->IngrammicroClient->call('POST','orderStatusTransaction',$data);
    }
    
    public function BaseRateTransaction($data){
        return $this->IngrammicroClient->call('POST','BaseRateTransaction',$data);
    }
    
    public function OrderTrackingTransaction($data){
        return $this->IngrammicroClient->call('POST','OrderTrackingTransaction',$data);
    }
    
    public function RMASubmittalRequestTransaction(){
        return $this->IngrammicroClient->call('POST','RMASubmittalRequestTransaction',$data);
    }
    
    public function PNArequest($data){
        return $this->IngrammicroClient->getObject(false)->call('POST','ProductRequest',$data);
    }
}
