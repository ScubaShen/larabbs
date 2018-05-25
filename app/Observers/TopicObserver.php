<?php

namespace App\Observers;

use App\Models\Topic;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class TopicObserver
{
    public function creating(Topic $topic)
    {
        //
    }

    public function updating(Topic $topic)
    {
        //
    }

    public function saving(Topic $topic)  // Topic 模型保存时會触发 saving 事件
    {
        $topic->body = clean($topic->body, 'user_topic_body');  //配合config/purifier 使用

        $topic->excerpt = make_excerpt($topic->body);
    }
}