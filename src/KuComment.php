<?php

namespace Piterjov\KuComments;

class KuComment
{
    public function comment(string $comment): string
    {
        return "Comment:  {$comment}";
    }
}
