<?php

namespace Modules\Edu\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\User;

/**
 * 评论多态模型
 * @package Modules\Edu\Entities
 */
class Comment extends Model
{
  protected $table = "edu_comment";
  protected $fillable = ['site_id', 'user_id', 'content', 'reply_user_id', 'favour_count'];

  /**
   * 评论用户
   * @return BelongsTo
   */
  public function user()
  {
    return $this->belongsTo(User::class, 'user_id');
  }

  /**
   * 回复用户
   * @return BelongsTo
   */
  public function reply()
  {
    return $this->belongsTo(User::class, 'reply_user_id');
  }
}
