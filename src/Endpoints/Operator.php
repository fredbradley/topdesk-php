<?php

namespace Innovaat\Topdesk\Endpoints;

trait Operator
{
    private function requestOperator($method, $uri = '', $json = [], $query = [])
    {
        return $this->request($method, "api/operators{$uri}", $json, $query);
    }

    /**
     * @see https://developers.topdesk.com/explorer/?page=supporting-files#/Operators/retrieveOperators
     */
    public function getListOfOperators($query = []) {
        return $this->requestOperator('GET', '', [], $query);
    }

    /**
     * @see https://developers.topdesk.com/explorer/?page=supporting-files#/Operators/createOperator
     */
    public function createOperator($params)
    {
        return $this->requestOperator('POST', '', $params);
    }

    /**
     * @see https://developers.topdesk.com/explorer/?page=supporting-files#/Operators/getOperatorById
     */
    public function getOperatorById($id) {
        return $this->requestOperator('GET', "/id/{$id}");
    }

    /**
     * @see https://developers.topdesk.com/explorer/?page=supporting-files#/Operators/updateOperatorById
     */
    public function updateOperatorById($id, $params) {
        return $this->requestOperator('PUT', "/id/{$id}", $params);
    }
}