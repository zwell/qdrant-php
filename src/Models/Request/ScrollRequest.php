<?php

namespace Qdrant\Models\Request;

use Qdrant\Models\Filter\Filter;
use Qdrant\Models\Traits\ProtectedPropertyAccessor;

class ScrollRequest implements RequestModel
{

    use ProtectedPropertyAccessor;

    protected ?Filter $filter = null;

    protected ?int $limit = null;

    protected $offset = null;

    protected $withVector = null;

    protected $withPayload = null;

    public function setFilter(Filter $filter): self
    {
        $this->filter = $filter;

        return $this;
    }

    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function setOffset($offset): self
    {
        $this->offset = $offset;

        return $this;
    }

    public function setWithPayload($withPayload): self
    {
        $this->withPayload = $withPayload;

        return $this;
    }

    public function setWithVector($withVector): self
    {
        $this->withVector = $withVector;

        return $this;
    }

    public function toArray(): array
    {
        $body = [];

        if ($this->filter !== null && $this->filter->toArray()) {
            $body['filter'] = $this->filter->toArray();
        }
        if ($this->limit) {
            $body['limit'] = $this->limit;
        }
        if ($this->offset) {
            $body['offset'] = $this->offset;
        }
        if ($this->withVector) {
            $body['with_vector'] = $this->withVector;
        }
        if ($this->withPayload) {
            $body['with_payload'] = $this->withPayload;
        }

        return $body;
    }
}
