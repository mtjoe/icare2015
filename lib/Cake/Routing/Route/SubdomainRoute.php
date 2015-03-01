<?php
class SubdomainRoute extends CakeRoute {

    public function match($params) {
        $subdomain = isset($params['subdomain']) ? $params['subdomain'] : null;
        unset($params['subdomain']);
        $path = parent::match($params);
        if ($subdomain) {
            $path = 'http://' . $subdomain . '.localhost' . $path;
        }
        return $path;
    }
}

?>