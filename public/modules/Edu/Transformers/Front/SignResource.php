<?php

namespace Modules\Edu\Transformers\Front;

use Illuminate\Http\Resources\Json\Resource;
use Modules\Edu\Entities\SignTotal;

class SignResource extends Resource
{
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request
   * @return array
   */
  public function toArray($request)
  {
    $sign =  parent::toArray($request);
    $sign['user'] = $this->user;
    $sign['total'] = SignTotal::where('user_id', $this->user_id)->where('site_id', SITEID)->first();
    return $sign;
  }
}
