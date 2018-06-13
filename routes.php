<?php

    class Route {

        private function formatUrl () {
            $url = $_SERVER['PATH_INFO'];
            $urlTrim = trim($url, '/');
            return explode('/', $urlTrim);
        }

        public function getMethod () {
            return $_SERVER['REQUEST_METHOD'];
        }

        public function getAction () {
            $urlTab = $this->formatUrl();
            $action = $urlTab[0];
            if ($action) {
                echo 'Action : '.$action;
            }
        }

        public function getController () {

            $urlTab = $this->formatUrl();
            $controller = $urlTab[0];

            global $app;
            $path = $app.'/controllers/'.$controller.'.php';

            if ( is_file($path) ) {
                require_once $path;
            }
            else {
                echo "erreur";
            }
        }
    }

?>
