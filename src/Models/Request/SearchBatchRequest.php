<?php
/**
 * SearchParams
 *
 * @since     Mar 2023
 * @author    Haydar KULEKCI <haydarkulekci@gmail.com>
 */
namespace Qdrant\Models\Request;

use Qdrant\Exception\InvalidArgumentException;
use Qdrant\Models\Filter\Filter;
use Qdrant\Models\PointStruct;
use Qdrant\Models\Traits\ProtectedPropertyAccessor;
use Qdrant\Models\VectorStruct;
use Qdrant\Models\VectorStructInterface;

class SearchBatchRequest
{
    protected array $batchSearch = [];

    public function addSearch(SearchRequest $search): void
    {
        $this->batchSearch[] = $search->toArray();
    }

    public function toArray(): array
    {
        return ['searches' => $this->batchSearch];
    }
}