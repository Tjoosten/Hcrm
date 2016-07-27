<?php

namespace App\Transformers;

use App\Knowledge;
use League\Fractal\TransformerAbstract;

/**
 * Class KnowledgeTransformer
 * @package App\Transformers
 */
class KnowledgeTransformer extends TransformerAbstract
{
    /**
     * API formatter for the customer side.
     *
     * @param Knowledge $knowledge
     * @return array
     */
    public function transform(Knowledge $knowledge)
    {
        return [
            'question' => (string) $knowledge->question,
            'answer'   => (string) $knowledge->answer
        ];
    }
}
