<?php

namespace SAE\WBD04;

final class Application {

    private array $url = [];

    private function parseUrl() : array {
        /** @var string $url */
        $url = $_GET[ 'url' ] ?? '';
        /** @var array $exploded_url */
        $exploded_url = explode( '/', $url );

        return [
            'controller' => $this->sanitizeController( $exploded_url[ 0 ] ?? NULL ),
            'method'     => $this->sanitizeMethod( $exploded_url[ 1 ] ?? NULL ),
        ];
    }

    private function sanitizeController( ?string $controller ) : string {

        return is_null( $controller ) || empty( $controller )
            ? 'SAE\\WBD04\\Controller\\Index'
            : 'SAE\\WBD04\\Controller\\' .  ucfirst( $controller );
    }

    private function sanitizeMethod( ?string $method ) : string {

        return is_null( $method ) ? 'index' : $method;
    }

    private function controllerExists( ) : bool {

        return class_exists( $this->url[ 'controller' ] );
    }

    private function controllerMethodExists() : bool {

        return method_exists( $this->url[ 'controller' ], $this->url[ 'method' ] );
    }

    public function __construct() {
        $this->url = $this->parseUrl();
    }

    public function bootstrap() : void {
        if ( $this->controllerExists() && $this->controllerMethodExists() ) {
            $controller = new ( $this->url[ 'controller' ] )();
            $controller->{ $this->url[ 'method' ] }();
        }
        else {
            echo "404 - Page not Found";
        }
    }

}